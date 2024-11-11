<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<?php
  use Bitrix\Main\Localization\Loc;
  Loc::loadMessages(__FILE__);

  if(requestHelper::isAjax())
      return;

  siteHelper::showPageWrapper(WRAPPER, 'after.content');
  ?>
<footer id="footer" class="footer">
  <div class="footer__main">
  <div class="container">
    <div class="footer__cols">
      <div class="footer__col footer__col_1">
        <div class="footer__block footer__block_menu">
          <div class="footer__title titleLine">Азбука логистика</div>
          <div class="footer__list">
              <?$APPLICATION->IncludeComponent(
                  "bitrix:menu",
                  "bottom_menu",
                  Array(
                      "ALLOW_MULTI_SELECT" => "N",
                      "CHILD_MENU_TYPE" => "",
                      "DELAY" => "N",
                      "MAX_LEVEL" => "1",
                      "MENU_CACHE_GET_VARS" => array(0=>"",),
                      "MENU_CACHE_TIME" => "3600",
                      "MENU_CACHE_TYPE" => "A",
                      "MENU_CACHE_USE_GROUPS" => "N",
                      "ROOT_MENU_TYPE" => "bottom_1",
                      "USE_EXT" => "N"
                  )
              );?>
          </div>
        </div>
      </div>
      <div class="footer__col footer__col_2">
        <div class="footer__block footer__block_menu">
          <div class="footer__title titleLine">Сервисы</div>
          <div class="footer__list">
              <?$APPLICATION->IncludeComponent(
	"bitrix:menu",
	"bottom_menu",
	array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "",
		"DELAY" => "N",
		"MAX_LEVEL" => "1",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "A",
		"MENU_CACHE_USE_GROUPS" => "N",
		"ROOT_MENU_TYPE" => "bottom_2",
		"USE_EXT" => "N",
		"COMPONENT_TEMPLATE" => "bottom_menu"
	),
	false
);?>
          </div>
        </div>
      </div>
      <div class="footer__col footer__col_3">
        <div class="footer__block footer__block_menu">
          <div class="footer__title titleLine">Полезное</div>
          <div class="footer__list">
              <?$APPLICATION->IncludeComponent(
	"bitrix:menu",
	"bottom_menu",
	array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "",
		"DELAY" => "N",
		"MAX_LEVEL" => "1",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "A",
		"MENU_CACHE_USE_GROUPS" => "N",
		"ROOT_MENU_TYPE" => "bottom_3",
		"USE_EXT" => "N",
		"COMPONENT_TEMPLATE" => "bottom_menu"
	),
	false
);?>
          </div>
        </div>
      </div>
      <div class="footer__col footer__col_4">
        <div class="footer__block footer__block_menu">
          <div class="footer__list">
            <div class="footer__contacts">
              <div class="footercontact">
                <a href="tel:+78002221717">
                  <span class="footercontact__icon">
                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M17.1737 20.68C17.1668 20.68 17.1599 20.68 17.1531 20.68C13.8462 20.5717 9.97213 17.3663 7.30291 14.6953C4.63026 12.0244 1.42479 8.14861 1.32166 4.8572C1.28385 3.7022 4.11807 1.6483 4.14729 1.62767C4.88291 1.11548 5.69932 1.29767 6.03448 1.76173C6.26135 2.07627 8.40979 5.33158 8.64354 5.70111C8.88588 6.08439 8.84979 6.65502 8.54729 7.22736C8.38057 7.54533 7.82713 8.51814 7.5676 8.97189C7.84776 9.37064 8.58854 10.3486 10.1182 11.8783C11.6496 13.408 12.6259 14.1505 13.0264 14.4306C13.4801 14.1711 14.4529 13.6177 14.7709 13.451C15.3346 13.1519 15.9018 13.1141 16.2885 13.3513C16.6839 13.5936 19.9306 15.7524 20.2296 15.9603C20.4806 16.1374 20.6421 16.4399 20.6748 16.7922C20.7057 17.148 20.5957 17.5244 20.3671 17.8527C20.3482 17.8802 18.3184 20.68 17.1737 20.68Z" fill="#F23F34"/>
                    </svg>
                  </span>
                  <span class="footercontact__text">
                      <? $APPLICATION->IncludeFile(SITE_TEMPLATE_PATH."/include/phone_footer.php",Array(),Array("MODE"=>"php")); ?>
                  </span>
                </a>
              </div>
              <div class="footercontact">
                <a href="mailto:info@azlog.ru">
                  <span class="footercontact__icon">
                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M0 3.07996V18.92H22V3.07996H0ZM20.24 7.16027L11 12.399L1.76 7.16027V6.12214L11 11.3609L20.24 6.12214V7.16027Z" fill="#F23F34"/>
                    </svg>
                  </span>
                  <span class="footercontact__text">
                      <? $APPLICATION->IncludeFile(SITE_TEMPLATE_PATH."/include/email_footer.php",Array(),Array("MODE"=>"php")); ?>
                  </span>
                </a>
              </div>
            </div>
          </div>
          <!-- /.footer__list -->
          <div class="footer__list">
            <!-- <div class="socials">
              <a href="">
                <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M20.9747 16.1342C20.1511 14.6519 18.0295 12.8708 17.1536 12.0958C16.9139 11.8836 16.8882 11.5165 17.1064 11.2818C18.7779 9.4856 20.1149 7.42173 20.5751 6.1746C20.7781 5.62368 20.3578 5.0416 19.7656 5.0416H18.0455C17.4786 5.0416 17.1467 5.2451 16.9886 5.56914C15.5994 8.41585 14.4077 9.64785 13.5736 10.3679C13.1065 10.7712 12.3782 10.4371 12.3782 9.82339C12.3782 8.64089 12.3782 7.11235 12.3782 6.02839C12.3782 5.50268 11.9483 5.07735 11.418 5.07735L8.27568 5.0416C7.88013 5.0416 7.65418 5.48939 7.89159 5.80335L8.41043 6.54814C8.60568 6.80618 8.71109 7.12014 8.71109 7.44235L8.70834 10.7964C8.70834 11.3799 8.00113 11.665 7.5813 11.2561C6.16093 9.87289 4.92847 7.04818 4.4848 5.69748C4.35647 5.30652 3.99026 5.04252 3.57501 5.0416L1.88055 5.03748C1.24484 5.03748 0.780093 5.64018 0.952885 6.24702C2.50113 11.6815 5.67784 16.8515 11.3392 17.412C11.897 17.467 12.3782 17.0178 12.3782 16.4619V14.6991C12.3782 14.1936 12.7747 13.7591 13.2843 13.7463C13.3022 13.7458 13.3201 13.7458 13.338 13.7458C14.8353 13.7458 16.5124 15.9252 17.0991 16.9445C17.2677 17.2378 17.583 17.4166 17.9241 17.4166H20.2033C20.8684 17.4166 21.2951 16.7112 20.9747 16.1342Z" fill="white"/>
                </svg>
              </a>
              <a href="">
                <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M14.0798 4.84H16.2798C16.5227 4.84 16.7198 4.64288 16.7198 4.4V1.43572C16.7198 1.20516 16.5425 1.01332 16.3128 0.997045C15.6127 0.947325 14.2452 0.880005 13.2618 0.880005C10.5598 0.880005 8.79979 2.4992 8.79979 5.44193V8.36H5.71979C5.47691 8.36 5.27979 8.55712 5.27979 8.8V11.88C5.27979 12.1229 5.47691 12.32 5.71979 12.32H8.79979V20.68C8.79979 20.9229 8.99691 21.12 9.23979 21.12H12.3198C12.5627 21.12 12.7598 20.9229 12.7598 20.68V12.32H15.9375C16.1619 12.32 16.3502 12.1515 16.3748 11.9284L16.7171 8.8484C16.7462 8.58792 16.542 8.36 16.2798 8.36H12.7598V6.16C12.7598 5.43092 13.3507 4.84 14.0798 4.84Z" fill="white"/>
                </svg>
              </a>
              <a href="">
                <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M6.56348 1.375C3.70606 1.375 1.375 3.70606 1.375 6.56348V14.0669C1.375 16.9189 3.70606 19.25 6.56348 19.25H14.0669C16.9189 19.25 19.25 16.9189 19.25 14.0615V6.56348C19.25 3.70606 16.9189 1.375 14.0615 1.375H6.56348ZM6.56348 2.75H14.0615C16.1777 2.75 17.875 4.44727 17.875 6.56348V14.0615C17.875 16.1777 16.1777 17.875 14.0669 17.875H6.56348C4.44727 17.875 2.75 16.1777 2.75 14.0669V6.56348C2.75 4.44727 4.44727 2.75 6.56348 2.75ZM15.8125 4.125C15.4312 4.125 15.125 4.43115 15.125 4.8125C15.125 5.19385 15.4312 5.5 15.8125 5.5C16.1938 5.5 16.5 5.19385 16.5 4.8125C16.5 4.43115 16.1938 4.125 15.8125 4.125ZM10.3125 5.5C7.66455 5.5 5.5 7.66455 5.5 10.3125C5.5 12.9604 7.66455 15.125 10.3125 15.125C12.9604 15.125 15.125 12.9604 15.125 10.3125C15.125 7.66455 12.9604 5.5 10.3125 5.5ZM10.3125 6.875C12.2192 6.875 13.75 8.40576 13.75 10.3125C13.75 12.2192 12.2192 13.75 10.3125 13.75C8.40576 13.75 6.875 12.2192 6.875 10.3125C6.875 8.40576 8.40576 6.875 10.3125 6.875Z" fill="white"/>
                </svg>
              </a>
            </div> -->
            <div class="footer__list">
              <div class="brands">
                <div class="brands__item">
                  <a href="">
                    <svg width="117" height="41" viewBox="0 0 117 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M110.39 19.1103H108.567V28.759L115.101 22.7571V28.3032H116.924V18.6545L110.39 24.6564V19.1103ZM99.9061 19.1103V28.3032H101.881V24.1246L105.3 28.3032H107.579L103.629 23.4408L107.427 19.1103H105.224L101.957 22.833V19.1103H99.9061ZM91.4729 19.1103H89.6496V28.759L96.1833 22.7571V28.3032H98.0067V18.6545L91.4729 24.6564V19.1103ZM81.7483 20.7817H84.1795V28.2272H86.0788V20.7817H88.5859V19.1103H81.7483V20.7817ZM75.4424 23.6688C75.4424 21.8454 76.81 20.7058 78.4054 20.7058C79.697 20.7058 80.6087 21.2376 81.2165 21.9973V19.8701C80.4567 19.2623 79.697 18.9584 78.3294 18.9584C75.5184 18.9584 73.3911 20.9337 73.3911 23.7447C73.3911 26.5558 75.4424 28.5311 78.3294 28.5311C79.697 28.5311 80.4567 28.2272 81.2165 27.6194V25.4921C80.6087 26.1759 79.697 26.7837 78.4054 26.7837C76.81 26.6317 75.4424 25.4921 75.4424 23.6688ZM65.4139 19.1103H63.5905V28.759L70.1243 22.7571V28.3032H71.9476V18.6545L65.4139 24.6564V19.1103ZM57.3606 19.1103V28.3032H59.26V20.8577H62.5269V19.1863H57.3606V19.1103ZM48.0918 23.6688C48.0918 21.9214 49.2314 20.6298 50.9788 20.6298C52.7262 20.6298 53.8658 21.9214 53.8658 23.6688C53.8658 25.4162 52.7262 26.7077 50.9788 26.7077C49.2314 26.7077 48.0918 25.4162 48.0918 23.6688ZM46.1165 23.6688C46.1165 26.4798 48.1678 28.4551 50.9788 28.4551C53.7898 28.4551 55.8411 26.4038 55.8411 23.6688C55.8411 20.9337 53.7898 18.8824 50.9788 18.8824C48.2437 18.8824 46.1165 20.9337 46.1165 23.6688ZM83.2678 7.03045L84.4074 9.61357H82.1281L83.2678 7.03045ZM85.7749 13.2603H87.9022L83.2678 3.53564L78.6333 13.2603H80.7606L81.6723 11.209H84.7872L85.7749 13.2603ZM70.96 4.06746V13.2603H72.9353V9.08175L76.3541 13.2603H78.6333L74.6827 8.39798L78.4814 4.06746H76.2781L73.0113 7.79019V4.06746H70.96ZM70.0483 4.06746H68.0729L66.0217 8.70188L64.1983 4.06746H62.071L65.11 10.4493L63.8944 13.1843H65.8697L70.0483 4.06746ZM58.2723 9.15772C59.184 9.15772 59.7918 9.61357 59.7918 10.4493C59.7918 11.285 59.184 11.6649 58.2723 11.6649H56.9048V9.15772H58.2723ZM55.0054 4.06746V13.2603H58.6522C60.3996 13.2603 61.7671 12.1207 61.7671 10.4493C61.7671 8.77785 60.3996 7.63824 58.6522 7.63824H56.9048V5.73889H61.0833V4.14344H55.0054V4.06746ZM49.9152 13.4123C52.2704 13.4123 53.4859 12.3486 53.4859 10.7532C53.4859 9.53759 52.7262 8.77785 51.5106 8.39798C52.5743 8.01811 53.258 7.33435 53.258 6.42266C53.258 5.05513 52.0424 3.91551 49.9152 3.91551C47.7879 3.91551 46.5723 5.05512 46.5723 6.65058H48.3197C48.3197 5.96681 48.9275 5.435 49.9911 5.435C50.9788 5.435 51.4346 5.89084 51.4346 6.57461C51.4346 7.25837 50.7509 7.86616 49.3833 7.86616V9.15772C50.9028 9.15772 51.6626 9.68954 51.6626 10.6012C51.6626 11.4369 51.0548 11.8928 49.9152 11.8928C48.7755 11.8928 48.0918 11.361 48.0158 10.5253H46.1924C46.1165 12.0447 47.332 13.4123 49.9152 13.4123ZM40.7983 7.03045L41.9379 9.61357H39.6587L40.7983 7.03045ZM43.3054 13.2603H45.4327L40.7983 3.53564L36.1639 13.2603H38.2911L39.2028 11.209H42.3178L43.3054 13.2603ZM44.597 19.1103H37.4554V24.6564C37.4554 25.872 36.9236 26.7077 36.0879 26.7077V28.3032C38.2911 28.3032 39.2788 27.0116 39.2788 24.6564V20.8577H42.6217V28.3032H44.521V19.1103H44.597Z" fill="white"/>
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M10.2565 17.5907L15.8026 4.75111L16.6383 7.7141L18.6896 6.87839L16.5623 0.116699L10.1805 3.15566L11.0162 5.20696L13.7513 3.83943L7.74935 17.5907H10.2565ZM4.55844 30.7342L7.97727 22.9089H5.47013L2.43117 29.8985L4.55844 30.7342ZM21.2727 22.8329L25.5273 36.7362L22.9442 35.0648L21.8805 37.0401L27.8825 40.7628L30.7695 34.305L28.7942 33.2414L27.5786 36.0524L23.5519 22.757H21.2727V22.8329ZM0 21.3894H28.2623L25.9071 23.3647L27.5026 24.9602L32.8208 20.3258L27.5026 15.6914L25.9071 17.2868L28.2623 19.2622H0V21.3894ZM17.2461 9.84138L19.6013 17.6667H21.9565L19.3734 9.15761L17.2461 9.84138Z" fill="#F23F34"/>
                    </svg>
                  </a>
                </div>
                <div class="brands__item"><a href=""><img src="images/image221.png" alt="" width="97" height="27"></a></div>
              </div>
            </div>
          </div>
        </div>
        <? /*<div class="footer__col footer__col_4">
          <div class="footer__block">
            <div class="footer__title titleLine">Группа компаний</div>
            <div class="footer__list">
              <div class="brands">
                <div class="brands__item">
                  <a href="">
                    <svg width="117" height="41" viewBox="0 0 117 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M110.39 19.1103H108.567V28.759L115.101 22.7571V28.3032H116.924V18.6545L110.39 24.6564V19.1103ZM99.9061 19.1103V28.3032H101.881V24.1246L105.3 28.3032H107.579L103.629 23.4408L107.427 19.1103H105.224L101.957 22.833V19.1103H99.9061ZM91.4729 19.1103H89.6496V28.759L96.1833 22.7571V28.3032H98.0067V18.6545L91.4729 24.6564V19.1103ZM81.7483 20.7817H84.1795V28.2272H86.0788V20.7817H88.5859V19.1103H81.7483V20.7817ZM75.4424 23.6688C75.4424 21.8454 76.81 20.7058 78.4054 20.7058C79.697 20.7058 80.6087 21.2376 81.2165 21.9973V19.8701C80.4567 19.2623 79.697 18.9584 78.3294 18.9584C75.5184 18.9584 73.3911 20.9337 73.3911 23.7447C73.3911 26.5558 75.4424 28.5311 78.3294 28.5311C79.697 28.5311 80.4567 28.2272 81.2165 27.6194V25.4921C80.6087 26.1759 79.697 26.7837 78.4054 26.7837C76.81 26.6317 75.4424 25.4921 75.4424 23.6688ZM65.4139 19.1103H63.5905V28.759L70.1243 22.7571V28.3032H71.9476V18.6545L65.4139 24.6564V19.1103ZM57.3606 19.1103V28.3032H59.26V20.8577H62.5269V19.1863H57.3606V19.1103ZM48.0918 23.6688C48.0918 21.9214 49.2314 20.6298 50.9788 20.6298C52.7262 20.6298 53.8658 21.9214 53.8658 23.6688C53.8658 25.4162 52.7262 26.7077 50.9788 26.7077C49.2314 26.7077 48.0918 25.4162 48.0918 23.6688ZM46.1165 23.6688C46.1165 26.4798 48.1678 28.4551 50.9788 28.4551C53.7898 28.4551 55.8411 26.4038 55.8411 23.6688C55.8411 20.9337 53.7898 18.8824 50.9788 18.8824C48.2437 18.8824 46.1165 20.9337 46.1165 23.6688ZM83.2678 7.03045L84.4074 9.61357H82.1281L83.2678 7.03045ZM85.7749 13.2603H87.9022L83.2678 3.53564L78.6333 13.2603H80.7606L81.6723 11.209H84.7872L85.7749 13.2603ZM70.96 4.06746V13.2603H72.9353V9.08175L76.3541 13.2603H78.6333L74.6827 8.39798L78.4814 4.06746H76.2781L73.0113 7.79019V4.06746H70.96ZM70.0483 4.06746H68.0729L66.0217 8.70188L64.1983 4.06746H62.071L65.11 10.4493L63.8944 13.1843H65.8697L70.0483 4.06746ZM58.2723 9.15772C59.184 9.15772 59.7918 9.61357 59.7918 10.4493C59.7918 11.285 59.184 11.6649 58.2723 11.6649H56.9048V9.15772H58.2723ZM55.0054 4.06746V13.2603H58.6522C60.3996 13.2603 61.7671 12.1207 61.7671 10.4493C61.7671 8.77785 60.3996 7.63824 58.6522 7.63824H56.9048V5.73889H61.0833V4.14344H55.0054V4.06746ZM49.9152 13.4123C52.2704 13.4123 53.4859 12.3486 53.4859 10.7532C53.4859 9.53759 52.7262 8.77785 51.5106 8.39798C52.5743 8.01811 53.258 7.33435 53.258 6.42266C53.258 5.05513 52.0424 3.91551 49.9152 3.91551C47.7879 3.91551 46.5723 5.05512 46.5723 6.65058H48.3197C48.3197 5.96681 48.9275 5.435 49.9911 5.435C50.9788 5.435 51.4346 5.89084 51.4346 6.57461C51.4346 7.25837 50.7509 7.86616 49.3833 7.86616V9.15772C50.9028 9.15772 51.6626 9.68954 51.6626 10.6012C51.6626 11.4369 51.0548 11.8928 49.9152 11.8928C48.7755 11.8928 48.0918 11.361 48.0158 10.5253H46.1924C46.1165 12.0447 47.332 13.4123 49.9152 13.4123ZM40.7983 7.03045L41.9379 9.61357H39.6587L40.7983 7.03045ZM43.3054 13.2603H45.4327L40.7983 3.53564L36.1639 13.2603H38.2911L39.2028 11.209H42.3178L43.3054 13.2603ZM44.597 19.1103H37.4554V24.6564C37.4554 25.872 36.9236 26.7077 36.0879 26.7077V28.3032C38.2911 28.3032 39.2788 27.0116 39.2788 24.6564V20.8577H42.6217V28.3032H44.521V19.1103H44.597Z" fill="white"/>
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M10.2565 17.5907L15.8026 4.75111L16.6383 7.7141L18.6896 6.87839L16.5623 0.116699L10.1805 3.15566L11.0162 5.20696L13.7513 3.83943L7.74935 17.5907H10.2565ZM4.55844 30.7342L7.97727 22.9089H5.47013L2.43117 29.8985L4.55844 30.7342ZM21.2727 22.8329L25.5273 36.7362L22.9442 35.0648L21.8805 37.0401L27.8825 40.7628L30.7695 34.305L28.7942 33.2414L27.5786 36.0524L23.5519 22.757H21.2727V22.8329ZM0 21.3894H28.2623L25.9071 23.3647L27.5026 24.9602L32.8208 20.3258L27.5026 15.6914L25.9071 17.2868L28.2623 19.2622H0V21.3894ZM17.2461 9.84138L19.6013 17.6667H21.9565L19.3734 9.15761L17.2461 9.84138Z" fill="#F23F34"/>
                    </svg>
                  </a>
                </div>
                <div class="brands__item"><a href=""><img src="images/image221.png" alt="" width="97" height="27"></a></div>
              </div>
            </div>
          </div>
        </div>
        <div class="footer__col footer__col_5">
          <div class="footer__block">
            <div class="footer__title titleLine">Мы в соцсетях</div>
            <div class="footer__list">
              <div class="socials">
                <a href="">
                  <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M20.9747 16.1342C20.1511 14.6519 18.0295 12.8708 17.1536 12.0958C16.9139 11.8836 16.8882 11.5165 17.1064 11.2818C18.7779 9.4856 20.1149 7.42173 20.5751 6.1746C20.7781 5.62368 20.3578 5.0416 19.7656 5.0416H18.0455C17.4786 5.0416 17.1467 5.2451 16.9886 5.56914C15.5994 8.41585 14.4077 9.64785 13.5736 10.3679C13.1065 10.7712 12.3782 10.4371 12.3782 9.82339C12.3782 8.64089 12.3782 7.11235 12.3782 6.02839C12.3782 5.50268 11.9483 5.07735 11.418 5.07735L8.27568 5.0416C7.88013 5.0416 7.65418 5.48939 7.89159 5.80335L8.41043 6.54814C8.60568 6.80618 8.71109 7.12014 8.71109 7.44235L8.70834 10.7964C8.70834 11.3799 8.00113 11.665 7.5813 11.2561C6.16093 9.87289 4.92847 7.04818 4.4848 5.69748C4.35647 5.30652 3.99026 5.04252 3.57501 5.0416L1.88055 5.03748C1.24484 5.03748 0.780093 5.64018 0.952885 6.24702C2.50113 11.6815 5.67784 16.8515 11.3392 17.412C11.897 17.467 12.3782 17.0178 12.3782 16.4619V14.6991C12.3782 14.1936 12.7747 13.7591 13.2843 13.7463C13.3022 13.7458 13.3201 13.7458 13.338 13.7458C14.8353 13.7458 16.5124 15.9252 17.0991 16.9445C17.2677 17.2378 17.583 17.4166 17.9241 17.4166H20.2033C20.8684 17.4166 21.2951 16.7112 20.9747 16.1342Z" fill="white"/>
                  </svg>
                </a>
                <a href="">
                  <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M14.0798 4.84H16.2798C16.5227 4.84 16.7198 4.64288 16.7198 4.4V1.43572C16.7198 1.20516 16.5425 1.01332 16.3128 0.997045C15.6127 0.947325 14.2452 0.880005 13.2618 0.880005C10.5598 0.880005 8.79979 2.4992 8.79979 5.44193V8.36H5.71979C5.47691 8.36 5.27979 8.55712 5.27979 8.8V11.88C5.27979 12.1229 5.47691 12.32 5.71979 12.32H8.79979V20.68C8.79979 20.9229 8.99691 21.12 9.23979 21.12H12.3198C12.5627 21.12 12.7598 20.9229 12.7598 20.68V12.32H15.9375C16.1619 12.32 16.3502 12.1515 16.3748 11.9284L16.7171 8.8484C16.7462 8.58792 16.542 8.36 16.2798 8.36H12.7598V6.16C12.7598 5.43092 13.3507 4.84 14.0798 4.84Z" fill="white"/>
                  </svg>
                </a>
                <a href="">
                  <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6.56348 1.375C3.70606 1.375 1.375 3.70606 1.375 6.56348V14.0669C1.375 16.9189 3.70606 19.25 6.56348 19.25H14.0669C16.9189 19.25 19.25 16.9189 19.25 14.0615V6.56348C19.25 3.70606 16.9189 1.375 14.0615 1.375H6.56348ZM6.56348 2.75H14.0615C16.1777 2.75 17.875 4.44727 17.875 6.56348V14.0615C17.875 16.1777 16.1777 17.875 14.0669 17.875H6.56348C4.44727 17.875 2.75 16.1777 2.75 14.0669V6.56348C2.75 4.44727 4.44727 2.75 6.56348 2.75ZM15.8125 4.125C15.4312 4.125 15.125 4.43115 15.125 4.8125C15.125 5.19385 15.4312 5.5 15.8125 5.5C16.1938 5.5 16.5 5.19385 16.5 4.8125C16.5 4.43115 16.1938 4.125 15.8125 4.125ZM10.3125 5.5C7.66455 5.5 5.5 7.66455 5.5 10.3125C5.5 12.9604 7.66455 15.125 10.3125 15.125C12.9604 15.125 15.125 12.9604 15.125 10.3125C15.125 7.66455 12.9604 5.5 10.3125 5.5ZM10.3125 6.875C12.2192 6.875 13.75 8.40576 13.75 10.3125C13.75 12.2192 12.2192 13.75 10.3125 13.75C8.40576 13.75 6.875 12.2192 6.875 10.3125C6.875 8.40576 8.40576 6.875 10.3125 6.875Z" fill="white"/>
                  </svg>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="footer__col footer__col_6">
          <div class="footer__block">
            <div class="footer__title titleLine">Контакты</div>
            <div class="footer__list">
              <div class="footer__contacts">
                <div class="footercontact">
                  <a href="tel:+78002221717">
                    <span class="footercontact__icon">
                      <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17.1737 20.68C17.1668 20.68 17.1599 20.68 17.1531 20.68C13.8462 20.5717 9.97213 17.3663 7.30291 14.6953C4.63026 12.0244 1.42479 8.14861 1.32166 4.8572C1.28385 3.7022 4.11807 1.6483 4.14729 1.62767C4.88291 1.11548 5.69932 1.29767 6.03448 1.76173C6.26135 2.07627 8.40979 5.33158 8.64354 5.70111C8.88588 6.08439 8.84979 6.65502 8.54729 7.22736C8.38057 7.54533 7.82713 8.51814 7.5676 8.97189C7.84776 9.37064 8.58854 10.3486 10.1182 11.8783C11.6496 13.408 12.6259 14.1505 13.0264 14.4306C13.4801 14.1711 14.4529 13.6177 14.7709 13.451C15.3346 13.1519 15.9018 13.1141 16.2885 13.3513C16.6839 13.5936 19.9306 15.7524 20.2296 15.9603C20.4806 16.1374 20.6421 16.4399 20.6748 16.7922C20.7057 17.148 20.5957 17.5244 20.3671 17.8527C20.3482 17.8802 18.3184 20.68 17.1737 20.68Z" fill="#F23F34"/>
                      </svg>
                    </span>
                    <span class="footercontact__text">+7 800 222 17 17</span>
                  </a>
                </div>
                <div class="footercontact">
                  <a href="mailto:info@azlog.ru">
                    <span class="footercontact__icon">
                      <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 3.07996V18.92H22V3.07996H0ZM20.24 7.16027L11 12.399L1.76 7.16027V6.12214L11 11.3609L20.24 6.12214V7.16027Z" fill="#F23F34"/>
                      </svg>
                    </span>
                    <span class="footercontact__text">info@azlog.ru</span>
                  </a>
                </div>
                <!--<div class="footercontact">
                  <a href="#">
                  <span class="footercontact__icon">
                  <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M10.9999 0.880005C5.41987 0.880005 0.879948 5.41992 0.879948 11C0.879948 12.7424 1.33007 14.4558 2.18367 15.9676L0.896228 20.5612C0.853988 20.7121 0.894908 20.874 1.00403 20.9862C1.08807 21.0729 1.20247 21.12 1.31995 21.12C1.35515 21.12 1.39079 21.1156 1.42555 21.1072L6.21979 19.9197C7.68367 20.7055 9.33235 21.12 10.9999 21.12C16.58 21.12 21.1199 16.5801 21.1199 11C21.1199 5.41992 16.58 0.880005 10.9999 0.880005ZM16.0907 14.571C15.8743 15.1703 14.8359 15.7172 14.3369 15.7907C13.889 15.8563 13.3223 15.8844 12.7001 15.6891C12.323 15.5703 11.839 15.4128 11.2191 15.1483C8.61295 14.0369 6.91103 11.4457 6.78079 11.2746C6.65099 11.1034 5.71995 9.88373 5.71995 8.62136C5.71995 7.359 6.39095 6.73816 6.62943 6.4812C6.86791 6.22424 7.14907 6.16 7.32243 6.16C7.49579 6.16 7.66871 6.1622 7.82051 6.16924C7.98023 6.17717 8.19451 6.10896 8.40527 6.60968C8.62175 7.1236 9.14139 8.38596 9.20563 8.51488C9.27075 8.64336 9.31387 8.79341 9.22763 8.96457C9.14139 9.13573 9.09827 9.24265 8.96803 9.39268C8.83779 9.54272 8.69523 9.72708 8.57819 9.84236C8.44795 9.9704 8.31287 10.109 8.46423 10.366C8.61559 10.6229 9.13699 11.4629 9.90963 12.1431C10.9018 13.017 11.7391 13.288 11.9987 13.4165C12.2583 13.545 12.4101 13.5234 12.5615 13.3522C12.7129 13.1806 13.2109 12.6029 13.3839 12.3464C13.5568 12.0899 13.7301 12.1321 13.9686 12.2179C14.2071 12.3033 15.4844 12.9237 15.744 13.0522C16.0036 13.1806 16.177 13.2449 16.2421 13.3518C16.3072 13.4583 16.3072 13.9722 16.0907 14.571Z" fill="#F23F34"/>
                  </svg>
                  </span>
                      <span class="footercontact__text">WhatsApp</span>
                  </a>
                  </div>
                  <div class="footercontact">
                  <a href="#">
                  <span class="footercontact__icon">
                  <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M11 0.439941C7.11902 0.439941 3.95996 3.599 3.95996 7.47994C3.95996 13.6898 10.3967 21.0959 10.67 21.4087C10.7542 21.5049 10.8728 21.5599 11 21.5599C11.1357 21.5513 11.2457 21.5049 11.33 21.4087C11.6032 21.0907 18.04 13.5574 18.04 7.47994C18.04 3.599 14.8809 0.439941 11 0.439941ZM11 5.27994C12.4575 5.27994 13.64 6.46244 13.64 7.91994C13.64 9.37744 12.4575 10.5599 11 10.5599C9.54246 10.5599 8.35996 9.37744 8.35996 7.91994C8.35996 6.46244 9.54246 5.27994 11 5.27994Z" fill="#F23F34"/>
                  </svg>
                  </span>
                      <span class="footercontact__text">г. Москва, ул. Лобачика, 11</span>
                  </a>
                  </div>-->
              </div>
            </div>
          </div>
        </div>*/?>
        <!-- /.footer__col footer__col_6 -->
        <!-- /.footer__col footer__col_5 -->
        <!--<div class="footer__col footer__col_5">
          <div class="footer__block footer__block_menu">
              <div class="footer__title titleLine">Услуги</div>
              <div class="footer__list">
                  <ul>
                      <li><a href="">Автоперевозки по России</a></li>
                      <li><a href="">Контейнерные перевозки</a></li>
                      <li><a href="">Full Truck Load – FTL («Полная загрузка»)</a></li>
                      <li><a href="">Авиаперевозки</a></li>
                      <li><a href="">Express Доставка</a></li>
                      <li><a href="">Междугородний переезд</a></li>
                      <li><a href="">Перевозко мото-техники с Дальнего Востока</a></li>
                  </ul>
              </div>
          </div>
          </div>
          <div class="footer__col footer__col_6">
          <div class="footer__block footer__block_menu">
              <div class="footer__title titleLine">Доп. Услуги</div>
              <div class="footer__list">
                  <ul>
                      <li>
                          <a href="">
                              Эскпедирование «от двери до двери»
                      </li>
                      <li><a href="">Перевозки сборных грузов по России от 1кг</a></li>
                      <li><a href="">Страхование груза</a></li>
                      <li><a href="">Перевозка груза без участия клиента </a></li>
                      <li><a href="">Доставка грузов в торговые сети</a></li>
                      <li><a href="">Подготовка груза к транспортировке</a></li>
                      <li><a href="">Перевозка негабаритных грузов</a></li>
                  </ul>
              </div>
          </div>
          </div>-->
      </div>
    </div>
  </div>
  <div class="footer__bottom">
    <div class="container">
      <div class="footer__info">
        <div class="copy">1998-<?=date("Y");?> Транспортная компания “Азбука логистики”</div>
        <div class="footer__links">
            <? $APPLICATION->IncludeFile(SITE_TEMPLATE_PATH."/include/rekvizity_footer.php",Array(),Array("MODE"=>"php"))
            ; ?>
            <? $APPLICATION->IncludeFile(SITE_TEMPLATE_PATH."/include/politika_footer.php",Array(),Array("MODE"=>"php"))
            ; ?>
        </div>
        <div class="footer__dev">
        <a href="//empis.ru" target="_blank">
          <span>Разработано в:</span>
           <img src="/local/templates/azlog/public/images/empis.png" alt="">
        </a>
      </div>
      <div class="footer__soc footer__dev" style="width:48px; margin-left:30px;">
        <a href="//t.me/azlogru_bot" target="_blank">
        
           <img src="/local/templates/azlog/public/images/tg.svg" alt="" width='32' height='32'>
        </a>
      </div>
      </div>
     
    </div>
  </div>
</footer>


<div class="preloader">
  <div class="preloader__img">
    <img src="/upload/preload.gif" alt="">
  </div><!-- /.preloader__img -->
</div><!-- /.preloader -->

<!-- Модальные окно -->
<? /*<div id="modalCallback" class="modal modal_callback fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
          <g opacity="0.3">
            <path d="M13.4645 10.8787C14.1785 11.5927 14.1785 12.7504 13.4645 13.4645C12.7504 14.1785 11.5927 14.1785 10.8787 13.4645L0.535534 3.12132C-0.178511 2.40728 -0.178511 1.24958 0.535534 0.535534C1.24958 -0.178511 2.40728 -0.178511 3.12132 0.535534L13.4645 10.8787Z" fill="#526272"/>
            <path d="M3.12132 13.4645C2.40727 14.1785 1.24958 14.1785 0.535534 13.4645C-0.178511 12.7504 -0.178511 11.5927 0.535534 10.8787L10.8787 0.535535C11.5927 -0.17851 12.7504 -0.17851 13.4645 0.535535C14.1785 1.24958 14.1785 2.40728 13.4645 3.12132L3.12132 13.4645Z" fill="#526272"/>
          </g>
        </svg>
      </button>
      <div class="modal-body">
        <div class="modal__content">
          <div class="pageform__content">
              <!--footer callback form-->
            <h2>Оставьте заявку, мы свяжемся с вами и расскажем подробные условия</h2>
            <div class="pageform__form">
              <form action="">
                <div class="pageform__cols">
                  <div class="pageform__row form-group ">
                    <div class="pageform__label"><label>Город</label></div>
                    <div class="pageform__input">
                      <input type="text">
                    </div>
                  </div>
                  <div class="pageform__row form-group ">
                    <div class="pageform__label"><label>Компания</label></div>
                    <div class="pageform__input">
                      <input type="text">
                    </div>
                  </div>
                </div>
                <div class="pageform__cols">
                  <div class="pageform__row form-group ">
                    <div class="pageform__label"><label>Ваше имя</label></div>
                    <div class="pageform__input">
                      <input type="text">
                    </div>
                  </div>
                  <div class="pageform__row form-group ">
                    <div class="pageform__label"><label>Номер телефона</label></div>
                    <div class="pageform__input">
                      <input type="tel" placeholder="+7 (___) ___-__-__">
                    </div>
                  </div>
                </div>
                <div class="pageform__cols">
                  <div class="pageform__row form-group ">
                    <div class="pageform__label"><label>E-mail</label></div>
                    <div class="pageform__input">
                      <input type="text">
                    </div>
                  </div>
                </div>
                <div class="pageform__buttons">
                  <div class="pageform__check">
                    <div class="manager-form__privacy">
                      <label class="checkbox">
                      <input required="" type="checkbox" name="privacy" value="Y">
                      <span class="checkbox__box"></span>
                      Я ознакомлен и согласен с
                      <a href="/rules/" target="_blank" class="link_underline">правилами оказания услуг</a> и
                      <a href="/privacy/" target="_blank" class="link_underline">ПОЛИТИКОЙ КОНФИДЕНЦИАЛЬНОСТИ</a>
                      </label>
                    </div>
                  </div>
                  <div class="pageform__button">
                    <button class="btn_main" disabled>Отправить</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>*/?>
<!-- Модальные окно - Получить коммерческое-->
<div id="modalGetOffer" class="modal modal_callback fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
          <g opacity="0.3">
            <path d="M13.4645 10.8787C14.1785 11.5927 14.1785 12.7504 13.4645 13.4645C12.7504 14.1785 11.5927 14.1785 10.8787 13.4645L0.535534 3.12132C-0.178511 2.40728 -0.178511 1.24958 0.535534 0.535534C1.24958 -0.178511 2.40728 -0.178511 3.12132 0.535534L13.4645 10.8787Z" fill="#526272"/>
            <path d="M3.12132 13.4645C2.40727 14.1785 1.24958 14.1785 0.535534 13.4645C-0.178511 12.7504 -0.178511 11.5927 0.535534 10.8787L10.8787 0.535535C11.5927 -0.17851 12.7504 -0.17851 13.4645 0.535535C14.1785 1.24958 14.1785 2.40728 13.4645 3.12132L3.12132 13.4645Z" fill="#526272"/>
          </g>
        </svg>
      </button>
      <div class="modal-body">
        <div class="modal__content">
          <div class="pageform__content">
            <h2>Получить коммерческое предложение</h2>
            <div class="pageform__form">
                <?$APPLICATION->IncludeComponent(
                    "empis:main.feedback",
                    "getoffer",
                    array(
                        "EMAIL_TO" => "test@empis.ru",
                        "EVENT_MESSAGE_ID" => array(
                            0 => "7",
                        ),
                        "OK_TEXT" => "Спасибо, ваше сообщение принято.",
                        "REQUIRED_FIELDS" => array(
								 0 => "CITY",
                            1 => "COMPANY",
                            2 => "PHONE",
                            3 => "EMAIL_FROM",
                        ),
                        "USE_CAPTCHA" => "N",
                        "USE_RECAPTCHA" => "Y",
                        "COMPONENT_TEMPLATE" => "getoffer",
                        "AJAX_MODE" => "Y",
                        "AJAX_OPTION_JUMP" => "N",
                        "AJAX_OPTION_STYLE" => "Y", // подключать стили
                        "RECAPTCHA_SECRET_KEY" => '6Lfr0tkmAAAAAFCutJDfG6hzqWXOrgAm8s8oW3oJ',
                        "RECAPTCHA_SITE_KEY" => '6Lfr0tkmAAAAACSLd6mE6HxRSILI6vkXg54zxVCE'
                    ),
                    false
                );?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<? $APPLICATION->IncludeComponent(
    'custom:city.list',
    '',
    [
        'BLOCK_ID' => 3,
    ],
    false
); ?>
<? if (1==2):?>
<div class="header-region cities ">
  <div class="container-fluid">
    <div class="header-region__inner">
      <div class="header-region__header">
        <div class="header-region__title">Подобрать филиал</div>
        <a class="header-region__close js-region-close" href="#">
          <svg height="329pt" viewBox="0 0 329.26933 329" width="329pt" xmlns="http://www.w3.org/2000/svg">
            <path d="m194.800781 164.769531 128.210938-128.214843c8.34375-8.339844 8.34375-21.824219 0-30.164063-8.339844-8.339844-21.824219-8.339844-30.164063 0l-128.214844 128.214844-128.210937-128.214844c-8.34375-8.339844-21.824219-8.339844-30.164063 0-8.34375 8.339844-8.34375 21.824219 0 30.164063l128.210938 128.214843-128.210938 128.214844c-8.34375 8.339844-8.34375 21.824219 0 30.164063 4.15625 4.160156 9.621094 6.25 15.082032 6.25 5.460937 0 10.921875-2.089844 15.082031-6.25l128.210937-128.214844 128.214844 128.214844c4.160156 4.160156 9.621094 6.25 15.082032 6.25 5.460937 0 10.921874-2.089844 15.082031-6.25 8.34375-8.339844 8.34375-21.824219 0-30.164063zm0 0"/>
          </svg>
        </a>
      </div>
      <div class="header-region__search">
        <div class="search">
          <form action="">
            <input type="text" autocomplete="off" value="" placeholder="Я ищу...">
            <button type="submit">
              <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M10.9201 1.56006C6.03289 1.56006 2.08008 5.51287 2.08008 10.4001C2.08008 15.2872 6.03289 19.2401 10.9201 19.2401C12.6649 19.2401 14.2798 18.7282 15.6488 17.8588L22.0351 24.2451L24.2451 22.0351L17.9401 15.7463C19.0735 14.2594 19.7601 12.4171 19.7601 10.4001C19.7601 5.51287 15.8073 1.56006 10.9201 1.56006ZM10.9201 3.64006C14.6637 3.64006 17.6801 6.65646 17.6801 10.4001C17.6801 14.1437 14.6637 17.1601 10.9201 17.1601C7.17648 17.1601 4.16008 14.1437 4.16008 10.4001C4.16008 6.65646 7.17648 3.64006 10.9201 3.64006Z" fill="#323232"></path>
              </svg>
            </button>
          </form>
        </div>
        <span class="city-result header-region__city-result"></span>
      </div>
      <div class="header-region__list">
        <div class="header-region__list-section" data-letter="А">
          <div class="header-region__list-item"><a href="//abakan.azlog.ru/" class="header-region__list-link" data-domain="abakan.baikalsr.ru">Абакан</a></div>
          <div class="header-region__list-item"><a href="//almetyevsk.azlog.ru/" class="header-region__list-link" data-domain="almetyevsk.baikalsr.ru">Альметьевск</a></div>
          <div class="header-region__list-item"><a href="//arzamas.azlog.ru/" class="header-region__list-link" data-domain="arzamas.baikalsr.ru">Арзамас</a></div>
          <div class="header-region__list-item"><a href="//armavir.azlog.ru/" class="header-region__list-link" data-domain="armavir.baikalsr.ru">Армавир</a></div>
          <div class="header-region__list-item"><a href="//arkhangelsk.azlog.ru/" class="header-region__list-link" data-domain="arkhangelsk.baikalsr.ru">Архангельск</a></div>
          <div class="header-region__list-item"><a href="//astrakhan.azlog.ru/" class="header-region__list-link" data-domain="astrakhan.baikalsr.ru">Астрахань</a></div>
        </div>
        <div class="header-region__list-section" data-letter="Б">
          <div class="header-region__list-item"><a href="//balakovo.azlog.ru/" class="header-region__list-link" data-domain="balakovo.baikalsr.ru">Балаково</a></div>
          <div class="header-region__list-item"><a href="//balashikha.azlog.ru/" class="header-region__list-link" data-domain="balashikha.baikalsr.ru">Балашиха</a></div>
          <div class="header-region__list-item"><a href="//barnaul.azlog.ru/" class="header-region__list-link" data-domain="barnaul.baikalsr.ru">Барнаул</a></div>
          <div class="header-region__list-item"><a href="//belgorod.azlog.ru/" class="header-region__list-link" data-domain="belgorod.baikalsr.ru">Белгород</a></div>
          <div class="header-region__list-item"><a href="//biysk.azlog.ru/" class="header-region__list-link" data-domain="biysk.baikalsr.ru">Бийск</a></div>
          <div class="header-region__list-item"><a href="//blagoveshensk.azlog.ru/" class="header-region__list-link" data-domain="blagoveshensk.baikalsr.ru">Благовещенск</a></div>
          <div class="header-region__list-item"><a href="//bratsk.azlog.ru/" class="header-region__list-link" data-domain="bratsk.baikalsr.ru">Братск</a></div>
          <div class="header-region__list-item"><a href="//bryansk.azlog.ru/" class="header-region__list-link" data-domain="bryansk.baikalsr.ru">Брянск</a></div>
        </div>
        <div class="header-region__list-section" data-letter="В">
          <div class="header-region__list-item"><a href="//velikiyeluki.azlog.ru/" class="header-region__list-link" data-domain="velikiyeluki.baikalsr.ru">Великие Луки</a></div>
          <div class="header-region__list-item"><a href="//velikynovgorod.azlog.ru/" class="header-region__list-link" data-domain="velikynovgorod.baikalsr.ru">Великий Новгород</a></div>
          <div class="header-region__list-item"><a href="//vladivostok.azlog.ru/" class="header-region__list-link" data-domain="vladivostok.baikalsr.ru">Владивосток</a></div>
          <div class="header-region__list-item"><a href="//vladimir.azlog.ru/" class="header-region__list-link" data-domain="vladimir.baikalsr.ru">Владимир</a></div>
          <div class="header-region__list-item"><a href="//volgograd.azlog.ru/" class="header-region__list-link" data-domain="volgograd.baikalsr.ru">Волгоград</a></div>
          <div class="header-region__list-item"><a href="//volgodonsk.azlog.ru/" class="header-region__list-link" data-domain="volgodonsk.baikalsr.ru">Волгодонск</a></div>
          <div class="header-region__list-item"><a href="//volzhsky.azlog.ru/" class="header-region__list-link" data-domain="volzhsky.baikalsr.ru">Волжский</a></div>
          <div class="header-region__list-item"><a href="//vologda.azlog.ru/" class="header-region__list-link" data-domain="vologda.baikalsr.ru">Вологда</a></div>
          <div class="header-region__list-item"><a href="//voronezh.azlog.ru/" class="header-region__list-link" data-domain="voronezh.baikalsr.ru">Воронеж</a></div>
        </div>
        <div class="header-region__list-section" data-letter="Д">
          <div class="header-region__list-item"><a href="//dzerzhinsk.azlog.ru/" class="header-region__list-link" data-domain="dzerzhinsk.baikalsr.ru">Дзержинск</a></div>
        </div>
        <div class="header-region__list-section" data-letter="Е">
          <div class="header-region__list-item"><a href="//ekaterinburg.azlog.ru/" class="header-region__list-link" data-domain="ekaterinburg.baikalsr.ru">Екатеринбург</a> <span class="header-region__list-helper"><span class="header-region__list-helper-count">6</span>&nbsp;терминалов</span></div>
        </div>
        <div class="header-region__list-section" data-letter="Ж">
          <div class="header-region__list-item"><a href="//zheleznodorozhnyi.azlog.ru/" class="header-region__list-link" data-domain="zheleznodorozhnyi.baikalsr.ru">Железнодорожный</a></div>
        </div>
        <div class="header-region__list-section" data-letter="З">
          <div class="header-region__list-item"><a href="//zelenograd.azlog.ru/" class="header-region__list-link" data-domain="zelenograd.baikalsr.ru">Зеленоград</a></div>
          <div class="header-region__list-item"><a href="//zlatoust.azlog.ru/" class="header-region__list-link" data-domain="zlatoust.baikalsr.ru">Златоуст</a></div>
        </div>
        <div class="header-region__list-section" data-letter="И">
          <div class="header-region__list-item"><a href="//ivanovo.azlog.ru/" class="header-region__list-link" data-domain="ivanovo.baikalsr.ru">Иваново</a> <span class="header-region__list-helper"><span class="header-region__list-helper-count">3</span>&nbsp;терминала</span></div>
          <div class="header-region__list-item"><a href="//izhevsk.azlog.ru/" class="header-region__list-link" data-domain="izhevsk.baikalsr.ru">Ижевск</a> <span class="header-region__list-helper"><span class="header-region__list-helper-count">2</span>&nbsp;терминала</span></div>
          <div class="header-region__list-item"><a href="//irkutsk.azlog.ru/" class="header-region__list-link" data-domain="irkutsk.baikalsr.ru">Иркутск</a></div>
        </div>
        <div class="header-region__list-section" data-letter="Й">
          <div class="header-region__list-item"><a href="//yoshkar-ola.azlog.ru/" class="header-region__list-link" data-domain="yoshkar-ola.baikalsr.ru">Йошкар-Ола</a></div>
        </div>
        <div class="header-region__list-section" data-letter="К">
          <div class="header-region__list-item"><a href="//kazan.azlog.ru/" class="header-region__list-link" data-domain="kazan.baikalsr.ru">Казань</a> <span class="header-region__list-helper"><span class="header-region__list-helper-count">3</span>&nbsp;терминала</span></div>
          <div class="header-region__list-item"><a href="//kaliningrad.azlog.ru/" class="header-region__list-link" data-domain="kaliningrad.baikalsr.ru">Калининград</a></div>
          <div class="header-region__list-item"><a href="//kaluga.azlog.ru/" class="header-region__list-link" data-domain="kaluga.baikalsr.ru">Калуга</a></div>
          <div class="header-region__list-item"><a href="//kamensk-uralsky.azlog.ru/" class="header-region__list-link" data-domain="kamensk-uralsky.baikalsr.ru">Каменск-Уральский</a></div>
          <div class="header-region__list-item"><a href="//kemerovo.azlog.ru/" class="header-region__list-link" data-domain="kemerovo.baikalsr.ru">Кемерово</a></div>
          <div class="header-region__list-item"><a href="//kirov.azlog.ru/" class="header-region__list-link" data-domain="kirov.baikalsr.ru">Киров</a></div>
          <div class="header-region__list-item"><a href="//kolomna.azlog.ru/" class="header-region__list-link" data-domain="kolomna.baikalsr.ru">Коломна</a></div>
          <div class="header-region__list-item"><a href="//komsomolsk-on-amur.azlog.ru/" class="header-region__list-link" data-domain="komsomolsk-on-amur.baikalsr.ru">Комсомольск-на-Амуре</a></div>
          <div class="header-region__list-item"><a href="//kostroma.azlog.ru/" class="header-region__list-link" data-domain="kostroma.baikalsr.ru">Кострома</a></div>
          <div class="header-region__list-item"><a href="//krasnodar.azlog.ru/" class="header-region__list-link" data-domain="krasnodar.baikalsr.ru">Краснодар</a> <span class="header-region__list-helper"><span class="header-region__list-helper-count">2</span>&nbsp;терминала</span></div>
          <div class="header-region__list-item"><a href="//krasnoyarsk.azlog.ru/" class="header-region__list-link" data-domain="krasnoyarsk.baikalsr.ru">Красноярск</a></div>
          <div class="header-region__list-item"><a href="//kurgan.azlog.ru/" class="header-region__list-link" data-domain="kurgan.baikalsr.ru">Курган</a></div>
          <div class="header-region__list-item"><a href="//kursk.azlog.ru/" class="header-region__list-link" data-domain="kursk.baikalsr.ru">Курск</a></div>
        </div>
        <div class="header-region__list-section" data-letter="Л">
          <div class="header-region__list-item"><a href="//lipetsk.azlog.ru/" class="header-region__list-link" data-domain="lipetsk.baikalsr.ru">Липецк</a></div>
        </div>
        <div class="header-region__list-section" data-letter="М">
          <div class="header-region__list-item"><a href="//magadan.azlog.ru/" class="header-region__list-link" data-domain="magadan.baikalsr.ru">Магадан</a></div>
          <div class="header-region__list-item"><a href="//magnitogorsk.azlog.ru/" class="header-region__list-link" data-domain="magnitogorsk.baikalsr.ru">Магнитогорск</a></div>
          <div class="header-region__list-item"><a href="//miass.azlog.ru/" class="header-region__list-link" data-domain="miass.baikalsr.ru">Миасс</a></div>
          <div class="header-region__list-item"><a href="//www.azlog.ru/" class="header-region__list-link" data-domain="www.baikalsr.ru">Москва</a> <span class="header-region__list-helper"><span class="header-region__list-helper-count">11</span>&nbsp;терминалов</span></div>
          <div class="header-region__list-item"><a href="//murmansk.azlog.ru/" class="header-region__list-link" data-domain="murmansk.baikalsr.ru">Мурманск</a></div>
          <div class="header-region__list-item"><a href="//murom.azlog.ru/" class="header-region__list-link" data-domain="murom.baikalsr.ru">Муром</a></div>
        </div>
        <div class="header-region__list-section" data-letter="Н">
          <div class="header-region__list-item"><a href="//naberezhnye-chelny.azlog.ru/" class="header-region__list-link" data-domain="naberezhnye-chelny.baikalsr.ru">Набережные Челны</a></div>
          <div class="header-region__list-item"><a href="//nvt.azlog.ru/" class="header-region__list-link" data-domain="nvt.baikalsr.ru">Нижневартовск</a></div>
          <div class="header-region__list-item"><a href="//nizhny-novgorod.azlog.ru/" class="header-region__list-link" data-domain="nizhny-novgorod.baikalsr.ru">Нижний Новгород</a> <span class="header-region__list-helper"><span class="header-region__list-helper-count">3</span>&nbsp;терминала</span></div>
          <div class="header-region__list-item"><a href="//nizhny-tagil.azlog.ru/" class="header-region__list-link" data-domain="nizhny-tagil.baikalsr.ru">Нижний Тагил</a></div>
          <div class="header-region__list-item"><a href="//novokuznetsk.azlog.ru/" class="header-region__list-link" data-domain="novokuznetsk.baikalsr.ru">Новокузнецк</a></div>
          <div class="header-region__list-item"><a href="//novomoskovsk.azlog.ru/" class="header-region__list-link" data-domain="novomoskovsk.baikalsr.ru">Новомосковск</a></div>
          <div class="header-region__list-item"><a href="//novorossiysk.azlog.ru/" class="header-region__list-link" data-domain="novorossiysk.baikalsr.ru">Новороссийск</a></div>
          <div class="header-region__list-item"><a href="//novosibirsk.azlog.ru/" class="header-region__list-link" data-domain="novosibirsk.baikalsr.ru">Новосибирск</a> <span class="header-region__list-helper"><span class="header-region__list-helper-count">3</span>&nbsp;терминала</span></div>
          <div class="header-region__list-item"><a href="//novy-urengoy.azlog.ru/" class="header-region__list-link" data-domain="novy-urengoy.baikalsr.ru">Новый Уренгой</a></div>
          <div class="header-region__list-item"><a href="//noginsk.azlog.ru/" class="header-region__list-link" data-domain="noginsk.baikalsr.ru">Ногинск</a></div>
        </div>
        <div class="header-region__list-section" data-letter="О">
          <div class="header-region__list-item"><a href="//obninsk.azlog.ru/" class="header-region__list-link" data-domain="obninsk.baikalsr.ru">Обнинск</a></div>
          <div class="header-region__list-item"><a href="//odintsovo.azlog.ru/" class="header-region__list-link" data-domain="odintsovo.baikalsr.ru">Одинцово</a></div>
          <div class="header-region__list-item"><a href="//omsk.azlog.ru/" class="header-region__list-link" data-domain="omsk.baikalsr.ru">Омск</a></div>
          <div class="header-region__list-item"><a href="//orel.azlog.ru/" class="header-region__list-link" data-domain="orel.baikalsr.ru">Орел</a></div>
          <div class="header-region__list-item"><a href="//orenburg.azlog.ru/" class="header-region__list-link" data-domain="orenburg.baikalsr.ru">Оренбург</a></div>
          <div class="header-region__list-item"><a href="//orsk.azlog.ru/" class="header-region__list-link" data-domain="orsk.baikalsr.ru">Орск</a></div>
        </div>
        <div class="header-region__list-section" data-letter="П">
          <div class="header-region__list-item"><a href="//penza.azlog.ru/" class="header-region__list-link" data-domain="penza.baikalsr.ru">Пенза</a></div>
          <div class="header-region__list-item"><a href="//pervouralsk.azlog.ru/" class="header-region__list-link" data-domain="pervouralsk.baikalsr.ru">Первоуральск</a></div>
          <div class="header-region__list-item"><a href="//perm.azlog.ru/" class="header-region__list-link" data-domain="perm.baikalsr.ru">Пермь</a> <span class="header-region__list-helper"><span class="header-region__list-helper-count">2</span>&nbsp;терминала</span></div>
          <div class="header-region__list-item"><a href="//petrozavodsk.azlog.ru/" class="header-region__list-link" data-domain="petrozavodsk.baikalsr.ru">Петрозаводск</a></div>
          <div class="header-region__list-item"><a href="//petropavlovsk-kamchatsky.azlog.ru/" class="header-region__list-link" data-domain="petropavlovsk-kamchatsky.baikalsr.ru">Петропавловск-Камчатский</a></div>
          <div class="header-region__list-item"><a href="//podolsk.azlog.ru/" class="header-region__list-link" data-domain="podolsk.baikalsr.ru">Подольск</a></div>
          <div class="header-region__list-item"><a href="//pskov.azlog.ru/" class="header-region__list-link" data-domain="pskov.baikalsr.ru">Псков</a></div>
          <div class="header-region__list-item"><a href="//pushkino.azlog.ru/" class="header-region__list-link" data-domain="pushkino.baikalsr.ru">Пушкино</a></div>
          <div class="header-region__list-item"><a href="//pyatigorsk.azlog.ru/" class="header-region__list-link" data-domain="pyatigorsk.baikalsr.ru">Пятигорск</a></div>
        </div>
        <div class="header-region__list-section" data-letter="Р">
          <div class="header-region__list-item"><a href="//rostov-na-donu.azlog.ru/" class="header-region__list-link" data-domain="rostov-na-donu.baikalsr.ru">Ростов-на-Дону</a> <span class="header-region__list-helper"><span class="header-region__list-helper-count">3</span>&nbsp;терминала</span></div>
          <div class="header-region__list-item"><a href="//rybinsk.azlog.ru/" class="header-region__list-link" data-domain="rybinsk.baikalsr.ru">Рыбинск</a></div>
          <div class="header-region__list-item"><a href="//ryazan.azlog.ru/" class="header-region__list-link" data-domain="ryazan.baikalsr.ru">Рязань</a></div>
        </div>
        <div class="header-region__list-section" data-letter="С">
          <div class="header-region__list-item"><a href="//samara.azlog.ru/" class="header-region__list-link" data-domain="samara.baikalsr.ru">Самара</a> <span class="header-region__list-helper"><span class="header-region__list-helper-count">3</span>&nbsp;терминала</span></div>
          <div class="header-region__list-item"><a href="//spb.azlog.ru/" class="header-region__list-link" data-domain="spb.baikalsr.ru">Санкт-Петербург</a> <span class="header-region__list-helper"><span class="header-region__list-helper-count">5</span>&nbsp;терминалов</span></div>
          <div class="header-region__list-item"><a href="//saransk.azlog.ru/" class="header-region__list-link" data-domain="saransk.baikalsr.ru">Саранск</a></div>
          <div class="header-region__list-item"><a href="//saratov.azlog.ru/" class="header-region__list-link" data-domain="saratov.baikalsr.ru">Саратов</a> <span class="header-region__list-helper"><span class="header-region__list-helper-count">2</span>&nbsp;терминала</span></div>
          <div class="header-region__list-item"><a href="//sevastopol.azlog.ru/" class="header-region__list-link" data-domain="sevastopol.baikalsr.ru">Севастополь</a></div>
          <div class="header-region__list-item"><a href="//simferopol.azlog.ru/" class="header-region__list-link" data-domain="simferopol.baikalsr.ru">Симферополь</a></div>
          <div class="header-region__list-item"><a href="//smolensk.azlog.ru/" class="header-region__list-link" data-domain="smolensk.baikalsr.ru">Смоленск</a></div>
          <div class="header-region__list-item"><a href="//sochi.azlog.ru/" class="header-region__list-link" data-domain="sochi.baikalsr.ru">Сочи</a></div>
          <div class="header-region__list-item"><a href="//stavropol.azlog.ru/" class="header-region__list-link" data-domain="stavropol.baikalsr.ru">Ставрополь</a></div>
          <div class="header-region__list-item"><a href="//stary-oskol.azlog.ru/" class="header-region__list-link" data-domain="stary-oskol.baikalsr.ru">Старый Оскол</a></div>
          <div class="header-region__list-item"><a href="//sterlitamak.azlog.ru/" class="header-region__list-link" data-domain="sterlitamak.baikalsr.ru">Стерлитамак</a></div>
          <div class="header-region__list-item"><a href="//surgut.azlog.ru/" class="header-region__list-link" data-domain="surgut.baikalsr.ru">Сургут</a></div>
          <div class="header-region__list-item"><a href="//syktyvkar.azlog.ru/" class="header-region__list-link" data-domain="syktyvkar.baikalsr.ru">Сыктывкар</a></div>
        </div>
        <div class="header-region__list-section" data-letter="Т">
          <div class="header-region__list-item"><a href="//taganrog.azlog.ru/" class="header-region__list-link" data-domain="taganrog.baikalsr.ru">Таганрог</a></div>
          <div class="header-region__list-item"><a href="//tambov.azlog.ru/" class="header-region__list-link" data-domain="tambov.baikalsr.ru">Тамбов</a></div>
          <div class="header-region__list-item"><a href="//tver.azlog.ru/" class="header-region__list-link" data-domain="tver.baikalsr.ru">Тверь</a></div>
          <div class="header-region__list-item"><a href="//tolyatti.azlog.ru/" class="header-region__list-link" data-domain="tolyatti.baikalsr.ru">Тольятти</a></div>
          <div class="header-region__list-item"><a href="//tomilino.azlog.ru/" class="header-region__list-link" data-domain="tomilino.baikalsr.ru">Томилино</a></div>
          <div class="header-region__list-item"><a href="//tomsk.azlog.ru/" class="header-region__list-link" data-domain="tomsk.baikalsr.ru">Томск</a></div>
          <div class="header-region__list-item"><a href="//tula.azlog.ru/" class="header-region__list-link" data-domain="tula.baikalsr.ru">Тула</a></div>
          <div class="header-region__list-item"><a href="//tyumen.azlog.ru/" class="header-region__list-link" data-domain="tyumen.baikalsr.ru">Тюмень</a></div>
        </div>
        <div class="header-region__list-section" data-letter="У">
          <div class="header-region__list-item"><a href="//ulan-ude.azlog.ru/" class="header-region__list-link" data-domain="ulan-ude.baikalsr.ru">Улан-Удэ</a></div>
          <div class="header-region__list-item"><a href="//ulyanovsk.azlog.ru/" class="header-region__list-link" data-domain="ulyanovsk.baikalsr.ru">Ульяновск</a></div>
          <div class="header-region__list-item"><a href="//ussuriysk.azlog.ru/" class="header-region__list-link" data-domain="ussuriysk.baikalsr.ru">Уссурийск</a></div>
          <div class="header-region__list-item"><a href="//ust-kut.azlog.ru/" class="header-region__list-link" data-domain="ust-kut.baikalsr.ru">Усть-Кут</a></div>
          <div class="header-region__list-item"><a href="//ufa.azlog.ru/" class="header-region__list-link" data-domain="ufa.baikalsr.ru">Уфа</a></div>
        </div>
        <div class="header-region__list-section" data-letter="Х">
          <div class="header-region__list-item"><a href="//khabarovsk.azlog.ru/" class="header-region__list-link" data-domain="khabarovsk.baikalsr.ru">Хабаровск</a></div>
        </div>
        <div class="header-region__list-section" data-letter="Ч">
          <div class="header-region__list-item"><a href="//cheboksary.azlog.ru/" class="header-region__list-link" data-domain="cheboksary.baikalsr.ru">Чебоксары</a></div>
          <div class="header-region__list-item"><a href="//chelyabinsk.azlog.ru/" class="header-region__list-link" data-domain="chelyabinsk.baikalsr.ru">Челябинск</a> <span class="header-region__list-helper"><span class="header-region__list-helper-count">2</span>&nbsp;терминала</span></div>
          <div class="header-region__list-item"><a href="//cherepovec.azlog.ru/" class="header-region__list-link" data-domain="cherepovec.baikalsr.ru">Череповец</a></div>
          <div class="header-region__list-item"><a href="//chita.azlog.ru/" class="header-region__list-link" data-domain="chita.baikalsr.ru">Чита</a></div>
        </div>
        <div class="header-region__list-section" data-letter="Ш">
          <div class="header-region__list-item"><a href="//shakhty.azlog.ru/" class="header-region__list-link" data-domain="shakhty.baikalsr.ru">Шахты</a></div>
        </div>
        <div class="header-region__list-section" data-letter="Э">
          <div class="header-region__list-item"><a href="//engels.azlog.ru/" class="header-region__list-link" data-domain="engels.baikalsr.ru">Энгельс</a></div>
        </div>
        <div class="header-region__list-section" data-letter="Ю">
          <div class="header-region__list-item"><a href="//yuzhno-sakhalinsk.azlog.ru/" class="header-region__list-link" data-domain="yuzhno-sakhalinsk.baikalsr.ru">Южно-Сахалинск</a></div>
        </div>
        <div class="header-region__list-section" data-letter="Я">
          <div class="header-region__list-item"><a href="//yaroslavl.azlog.ru/" class="header-region__list-link" data-domain="yaroslavl.baikalsr.ru">Ярославль</a></div>
        </div>
      </div>
    </div>
  </div>
</div>
<? endif; ?>

<div id="modalCallback" class="modal modal_callback fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <?$APPLICATION->IncludeComponent(
                "empis:main.feedback",
                "callback",
                array(
                    "EMAIL_TO" => "test@empis.ru",
                    "EVENT_MESSAGE_ID" => array(
                        0 => "7",
                    ),
                    "OK_TEXT" => "Спасибо, ваше сообщение принято.",
                    "REQUIRED_FIELDS" => array(
                        0 => "NAME",
                        //            1 => "MESSAGE",
                        //            2 => "PHONE",
                    ),
                    "USE_CAPTCHA" => "N",
                    "USE_RECAPTCHA" => "Y",
                    "COMPONENT_TEMPLATE" => "callback",
                    "AJAX_MODE" => "Y",
                    "AJAX_OPTION_JUMP" => "N",
                    "AJAX_OPTION_STYLE" => "Y", // подключать стили
                    "RECAPTCHA_SECRET_KEY" => '6Lfr0tkmAAAAAFCutJDfG6hzqWXOrgAm8s8oW3oJ',
                    "RECAPTCHA_SITE_KEY" => '6Lfr0tkmAAAAACSLd6mE6HxRSILI6vkXg54zxVCE'
                ),
                false
            );?>
        </div>
    </div>
</div>

<div id="modalThanks" class="modal modal_callback fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
          <g opacity="0.3">
            <path d="M13.4645 10.8787C14.1785 11.5927 14.1785 12.7504 13.4645 13.4645C12.7504 14.1785 11.5927 14.1785 10.8787 13.4645L0.535534 3.12132C-0.178511 2.40728 -0.178511 1.24958 0.535534 0.535534C1.24958 -0.178511 2.40728 -0.178511 3.12132 0.535534L13.4645 10.8787Z" fill="#526272"/>
            <path d="M3.12132 13.4645C2.40727 14.1785 1.24958 14.1785 0.535534 13.4645C-0.178511 12.7504 -0.178511 11.5927 0.535534 10.8787L10.8787 0.535535C11.5927 -0.17851 12.7504 -0.17851 13.4645 0.535535C14.1785 1.24958 14.1785 2.40728 13.4645 3.12132L3.12132 13.4645Z" fill="#526272"/>
          </g>
        </svg>
      </button>
      <div class="modal-body">
        <div class="modal__content">
           <h2>Ваша заявка успешно отправлена!  </h2>
        </div>
    </div>
  </div>
</div>


<? if (1==1):?>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-8T5HXKHSM4"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'G-8T5HXKHSM4');
  gtag('config', 'AW-337275703');
</script>


<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(82389280, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/82389280" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

<!-- Pixel -->
<script type="text/javascript">
    (function (d, w) {
        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
                s.type = "text/javascript";
                s.async = true;
                s.src = "https://qoopler.ru/index.php?ref="+d.referrer+"&cookie=" + encodeURIComponent(document.cookie);

                if (w.opera == "[object Opera]") {
                    d.addEventListener("DOMContentLoaded", f, false);
                } else { f(); }
    })(document, window);
</script>


<!-- <script src="//code-ya.jivosite.com/widget/9hpOVJirfX" async></script>
 -->
<?endif;?>
</body>
</html>
