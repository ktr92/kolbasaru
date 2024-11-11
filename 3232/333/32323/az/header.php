<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
    die();

use Bitrix\Main\Localization\Loc;
use Bitrix\Main\Page\Asset;

if (requestHelper::isAjax())
    return;

CJSCore::init(['ajax', 'fx']);

Loc::loadMessages(__FILE__);

global $APPLICATION,
       $USER;

define('CUR_PAGE', $APPLICATION->GetCurPage(FALSE));
define('IS_MAIN_PAGE', CUR_PAGE === SITE_DIR ? TRUE : FALSE);
define('ASSETS_PATH', SITE_TEMPLATE_PATH . '/public');
define('INCLUDE_AREA_PATH', SITE_TEMPLATE_PATH . '/include');
define('WRAPPER', siteHelper::getPageWrapper(IS_MAIN_PAGE));


$ASSETS = Asset::getInstance();
$ASSETS->addCss(ASSETS_PATH . '/css/bootstrap.min.css');
$ASSETS->addCss(ASSETS_PATH . '/css/slick.css');
$ASSETS->addCss(ASSETS_PATH . '/css/slick-theme.css');
$ASSETS->addCss(ASSETS_PATH . '/libs/font-awesome-4.7.0/css/font-awesome.min.css');
$ASSETS->addCss(ASSETS_PATH . '/fonts/stylesheet.css');
$ASSETS->addCss(ASSETS_PATH . '/css/custom.css');
$ASSETS->addCss(ASSETS_PATH . '/css/jQuery.inputSliderRange.css');
$ASSETS->addCss(ASSETS_PATH . '/css/nouislider.min.css');
$ASSETS->addCss(ASSETS_PATH . '/css/datepicker.min.css');
$ASSETS->addCss(ASSETS_PATH . '/css/style.css');
$ASSETS->addCss(ASSETS_PATH . '/css/template_styles.css');
//$ASSETS->addCss(ASSETS_PATH . '/css/main.css');

$ASSETS->addJs(ASSETS_PATH . '/js/jquery.min.js');
$ASSETS->addJs(ASSETS_PATH . '/js/jQuery.inputSliderRange.min.js');
$ASSETS->addJs(ASSETS_PATH . '/js/bootstrap.min.js');
$ASSETS->addJs(ASSETS_PATH . '/js/slick.min.js');
$ASSETS->addJs(ASSETS_PATH . '/js/maskedinput.js');
$ASSETS->addJs(ASSETS_PATH . '/js/jquery.inputmask.min.js');
$ASSETS->addJs(ASSETS_PATH . '/js/inputmask.binding.js');
$ASSETS->addJs(ASSETS_PATH . '/js/nouislider.min.js');
$ASSETS->addJs(ASSETS_PATH . '/js/wow.min.js');
$ASSETS->addJs(ASSETS_PATH . '/js/datepicker.min.js');
$ASSETS->addJs(ASSETS_PATH . '/js/progressbar.min.js');
$ASSETS->addJs(ASSETS_PATH . '/js/calc.js');
$ASSETS->addJs(ASSETS_PATH . '/js/main.js');
$ASSETS->addJs(ASSETS_PATH . '/js/app.js'); ?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="/favicon.ico" rel="icon" type="image/x-icon">
    <title><? $APPLICATION->ShowTitle(); ?></title>
    <? $APPLICATION->ShowMeta("keywords"); ?>
    <? $APPLICATION->ShowMeta("description"); ?>
    <? $APPLICATION->ShowCSS(); ?>
    <? $APPLICATION->ShowHeadStrings(); ?>
    <? $APPLICATION->ShowHeadScripts(); ?>
<meta name="yandex-verification" content="5ec28598b45eedbd">
    <script data-skip-moving="true">
        let dadataKey = '<?=\Bitrix\Main\Config\Option::get( "askaron.settings", "UF_DADATA");?>';
    </script>
    <script
            src="https://api-maps.yandex.ru/2.1/?apikey=476f37bb-9e8a-40f0-a8db-cb7cebca3c25&lang=ru_RU"
            type="text/javascript"></script>
<!-- script src="//code-ya.jivosite.com/widget/9hpOVJirfX" async></script -->
</head>
<body>
<? if ($USER->IsAdmin()): ?><? $APPLICATION->ShowPanel(); ?><? endif; ?>
<header id="header" class="header">
    <!-- мобильная выпадашка отдельным блоком, будет дублировать в себе пункты меню, выбор города и телефон. т.к. дизайн десктопа и мобилки нормально не совмещается. -->
    <div class="overlay"></div>
    <div class="mobilepanel">
        <div class="mobilepanel__wrapper">
            <div class="mobilepanel__items">
                <div class="headercontact__contact">

                    <div class="mobilepanel__login">
    <div class="mobilelogin ">
        <!-- "mobilelogin_authorized" если авторизован -->
        <? if ($USER->IsAuthorized()):?>
        <a href="">
            <div class="mobilelogin__main">
                <div class="mobilelogin__icon">
                    <div class="logicon">
                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path opacity="0.5" d="M15.72 0.828125C7.59795 0.828125 1 7.42607 1 15.5481C1 23.295 7.00404 29.6508 14.6062 30.2219C14.6212 30.2231 14.6362 30.2245 14.6512 30.2256C15.0047 30.2511 15.3601 30.2681 15.72 30.2681C16.0799 30.2681 16.4353 30.2511 16.7887 30.2256C16.8038 30.2245 16.8188 30.2231 16.8337 30.2219C24.436 29.6508 30.44 23.295 30.44 15.5481C30.44 7.42607 23.8421 0.828125 15.72 0.828125ZM15.72 2.10812C23.1503 2.10812 29.16 8.11784 29.16 15.5481C29.16 19.2164 27.6911 22.5345 25.3137 24.9581C24.2967 24.2175 23.0398 23.7757 21.9137 23.3806C20.58 22.9134 19.3182 22.4705 18.9688 21.7006C18.9137 21.0433 18.9186 20.5301 18.9237 19.9406L18.925 19.6906C19.4933 19.1498 20.208 18.0085 20.4525 16.9544C20.8749 16.7291 21.3914 16.1891 21.5462 14.8956C21.6237 14.2537 21.441 13.7566 21.185 13.4231C21.5306 12.2359 22.2182 9.23046 21.0138 7.29062C20.5043 6.47078 19.7356 5.95354 18.725 5.74937C18.1573 5.04665 17.0861 4.66312 15.6537 4.66312C13.4771 4.70344 11.8814 5.37013 10.9137 6.64437C9.77263 8.14837 9.55701 10.4208 10.2712 13.4019C10.0069 13.7353 9.81628 14.2397 9.895 14.8944C10.0505 16.1878 10.5651 16.7278 10.9875 16.9531C11.232 18.0085 11.946 19.1498 12.515 19.6906L12.5162 19.9344C12.5214 20.5264 12.5263 21.0408 12.4712 21.7006C12.1205 22.4725 10.8527 22.9202 9.5125 23.3931C8.39321 23.7884 7.14376 24.2309 6.12875 24.9619C3.74958 22.538 2.28 19.218 2.28 15.5481C2.28 8.11784 8.28971 2.10812 15.72 2.10812Z" fill="white"/>
                        </svg>
                    </div>
                </div>

                <!--  если авторизован -->
                <div class="mobilelogin__text">
                    <div class="mobilelogin__name"><?=$USER->GetFullName()?></div>
                    <div class="mobilelogin__login"><?=$USER->GetEmail()?></div>
                </div>

            </div>
            <div class="mobilelogin_arrow">
                <svg width="7" height="10" viewBox="0 0 7 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M3.80151 5L0 1.28399L1.31353 0L6.42857 5L1.31353 10L0 8.71601L3.80151 5Z" fill="white"/>
                </svg>
            </div>
        </a>
        <?else:?>
            <a href="https://zhdalians.ru/auth-page/" target="_blank" >
            <div class="mobilelogin__main">
            <div class="mobilelogin__icon">
                    <div class="logicon">
                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path opacity="0.5" d="M15.72 0.828125C7.59795 0.828125 1 7.42607 1 15.5481C1 23.295 7.00404 29.6508 14.6062 30.2219C14.6212 30.2231 14.6362 30.2245 14.6512 30.2256C15.0047 30.2511 15.3601 30.2681 15.72 30.2681C16.0799 30.2681 16.4353 30.2511 16.7887 30.2256C16.8038 30.2245 16.8188 30.2231 16.8337 30.2219C24.436 29.6508 30.44 23.295 30.44 15.5481C30.44 7.42607 23.8421 0.828125 15.72 0.828125ZM15.72 2.10812C23.1503 2.10812 29.16 8.11784 29.16 15.5481C29.16 19.2164 27.6911 22.5345 25.3137 24.9581C24.2967 24.2175 23.0398 23.7757 21.9137 23.3806C20.58 22.9134 19.3182 22.4705 18.9688 21.7006C18.9137 21.0433 18.9186 20.5301 18.9237 19.9406L18.925 19.6906C19.4933 19.1498 20.208 18.0085 20.4525 16.9544C20.8749 16.7291 21.3914 16.1891 21.5462 14.8956C21.6237 14.2537 21.441 13.7566 21.185 13.4231C21.5306 12.2359 22.2182 9.23046 21.0138 7.29062C20.5043 6.47078 19.7356 5.95354 18.725 5.74937C18.1573 5.04665 17.0861 4.66312 15.6537 4.66312C13.4771 4.70344 11.8814 5.37013 10.9137 6.64437C9.77263 8.14837 9.55701 10.4208 10.2712 13.4019C10.0069 13.7353 9.81628 14.2397 9.895 14.8944C10.0505 16.1878 10.5651 16.7278 10.9875 16.9531C11.232 18.0085 11.946 19.1498 12.515 19.6906L12.5162 19.9344C12.5214 20.5264 12.5263 21.0408 12.4712 21.7006C12.1205 22.4725 10.8527 22.9202 9.5125 23.3931C8.39321 23.7884 7.14376 24.2309 6.12875 24.9619C3.74958 22.538 2.28 19.218 2.28 15.5481C2.28 8.11784 8.28971 2.10812 15.72 2.10812Z" fill="white"/>
                        </svg>
                    </div>
                </div>
                <div class="mobilelogin__text nouser">
                    Войти
                </div>
                </div>
                </a>
                <?endif;?>
    </div>
</div>
<div class="mobilepanel__nav">
    <?php $APPLICATION->IncludeComponent(
        "bitrix:main.include",
        "",
        array(
            "AREA_FILE_SHOW" => "file",
            "AREA_FILE_SUFFIX" => "inc",
            "EDIT_TEMPLATE" => "",
            "PATH" => INCLUDE_AREA_PATH. "/mobile.menu1.php"
        )
    ); ?>
</div>
<div class="mobilepanel__location">
    <div class="location">
        <div class="location__main">
            <div class="location__icon">
                <svg width="22" height="32" viewBox="0 0 22 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10.9998 0.640137C5.35477 0.640137 0.759766 5.23514 0.759766 10.8801C0.759766 19.9126 10.1223 30.6851 10.5198 31.1401C10.6423 31.2801 10.8148 31.3601 10.9998 31.3601C11.1973 31.3476 11.3573 31.2801 11.4798 31.1401C11.8773 30.6776 21.2398 19.7201 21.2398 10.8801C21.2398 5.23514 16.6448 0.640137 10.9998 0.640137ZM10.9998 7.68014C13.1198 7.68014 14.8398 9.40014 14.8398 11.5201C14.8398 13.6401 13.1198 15.3601 10.9998 15.3601C8.87977 15.3601 7.15977 13.6401 7.15977 11.5201C7.15977 9.40014 8.87977 7.68014 10.9998 7.68014Z" fill="#F23F34"></path>
                </svg>
            </div>
            <div class="location__city">
                <div class="location__title">
                    Ваш город:
                    <a href="#">
                        <span><?=geoHelper::getUserCity();?></span>
                        <svg width="14" height="9" viewBox="0 0 14 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path opacity="0.3" fill-rule="evenodd" clip-rule="evenodd" d="M7 5.32211L12.2024 -7.8575e-08L14 1.83894L7 9L-8.03828e-08 1.83894L1.79759 -5.33384e-07L7 5.32211Z" fill="#373737"></path>
                        </svg>
                    </a>
                </div>
                <!--<div class="location__content">
                    <span class="red">10</span> терминалов
                </div>-->
            </div>
        </div>
        <div class="ctooltip location_tooltip">
            <div class="location__wrapper">
                <div class="location__wtitle">Ваш город:</div>
                <div class="location__wvalue"><?=geoHelper::getUserCity();?>?</div>
                <div class="location__wyes"><a href="#" class="btn btn_main">Да</a></div>
                <div class="location__wno"><a href="#">Нет, выбрать другой город</a></div>
            </div>
        </div>
    </div>
</div>

                </div>

                <div class="mobilepanel__contact">
                    <div class="headercontact">
                        <div class="headercontact__icon">
                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M24.9799 30.0801C24.9699 30.0801 24.9599 30.0801 24.9499 30.0801C20.1399 29.9226 14.5049 25.2601 10.6224 21.3751C6.73492 17.4901 2.07242 11.8526 1.92242 7.06511C1.86742 5.38511 5.98992 2.39761 6.03242 2.36761C7.10242 1.62261 8.28992 1.88761 8.77742 2.56261C9.10742 3.02011 12.2324 7.75511 12.5724 8.29261C12.9249 8.85011 12.8724 9.68011 12.4324 10.5126C12.1899 10.9751 11.3849 12.3901 11.0074 13.0501C11.4149 13.6301 12.4924 15.0526 14.7174 17.2776C16.9449 19.5026 18.3649 20.5826 18.9474 20.9901C19.6074 20.6126 21.0224 19.8076 21.4849 19.5651C22.3049 19.1301 23.1299 19.0751 23.6924 19.4201C24.2674 19.7726 28.9899 22.9126 29.4249 23.2151C29.7899 23.4726 30.0249 23.9126 30.0724 24.4251C30.1174 24.9426 29.9574 25.4901 29.6249 25.9676C29.5974 26.0076 26.6449 30.0801 24.9799 30.0801Z" fill="#F23F34"></path>
                            </svg>
                        </div>
                        <div class="headercontact__content">
                            <div class="headercontact__contact">
                                <?php $APPLICATION->IncludeComponent(
                                    "bitrix:main.include",
                                    "",
                                    array(
                                        "AREA_FILE_SHOW" => "file",
                                        "AREA_FILE_SUFFIX" => "inc",
                                        "EDIT_TEMPLATE" => "",
                                        "PATH" => INCLUDE_AREA_PATH. "/phone.php"
                                    )
                                ); ?>
                            </div>
                            <div class="headercontact__link"><a href="#modalCallback" data-toggle="modal" class="link">Заказать звонок</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header__top">
        <div class="container">
            <div class="headertop">
                <div class="logo">
                    <? if (!IS_MAIN_PAGE):?>
                    <a href="/">
                    <? endif; ?>
                        <svg width="154" height="54" viewBox="0 0 154 54" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M145.3 25H142.9V37.7L151.5 29.8V37.1H153.9V24.4L145.3 32.3V25ZM131.5 25V37.1H134.1V31.6L138.6 37.1H141.6L136.4 30.7L141.4 25H138.5L134.2 29.9V25H131.5ZM120.4 25H118V37.7L126.6 29.8V37.1H129V24.4L120.4 32.3V25ZM107.6 27.2H110.8V37H113.3V27.2H116.6V25H107.6V27.2ZM99.3 31C99.3 28.6 101.1 27.1 103.2 27.1C104.9 27.1 106.1 27.8 106.9 28.8V26C105.9 25.2 104.9 24.8 103.1 24.8C99.4 24.8 96.6 27.4 96.6 31.1C96.6 34.8 99.3 37.4 103.1 37.4C104.9 37.4 105.9 37 106.9 36.2V33.4C106.1 34.3 104.9 35.1 103.2 35.1C101.1 34.9 99.3 33.4 99.3 31ZM86.1 25H83.7V37.7L92.3 29.8V37.1H94.7V24.4L86.1 32.3V25ZM75.5 25V37.1H78V27.3H82.3V25.1H75.5V25ZM63.3 31C63.3 28.7 64.8 27 67.1 27C69.4 27 70.9 28.7 70.9 31C70.9 33.3 69.4 35 67.1 35C64.8 35 63.3 33.3 63.3 31ZM60.7 31C60.7 34.7 63.4 37.3 67.1 37.3C70.8 37.3 73.5 34.6 73.5 31C73.5 27.4 70.8 24.7 67.1 24.7C63.5 24.7 60.7 27.4 60.7 31ZM109.6 9.1L111.1 12.5H108.1L109.6 9.1ZM112.9 17.3H115.7L109.6 4.5L103.5 17.3H106.3L107.5 14.6H111.6L112.9 17.3ZM93.4 5.2V17.3H96V11.8L100.5 17.3H103.5L98.3 10.9L103.3 5.2H100.4L96.1 10.1V5.2H93.4ZM92.2 5.2H89.6L86.9 11.3L84.5 5.2H81.7L85.7 13.6L84.1 17.2H86.7L92.2 5.2ZM76.7 11.9C77.9 11.9 78.7 12.5 78.7 13.6C78.7 14.7 77.9 15.2 76.7 15.2H74.9V11.9H76.7ZM72.4 5.2V17.3H77.2C79.5 17.3 81.3 15.8 81.3 13.6C81.3 11.4 79.5 9.9 77.2 9.9H74.9V7.4H80.4V5.3H72.4V5.2ZM65.7 17.5C68.8 17.5 70.4 16.1 70.4 14C70.4 12.4 69.4 11.4 67.8 10.9C69.2 10.4 70.1 9.5 70.1 8.3C70.1 6.5 68.5 5 65.7 5C62.9 5 61.3 6.5 61.3 8.6H63.6C63.6 7.7 64.4 7 65.8 7C67.1 7 67.7 7.6 67.7 8.5C67.7 9.4 66.8 10.2 65 10.2V11.9C67 11.9 68 12.6 68 13.8C68 14.9 67.2 15.5 65.7 15.5C64.2 15.5 63.3 14.8 63.2 13.7H60.8C60.7 15.7 62.3 17.5 65.7 17.5ZM53.7 9.1L55.2 12.5H52.2L53.7 9.1ZM57 17.3H59.8L53.7 4.5L47.6 17.3H50.4L51.6 14.6H55.7L57 17.3ZM58.7 25H49.3V32.3C49.3 33.9 48.6 35 47.5 35V37.1C50.4 37.1 51.7 35.4 51.7 32.3V27.3H56.1V37.1H58.6V25H58.7Z" fill="#373737"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M13.5 23L20.8 6.1L21.9 10L24.6 8.9L21.8 0L13.4 4L14.5 6.7L18.1 4.9L10.2 23H13.5ZM6 40.3L10.5 30H7.2L3.2 39.2L6 40.3ZM28 29.9L33.6 48.2L30.2 46L28.8 48.6L36.7 53.5L40.5 45L37.9 43.6L36.3 47.3L31 29.8H28V29.9ZM0 28H37.2L34.1 30.6L36.2 32.7L43.2 26.6L36.2 20.5L34.1 22.6L37.2 25.2H0V28ZM22.7 12.8L25.8 23.1H28.9L25.5 11.9L22.7 12.8Z" fill="#F23F34"/>
                        </svg>
                    <? if (!IS_MAIN_PAGE):?>
                    </a>
                    <? endif; ?>
                </div>
                <div class="topmenu">
                    <div class="topmenu__content">
                        <?php $APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            array(
                                "AREA_FILE_SHOW" => "file",
                                "AREA_FILE_SUFFIX" => "inc",
                                "EDIT_TEMPLATE" => "",
                                "PATH" => INCLUDE_AREA_PATH. "/menu.php"
                            )
                        ); ?>
                        <?if (1==2):?>
                        <?// Меню - http://dev.1c-bitrix.ru/user_help/settings/settings/components_2/navigation/menu.php
                        $APPLICATION->IncludeComponent(
                        	"bitrix:menu",
                        	"top",                  // [bottom_menu, catalog_native, top_menu, .default, blue_tabs, catalog_horizontal, catalog_vertical, grey_tabs, horizontal_multilevel, tree, vertical_multilevel]
                        	array(
                        		// region Основные параметры
                        		"ROOT_MENU_TYPE"         =>  "top",  // Тип меню для первого уровня : array ( 'left' => 'Левое меню', 'top' => 'Верхнее меню', 'bottom' => 'Нижнее меню', )
                        		// endregion
                        		// region Настройки кеширования
                        		"MENU_CACHE_TYPE"        =>  "N",     // Тип кеширования : array ( 'A' => 'Авто', 'Y' => 'Кешировать', 'N' => 'Не кешировать', )
                        		"MENU_CACHE_TIME"        =>  "360000",  // Время кеширования (сек.)
                        		"MENU_CACHE_USE_GROUPS"  =>  "N",     // Учитывать права доступа
                        		"MENU_CACHE_GET_VARS"    =>  "",      // Значимые переменные запроса
                        		// endregion
                        		// region Дополнительные настройки
                        		"MAX_LEVEL"              =>  "1",     // Уровень вложенности меню : array ( 1 => '1', 2 => '2', 3 => '3', 4 => '4', )
                        		"CHILD_MENU_TYPE"        =>  "",  // Тип меню для остальных уровней : array ( 'left' => 'Левое меню', 'top' => 'Верхнее меню', 'bottom' => 'Нижнее меню', )
                        		"USE_EXT"                =>  "N",     // Подключать файлы с именами вида .тип_меню.menu_ext.php
                        		"DELAY"                  =>  "N",     // Откладывать выполнение шаблона меню
                        		"ALLOW_MULTI_SELECT"     =>  "N",     // Разрешить несколько активных пунктов одновременно
                        		// endregion
                        	)
                        );?>
                        <? endif; ?>
                    </div>
                </div>
                <div class="location">
                    <div class="location__main">
                        <div class="location__icon">
                            <svg width="22" height="32" viewBox="0 0 22 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.9998 0.640137C5.35477 0.640137 0.759766 5.23514 0.759766 10.8801C0.759766 19.9126 10.1223 30.6851 10.5198 31.1401C10.6423 31.2801 10.8148 31.3601 10.9998 31.3601C11.1973 31.3476 11.3573 31.2801 11.4798 31.1401C11.8773 30.6776 21.2398 19.7201 21.2398 10.8801C21.2398 5.23514 16.6448 0.640137 10.9998 0.640137ZM10.9998 7.68014C13.1198 7.68014 14.8398 9.40014 14.8398 11.5201C14.8398 13.6401 13.1198 15.3601 10.9998 15.3601C8.87977 15.3601 7.15977 13.6401 7.15977 11.5201C7.15977 9.40014 8.87977 7.68014 10.9998 7.68014Z" fill="#F23F34"/>
                            </svg>
                        </div>
                        <div class="location__city">
                            <div class="location__title">
                                Ваш город:
                                <a href="#" >
                                    <span><?=geoHelper::getUserCity();?></span>
                                    <svg width="14" height="9" viewBox="0 0 14 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path opacity="0.3" fill-rule="evenodd" clip-rule="evenodd" d="M7 5.32211L12.2024 -7.8575e-08L14 1.83894L7 9L-8.03828e-08 1.83894L1.79759 -5.33384e-07L7 5.32211Z" fill="#373737"/>
                                    </svg>
                                </a>
                            </div>
                          <!-- <div class="location__content">
                                <span class="red">10</span> терминалов
                            </div>-->
                        </div>
                    </div>
                    <div class="ctooltip location_tooltip">
                        <div class="location__wrapper">
                            <div class="location__wtitle">Ваш город:</div>
                            <div class="location__wvalue"><?=geoHelper::getUserCity();?>?</div>
                            <div class="location__wyes"><a href="#" class="btn btn_main">Да</a></div>
                            <div class="location__wno"><a href="#">Нет, выбрать другой город</a></div>
                        </div>
                    </div>
                </div>
                <div class="headercontacts">
                    <div class="headercontacts__main">
                        <div class="headercontact">
                            <div class="headercontact__icon">
                                <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M24.9799 30.0801C24.9699 30.0801 24.9599 30.0801 24.9499 30.0801C20.1399 29.9226 14.5049 25.2601 10.6224 21.3751C6.73492 17.4901 2.07242 11.8526 1.92242 7.06511C1.86742 5.38511 5.98992 2.39761 6.03242 2.36761C7.10242 1.62261 8.28992 1.88761 8.77742 2.56261C9.10742 3.02011 12.2324 7.75511 12.5724 8.29261C12.9249 8.85011 12.8724 9.68011 12.4324 10.5126C12.1899 10.9751 11.3849 12.3901 11.0074 13.0501C11.4149 13.6301 12.4924 15.0526 14.7174 17.2776C16.9449 19.5026 18.3649 20.5826 18.9474 20.9901C19.6074 20.6126 21.0224 19.8076 21.4849 19.5651C22.3049 19.1301 23.1299 19.0751 23.6924 19.4201C24.2674 19.7726 28.9899 22.9126 29.4249 23.2151C29.7899 23.4726 30.0249 23.9126 30.0724 24.4251C30.1174 24.9426 29.9574 25.4901 29.6249 25.9676C29.5974 26.0076 26.6449 30.0801 24.9799 30.0801Z" fill="#F23F34"/>
                                </svg>
                            </div>
                            <div class="headercontact__content">
                                <div class="headercontact__contact">
                                    <?php $APPLICATION->IncludeComponent(
                                        "bitrix:main.include",
                                        "",
                                        array(
                                            "AREA_FILE_SHOW" => "file",
                                            "AREA_FILE_SUFFIX" => "inc",
                                            "EDIT_TEMPLATE" => "",
                                            "PATH" => INCLUDE_AREA_PATH. "/phone.php"
                                        )
                                    ); ?>
                                </div>
                                <div class="headercontact__link"><a href="#modalCallback" data-toggle="modal" class="link">Заказать звонок</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <span class="mobilebutton">
              <svg width="32" height="21" viewBox="0 0 32 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect width="32" height="3" fill="#373737"/>
                <rect y="9" width="32" height="3" fill="#373737"/>
                <rect y="18" width="32" height="3" fill="#373737"/>
              </svg>
            </span>
            </div>
        </div>
    </div>
    <div class="header__content">
        <div class="container">
            <div class="headermain">
                <div class="headercatalog">
                    <button class="btn btn_main btn_icons menubtn">
                <span class="menubtn__left">
                  <span class="menubtn__burger">
                    <svg width="21" height="14" viewBox="0 0 21 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <rect width="21" height="2" rx="1" fill="white"/>
                      <rect y="6" width="21" height="2" rx="1" fill="white"/>
                      <rect y="12" width="21" height="2" rx="1" fill="white"/>
                    </svg>
                  </span>
                  <span class="menubtn__title">Услуги</span>
                </span>
                        <span class="menubtn__angle">
                  <svg width="14" height="10" viewBox="0 0 14 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M7 5.82211L12.2024 0.5L14 2.33894L7 9.5L-8.03828e-08 2.33894L1.79759 0.499999L7 5.82211Z" fill="white"/>
                  </svg>
                </span>
                    </button>
                    <div class="mainmenu">
                        <div class="mainmenu__content">
                            <div class="mainmenu__list">
                                <div class="mainmenu__links">
                                    <?// Лента
                                    $APPLICATION->IncludeComponent(
                                        "bitrix:news.line",
                                        "service_links",
                                        array(
                                            // region Основные параметры
                                            "IBLOCK_TYPE"         =>  "content",         // Тип информационного блока : array ( 'catalog' => '[catalog] Каталоги', 'news' => '[news] Новости', 'offers' => '[offers] Торговые предложения', 'services' => '[services] Сервисы', 'references' => '[references] Справочники', )
                                            "IBLOCKS"             =>  array('15'),      // Код информационного блока : array ( 1 => 'Новости', 2 => 'Одежда', 3 => 'Одежда (предложения)', )
                                            "NEWS_COUNT"          =>  "30",           // Количество новостей на странице
                                            // endregion
                                            // region Источник данных
                                            "FIELD_CODE"          =>  array('PROPERTY_SHOW_MENU'),      // Поля : array ( 'ID' => 'ID', 'CODE' => 'Символьный код', 'XML_ID' => 'Внешний код', 'NAME' => 'Название', 'TAGS' => 'Теги', 'SORT' => 'Сортировка', 'PREVIEW_TEXT' => 'Описание для анонса', 'PREVIEW_PICTURE' => 'Картинка для анонса', 'DETAIL_TEXT' => 'Детальное описание', 'DETAIL_PICTURE' => 'Детальная картинка', 'DATE_ACTIVE_FROM' => 'Начало активности (дата)', 'ACTIVE_FROM' => 'Начало активности (время)', 'DATE_ACTIVE_TO' => 'Окончание активности (дата)', 'ACTIVE_TO' => 'Окончание активности (время)', 'SHOW_COUNTER' => 'Количество показов', 'SHOW_COUNTER_START' => 'Дата первого показа', 'IBLOCK_TYPE_ID' => 'Тип информационного блока', 'IBLOCK_ID' => 'ID информационного блока', 'IBLOCK_CODE' => 'Символьный код информационного блока', 'IBLOCK_NAME' => 'Название информационного блока', 'IBLOCK_EXTERNAL_ID' => 'Внешний код информационного блока', 'DATE_CREATE' => 'Дата создания', 'CREATED_BY' => 'Кем создан (ID)', 'CREATED_USER_NAME' => 'Кем создан (имя)', 'TIMESTAMP_X' => 'Дата изменения', 'MODIFIED_BY' => 'Кем изменен (ID)', 'USER_NAME' => 'Кем изменен (имя)', )
                                            "SORT_BY1"            =>  "SORT",  // Поле для первой сортировки новостей : array ( 'ID' => 'ID', 'NAME' => 'Название', 'ACTIVE_FROM' => 'Дата начала активности', 'SORT' => 'Сортировка', 'TIMESTAMP_X' => 'Дата последнего изменения', )
                                            "SORT_ORDER1"         =>  "ASC",         // Направление для первой сортировки новостей : array ( 'ASC' => 'По возрастанию', 'DESC' => 'По убыванию', )
                                            "SORT_BY2"            =>  "SORT",         // Поле для второй сортировки новостей : array ( 'ID' => 'ID', 'NAME' => 'Название', 'ACTIVE_FROM' => 'Дата начала активности', 'SORT' => 'Сортировка', 'TIMESTAMP_X' => 'Дата последнего изменения', )
                                            "SORT_ORDER2"         =>  "ASC",          // Направление для второй сортировки новостей : array ( 'ASC' => 'По возрастанию', 'DESC' => 'По убыванию', )
                                            // endregion
                                            // region Шаблоны ссылок
                                            "DETAIL_URL"          =>  "",             // URL, ведущий на страницу с содержимым элемента раздела
                                            // endregion
                                            // region Настройки кеширования
                                            "CACHE_TYPE"          =>  "A",            // Тип кеширования : array ( 'A' => 'Авто + Управляемое', 'Y' => 'Кешировать', 'N' => 'Не кешировать', )
                                            "CACHE_TIME"          =>  "3600000",          // Время кеширования (сек.)
                                            "CACHE_NOTES"         =>  "",             //
                                            "CACHE_GROUPS"        =>  "N",            // Учитывать права доступа
                                            // endregion
                                            // region Дополнительные настройки
                                            "ACTIVE_DATE_FORMAT"  =>  "d.m.Y",        // Формат показа даты : array ( 'd-m-Y' => '22-02-2007', 'm-d-Y' => '02-22-2007', 'Y-m-d' => '2007-02-22', 'd.m.Y' => '22.02.2007', 'd.M.Y' => '22.Фев.2007', 'm.d.Y' => '02.22.2007', 'j M Y' => '22 Фев 2007', 'M j, Y' => 'Фев 22, 2007', 'j F Y' => '22 Февраля 2007', 'f j, Y' => 'Февраль 22, 2007', 'd.m.y g:i A' => '22.02.07 7:30 AM', 'd.M.y g:i A' => '22.Фев.07 7:30 AM', 'd.M.Y g:i A' => '22.Фев.2007 7:30 AM', 'd.m.y G:i' => '22.02.07 7:30', 'd.m.Y H:i' => '22.02.2007 07:30', 'SHORT' => 'Формат сайта', 'FULL' => 'Формат сайта (включая время)', )
                                            // endregion
                                        )
                                    );?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="search">
                    <form action="/search/">
                        <input type="text" name="q" autocomplete="off"  value="<?=htmlspecialchars($_REQUEST['q'])?>" placeholder="Я ищу..."/>
                        <button type="submit">
                            <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.9201 1.56006C6.03289 1.56006 2.08008 5.51287 2.08008 10.4001C2.08008 15.2872 6.03289 19.2401 10.9201 19.2401C12.6649 19.2401 14.2798 18.7282 15.6488 17.8588L22.0351 24.2451L24.2451 22.0351L17.9401 15.7463C19.0735 14.2594 19.7601 12.4171 19.7601 10.4001C19.7601 5.51287 15.8073 1.56006 10.9201 1.56006ZM10.9201 3.64006C14.6637 3.64006 17.6801 6.65646 17.6801 10.4001C17.6801 14.1437 14.6637 17.1601 10.9201 17.1601C7.17648 17.1601 4.16008 14.1437 4.16008 10.4001C4.16008 6.65646 7.17648 3.64006 10.9201 3.64006Z" fill="#323232"/>
                            </svg>
                        </button>
                    </form>
                </div>
                <div class="headericons">
                    <div class="headericons__items">
                        <div class="headericons__item">
                            <div class="headericons__content">
                                <a href="/calc/">
                                    <div class="headericons__icon">
                                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8.96006 2.56006C5.43281 2.56006 2.56006 5.43281 2.56006 8.96006V23.0401C2.56006 26.5673 5.43281 29.4401 8.96006 29.4401H23.0401C26.5673 29.4401 29.4401 26.5673 29.4401 23.0401V8.96006C29.4401 5.43281 26.5673 2.56006 23.0401 2.56006H8.96006ZM11.5201 6.40006H20.4801C21.8938 6.40006 23.0401 7.5463 23.0401 8.96006V23.0401C23.0401 24.4538 21.8938 25.6001 20.4801 25.6001H11.5201C10.1063 25.6001 8.96006 24.4538 8.96006 23.0401V8.96006C8.96006 7.5463 10.1063 6.40006 11.5201 6.40006ZM11.5201 8.32006C11.1668 8.32006 10.8801 8.60678 10.8801 8.96006V11.5201C10.8801 11.8733 11.1668 12.1601 11.5201 12.1601H20.4801C20.8333 12.1601 21.1201 11.8733 21.1201 11.5201V8.96006C21.1201 8.60678 20.8333 8.32006 20.4801 8.32006H11.5201ZM12.1601 13.4401C11.8206 13.4401 11.495 13.5749 11.255 13.815C11.0149 14.055 10.8801 14.3806 10.8801 14.7201C10.8801 15.0595 11.0149 15.3851 11.255 15.6252C11.495 15.8652 11.8206 16.0001 12.1601 16.0001C12.4995 16.0001 12.8251 15.8652 13.0652 15.6252C13.3052 15.3851 13.4401 15.0595 13.4401 14.7201C13.4401 14.3806 13.3052 14.055 13.0652 13.815C12.8251 13.5749 12.4995 13.4401 12.1601 13.4401ZM16.0001 13.4401C15.6606 13.4401 15.335 13.5749 15.095 13.815C14.8549 14.055 14.7201 14.3806 14.7201 14.7201C14.7201 15.0595 14.8549 15.3851 15.095 15.6252C15.335 15.8652 15.6606 16.0001 16.0001 16.0001C16.3395 16.0001 16.6651 15.8652 16.9052 15.6252C17.1452 15.3851 17.2801 15.0595 17.2801 14.7201C17.2801 14.3806 17.1452 14.055 16.9052 13.815C16.6651 13.5749 16.3395 13.4401 16.0001 13.4401ZM19.8401 13.4401C19.5006 13.4401 19.175 13.5749 18.935 13.815C18.6949 14.055 18.5601 14.3806 18.5601 14.7201C18.5601 15.0595 18.6949 15.3851 18.935 15.6252C19.175 15.8652 19.5006 16.0001 19.8401 16.0001C20.1795 16.0001 20.5051 15.8652 20.7452 15.6252C20.9852 15.3851 21.1201 15.0595 21.1201 14.7201C21.1201 14.3806 20.9852 14.055 20.7452 13.815C20.5051 13.5749 20.1795 13.4401 19.8401 13.4401ZM12.1601 17.2801C11.8206 17.2801 11.495 17.4149 11.255 17.655C11.0149 17.895 10.8801 18.2206 10.8801 18.5601C10.8801 18.8995 11.0149 19.2251 11.255 19.4652C11.495 19.7052 11.8206 19.8401 12.1601 19.8401C12.4995 19.8401 12.8251 19.7052 13.0652 19.4652C13.3052 19.2251 13.4401 18.8995 13.4401 18.5601C13.4401 18.2206 13.3052 17.895 13.0652 17.655C12.8251 17.4149 12.4995 17.2801 12.1601 17.2801ZM16.0001 17.2801C15.6606 17.2801 15.335 17.4149 15.095 17.655C14.8549 17.895 14.7201 18.2206 14.7201 18.5601C14.7201 18.8995 14.8549 19.2251 15.095 19.4652C15.335 19.7052 15.6606 19.8401 16.0001 19.8401C16.3395 19.8401 16.6651 19.7052 16.9052 19.4652C17.1452 19.2251 17.2801 18.8995 17.2801 18.5601C17.2801 18.2206 17.1452 17.895 16.9052 17.655C16.6651 17.4149 16.3395 17.2801 16.0001 17.2801ZM19.8401 17.2801C19.5006 17.2801 19.175 17.4149 18.935 17.655C18.6949 17.895 18.5601 18.2206 18.5601 18.5601C18.5601 18.8995 18.6949 19.2251 18.935 19.4652C19.175 19.7052 19.5006 19.8401 19.8401 19.8401C20.1795 19.8401 20.5051 19.7052 20.7452 19.4652C20.9852 19.2251 21.1201 18.8995 21.1201 18.5601C21.1201 18.2206 20.9852 17.895 20.7452 17.655C20.5051 17.4149 20.1795 17.2801 19.8401 17.2801ZM12.1601 21.1201C11.4529 21.1201 10.8801 21.6929 10.8801 22.4001C10.8801 23.1073 11.4529 23.6801 12.1601 23.6801H16.0001C16.7073 23.6801 17.2801 23.1073 17.2801 22.4001C17.2801 21.6929 16.7073 21.1201 16.0001 21.1201H12.1601ZM19.8401 21.1201C19.5006 21.1201 19.175 21.2549 18.935 21.495C18.6949 21.735 18.5601 22.0606 18.5601 22.4001C18.5601 22.7395 18.6949 23.0651 18.935 23.3052C19.175 23.5452 19.5006 23.6801 19.8401 23.6801C20.1795 23.6801 20.5051 23.5452 20.7452 23.3052C20.9852 23.0651 21.1201 22.7395 21.1201 22.4001C21.1201 22.0606 20.9852 21.735 20.7452 21.495C20.5051 21.2549 20.1795 21.1201 19.8401 21.1201Z" fill="#F23F34"/>
                                        </svg>
                                    </div>
                                    <div class="headericons__title">Калькулятор</div>
                                </a>
                            </div>
                        </div>
                        <div class="headericons__item">
                            <div class="headericons__content">
                                <a href="/chastnim-licam/proverka-po-ttn/">
                                    <div class="headericons__icon header_btn_ttn">
<!--                                        <a href="/chastnim-licam/proverka-po-ttn/">-->
                                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0)">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M22.055 28.5667C23.027 28.5667 23.9265 28.2816 24.6891 27.7973L28.2464 31.3547L29.4774 30.1236L25.9654 26.6206C26.5967 25.7924 26.9792 24.7662 26.9792 23.6426C26.9792 23.2796 26.94 22.9258 26.8657 22.5852C26.4486 20.6745 24.9243 19.1807 22.9971 18.8082C22.6922 18.7493 22.3773 18.7185 22.055 18.7185C21.9414 18.7185 21.8287 18.7223 21.7171 18.7298C19.1528 18.9031 17.1309 21.0339 17.1309 23.6426C17.1309 25.4172 18.0665 26.9706 19.472 27.8371C20.2226 28.2999 21.1073 28.5667 22.055 28.5667ZM18.3994 24.5526C18.3276 24.2614 18.2895 23.9566 18.2895 23.6426C18.2895 23.1203 18.3949 22.6235 18.5856 22.1721C19.1149 20.9196 20.3014 20.0169 21.7171 19.8919C21.8284 19.8821 21.9411 19.8771 22.055 19.8771C22.3805 19.8771 22.6962 19.918 22.9971 19.9951C24.6239 20.4115 25.8205 21.8828 25.8205 23.6426C25.8205 23.7241 25.818 23.8049 25.8129 23.885C25.8066 23.9853 25.7964 24.0845 25.7824 24.1825C25.5729 25.6521 24.5204 26.8436 23.1275 27.2543C23.0843 27.267 23.0409 27.2789 22.9971 27.2901C22.6962 27.3672 22.3805 27.4081 22.055 27.4081C21.9411 27.4081 21.8284 27.4031 21.7171 27.3933C20.0979 27.2504 18.7786 26.0901 18.3994 24.5526Z" fill="#F23F34"/>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M2.51709 9.91709V27.1971C2.51709 27.5521 2.80459 27.8371 3.15709 27.8371H18.27C17.1255 26.8038 16.4067 25.308 16.4067 23.6426C16.4067 20.6338 18.7525 18.1787 21.7171 18.0042V9.91709H2.51709ZM15.9571 12.4771H9.55709C9.20459 12.4771 8.91709 12.7646 8.91709 13.1171C8.91709 13.4696 9.20459 13.7571 9.55709 13.7571H15.9571C16.3121 13.7571 16.5971 13.4696 16.5971 13.1171C16.5971 12.7646 16.3121 12.4771 15.9571 12.4771Z" fill="#F23F34"/>
                                                <path d="M20.2771 3.51709L14.4571 8.63709H22.0971L27.2371 3.51709H20.2771Z" fill="#F23F34"/>
                                                <path d="M9.85709 3.51709C9.71709 3.51709 9.56959 3.57209 9.45709 3.65709L2.93709 8.63709H12.5171L18.3371 3.51709H9.85709Z" fill="#F23F34"/>
                                                <path d="M28.1171 4.45709L22.9971 9.53709V18.0723C25.0847 18.422 26.7821 19.9146 27.4254 21.8861L27.9771 21.1971C28.0671 21.0821 28.1171 20.9421 28.1171 20.7971V4.45709Z" fill="#F23F34"/>
                                            </g>
                                            <defs>
                                                <clipPath id="clip0">
                                                    <rect width="32" height="32" fill="white"/>
                                                </clipPath>
                                            </defs>
                                        </svg>
<!--                                        </a>-->
                                    </div>
                                    <div class="headericons__title">Отследить</div>
                                </a>
                            </div>
                        </div>
                        <div class="headericons__item headericons__item_login">
                            <div class="headericons__content">
                                <a href="https://zhdalians.ru/auth-page/" target="_blank" >
                                    <div class="headericons__icon">
                                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M15.7195 0.824707C7.59746 0.824707 0.999512 7.42266 0.999512 15.5447C0.999512 23.2916 7.00355 29.6474 14.6058 30.2185C14.6207 30.2197 14.6357 30.221 14.6508 30.2222C15.0043 30.2477 15.3596 30.2647 15.7195 30.2647C16.0794 30.2647 16.4348 30.2477 16.7883 30.2222C16.8033 30.221 16.8183 30.2197 16.8333 30.2185C24.4355 29.6474 30.4395 23.2916 30.4395 15.5447C30.4395 7.42266 23.8416 0.824707 15.7195 0.824707ZM15.7195 2.10471C23.1498 2.10471 29.1595 8.11442 29.1595 15.5447C29.1595 19.213 27.6906 22.5311 25.3133 24.9547C24.2962 24.2141 23.0393 23.7723 21.9133 23.3772C20.5795 22.91 19.3177 22.4671 18.9683 21.6972C18.9132 21.0399 18.9181 20.5266 18.9233 19.9372L18.9245 19.6872C19.4928 19.1464 20.2075 18.005 20.452 16.951C20.8744 16.7257 21.3909 16.1856 21.5458 14.8922C21.6232 14.2503 21.4405 13.7531 21.1845 13.4197C21.5301 12.2325 22.2177 9.22705 21.0133 7.28721C20.5038 6.46737 19.7351 5.95012 18.7245 5.74596C18.1568 5.04324 17.0856 4.65971 15.6533 4.65971C13.4766 4.70003 11.8809 5.36672 10.9133 6.64096C9.77214 8.14496 9.55652 10.4173 10.2708 13.3985C10.0064 13.7319 9.81579 14.2362 9.89451 14.891C10.05 16.1844 10.5646 16.7244 10.987 16.9497C11.2315 18.0051 11.9456 19.1464 12.5145 19.6872L12.5158 19.931C12.5209 20.523 12.5258 21.0374 12.4708 21.6972C12.12 22.469 10.8522 22.9167 9.51201 23.3897C8.39272 23.7849 7.14328 24.2274 6.12826 24.9585C3.74909 22.5346 2.27951 19.2146 2.27951 15.5447C2.27951 8.11442 8.28922 2.10471 15.7195 2.10471Z" fill="#F23F34"/>
                                        </svg>
                                    </div>
                                    <div class="headericons__title">Войти</div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<?php siteHelper::showPageWrapper(WRAPPER, 'before.content'); ?>
