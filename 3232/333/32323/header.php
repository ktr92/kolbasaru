<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die(); $page = $APPLICATION->GetCurPage(false);
$isPrint = ($_GET['print'] == 'Y');
CJSCore::Init(array("fx"));

use Lema\Seo\OpenGraph;
?><!DOCTYPE html>
<html lang="ru">
<head >

    <?
		$og = new OpenGraph();
		$og->show();
    ?>

    <meta name="author" content="Интернет-агентство «Артус», «1C.Bitrix»" >
    <?$APPLICATION->ShowHead();?>
    <?if($isPrint):?>
    <meta name="robots" content="noindex">
    <meta name="robots" content="nofollow">
    <meta name="robots" content="noarchive">
    <meta name="robots" content="noyaca">
    <?endif;?>
    <!--[if IE]><meta http-equiv="imagetoolbar" content="no">-->
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge" >-->
  	<meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE" >
	  	<meta name="viewport" content="width=device-width, initial-scale=1">

  	<link type="image/x-icon" href="<?=STATIC_PATH?>/_i/_icons/favicon.ico" rel="shortcut icon" >
  	<link type="image/x-icon" href="<?=STATIC_PATH?>/_i/_icons/favicon.ico" rel="icon" >
  	<link rel="apple-touch-icon" href="_i/icons/logo-16.png">
    <link rel="apple-touch-icon" sizes="32x32" href="<?=STATIC_PATH?>/_i/_icons/logo-32.png">
  	<link rel="apple-touch-icon" sizes="72x72" href="<?=STATIC_PATH?>/_i/_icons/logo-72.png">
  	<link rel="apple-touch-icon" sizes="120x120" href="<?=STATIC_PATH?>/_i/_icons/logo-120.png">
  	<link rel="apple-touch-icon" sizes="150x150" href="<?=STATIC_PATH?>/_i/_icons/logo-150.png">

     <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

    <?
    CJSCore::Init(array("jquery"));
    $APPLICATION->SetAdditionalCSS(STATIC_PATH."/_css/fmmr.css?1");
    $APPLICATION->SetAdditionalCSS(STATIC_PATH."/_css/responsive.css");
    $APPLICATION->SetAdditionalCSS(STATIC_PATH."/_css/font-awesome.min.css");
    $APPLICATION->SetAdditionalCSS(STATIC_PATH."/_js/arcticmodal/simple.css");
    $APPLICATION->SetAdditionalCSS(STATIC_PATH."/_css/custom.css");
    ?>

   <script>
        var widgetId1, widgetId2, myGeoObjects = [], mySearchObjects= [], YAclusterer, whereMap;

        var   allowColorsRed = ['red'],
          allowColorsGreen = ['green'],
          getPointOptions = function () {
              return {
                  preset : 'islands#' + allowColorsRed + 'Icon',
                  iconLayout: 'default#image',
                  iconImageHref: '/_v/_i/_icons/marker_icon1.png',
                  iconImageSize: [20, 20],
                  iconImageOffset: [0, 0]
              };
          },
          getPointOptionsNew = function () {
              return {
                  preset: 'islands#' + allowColorsGreen + 'Icon',
                  iconLayout: 'default#image',
                  iconImageHref: '/_v/_i/_icons/marker_icon2.png',
                  iconImageSize: [20, 20],
                  iconImageOffset: [0, 0]
              };
          };

        var onloadCallback = function() {
            if($('#capthca').length){
              widgetId1 = grecaptcha.render('capthca', {
                'sitekey' : '<?=COption::GetOptionString("grain.customsettings","SITEKEY") ?>'
              });
            }
            if($('#capthca2').length){
                widgetId2 = grecaptcha.render('capthca2', {
                  'sitekey' : '<?=COption::GetOptionString("grain.customsettings","SITEKEY") ?>'
                });
            }

        };
    </script>
    <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit&hl=ru" async defer></script>
	<!--<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.js"></script>-->
	<script src="https://yandex.st/jquery/1.9.1/jquery.min.js"></script>
	<script <?if($APPLICATION->GetCurPage() == '/'){?>defer async<?}?> src="https://api-maps.yandex.ru/2.1/?load=package.full&lang=ru-RU" type="text/javascript"></script>
  	<script src="<?=CUtil::GetAdditionalFileURL(SITE_TEMPLATE_PATH.'/_js/map.js');?>"></script>
  	<script src="<?=CUtil::GetAdditionalFileURL(STATIC_PATH.'/_js/jquery.cookie.js');?>"></script>
  	<script src="<?=CUtil::GetAdditionalFileURL(SITE_TEMPLATE_PATH.'/_js/custom.js');?>"></script>
    <?$APPLICATION->ShowProperty('metasocial');?>
    <title><?$APPLICATION->ShowTitle();?></title>
<meta name="yandex-verification" content="089658ed851dd132" >
</head>
<body>
<?$APPLICATION->ShowPanel();?>



<!-- BEGIN old browser panel -->
<div class="all_old_browser"></div>
<div id="old_browser_notification" class="old-browser" >
    <div class="container ta-center">
        <div class="text">

              <p class="title">В этом браузере сайт может отображаться некорректно. Рекомендуем Вам установить более современный браузер.</p>
              <a href="https://www.google.by/intl/ru/chrome/browser/" rel="nofollow" target="_blank" title="Chrome">
                  <i class="ico ico-chrome">
                  <!-- --></i>
                  <span>Chrome</span>
              </a>

              <a href="https://www.apple.com/safari/" rel="nofollow" target="_blank" title="Safari">
                    <i class="ico ico-safari">
                    <!-- -->
                    </i>
                    <span>Safari</span>
              </a>
              <a href="https://www.mozilla.org/ru/firefox/new/" rel="nofollow" target="_blank" title="Firefox">
                    <i class="ico ico-firefox">
                    <!-- -->
                    </i>
                    <span>Firefox</span>
              </a>
              <a href="https://www.opera.com/ru" rel="nofollow" target="_blank" title="Opera">
                    <i class="ico ico-opera">
                    <!-- -->
                    </i>
                    <span>Opera</span>
              </a>
              <a href="https://windows.microsoft.com/ru-ru/internet-explorer/download-ie" rel="nofollow" target="_blank" title="IE">
                  <i class="ico ico-ie">
                  <!-- -->
                  </i>
                  <span>Explorer</span>
              </a>
        </div>
    <a href="#" class="old_browser_notification_Close"></a>
    </div>
</div>

<!-- END old browser panel -->


<!--BEGIN MAIN PAGE WRAPPER-->
<div class="page<?if($isPrint):?> print<?endif;?>" id="top">
	<div class="page_wrapper <?if ($APPLICATION->GetCurDir()!='/'):?>page-next<?else:?>page-index<?endif;?>">
        <header>
            <div class="container">
                <div class="top">
                    <div class="top-left">

                        <div class="logo">
<!--                          --><?//if($page == SITE_DIR):?>
<!--                              <img src="--><?//=STATIC_PATH?><!--/_i/logo_75.png" alt="">-->
<!--                          --><?//else:?>
                              <a href="<?=SITE_DIR?>" title="На главную страницу"><img src="<?=STATIC_PATH?>/_i/logo_75.png" title="Сеть фирменных магазинов мясной гастрономии «Мясницкий ряд»" alt="Сеть фирменных магазинов мясной гастрономии «Мясницкий ряд»"></a>
<!--                          --><?//endif;?>
                        </div>
                        <div class="slogan">
                            <span><?=COption::GetOptionString("grain.customsettings","TMPL_1")?></span>
                            <img src="<?=STATIC_PATH?>/_i/_icons/slogan_icon.png" alt="">
                        </div>
                    </div>
                    <?if($phone = COption::GetOptionString("grain.customsettings","TMPL_2")):?>
                    <div class="tel">
                        <a href="tel:+<?=onlyNumber($phone);?>"><?=$phone?></a>
                    </div>
                    <?endif;?>
                   <a href="#" class="mobile_menu_btn js_mobile_menu"></a>
                </div>
                <div class="bottom">
                  <?
                  $APPLICATION->IncludeComponent(
                      "bitrix:menu",
                      "top",
                      Array(
                          "ALLOW_MULTI_SELECT" => "N",
                          "CHILD_MENU_TYPE" => "left",
                          "COMPONENT_TEMPLATE" => "top",
                          "DELAY" => "N",
                          "MAX_LEVEL" => "1",
                          "MENU_CACHE_GET_VARS" => array(""),
                          "MENU_CACHE_TIME" => "3600",
                          "MENU_CACHE_TYPE" => "N",
                          "MENU_CACHE_USE_GROUPS" => "N",
                          "ROOT_MENU_TYPE" => "top",
                          "USE_EXT" => "Y",
                      )
                  );
                  ?>
                    <div class="write">
                        <a href="/kontakty/" class="write_us btn">Написать нам</a>
                    </div>
                    <div class="search_menu">
                        <form action="/search/" class="form_search">
                            <input type="text" name="r" placeholder="">
                            <button class="btn_search"></button>
                        </form>
                    </div>
                </div>
            </div>
        </header>
		<?if($APPLICATION->GetCurDir()=="/franchayzing/"){?>
<div class="franchayzing_baner">
	<a href="#" class="order btn border" data-popup="order_form_questionnaire" >Заявка на франшизу</a>
    <img  src="e69df2e3-7062-4196-8cfc-4ba36c670a19.png" alt="Заявка на франшизу">
    </div>
<style>
	.franchayzing_baner{
	width: 1280px;
    height: 600px;
    margin-top: -89px;
    margin-bottom: 120px;
    position: relative;
    margin-left: auto;
    margin-right: auto;
}
	.franchayzing_baner .order.btn.border{
position: absolute;bottom: 110px;left: 192px;

}
	.franchayzing_baner img{
webkit-user-select: none;margin: auto;background-color: hsl(0, 0%, 90%);transition: background-color 300ms;
}
	@media (max-width:600px)
		{
				.franchayzing_baner {
				width: 100%;
				height: auto;
				margin-bottom: 15px;
			}
					.franchayzing_baner img{
			 width: 100%;
			}
			.franchayzing_baner .order.btn.border {
				position: absolute;
				bottom: 50px;
				left: 18px;
				padding: 0px;
				height: 30px;
				width: 170px;
				line-height: 28px;
			}
}
</style>
		<?}?>
        <?if($page != SITE_DIR):?>
        <div class="container <?$APPLICATION->ShowProperty("container_class");?>">
            <h1 class="title"><?$APPLICATION->ShowTitle(false);?></h1>
			<?$APPLICATION->IncludeComponent("bitrix:breadcrumb", "", Array(
						"SITE_ID" => "s1",	// Cайт (устанавливается в случае многосайтовой версии, когда DOCUMENT_ROOT у сайтов разный)
						"START_FROM" => "0",	// Номер пункта, начиная с которого будет построена навигационная цепочка
					),
						false
					);?>
            <?$APPLICATION->ShowProperty("container_html");?>
            <?$APPLICATION->ShowProperty("hide_container_html");?>

        <?endif;?>