<?php
define("NO_KEEP_STATISTIC", true);
define("NOT_CHECK_PERMISSIONS",true);
define('CHK_EVENT', true);

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

$APPLICATION->IncludeComponent(
    'custom:calc',
    '',
    [
        'SAVE' => 'Y'
    ],
    false
);
