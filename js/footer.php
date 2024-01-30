<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();
$page = $APPLICATION->GetCurPage(false);
$isPrint = ($_GET['print'] == 'Y');

use Lema\Seo\OpenGraph,
    Lema\Common\Request;

$og = new OpenGraph();
$og->setItems(array(
    'locale' => strtolower(LANGUAGE_ID) . '_' . strtoupper(LANGUAGE_ID),
    'type' => 'website',
    'title' => $APPLICATION->GetPageProperty('title'),
    'title2' => $APPLICATION->GetTitle(false),
    'description' => $APPLICATION->GetPageProperty('description'),
    'url' => Request::get()->getRequestedPageDirectory() . '/',
    'image' => $og->getImage('/_v/kolbasa/_i/logo.png'),
    'site_name' => 'Мясоперерабатывающий завод «Мясницкий ряд»'
))->setViewContent();
?>


<?
global $arFilterIcons;
$arFilterIcons['PROPERTY_URL'] = $APPLICATION->GetCurDir();
$APPLICATION->IncludeComponent(
    "bitrix:news.list",
    "icons",
    array(
        "ACTIVE_DATE_FORMAT" => "d.m.Y",
        "ADD_SECTIONS_CHAIN" => "N",
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
        "FILTER_NAME" => "arFilterIcons",
        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
        "IBLOCK_ID" => 17,
        "IBLOCK_TYPE" => 'content',
        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
        "INCLUDE_SUBSECTIONS" => "N",
        "MESSAGE_404" => "",
        "NEWS_COUNT" => "1",
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
    array("HIDE_ICONS" => "Y")
);


if ($GLOBALS['SVG_ICON']):
    $h1 = '<div class="h1 icon-top">
                   <div class="img">
                      <img src="' . $GLOBALS['SVG_ICON'] . '" alt="">
                   </div>
					<h1><span>' . $APPLICATION->GetTitle(false) . '</span></h1>
              		</div>';

    $APPLICATION->SetPageProperty('text-holder-html', $html);
elseif ($svg = $APPLICATION->GetProperty('ico-svg')):
    $h1 = '<div class="h1 icon-top"><i class="icon ' . $APPLICATION->GetProperty('ico-class') . '"><svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="' . STATIC_PATH . '/_i/icons.svg#' . $svg . '"></use></svg></i><h1><span>' . $APPLICATION->GetTitle(false) . '</span></h1></div>';
    $APPLICATION->SetPageProperty('text-holder-html', $html);

elseif (!$APPLICATION->GetProperty('hide-h1')):
    $h1 .= '<h1><span>' . $APPLICATION->GetTitle(false) . '</span></h1>';
endif;


if (!$APPLICATION->GetProperty('hide-text-holder')):
    $html = '<div class="text-holder">';
    $html .= $h1;
    $APPLICATION->SetPageProperty('text-holder-html', $html) ?>
	</div>
<?
elseif ($h1):
    $APPLICATION->SetPageProperty('text-holder-html', $h1);
    ?>
<?
endif;
?>


<?
$APPLICATION->IncludeFile($APPLICATION->GetCurDir() . "sect_inc.php", array(), array(
    "MODE" => "html",
    "NAME" => "Редактирование включаемой области раздела",
    "TEMPLATE" => "section_include_template.php"
));
?>
<?
$APPLICATION->IncludeFile($APPLICATION->GetCurDir() . "sect_dev_inc.php", array(), array(
    "SHOW_BORDER" => false
));
?>

<? $APPLICATION->IncludeComponent(
    "bitrix:main.include",
    "",
    array(
        "AREA_FILE_SHOW" => "sect",
        "AREA_FILE_SUFFIX" => "dev_dir_inc",
        "EDIT_TEMPLATE" => ""
    ),
    false,
    array("SHOW_BORDER" => false)
); ?>

<?
if ($APPLICATION->GetProperty('full-width-content')):
    ?>
	<div class="full-width">
        <?= $APPLICATION->GetProperty('full-width-content'); ?>
	</div>
<?
endif;
?>


<? if (!CSite::InDir('/career/')): ?>
	</div>
	</div>
	<!--END content -->
<? endif; ?>

</div>
</div>
<!-- END wrapper -->

<!-- BEGIN footer -->
<footer class="footer<? if ($isPrint): ?> print<? endif; ?>">
	<div class="holder">
		<div class="content contacts">

            <? if ($phone = COption::GetOptionString("grain.customsettings", "TMPL_1")):
                $arPhone = explode(')', $phone); ?>
				<div class="phone-num mob">
					<i class="icon icon-phone">
						<svg>
							<use xmlns:xlink="http://www.w3.org/1999/xlink"
							     xlink:href="<?= STATIC_PATH ?>/_i/icons.svg#icon-26"></use>
						</svg>
					</i>Телефон горячей линии <br/>
					<a href="tel:+<?= onlyNumber($phone); ?>"><span><?= $arPhone[0] ?>)</span><?= $arPhone[1] ?></a>
				</div>
            <? endif; ?>
			<div class="all_right">

				<a class="write-us mob popup-show form-popup" data-fancybox data-src="#form-popup"
				   href="javascript:;"><i class="icon icon-letter">
						<svg>
							<use xmlns:xlink="http://www.w3.org/1999/xlink"
							     xlink:href="<?= STATIC_PATH ?>/_i/icons.svg#icon-35"></use>
						</svg>
					</i>Написать нам</a>

				<ul class="social ta-center mob">
					<noindex>
                        <? if ($link = COption::GetOptionString("grain.customsettings", "TMPL_2")): ?>
							<li><a href="<?= $link ?>" rel="nofollow" target="_blank"><i class="icon icon-vk">
										<svg>
											<use xmlns:xlink="http://www.w3.org/1999/xlink"
											     xlink:href="<?= STATIC_PATH ?>/_i/icons.svg#icon-52"></use>
										</svg>
									</i></a></li>
                        <? endif; ?>
                        <? if ($link = COption::GetOptionString("grain.customsettings", "TMPL_3")): ?>
							<li><a href="<?= $link ?>" rel="nofollow" target="_blank"><i class="icon icon-in"></i></a>
							</li>
                        <? endif; ?>
                        <? if ($link = COption::GetOptionString("grain.customsettings", "TMPL_4")): ?>
							<li><a href="<?= $link ?>" rel="nofollow" target="_blank"><i class="icon icon-ok">
										<svg>
											<use xmlns:xlink="http://www.w3.org/1999/xlink"
											     xlink:href="<?= STATIC_PATH ?>/_i/icons.svg#icon-54"></use>
										</svg>
									</i></a></li>
                        <? endif; ?>
                        <? if ($link = COption::GetOptionString("grain.customsettings", "TMPL_5")): ?>
							<li><a href="<?= $link ?>" rel="nofollow" target="_blank"><i class="icon icon-fb">
										<svg>
											<use xmlns:xlink="http://www.w3.org/1999/xlink"
											     xlink:href="<?= STATIC_PATH ?>/_i/icons.svg#icon-51"></use>
										</svg>
									</i></a></li>
                        <? endif; ?>
					</noindex>
				</ul>
			</div>
		</div>
		<div class="content">
			<div class="column">
                <?
                $APPLICATION->IncludeFile(
                    '/_include/contacts_footer.php',
                    array(),
                    array(
                        "MODE" => "html",
                        "NAME" => "Редактирование включаемой области 4",
                        "TEMPLATE" => "section_include_template.php")
                );
                ?>

			</div>

			<div class="column">
				<div class="vcard">
					<a class="photo" href="/_v/kolbasa/_i/logo.png"></a>
					<div>
						<span class="category">Мясоперерабатывающий завод</span>
						<span class="fn org">Мясницкий ряд</span>
					</div>

					<div class="adr">
						<span class="country-name">Россия</span>
						<span class="region">Московская область</span>,
						<span class="postal-code">143006</span>
						<span class="locality">г. Одинцово</span>,
						<span class="street-address">Транспортный проезд д.7</span>,
					</div>
					<div class="tel">+7 (495) 981-17-19</span></div>
					<div class="email">clientprav@kolbasa.ru</div>
					<div>Мы работаем <span class="workhours">ПН-СБ с 10-00 до 18-00, ВС - выходной</span></div>
					<a class="url" href="<?= $APPLICATION::IsHTTPS() ? 'https://' : 'http://'; ?>kolbasa.ru/">
						<span class="value-title"
						      title="<?= $APPLICATION::IsHTTPS() ? 'https://' : 'http://'; ?>kolbasa.ru/"> </span>
					</a>
				</div>
			</div>

            <? if ($page == SITE_DIR): ?>
				<noindex>
					<a class="artus" href="http://www.artus.ru/" target="_blank" rel="nofollow">
						<span class="logo">
							<svg>
								<use xmlns:xlink="http://www.w3.org/1999/xlink"
								     xlink:href="<?= STATIC_PATH ?>/_i/icons.svg#icon-55"></use>
							</svg>
						</span>
						<span>Создание сайтов — <br/> интернет-агентство «Артус»
						</span>
					</a>
				</noindex>
            <? else: ?>
				<noindex>
					<a class="artus" href="http://www.artus.ru/" target="_blank" rel="nofollow">
						<span class="logo">
							<svg>
								<use xmlns:xlink="http://www.w3.org/1999/xlink"
								     xlink:href="<?= STATIC_PATH ?>/_i/icons.svg#icon-55"></use>
							</svg>
						</span>
						<span>Создание сайтов — <br/> интернет-агентство «Артус»
						</span>
					</a>
				</noindex>
            <? endif; ?>

			<div class="clearfix"></div>
		</div>
	</div>
</footer>
<!-- FOOTER end -->

<!-- popup's -->
<div class="popup form-popup" style="display: none;" id="form-popup">
	<div class="popup-close">
		<svg>
			<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="<?= STATIC_PATH ?>/_i/icons.svg#icon-41"></use>
		</svg>
	</div>
	<div class="callback-title">
		<span>Обратная связь</span>
	</div>
	<p class='form-description'>Если у вас возникли вопросы, связанные с работой сайта, и вы не нашли ответы на них в
		разделах Помощи, вы можете задать их через форму ниже.</p>
	<div class="form-wrap">
		<form action="#" id="form-contact">
			<input type="hidden" name="form_text_5" value="popup">
			<input type="hidden" name="form_text_6" value="<?= $page ?>">
			<div class="error-list"></div>
			<div class="row">
				<label for="fio" class="req">
					<input type="text" name="form_text_1" id="fio" required value=""
					       onKeyUp="this.setAttribute('value', this.value);">
					<span class="placeholder">ФИО</span>
				</label>
				<p class="err-msg ta-right">&nbsp;</p>
			</div>
			<div class="row">
				<label for="tel" class="req">
					<input name="form_text_2" id="tel" type="tel" class="js_phone_mask" required value=""
					       onKeyUp="this.setAttribute('value', this.value);">
					<span class="placeholder">Телефон</span>
				</label>
				<p class="err-msg ta-right">&nbsp;</p>
			</div>
			<div class="row">
				<label for="email" class="req">
					<input name="form_text_3" id="email" type="email" required value=""
					       onKeyUp="this.setAttribute('value', this.value);">
					<span class="placeholder">E-mail</span>
				</label>
				<p class="err-msg ta-right">&nbsp;</p>
			</div>
			<div class="row">
				<label>
					<textarea name="form_textarea_4"></textarea>
					<span class="placeholder">Комментарий</span>
				</label>
			</div>
			<div class="row">
				<div id="capthca" style="margin: 11px 0;">
				</div>
			</div>

			<div class="row">
				<div class="personal_data_checkbox">
					<label for="personal_data" class="req">
						<input name="form_text_7" id="personal_data" type="checkbox" required value=""
						       onKeyUp="this.setAttribute('value', this.value);">
						<span class="placeholder">Даю свое согласие на обработку персональных данных и соглашаюсь с <a
									href="/soglasie-na-obrabotku-personalnykh-dannykh/" target="_blank">политикой в
								отношении обработки персональных данных</a></span>
					</label>
					<p class="err-msg ta-left">&nbsp;</p>
				</div>
			</div>

			<div class="row" style="text-align: center">
				<span>
					<input class="btn" type="submit" value="Отправить">
				</span>
			</div>
			<div class="row" style="text-align: center">
				<p class="required-fields-notice"><span class="star">*</span>Поля обязательные для заполнения.</p>
			</div>
		</form>
		<div class="load-block">
			<i class="preloader"><!-- --></i>
		</div>
	</div>
</div>

<div class="popup form-popup" style="display: none;" id="form-popup-ok">
	<div class="form-popup-holder">
		<div class="callback-title"><span>Обратная связь</span></div>
		<p class="form-description">Спасибо за обращение!<br/> В ближайшее время наши менеджеры свяжутся с вами.</p>
		<p class="ta-center"><a class="btn" data-fancybox-close href="javascript:;">Закрыть</a></p>
	</div>
</div>

<div class="popup form-job modalform" id="form-job" style='display: none;'>

	<div class="modalform__title">Заполните анкету</div><!-- /.modalform__title -->
	<div class="modalform__text">И вам перезвонят для консультации по вакансиям в ближайшее время</div>
	<!-- /.modalform__text -->
	<div class="modalform__form">
		<form action="" data-entity="job-form" enctype="multipart/form-data">
			<input type="hidden" name="EMAIL_TO" value=""/>
			<div class="modalform__row">
				<div class="modalform__item">
					<label for="">Имя</label>
					<input type="text" value='' name="NAME" class='required'></div>
				<div class="modalform__item">
					<label for="">Фамилия</label>
					<input type="text" value='' name="SECOND_NAME" class='required'>
				</div>
				<!-- /.modalform__item -->
				<div class="modalform__item">
					<label for="">Телефон</label>
					<input type="tel" name="PHONE" class='required'>
				</div>
				<div class="modalform__item">
					<label for="">Гражданство</label>
					<input type="text" name="CITIZ" class='required'>
				</div>
				<!-- /.modalform__item -->

				<div class="modalform__item modalform__item_full" id="vacancy-show" style="display: none;">
					<label for="">Вакансия, которая вам понравилась</label>
					<input type="text" name="VACANCY" class='' readonly>
				</div>

				<div class="modalform__item modalform__item_full">
					<div class="fileupload">
						<label>
							<div class="fileupload__files">
								<div class="fileupload__file">
									<input type="file" name="FILE"> <span class="filebutton">Прикрепить резюме</span>
								</div>
							</div>
						</label>
					</div>
					<!-- /.modalform__item -->
				</div>
				<div class="modalform__item_full">
					<div id="capthca4"></div>
				</div>
				<div class="modalform__item modalform__item_full">
					<div class="modalform__check">
						<div class="modalform__checkinput">
							<input type="checkbox" id='jobmodalcheck'>
							<label for="jobmodalcheck"> Даю свое согласие на обработку персональных данных, соглашаюсь
								<a href="">
									с политикой конфиденциальности</a> и принимаю <a href="">условия оферты</a></label>
						</div><!-- /.modalform__checkinput -->
						<div class="modalform__checkbutton">
							<button class='formbutton' type='submit' onclick="ym(45298401,'reachGoal','form_vakansiya'); return true;" disabled>Отправить</button>
						</div>
						<!-- /.modalform__checkbutton -->
					</div><!-- /.modalform__check -->
				</div>
			</div>

		</form>

	</div><!-- /.modalform__row -->
</div>

<div class="popup form-job modalform" id="form-job-all" style='display: none;'>

	<div class="modalform__title">Заполните анкету</div><!-- /.modalform__title -->
	<div class="modalform__text">И вам перезвонят для консультации по вакансиям в ближайшее время</div>
	<!-- /.modalform__text -->
	<div class="modalform__form">
		<form action="" data-entity="job-form" enctype="multipart/form-data">
			<div class="modalform__row">
				<div class="modalform__item">
					<label for="">Имя</label>
					<input type="text" value='' name="NAME" class="required"></div>
				<div class="modalform__item">
					<label for="">Фамилия</label>
					<input type="text" value='' name="SECOND_NAME" class="required">
				</div>
				<!-- /.modalform__item -->
				<div class="modalform__item">
					<label for="">Телефон</label>
					<input type="tel" name="PHONE" class="required">
				</div>
				<div class="modalform__item">
					<label for="">Гражданство</label>
					<input type="text" name="CITIZ" class="required">
				</div>
				<!-- /.modalform__item -->


				<div class="modalform__item modalform__item_full">
					<div class="fileupload">
						<label>
							<div class="fileupload__files">
								<div class="fileupload__file">
									<input type="file" name="FILE"> <span class="filebutton">Прикрепить резюме</span>
								</div>
							</div>
						</label>
					</div>
					<!-- /.modalform__item -->
				</div>
				<div class="modalform__item_full">
					<div id="capthca3"></div>
				</div>
				<div class="modalform__item modalform__item_full">
					<div class="modalform__check">
						<div class="modalform__checkinput">
							<input type="checkbox" id='jobmodalcheck2'>
							<label for="jobmodalcheck2"> Даю свое согласие на обработку персональных данных, соглашаюсь
								<a href="">
									с политикой конфиденциальности</a> и принимаю <a href="">условия оферты</a></label>
						</div><!-- /.modalform__checkinput -->
						<div class="modalform__checkbutton">
							<button class='formbutton' type='submit' onclick="ym(45298401,'reachGoal','forma_bez_vakansii'); return true;" disabled>Отправить</button>
						</div>
						<!-- /.modalform__checkbutton -->
					</div><!-- /.modalform__check -->
				</div>
			</div>

		</form>

	</div><!-- /.modalform__row -->
</div>

<? $APPLICATION->IncludeFile('/_include/cookie-message.php'); ?>



<!-- Google Tag Manager (noscript) -->
<noscript>
	<iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KMTWMBP"
	        height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
<!-- End Google Tag Manager (noscript) -->


<script>
	function metricinit() {

		// ga
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-102523729-1', 'auto');
		ga('require', 'displayfeatures');
		ga('require', 'linkid', 'linkid.js');
		ga('send', 'pageview');


		// gtag
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-110665491-1');


		(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KMTWMBP');

		//rambler
		var _tmr = window._tmr || (window._tmr = []);
_tmr.push({id: "2929696", type: "pageView", start: (new Date()).getTime()});
(function (d, w, id) {
  if (d.getElementById(id)) return;
  var ts = d.createElement("script"); ts.type = "text/javascript"; ts.async = true; ts.id = id;
  ts.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//top-fwz1.mail.ru/js/code.js";
  var f = function () {var s = d.getElementsByTagName("script")[0]; s.parentNode.insertBefore(ts, s);};
  if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); }
})(document, window, "topmailru-code");

//yandex
(function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter45298401 = new Ya.Metrika({
                    id:45298401,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");

		// LIVEINTERNET

new Image().src = "//counter.yadro.ru/hit?r"+
escape(document.referrer)+((typeof(screen)=="undefined")?"":
";s"+screen.width+"*"+screen.height+"*"+(screen.colorDepth?
screen.colorDepth:screen.pixelDepth))+";u"+escape(document.URL)+
";h"+escape(document.title.substring(0,80))+
";"+Math.random();
	}
</script>



<!-- <noscript><div><img src="https://mc.yandex.ru/watch/45298401" style="position:absolute; left:-9999px;" alt="" /></div></noscript> -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-110665491-1"></script>



<script>
	setTimeout(() => {
		//metricinit()
	}, 3000);
</script>

<? /*<script src="https://www.google.com/recaptcha/api.js?render=<?=COption::GetOptionString("grain.customsettings","SITEKEY") ?>"></script>
    <script>
	    var siteKey = '<?=COption::GetOptionString("grain.customsettings","SITEKEY") ?>';
    </script>
	<script src="<?=CUtil::GetAdditionalFileURL(SITE_TEMPLATE_PATH.'/_js/custom.js');?>"></script>
    <?$APPLICATION->ShowProperty('metasocial');?>
    */ ?>
<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
        m[i].l=1*new Date();
        for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
        k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
    (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

    ym(45298401, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
    });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/45298401" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

</body>
</html>
