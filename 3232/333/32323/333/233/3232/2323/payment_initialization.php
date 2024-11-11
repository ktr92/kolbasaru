<? define("STATISTIC_SKIP_ACTIVITY_CHECK", "true"); ?>
<?

require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");

if (!CModule::IncludeModule("iblock")) {
    die("failure");
    return;
}
$el = new CIBlockElement;

$PROP = array();
$PROP['PHONE'] = htmlspecialchars($_REQUEST['phone']);
$PROP['EMAIL'] = htmlspecialchars($_REQUEST['email']);

if (!empty($_REQUEST['service'])){
    $PROP['SERVICE'] = htmlspecialchars($_REQUEST['service']);
    if($_REQUEST['service'] == "Формирование/замена/аннулирование кода субъекта кредитной истории")
        $PROP['SERVICE_ID'] = 79;
    if($_REQUEST['service'] == "Формирование / замена / аннулирование кода субъекта")
        $PROP['SERVICE_ID'] = 79;
    else if($_REQUEST['service'] == "Запрос в ЦККИ (Центральный каталог кредитных историй)")
        $PROP['SERVICE_ID'] = 80;
    else if($_REQUEST['service'] == "Повторное, в рамках 12 месяцев, получение кредитного отчета")
        $PROP['SERVICE_ID'] = 81;
    else if($_REQUEST['service'] == "Отчет по кредитной истории")
        $PROP['SERVICE_ID'] = 81;
}
if (!empty($_REQUEST['service_val']))
    $PROP['SERVICE_VAL'] = htmlspecialchars($_REQUEST['service_val']);

// SERVICE_VAL

$arLoadProductArray = Array(
    "MODIFIED_BY" => $USER->GetID(), // элемент изменен текущим пользователем
    "IBLOCK_SECTION_ID" => false, // элемент лежит в корне раздела
    "IBLOCK_ID" => 16,
    "PROPERTY_VALUES" => $PROP,
    "NAME" => htmlspecialchars($_REQUEST['name']),
    "ACTIVE" => "Y",
    "PREVIEW_TEXT" => 'Оплата кредитного отчета',
);

if (!$PRODUCT_ID = $el->Add($arLoadProductArray)) {
    die("Error: " . $el->LAST_ERROR);
}


$pass1 = 'Q11x7SXKnC2CU4DsVodu';
$pass2 = 'n1dPlgqNwV4rIm97bF4G';

$test1 = 'BjkUOU08iKME0KOG58MH';
$test2 = 'cKNS6Vt6aP3PPXsE41BR';

require_once $_SERVER["DOCUMENT_ROOT"].'/bitrix/php_interface/classes/robokassa.class.php';

$kassa = new Robokassa('nbkiru', $pass1, $pass2);

/* назначение параметров */
// echo $_REQUEST['service_val'];exit;
// define("LOG_FILENAME", $_SERVER["DOCUMENT_ROOT"]."/log.txt");
// AddMessage2Log($_REQUEST, "send");
// AddMessage2Log($PRODUCT_ID, "send");

file_put_contents('log1.txt', print_r($_REQUEST, true));

if (!empty($_REQUEST['service_val'])) {
    $kassa->OutSum = floatval($_REQUEST['service_val']);
} else
    $kassa->OutSum = 450.00;
if (!empty($_REQUEST['service'])) {
    $kassa->Desc = $_REQUEST['service'];
} else
    $kassa->Desc = 'Оплата кредитного отчета';
$kassa->InvId = $PRODUCT_ID;

//$kassa->OutSum = 1.00;
$arReceipt = [
    'sno' => 'osn',
    'items' => [
        [
            'name' => $kassa->Desc,
            'quantity' => 1.0,
            'sum' => $kassa->OutSum,
            'payment_method' => 'full_prepayment',
            'payment_object' => 'payment',
            'tax' => 'vat120'
        ]
    ]
];

$kassa->Receipt = json_encode($arReceipt);

//$kassa->Receipt = $arReceipt;

//$kassa->addCustomValues(array(
//    'shp_uname' => $_REQUEST['name'], // все ключи массива должны быть с префиксом shp_
//    'shp_uphone' => $_REQUEST['phone'],
//    'shp_uemail' => $_REQUEST['email'],
//));
//file_put_contents('kassa_log.txt', print_r($kassa, true));
echo $kassa->getRedirectURL();

/* редирект на сайт робокассы */
// header('Location: ' . $kassa->getRedirectURL());
