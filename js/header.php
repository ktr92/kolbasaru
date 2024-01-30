<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die(); $page = $APPLICATION->GetCurPage(false);
$isPrint = ($_GET['print'] == 'Y');
CJSCore::Init(array("fx"));
use Lema\Seo\OpenGraph;
?>
<!DOCTYPE html>
<html>
<head lang="ru">
    <?
    $og = new OpenGraph();
    $og->show();
    ?>
    <meta name="author" content="Интернет-агентство «Артус», «1C.Bitrix»" />
    <meta name="yandex-verification" content="f6321cf4438fda4f" />
    <?$APPLICATION->ShowHead();?>
    <?if($isPrint):?>
    <meta name="robots" content="noindex"/>
    <meta name="robots" content="nofollow"/>
    <meta name="robots" content="noarchive"/>
    <meta name="robots" content="noyaca"/>
    <?endif;?>

    <link href="<?=STATIC_PATH?>/_i/favicon.ico" rel="icon" type="image/x-icon" />
    <link type="image/x-icon" href="<?=STATIC_PATH?>/_i/favicon.ico" rel="icon" />
    <link rel="apple-touch-icon" href="<?=STATIC_PATH?>/_i/touch-icon-iphone.png"/>
    <link rel="apple-touch-icon" sizes="72x72" href="<?=STATIC_PATH?>/_i/touch-icon-ipad.png"/>
    <link rel="apple-touch-icon" sizes="114x114" href="<?=STATIC_PATH?>/_i/touch-icon-iphone4.png"/>
    <link rel="apple-touch-icon" sizes="120x120" href="<?=STATIC_PATH?>/_i/touch-icon-iphone-retina.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?=STATIC_PATH?>/_i/touch-icon-ipad-retina.png">

    <title><?$APPLICATION->ShowTitle();?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">

    <link href="<?=CUtil::GetAdditionalFileURL(STATIC_PATH.'/_css/selectric.css');?>" rel="stylesheet">
    <link href="<?=CUtil::GetAdditionalFileURL(STATIC_PATH.'/_css/selectize.default.css');?>" rel="stylesheet">
    <link href="<?=CUtil::GetAdditionalFileURL(STATIC_PATH.'/_css/jquery.mCustomScrollbar.min.css');?>" rel="stylesheet">
    <link href="<?=CUtil::GetAdditionalFileURL(STATIC_PATH.'/_css/slick.css');?>" rel="stylesheet" />
    <link href="<?=CUtil::GetAdditionalFileURL(STATIC_PATH.'/_css/jquery-ui.min.css');?>" rel="stylesheet">
    <link href="<?=CUtil::GetAdditionalFileURL(STATIC_PATH.'/_css/jquery.fancybox.min.css');?>" rel="stylesheet">
    <link href="<?=CUtil::GetAdditionalFileURL(STATIC_PATH.'/_css/mr.css');?>" rel="stylesheet">
    <link href="<?=CUtil::GetAdditionalFileURL(STATIC_PATH.'/_css/adaptive.css');?>" rel="stylesheet">
	<link href="<?=CUtil::GetAdditionalFileURL(STATIC_PATH.'/_js/arcticmodal/simple.css');?>" rel="stylesheet">
    <link href="<?=CUtil::GetAdditionalFileURL(STATIC_PATH.'/_css/custom.css');?>" rel="stylesheet">
    <link href="<?=CUtil::GetAdditionalFileURL(STATIC_PATH.'/_css/restyle.css');?>" rel="stylesheet">

    <script src="<?=CUtil::GetAdditionalFileURL(STATIC_PATH.'/_js/jquery-3.1.1.min.js');?>"></script>
    <script src="<?=CUtil::GetAdditionalFileURL(STATIC_PATH.'/_js/jquery.selectric.min.js');?>"></script>
    <script src="<?=CUtil::GetAdditionalFileURL(STATIC_PATH.'/_js/selectize.js');?>"></script>
    <script src="<?=CUtil::GetAdditionalFileURL(STATIC_PATH.'/_js/jquery.mousewheel-3.0.6.min.js');?>"></script>
    <script src="<?=CUtil::GetAdditionalFileURL(STATIC_PATH.'/_js/jquery.mCustomScrollbar.min.js');?>"></script>
    <script src="<?=CUtil::GetAdditionalFileURL(STATIC_PATH.'/_js/jquery.scrollbar.js');?>"></script>
    <script src="<?=CUtil::GetAdditionalFileURL(STATIC_PATH.'/_js/jquery.scrollbar.min.js');?>"></script>
    <script src="<?=CUtil::GetAdditionalFileURL(STATIC_PATH.'/_js/slick.min.js');?>"></script>
    <script src="<?=CUtil::GetAdditionalFileURL(STATIC_PATH.'/_js/jquery.validate.js');?>"></script>



   <? /* <script src="<?=CUtil::GetAdditionalFileURL(STATIC_PATH.'/_js/markerwithlabel.js');?>"></script> */ ?>
    <script src="<?=CUtil::GetAdditionalFileURL(STATIC_PATH.'/_js/jquery-ui.min.js');?>"></script>
    <script src="<?=CUtil::GetAdditionalFileURL(STATIC_PATH.'/_js/jquery.maskedinput.min.js');?>"></script>
    <script src="<?=CUtil::GetAdditionalFileURL(STATIC_PATH.'/_js/jquery.fancybox.min.js');?>"></script>
    <script src="<?=CUtil::GetAdditionalFileURL(STATIC_PATH.'/_js/circle-progress.min.js');?>"></script>
    <script src="<?=CUtil::GetAdditionalFileURL(STATIC_PATH.'/_js/svg4everybody.min.js');?>"></script>
	<script src="<?=CUtil::GetAdditionalFileURL(STATIC_PATH.'/_js/jquery.cookie.js');?>"></script>
    <script src="<?=CUtil::GetAdditionalFileURL(SITE_TEMPLATE_PATH.'/_js/yandex_maps.js');?>"></script>
    <script src="/local/templates/main/_js/mr.js?v=432"></script>
    <script src="<?=CUtil::GetAdditionalFileURL(SITE_TEMPLATE_PATH.'/_js/main.js');?>"></script>

    <script src="<?=CUtil::GetAdditionalFileURL(SITE_TEMPLATE_PATH.'/_js/restyle.js');?>"></script>
	<script src="https://www.google.com/recaptcha/api.js?render=<?=COption::GetOptionString("grain.customsettings","SITEKEY") ?>"></script>
    <script src="<?=CUtil::GetAdditionalFileURL(SITE_TEMPLATE_PATH.'/_js/custom.js');?>"></script>
    <script>
	    var siteKey = '<?=COption::GetOptionString("grain.customsettings","SITEKEY") ?>';
    </script>

	<? if (!empty($_REQUEST['PAGEN_1']) || !empty($_REQUEST['PAGEN_2']) || !empty($_REQUEST['PAGEN_3']) ):?>
		<link rel="canonical" href="https://kolbasa.ru<?=$APPLICATION->GetCurDir()?>">
	<? endif; ?>

    <?$APPLICATION->ShowProperty('metasocial');?>
    <script>
      var sliderTime = <?=(COption::GetOptionString("grain.customsettings","TMPL_SLIDER"))?COption::GetOptionString("grain.customsettings","TMPL_SLIDER"):'2000'?>;
    </script>
</head>
<body>
<?$APPLICATION->ShowPanel();?>
<!--BEGIN wrapper -->
<div class="wrapper<?if($isPrint):?> print<?endif;?> <?if ($APPLICATION->GetCurPage()=='/khayp.php'):?>khayp<?endif;?>">
    <div class="holder">
               <!-- BEGIN header-->
        <header class="header">
            <div class="header-top">
                <?if($page == SITE_DIR):?>
                    <span class="logo"><img src="<?=STATIC_PATH?>/_i/logo.png" alt="Мясоперерабатывающий завод «Мясницкий ряд»" title="Мясоперерабатывающий завод «Мясницкий ряд»"></span>
                <?else:?>
                    <a class="logo" href="<?=SITE_DIR?>" title="На главную страницу"><img src="<?=STATIC_PATH?>/_i/logo.png" alt="Мясоперерабатывающий завод «Мясницкий ряд»" title="Мясоперерабатывающий завод «Мясницкий ряд»"></a>
                <?endif;?>

                <ul class="social ta-center mobile">
                     <noindex>
                    <?if($link = COption::GetOptionString("grain.customsettings","TMPL_2")):?>
                    <li><a href="<?=$link?>" rel="nofollow" target="_blank"><i class="icon icon-vk"><svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="<?=STATIC_PATH?>/_i/icons.svg#icon-52"></use></svg></i></a></li>
                    <?endif;?>
                    <?if($link = COption::GetOptionString("grain.customsettings","TMPL_3")):?>
                    <li><a href="<?=$link?>" rel="nofollow" target="_blank"><i class="icon icon-in"></i></a></li>
                    <?endif;?>
                    <?if($link = COption::GetOptionString("grain.customsettings","TMPL_4")):?>
                    <li><a href="<?=$link?>" rel="nofollow" target="_blank"><i class="icon icon-ok"><svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="<?=STATIC_PATH?>/_i/icons.svg#icon-54"></use></svg></i></a></li>
                    <?endif;?>
                    <?if($link = COption::GetOptionString("grain.customsettings","TMPL_5")):?>
                    <li><a href="<?=$link?>" rel="nofollow" target="_blank"><i class="icon icon-fb"><svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="<?=STATIC_PATH?>/_i/icons.svg#icon-51"></use></svg></i></a></li>
                    <?endif;?>
                    </noindex>
                </ul>
                <a class="shops" href="/where/"><i class="icon icon-marker-wh"><svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="<?=STATIC_PATH?>/_i/icons.svg#icon-11"></use></svg></i>Где купить?</a>
                <span class="burger"><i><!-- --></i></span>
            </div>

            <div class="toggle-header">
                <?
                $APPLICATION->IncludeComponent(
                    "bitrix:menu",
                    "top",
                    Array(
                        "ALLOW_MULTI_SELECT" => "N",
                        "CHILD_MENU_TYPE" => "left",
                        "COMPONENT_TEMPLATE" => "top",
                        "DELAY" => "N",
                        "MAX_LEVEL" => "2",
                        "MENU_CACHE_GET_VARS" => array(""),
                        "MENU_CACHE_TIME" => "3600",
                        "MENU_CACHE_TYPE" => "N",
                        "MENU_CACHE_USE_GROUPS" => "N",
                        "ROOT_MENU_TYPE" => "top",
                        "USE_EXT" => "Y",
                    )
                );
                ?>
<?
global $USER;
if (1==1):
?>
            <div class="phone-num mob phone_black">
            <i class="icon icon-phone">
              <svg>
                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/_v/kolbasa/_i/icons.svg#icon-26"></use>
              </svg>
            </i>
            Телефон отдела подбора<br>
            <a href="tel:+79685344925">+7 (968) 534 49 25</a>
          </div>
          <a
		          data-fancybox="" data-src="#form-job-all" href="javascript:;"
		          class="btn_image">
            <img src="/_v/kolbasa/img/btn_job.png" alt="">
            <span>ХОЧУ РАБОТАТЬ</span>
          </a><!-- /.btn_image -->
 <? endif; ?>
                <?if($phone = COption::GetOptionString("grain.customsettings","TMPL_1")):
                $arPhone = explode(')', $phone);?>
                <div class="phone-num mob">
                    <i class="icon icon-phone"><svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="<?=STATIC_PATH?>/_i/icons.svg#icon-26"></use></svg></i>Телефон горячей линии <br />
                    <a href="tel:+<?=onlyNumber($phone);?>"><span><?=$arPhone[0]?>)</span><?=$arPhone[1]?></a>
                </div>
                <?endif;?>

                <a class="write-us mob popup-show form-popup" data-fancybox data-src="#form-popup" href="javascript:;"><i class="icon icon-letter"><svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="<?=STATIC_PATH?>/_i/icons.svg#icon-35"></use></svg></i>Написать нам</a>

                <ul class="social ta-center mob">
                    <noindex>
                    <?if($link = COption::GetOptionString("grain.customsettings","TMPL_2")):?>
                    <li><a href="<?=$link?>" rel="nofollow" target="_blank"><i class="icon icon-vk"><svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="<?=STATIC_PATH?>/_i/icons.svg#icon-52"></use></svg></i></a></li>
                    <?endif;?>
                    <?if($link = COption::GetOptionString("grain.customsettings","TMPL_3")):?>
                    <li><a href="<?=$link?>" rel="nofollow" target="_blank"><i class="icon icon-in"></i></a></li>
                    <?endif;?>
                    <?if($link = COption::GetOptionString("grain.customsettings","TMPL_4")):?>
                    <li><a href="<?=$link?>" rel="nofollow" target="_blank"><i class="icon icon-ok"><svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="<?=STATIC_PATH?>/_i/icons.svg#icon-54"></use></svg></i></a></li>
                    <?endif;?>
                    <?if($link = COption::GetOptionString("grain.customsettings","TMPL_5")):?>
                    <li><a href="<?=$link?>" rel="nofollow" target="_blank"><i class="icon icon-fb"><svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="<?=STATIC_PATH?>/_i/icons.svg#icon-51"></use></svg></i></a></li>
                    <?endif;?>
                    </noindex>
                </ul>
                <?
                $APPLICATION->IncludeComponent(
                    "bitrix:menu",
                    "top_2",
                    Array(
                        "ALLOW_MULTI_SELECT" => "N",
                        "CHILD_MENU_TYPE" => "top_2",
                        "COMPONENT_TEMPLATE" => "top_2",
                        "DELAY" => "N",
                        "MAX_LEVEL" => "1",
                        "MENU_CACHE_GET_VARS" => array(""),
                        "MENU_CACHE_TIME" => "3600",
                        "MENU_CACHE_TYPE" => "N",
                        "MENU_CACHE_USE_GROUPS" => "N",
                        "ROOT_MENU_TYPE" => "top_2",
                        "USE_EXT" => "Y",
                    )
                );
                ?>
                <form class="form-search" action="/search/">
                    <input type="text" placeholder="Введите поисковой запрос" name="q">
                    <button class="btn-search"><i class="icon icon-search"><svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="<?=STATIC_PATH?>/_i/icons.svg#icon-43"></use></svg></i></button>
                </form>
            </div>

        </header>
        <!-- END header-->
        <?if($isPrint):?>
        <header class="print">
            <div class="content">

                <div class="logo">
                    <a href="javascript:void(0);"><img src="<?=STATIC_PATH?>/_i/logo.png" alt=""></a>
                </div>
                <div class="contacts_tel">
                    <h2>ТЕЛЕФОН ГОРЯЧЕЙ ЛИНИИ </h2>
                    <?if($arPhone):?><h3> <a href="tel:+<?=onlyNumber($phone);?>"><?=$phone?> </a> </h3><?endif;?>

                    <a class="site" href="kolbasa.ru">kolbasa.ru</a>
                </div>
            </div>
        </header>
        <?endif;?>
        <!--BEGIN content -->
        <?if(!CSite::InDir('/career/')):?>
        <div class="content<?=$APPLICATION->ShowProperty('content_class');?>">
            <div class="container">
                <?if(CSite::InDir('/gotovim_vmeste/recepty/')):?>
                    <div class="text-holder">
                        <h1><span><?=$APPLICATION->ShowTitle(false)?></span></h1>
                    </div>
                <?else:?>
                    <?$APPLICATION->ShowProperty('text-holder-html');?>
                <?endif;?>
                <? if(in_array($APPLICATION->GetCurPage(), array('/proizvodstvo/','/polezno_znat/'))):?>
                    <?$APPLICATION->IncludeComponent("bitrix:breadcrumb", "kolbasa", Array(
                        "COMPOSITE_FRAME_MODE" => "A",	// Голосование шаблона компонента по умолчанию
                        "COMPOSITE_FRAME_TYPE" => "AUTO",	// Содержимое компонента
                        "PATH" => "",	// Путь, для которого будет построена навигационная цепочка (по умолчанию, текущий путь)
                        "SITE_ID" => "s2",	// Cайт (устанавливается в случае многосайтовой версии, когда DOCUMENT_ROOT у сайтов разный)
                        "START_FROM" => "0",	// Номер пункта, начиная с которого будет построена навигационная цепочка
                    ),
                        false
                    );?>
                <? endif;?>
                <?
                    global $arFilterDir;
                    $arFilterDir['SECTION_CODE'] = trim($APPLICATION->GetCurDir(), '/');
                    $APPLICATION->IncludeComponent(
                      "bitrix:news.list",
                      "dir",
                      Array(
                          "ACTIVE_DATE_FORMAT" => "d.m.Y",
                          "ADD_SECTIONS_CHAIN" => "Y",
                          "AJAX_MODE" => "N",
                          "AJAX_OPTION_ADDITIONAL" => "",
                          "AJAX_OPTION_HISTORY" => "N",
                          "AJAX_OPTION_JUMP" => "N",
                          "AJAX_OPTION_STYLE" => "Y",
                          "CACHE_FILTER" => "N",
                          "CACHE_GROUPS" => "N",
                          "CACHE_TIME" => "36000000",
                          "CACHE_TYPE" => "A",
                          "CHECK_DATES" => "Y",
                          "COMPONENT_TEMPLATE" => ".default",
                          "DETAIL_URL" => "",
                          "DISPLAY_BOTTOM_PAGER" => "N",
                          "DISPLAY_DATE" => "N",
                          "DISPLAY_NAME" => "N",
                          "DISPLAY_PICTURE" => "N",
                          "DISPLAY_PREVIEW_TEXT" => "N",
                          "DISPLAY_TOP_PAGER" => "N",
                          "FIELD_CODE" => array("", ""),
                          "FILTER_NAME" => "arFilterDir",
                          "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                          "IBLOCK_ID" => 3,
                          "IBLOCK_TYPE" => 'content',
                          "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                          "INCLUDE_SUBSECTIONS" => "N",
                          "MESSAGE_404" => "",
                          "NEWS_COUNT" => "99",
                          "PAGER_BASE_LINK_ENABLE" => "N",
                          "PAGER_DESC_NUMBERING" => "N",
                          "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                          "PAGER_SHOW_ALL" => "N",
                          "PAGER_SHOW_ALWAYS" => "N",
                          "PAGER_TEMPLATE" => ".default",
                          "PAGER_TITLE" => "Новости",
                          "PARENT_SECTION" => "",
                          "PARENT_SECTION_CODE" => "",
                          "PREVIEW_TRUNCATE_LEN" => "",
                          "PROPERTY_CODE" => array("LINK", ""),
                          "SET_BROWSER_TITLE" => "N",
                          "SET_LAST_MODIFIED" => "N",
                          "SET_META_DESCRIPTION" => "N",
                          "SET_META_KEYWORDS" => "N",
                          "SET_STATUS_404" => "N",
                          "SET_TITLE" => "N",
                          "SHOW_404" => "N",
                          "SORT_BY1" => "SORT",
                          "SORT_BY2" => "SORT",
                          "SORT_ORDER1" => "ASC",
                          "SORT_ORDER2" => "ASC"
                      ),
                      false,
                      array("HIDE_ICONS"=>"Y")
                  );
                  ?>
                <? if(!in_array($APPLICATION->GetCurPage(), array('/','/proizvodstvo/','/polezno_znat/'))  /*&& isset($_GET['test'])*/):?>
                    <?$APPLICATION->IncludeComponent(
	"bitrix:breadcrumb",
	"kolbasa",
	array(
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO",
		"PATH" => "",
		"SITE_ID" => "s1",
		"START_FROM" => "0",
		"COMPONENT_TEMPLATE" => "kolbasa"
	),
	false
);?>
                <? endif;?>
                  <?
                    $APPLICATION->IncludeComponent(
                        "bitrix:menu",
                        "where",
                        Array(
                            "ALLOW_MULTI_SELECT" => "N",
                            "CHILD_MENU_TYPE" => "where",
                            "COMPONENT_TEMPLATE" => "where",
                            "DELAY" => "N",
                            "MAX_LEVEL" => "1",
                            "MENU_CACHE_GET_VARS" => array(""),
                            "MENU_CACHE_TIME" => "3600",
                            "MENU_CACHE_TYPE" => "N",
                            "MENU_CACHE_USE_GROUPS" => "N",
                            "ROOT_MENU_TYPE" => "where",
                            "USE_EXT" => "Y",
                        ),
                        false,
                        array("HIDE_ICONS"=>"Y")
                    );
                    ?>

<? endif; ?>
