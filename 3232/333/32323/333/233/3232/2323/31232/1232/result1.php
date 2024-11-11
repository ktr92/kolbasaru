<!DOCTYPE html>
<html lang="ru">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="pdf/fonts.css" type="text/css" rel="stylesheet" />
    <link href="pdf/pdf.css" type="text/css" rel="stylesheet" />

</head>




<body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.3/html2pdf.bundle.js"></script>
<div class="pdfpage" id="invoice">
    <div class="pdfcontent">
        <div class="pdfheader">
            <div class="pdfheader__items">
                <div class="pdfheader__logo">
                    <img src="pdf/nbki-logo.png" alt="">
                </div><!-- /.pdfheader__logo -->
                <div class="pdfheader__text">Кредитный калькулятор АО «НБКИ» nbki.ru</div><!-- /.pdfheader__text -->
            </div><!-- /.pdfheader__items -->
        </div><!-- /.header -->
        <div class="pdfmain">
            <div class="pdftitle">График платежей</div><!-- /.pdftitle -->
            <div class="pdfparams">
                <table>
                    <tbody>
                    <tr>
                        <td>
                            <table>
                                <tbody>
                                <tr>
                                    <td>Сумма кредита</td>
                                    <td>999 999 999,00</td>
                                </tr>
                                </tbody>
                            </table>
                        </td>
                        <td>
                            <table>
                                <tbody>
                                <tr>
                                    <td>Переплата</td>
                                    <td>999 999 999,00</td>
                                </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <table>
                                <tbody>
                                <tr>
                                    <td>Срок кредита</td>
                                    <td>48 месяцев</td>
                                </tr>
                                </tbody>
                            </table>
                        </td>
                        <td>
                            <table>
                                <tbody>
                                <tr>
                                    <td>Cтавка</td>
                                    <td>33,33%</td>
                                </tr>
                                </tbody>

                            </table>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div><!-- /.pdfparams -->
            <div class="pdftable">
                <table>
                    <thead>
                    <tr>
                        <th>Дата</th>
                        <th>Платеж</th>
                        <th>Остаток долга</th>
                        <th>Досрочный платеж</th>
                        <th>Основной долг</th>
                        <th>Проценты</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>01.01.2021</td>
                        <td>999 999 999 999,00</td>
                        <td>393 923,98</td>
                        <td>0,00</td>
                        <td>999 999 999 999,00</td>
                        <td>1000,33</td>
                    </tr>
                    <tr>
                        <td>01.01.2021</td>
                        <td>32 980,00</td>
                        <td>393 923,98</td>
                        <td>0,00</td>
                        <td>98 430,00</td>
                        <td>33,33</td>
                    </tr>
                    <tr>
                        <td>01.01.2021</td>
                        <td>999 999 999 999,00</td>
                        <td>393 923,98</td>
                        <td>0,00</td>
                        <td>999 999 999 999,00</td>
                        <td>1000,33</td>
                    </tr>
                    <tr>
                        <td>01.01.2021</td>
                        <td>32 980,00</td>
                        <td>393 923,98</td>
                        <td>0,00</td>
                        <td>98 430,00</td>
                        <td>33,33</td>
                    </tr>
                    <tr>
                        <td>01.01.2021</td>
                        <td>999 999 999 999,00</td>
                        <td>393 923,98</td>
                        <td>0,00</td>
                        <td>999 999 999 999,00</td>
                        <td>1000,33</td>
                    </tr>

                    </tbody>
                </table>
            </div><!-- /.pdftable -->
        </div><!-- /.pdfmain -->
    </div><!-- /.pdfcontent -->
    <div class="pdffooter">
        Финансовые организации могут использовать собственные методики расчета графика платежей. Результат расчета,
        полученный с использованием данного сервиса, может отличаться от реальных условий кредитования в финансовых
        организациях.
    </div><!-- /.pdffooter -->
</div>
<button onclick="generatePDF()">Сохранить в PDF</button>
<script>
    function generatePDF() {
        const element = document.getElementById('invoice');

        var opt = {
            margin:       0,
            filename:     'nbki.pdf',
            image:        { type: 'jpeg', quality: 0.98 },
            html2canvas:  { scale: 1 },
            jsPDF:        { unit: 'in', format: 'letter', orientation: 'landscape' }
        };

        html2pdf().set(opt).from(element).save();
    }
</script>
</body>

</html>