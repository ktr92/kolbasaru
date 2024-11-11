<?php
use Bitrix\Main\Loader;
use Bitrix\Main\Mail\Event;

require_once($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");

error_reporting(E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

$post = $_POST;
$result = [];


$post['Amount'] = preg_replace('/\D/', '', $post['Amount']);
$post['Rate'] = (float)$post['Rate'];
if (empty($post['Date'])) {
    $post['Date'] = date('d.m.Y');
}
//echo $post['Rate'];
//Аннуитетный
$payPercent = [];
$payDebit = [];
$debit = [];
$payDate = [];
$payAmount = [];
$prePay = false;
//Досрочные погашения
$PrePay1 = [];
$PrePay0 = [];
$row = 0;
$rowList = [];
$counter = 0;
$result['total'] = 0;
while(true) {
    if (isset($post['newrow_'.$row.'_3'])) {
        $rowList[] = [
            'payType' => $post['newrow_'.$row.'_1'],
            'type' => $post['newrow_'.$row.'_2'] == 1?0:1, //тут делаем подмену параметров, ибо в верстке стоят кривые значения
            'amount' => preg_replace('/\D/', '', $post['newrow_'.$row.'_3']),
            'date' => $post['newrow_'.$row.'_4'],
        ];
        ++$row;
    }

    ++$counter;
    if ($counter >= 100) {
        break;
    }
}


$allPay0 = [];
$allPay1 = [];
if (!empty($rowList)) {
    $date2 = new DateTime(date('d-m-Y', strtotime($post['Date'])));
    for ($i = 1; $i <= $post['Period']; $i++) {
        $date1 = clone $date2;
        $date2 = $date2;
        $date2->add(add_months(1, $date2));

        $timeStart = $date1->getTimestamp();
        $timeEnd = $date2->getTimestamp();
        $PrePay1[$i] = 0;
        $PrePay0[$i] = 0;
        foreach ($rowList as $key => $row) {
            $yearlyItemDate = strtotime($row['date']);
            if ($yearlyItemDate >= $timeStart && $yearlyItemDate <= $timeEnd) {
                if ($row['payType'] == 0) {
                    //единовременно
                    if ($row['type'] == 1) {
//                        $result['total'] += $row['amount'];
                        $PrePay1[$i] += $row['amount']; //в счёт снижения срока кредит
                    } else {
//                        $result['total'] += $row['amount'];
                        $PrePay0[$i] += $row['amount']; // в счёт снижения платеж
                    }
                } else {
                    //каждый месяц
                    if ($row['type'] == 1) {
//                        $result['total'] += $row['amount'];
//                        $PrePay1[$i] += $row['amount']; //в счёт снижения срока кредит
                        $allPay1 = $row;
                        unset($rowList[$key]);
                        continue;
                    } else {
//                        $result['total'] += $row['amount'];
//                        $PrePay0[$i] += $row['amount']; // в счёт снижения платеж
                        $allPay0 = $row;
                        unset($rowList[$key]);
                        continue;
                    }
                }
                unset($rowList[$key]);
            }
        }

        if (!empty($allPay1)) {
//            $result['total'] += $allPay1['amount'];
            $PrePay1[$i] += $allPay1['amount']; // в счёт снижения платеж
        }


        if (!empty($allPay0)) {
//            $result['total'] += $allPay0['amount'];
            $PrePay0[$i] += $allPay0['amount']; // в счёт снижения платеж
        }


    }
}


//echo '<pre>';
//print_r($rowList);
//print_r($PrePay0);
//print_r($PrePay1);
//die();


$flags = [];
$PeriodF = 0;
if ($post['PayType'] == 1) {

    $rateMon = $post['Rate'] / 1200;
    $koef = $rateMon * pow((1 + $rateMon), $post['Period']) / (pow((1 + $rateMon), $post['Period']) - 1);
    $pay = $post['Amount'] * $koef;
    $result['pay'] = $pay;
    $result['pay_print'] = priceFormat($pay);
    $date2 = new DateTime(date('d-m-Y', strtotime($post['Date'])));
    for ($i = 1; $i  <= $post['Period']; $i++) {
        if (empty($PrePay1[$i])) {
            $PrePay1[$i] = 0;
        }
        if (empty($PrePay0[$i])) {
            $PrePay0[$i] = 0;
        }

        $date1 = clone $date2;
        $date2 = $date2;
        $date2->add(add_months(1, $date2));
        $diff = date_diff($date1, $date2);
        $year = $date2->format("Y");
        $totalDaysInYear = date('z', strtotime($year . '-12-31')) + 1;
        $payDate[$i] = $date2->format('d.m.Y');
        $payAmount[$i] = $pay;


        if ($post['Period'] == 1) {
            $payDebit[$i] = $post['Amount'];
            $payPercent[$i] = $post['Amount'] * ($post['Rate'] / 100) * ($diff->days / $totalDaysInYear);
            $payAmount[$i] = $payDebit[$i] + $payPercent[$i];
            $result['pay'] =  $payAmount[$i];
            $result['pay_print'] = priceFormat( $payAmount[$i]);
            $debit[$i] = 0;
            $flags[$i] = $i.' последний платеж';
            break;
        }


        if ($i == 1) {
            $payPercent[$i] = $post['Amount'] * ($post['Rate'] / 100) * ($diff->days / $totalDaysInYear);
            $payDebit[$i] = $pay - $payPercent[$i];
            $debit[$i] = $post['Amount'] - $payDebit[$i] - $PrePay1[$i] - $PrePay0[$i];
            $flags[$i] = $i.' первый платеж';

        }
        elseif( $i == $post['Period']) {
            $payPercent[$i] = $debit[$i - 1] * ($post['Rate'] / 100) * ($diff->days / $totalDaysInYear);
            $payDebit[$i] = $pay - $payPercent[$i] + $PrePay1[$i];
            $debit[$i] = $debit[$i - 1] - $payDebit[$i];
           // Если PayDebt[n] <> Debt[n-1], то PayDebt[n] = Debt[n-1]
            if ($payDebit[$i] != $debit[$i - 1]) {
                //Pay[n] = PayDebt[n] + PayPercent [n]
                $payDebit[$i] = $debit[$i - 1];
                $payAmount[$i] = $payDebit[$i] + $payPercent[$i];
                $debit[$i] = $debit[$i - 1] - $payDebit[$i];
            }

            $flags[$i] = $i.'  последний платеж';

        }
        else {
            //если досрочное погашение
            if (!empty($PrePay0[$i - 1])) {
                $periodN = $post['Period'] - $i;
                //Pay= Debt[n]-PrePay0[n]* (RateMon*(1+RateMon)PeriodN1+RateMonPeriodN-1
                $pay = $debit[$i - 1] *  (($rateMon * pow((1 + $rateMon), $periodN)) / (pow((1 + $rateMon), $periodN) - 1));
                //PayPercent [n]= Debt[n] * Rate100*  Days[n]YearDays[n]
                $payPercent[$i] = $debit[$i - 1] * ($post['Rate'] / 100) * ($diff->days / $totalDaysInYear);
                //PayDebt[n]= Pay - PayPercent [n] + PrePay1[n] + PrePay0[n]
                $payDebit[$i] = $pay - $payPercent[$i];
                //Debt[n] = Debt[n-1] - PayDebt[n]
                $debit[$i] = $debit[$i - 1] - $payDebit[$i]  - $PrePay1[$i] - $PrePay0[$i];

                $payAmount[$i] = $pay;
                $prePay = true; //был досрочный платеж
                $flags[$i] = $i.' есть  досрочное';
//                $post['Period'] -= 2;
//                continue;
            } else {
                if ($prePay) {
                    $payPercent[$i] = $debit[$i - 1] * ($post['Rate'] / 100) * ($diff->days / $totalDaysInYear);
                    $payDebit[$i] = $pay - $payPercent[$i];
                    $debit[$i] = $debit[$i - 1] - $payDebit[$i] - $PrePay1[$i] - $PrePay0[$i];
                    $payAmount[$i] = $pay;
                    $flags[$i] = $i.' было досрочное ';
//                    if ($debit[$i] <= 0)

                } else {
                    $payPercent[$i] = $debit[$i - 1] * ($post['Rate'] / 100) * ($diff->days / $totalDaysInYear);
                    $payDebit[$i] = $pay - $payPercent[$i];
                    $debit[$i] = $debit[$i - 1] - $payDebit[$i] - $PrePay1[$i] - $PrePay0[$i];
                    $flags[$i] = $i.' нет досрочного';
                }
            }
        }

        if($debit[$i] <= 0) {
            $post['Period'] = $i;
            $payPercent[$i] = $debit[$i - 1] * ($post['Rate'] / 100) * ($diff->days / $totalDaysInYear);
            $payDebit[$i] = $pay - $payPercent[$i] + $PrePay1[$i];
            $debit[$i] = $debit[$i - 1] - $payDebit[$i];
            // Если PayDebt[n] <> Debt[n-1], то PayDebt[n] = Debt[n-1]
            if ($payDebit[$i] != $debit[$i - 1]) {
                //Pay[n] = PayDebt[n] + PayPercent [n]
                $payDebit[$i] = $debit[$i - 1];
                $payAmount[$i] = $payDebit[$i] + $payPercent[$i];
                $debit[$i] = $debit[$i - 1] - $payDebit[$i];
            }

            $flags[$i] = $i.'  последний платеж';
        }

//        $result['total'] += $debit[$i] + $PrePay1[$i] + $PrePay0[$i];
    }
}


//Дифференцированный
if ($post['PayType'] == 2) {
    $date2 = new DateTime(date('d-m-Y', strtotime($post['Date'])));
    $payDebitTotal = $post['Amount'] / $post['Period'];

    for ($i = 1; $i <= $post['Period']; $i++) {
        if (empty($PrePay1[$i])) {
            $PrePay1[$i] = 0;
        }
        if (empty($PrePay0[$i])) {
            $PrePay0[$i] = 0;
        }

        $date1 = clone $date2;
        $date2 = $date2;
        $date2->add(add_months(1, $date2));
        $diff = date_diff($date1, $date2);
        $year = $date2->format("Y");
        $totalDaysInYear = date('z', strtotime($year . '-12-31')) + 1;
        $payDate[$i] = $date2->format('d.m.Y');


        if ($i == 1) {
            $payPercent[$i] = $post['Amount'] * ($post['Rate'] / 100) * ($diff->days / $totalDaysInYear);
            $debit[$i] = $post['Amount'] - $payDebitTotal - $PrePay1[$i] - $PrePay0[$i];
            $payDebit[$i] = $payDebitTotal;
            $payAmount[$i] = $payDebitTotal + $payPercent[$i];

            $result['pay'] = $payAmount[$i];
            $result['pay_print'] = priceFormat($payAmount[$i]);
        } else {

            if ($PrePay0[$i - 1] > 0) {
                //PayDebt=Debtn-1Period-n-1
                $payDebitTotal = $debit[ $i - 1]/ ($post['Period'] - $i - 1);
                //PayDebt[n] = PayDebt
                $payDebit[$i] = $payDebitTotal;
//                Debt[n] = Debt[n-1] – PayDebt[n] –  PrePay1[n] - PrePay0[n]
                $debit[$i] = $debit[$i - 1] - $payDebit[$i] - $PrePay1[$i] - $PrePay0[$i];
                //PayPersentn= Debt[n-1] *Rate100*DaysnYearDays[n]
                $payPercent[$i] = $debit[$i - 1] * ($post['Rate'] / 100) * ($diff->days / $totalDaysInYear);
                //Pay[i] = PayDebt[i] + PayPersent[i]
                $payAmount[$i] = $payDebitTotal + $payPercent[$i];
                $prePay = true;
            } else {
                if ($prePay) {
                    //PayDebt[i] = PayDebt
                    $payDebit[$i] = $payDebitTotal;
                    //Если PayDebt[n] <> Debt[n-1], то PayDebt[n] = Debt[n-1]
//                    if ($payDebit[$i] != $debit[$i - 1]) {
//                        $payDebit[$i] = $debit[$i - 1];
//                    }
                    //Debt[i] = Debt[i-1] – PayDebt[i] –  PrePay1[i] - PrePay0[i]
                    $debit[$i] = $debit[$i - 1] - $payDebit[$i] - $PrePay1[$i] - $PrePay0[$i];
                    //PayPersenti= Debt[i-1] *Rate100*DaysiYearDays[i]
                    $payPercent[$i] = $debit[$i - 1] * ($post['Rate'] / 100) * ($diff->days / $totalDaysInYear);
                    $payAmount[$i] = $payDebitTotal + $payPercent[$i];
                } else {
                    //PayDebt[i] = PayDebt
                    $payDebit[$i] = $payDebitTotal;
                    //Debt[i] = Debt[i-1] – PayDebt[i] –  PrePay1[i] - PrePay0[i]
                    $debit[$i] = $debit[$i - 1] - $payDebit[$i] - $PrePay1[$i] - $PrePay0[$i];

                    //Если PayDebt[n] <> Debt[n-1], то PayDebt[n] = Debt[n-1]
//                    if ($payDebit[$i] != $debit[$i - 1]) {
//                        $payDebit[$i] = $debit[$i - 1];
//                    }
                    //PayPersenti= Debt[i-1] *Rate100*DaysiYearDays[i]
                    $payPercent[$i] = $debit[$i - 1] * ($post['Rate'] / 100) * ($diff->days / $totalDaysInYear);
                    //Pay[i] = PayDebt[i] + PayPersent[i]
                    $payAmount[$i] = $payDebitTotal + $payPercent[$i];
                }
            }
        }

        //Если Debt[i] <=0, то PeriodF=i, n=i
        if ($debit[$i] <= 0) {
            $post['Period'] = $i;
        }
    }
}


//$result['total'] = 0;
$result['overprice'] = 0;
if (!empty($payDate)) {
    $html = '<table class="table" border="1">';
    $html .= '<thead>';
    $html .= '<tr>';
    $html .= '<th>Дата<br/> платежа</th>';
    $html .= '<th>Ежемесячный<br/> платеж</th>';
    $html .= '<th>Платеж<br/>  по основному долгу</th>';
    $html .= '<th>Платеж<br/> по процентам</th>';
    $html .= '<th>Остаток основного долга<br/> на дату платежа</th>';
    $html .= '<th>Досрочный<br/> платёж</th>';
    $html .= '<th></th>';
    $html .= '</tr>';
    $html .= '</thead>';
    foreach ($payDate as $i => $date) {
        $prePay =  $PrePay0[$i] + $PrePay1[$i];
        if ($debit[$i] <= 0) {
            $prePay = 0;
        }
        $html .= '<tr>';
        $html .= '<td>' . $date . '</td>';
        $html .= '<td>' . priceFormat($payAmount[$i]) . '</td>';
        $html .= '<td>' . priceFormat($payDebit[$i]) . '</td>';
        $html .= '<td>' . priceFormat($payPercent[$i]) . '</td>';
        $html .= '<td>' . priceFormat($debit[$i]) . '</td>';
        $html .= '<td>'.priceFormat($prePay).'</td>';
        $html .= '<td>'.(!empty($flags[$i])?$flags[$i]:'').'</td>';
        $html .= '</tr>';

        $result['overprice'] += $payPercent[$i];
        $result['total'] += $payAmount[$i] + $prePay;
    }
    $html .= '</table>';
}

$result['table'] = $html;
$result['total_print'] = priceFormat($result['total']);
$result['amount_print'] = priceFormat($post['Amount']);
$result['overprice_print'] = priceFormat($result['overprice']);


if (!empty($post['EMAIL'])) {
    Loader::includeModule('iblock');
    $el = new CIBlockElement;
    $save = [
        'NAME' => $post['EMAIL'],
        'PREVIEW_TEXT' => $result['table'],
        'PREVIEW_TEXT_TYPE' => 'html',
        'IBLOCK_ID' => 141
    ];
    $el->Add($save);

    Event::send(array(
        "EVENT_NAME" => "CALC_FIRST",
        "LID" => "s1",
        "C_FIELDS" => [
            "EMAIL" => $post['EMAIL'],
            "TABLE" => $result['table']
        ],
    ));
}

if (!empty($post['DOWNLOAD']) && 1==2) {

    require_once($_SERVER['DOCUMENT_ROOT'].'/local/lib/TCPDF-main/examples/tcpdf_include.php');

// create new PDF document
    $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
    $pdf->setCreator(PDF_CREATOR);
//    $pdf->setAuthor('Nicola Asuni');
//    $pdf->setTitle('TCPDF Example 001');
//    $pdf->setSubject('TCPDF Tutorial');
//    $pdf->setKeywords('TCPDF, PDF, example, test, guide');

// set default header data
//    $pdf->setHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE . ' 001', PDF_HEADER_STRING, array(0, 64, 255), array(0, 64, 128));
//    $pdf->setFooterData(array(0, 64, 0), array(0, 64, 128));

// set header and footer fonts
    $pdf->setHeaderFont(array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
    $pdf->setFooterFont(array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
    $pdf->setDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
    $pdf->setMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
    $pdf->setHeaderMargin(PDF_MARGIN_HEADER);
    $pdf->setFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
    $pdf->setAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
    $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
    if (@file_exists(dirname(__FILE__) . '/lang/eng.php')) {
        require_once(dirname(__FILE__) . '/lang/eng.php');
        $pdf->setLanguageArray($l);
    }

// ---------------------------------------------------------

// set default font subsetting mode
    $pdf->setFontSubsetting(true);

// Set font
// dejavusans is a UTF-8 Unicode font, if you only need to
// print standard ASCII chars, you can use core fonts like
// helvetica or times to reduce file size.
    $pdf->setFont('dejavusans', '', 12, '', true);

// Add a page
// This method has several options, check the source code documentation for more information.
    $pdf->AddPage();

// set text shadow effect
//    $pdf->setTextShadow(array('enabled' => true, 'depth_w' => 0.2, 'depth_h' => 0.2, 'color' => array(196, 196, 196), 'opacity' => 1, 'blend_mode' => 'Normal'));

// Set some content to print
    $html = $result['table'];

// Print text using writeHTMLCell()
    $pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);

// ---------------------------------------------------------

    // Close and output PDF document
    // This method has several options, check the source code documentation for more information.
    $file = '/upload/calculator/file'.rand(1, 1000).'.pdf';
    $result['file'] = $file;
    if (file_exists($_SERVER['DOCUMENT_ROOT'].$file)) {
        unlink($_SERVER['DOCUMENT_ROOT'].$file);
    }
    $pdf->Output($_SERVER['DOCUMENT_ROOT'] .$file, 'F');
}

function add_months($months, \DateTime $object)
{
    $next = new DateTime($object->format('d-m-Y H:i:s'));
    $next->modify('last day of +' . $months . ' month');

    if ($object->format('d') > $next->format('d')) {
        return $object->diff($next);
    } else {
        return new DateInterval('P' . $months . 'M');
    }
}

function priceFormat($a)
{
    return number_format(abs($a), 2, ',', ' ');
}


echo json_encode($result);
