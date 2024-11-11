<?if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die(); 


use Lema\Seo\OpenGraph,
    Lema\Common\Request;

$page = $APPLICATION->GetCurPage(false);
$isPrint = ($_GET['print'] == 'Y');?>
        <?if($APPLICATION->GetProperty("hide_container") == 'Y'):
            $APPLICATION->SetPageProperty("hide_container_html", '</div>');
          else:?>
            </div>
          <?endif;?>

          <?
            $APPLICATION->IncludeFile($APPLICATION->GetCurDir()."sect_inc.php", Array(), Array(
                "MODE"      => "html",
                "NAME"      => "Редактирование включаемой области раздела",
                "TEMPLATE"  => "section_include_template.php"
                ));
            ?>
            <?
            $APPLICATION->IncludeFile($APPLICATION->GetCurDir()."sect_dev_inc.php", Array(), Array(
                "SHOW_BORDER"      => false
                ));
            ?>


            <?$APPLICATION->IncludeComponent("bitrix:main.include","",Array(
                    "AREA_FILE_SHOW" => "sect",
                    "AREA_FILE_SUFFIX" => "wide",
                    "AREA_FILE_RECURSIVE" => "Y",
                    "SHOW_BORDER"      => false
                )
            );?>

            <?$APPLICATION->IncludeComponent(
            	"bitrix:main.include",
            	"",
            	Array(
            		"AREA_FILE_SHOW" => "sect",
            		"AREA_FILE_SUFFIX" => "dev_dir_inc",
            		"EDIT_TEMPLATE" => ""
            	),
                false,
                array("SHOW_BORDER"      => false )
            );?>



          </div>

          <!-- BEGIN FOOTER -->
          <div class="footer">
          <div class="wrapper">
          <div class="container">
              <div class="copyright">
                  <span>&#169; <?=date('Y')?> <?=COption::GetOptionString("grain.customsettings","TMPL_3")?></span>
              </div>
              <div class="menu">
                <?
                                $APPLICATION->IncludeFile(
                                    '/_include/contacts_footer.php',
                                    array(),
                                    Array(
                                        "MODE"      => "html",
                                        "NAME"      => "Редактирование включаемой области 4",
                                        "TEMPLATE"  => "section_include_template.php")
                                    );
                                ?>
              </div>
              <div id="artus" class="artus_block">
                  <?if($page != SITE_DIR):?><noindex><?endif?>
                      <div class="artus_block" title="Решение суда»">
                          <div class="artus_text">
                              <a href="https://yadi.sk/i/cX4VYJADdZ3VUw" target="_blank" rel="nofollow" class="artus">
                              </a>
                          </div>
                          <div class="artus_icon"></div>
                      </div>
                  <?if($page != SITE_DIR):?></noindex><?endif?>
              </div>
          </div>

          </div>
          </div>
          <!-- END FOOTER -->
          </div>
          <!--END MAIN PAGE WRAPPER-->
  </div>



  <!--gallery popup-->
  <div class="custom-overlay"></div>
  <div class="custom-popup  order_form_questionnaire">
     <div class="popup_inner result_order">
          <!--BEGIN IMAGE GALLERY SLIDER-->
          <h2 class="title">Форма Анкеты потенциального франчайзи</h2>
          <div class="feedback_form scroll">
              <form class="js_validation_fr has-validation-callback" id="js_validation_fr" name="contact" method="post" action="" novalidate>
                <?$APPLICATION->IncludeComponent(
                  "bitrix:form.result.new",
                  "",
                  Array(
                    "CACHE_TIME" => "3600",
                    "CACHE_TYPE" => "A",
                    "CHAIN_ITEM_LINK" => "",
                    "CHAIN_ITEM_TEXT" => "",
                    "EDIT_URL" => "result_edit.php",
                    "IGNORE_CUSTOM_TEMPLATE" => "N",
                    "LIST_URL" => "result_list.php",
                    "SEF_MODE" => "N",
                    "SUCCESS_URL" => "",
                    "USE_EXTENDED_ERRORS" => "N",
                    "VARIABLE_ALIASES" => Array(
                      "RESULT_ID" => "RESULT_ID",
                      "WEB_FORM_ID" => "WEB_FORM_ID"
                    ),
                    "WEB_FORM_ID" => "2"
                  )
                );?>
                  <div class="clear"></div>
                  <input class="btn border" type="submit" name="отправить">
              </form>

          </div>


          <div class="close js_close"></div>
      </div>
  </div>

  <!--gallery popup-->
  <div class="custom-overlay"></div>
  <div class="custom-popup  order_form_thanks">
     <div class="popup_inner result_order">
          <!--BEGIN IMAGE GALLERY SLIDER-->
          <h2 class="title">Спасибо за сообщение!</h2>

          <p>Благодарим Вас за интерес к франшизе «Мясницкий ряд»! Наш специалист свяжется с Вами в ближайшее время</p>
          <div class=" btn border js_close">Закрыть</div>

          <div class="close js_close"></div>
      </div>
  </div>
  <!--end gallery popup-->


  <!--video popup-->
  <div class="custom-overlay"></div>
  <div class="custom-popup video_popup js_video_popup">
     <div class="popup_inner">
        <div class="popup_block">
            <div class="video_player js_videoplayer">
                  <div class="video" >
                      <video width="900" height="600"  controls="controls" preload="none"  id="video_src"> </video>
                  </div>
              </div>
          </div>
          <div class="close js_close"></div>
      </div>
  </div>
  <!--end video popup-->

  <!--gallery popup-->
  <div class="custom-overlay"></div>
  <div class="custom-popup  open_popup_fr">
     <div class="popup_inner result_order">
          <!--BEGIN IMAGE GALLERY SLIDER-->
          <h2 class="title">Заявка на франшизу</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet.
          Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </p>


          <div class="close js_close"></div>
      </div>
  </div>

  <!--end gallery popup-->



  <!--gallery popup-->
  <div class="custom-overlay"></div>
  <div class="custom-popup  feedback_ok">
     <div class="popup_inner result_order">
          <!--BEGIN IMAGE GALLERY SLIDER-->
          <h2 class="title">Спасибо за ваше обращение.</h2>
          <p>Мы обязательно ответим вам в ближайшее время</p>


          <div class="close js_close"></div>
      </div>
  </div>
  <!--end gallery popup-->

  <!--gallery popup-->
  <div class="custom-overlay"></div>
  <div class="custom-popup  js_photo_gallery_popup photo_gallery_popup">
     <div class="popup_inner">
          <!--BEGIN IMAGE GALLERY SLIDER-->
          <div class="popup_gallery_slider">
              <!--BIG SLIDES-->
              <div id="photo_slider" class="flexslider">
                  <ul class="slides">
                      <li>
                          <div class="img" style="background-image: url(_i/_temp/slider_img.jpg)"></div>
                          <div class="title">Lorem ipsum dolor sit amet</div>
                      </li>
                      <li>
                         <div class="img" style="background-image: url(_i/_temp/slider_img.jpg)"></div>
                          <div class="title">Lorem ipsum dolor sit amet</div>
                      </li>
                      <li>
                          <div class="img" style="background-image: url(_i/_temp/slider_img.jpg)"></div>
                          <div class="title">Lorem ipsum dolor sit amet</div>
                      </li>
                      <li>
                          <div class="img" style="background-image: url(_i/_temp/slider_img.jpg)"></div>
                          <div class="title">Lorem ipsum dolor sit amet</div>
                      </li>
                      <li>
                          <div class="img" style="background-image: url(_i/_temp/slider_img.jpg)"></div>
                          <div class="title">Lorem ipsum dolor sit amet</div>
                      </li>
                      <li>
                          <div class="img" style="background-image: url(_i/_temp/slider_img.jpg)"></div>
                          <div class="title">Lorem ipsum dolor sit amet</div>
                      </li>

                  </ul>
                  <div class="quantity"></div>

              </div>
              <!--END BIG SLIDES-->

            </div>
            <!--END IMAGE GALLERY SLIDER-->


          <div class="close js_close"></div>
      </div>
  </div>
  <!--end gallery popup-->
  <div itemscope itemtype="http://schema.org/Organization" style="display:none;">
  <span itemprop="name">Мясная гастрономия</span>
  Контакты:
  <div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
    Адрес:
    <span itemprop="streetAddress">ул.Южная, д.16</span>
    <span itemprop="postalCode">143002</span>
    <span itemprop="addressLocality"> Московская область, г.Одинцово</span>,
  </div>
  Телефон:<span itemprop="telephone">+7 (495) 933-02-52</span>
</div>
<?$APPLICATION->IncludeFile('/_include/cookie-message.php');?>

  </body>


  <!--Default libraries-->
  <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/jquery-ui.min.js"></script>
  <!--/Default libraries-->

  <script src="<?=SITE_TEMPLATE_PATH?>/_js/piechart-clusterer.js"></script>

  <!-- valid -->
  <script src="<?=CUtil::GetAdditionalFileURL(STATIC_PATH.'/_js/validator/form-validator/jquery.form-validator.js');?>"></script>
  <!-- /valid -->

  <!-- Mask Input -->
  <script src="<?=CUtil::GetAdditionalFileURL(STATIC_PATH.'/_js/jquery.maskedinput.js');?>"></script>
  <!-- /Mask Input -->

  <!--Form styler or select fieds-->
  <script src="<?=CUtil::GetAdditionalFileURL(STATIC_PATH.'/_js/formstyler/jquery.formstyler.min.js');?>"></script>
  <link rel="stylesheet" href="<?=CUtil::GetAdditionalFileURL(STATIC_PATH.'/_js/formstyler/jquery.formstyler.css');?>">
  <!--/Form styler or select fieds-->

  <!-- scroll -->
  <script src="<?=CUtil::GetAdditionalFileURL(STATIC_PATH.'/_js/jquery.mCustomScrollbar.min.js');?>"></script>
  <link rel="stylesheet" href="<?=CUtil::GetAdditionalFileURL(STATIC_PATH.'/_js/jquery.mCustomScrollbar.min.css');?>">
  <!-- scroll -->


  <!-- FLEXSLIDER -->
  <link rel="stylesheet" href="<?=CUtil::GetAdditionalFileURL(STATIC_PATH.'/_js/flexslider/flexslider.css');?>">
  <script src="<?=CUtil::GetAdditionalFileURL(STATIC_PATH.'/_js/flexslider/jquery.flexslider.js');?>"></script>
  <!-- /FLEXSLIDER -->

  <!--swiper slider text slider-->
  <link rel="stylesheet" type="text/css" href="<?=CUtil::GetAdditionalFileURL(STATIC_PATH.'/_js/swiper/swiper.css');?>">
  <script type="text/javascript" src="<?=CUtil::GetAdditionalFileURL(STATIC_PATH.'/_js/swiper/idangerous.swiper.js');?>"></script>
  <!--end swiper slider text slider-->

  <!--media element-->
  <link rel="stylesheet" href="<?=CUtil::GetAdditionalFileURL(STATIC_PATH.'/_js/mediaelement/mediaelementplayer.min.css');?>" type="text/css">
  <script src="<?=CUtil::GetAdditionalFileURL(STATIC_PATH.'/_js/mediaelement/mediaelement-and-player.min.js');?>"></script>
  <!--/media element-->


  <script type="text/javascript" src="<?=CUtil::GetAdditionalFileURL(STATIC_PATH.'/_js/fmmr.js');?>" ></script>

  <script type="text/javascript" src="<?=CUtil::GetAdditionalFileURL(SITE_TEMPLATE_PATH.'/_js/main.js');?>"  ></script>

<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter48082541 = new Ya.Metrika({
                    id:48082541,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true,
                    trackHash:true
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
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/48082541" style="position:absolute; left:-9999px;" alt="" ></div></noscript>
<!-- /Yandex.Metrika counter -->
<?
$og = new OpenGraph();
$og->setItems(array(
    'locale' => strtolower(LANGUAGE_ID) . '_' . strtoupper(LANGUAGE_ID),
    'type' => 'website',
    'title' => $APPLICATION->GetPageProperty('title'),
    'title2' => $APPLICATION->GetTitle(false),
    'description' => $APPLICATION->GetPageProperty('description'),
    'url' => Request::get()->getRequestedPageDirectory() . '/',
	'image' => $og->getImage('/_v/_i/logo.png'),
    'site_name' => 'Мясницкий ряд - мясоперерабатывающий завод'
))->setViewContent();
?>
  </html>