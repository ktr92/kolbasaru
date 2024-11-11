<?
use Bitrix\Main\Loader;
	use BXmeta\siteHelper;
?>
<? siteHelper::showPageWrapper(WRAPPER, 'after.content');?>
</main>

<?
global $USER;
if (0):
?>

<footer class="footer">
    <div class="container">
        <div class="footer-logo">
            <a target="_blank" href="https://r2grupp.ru">
                <img src="<?=ASSETS_PATH?>/wp-content/uploads/2022/10/site_groop_logo.webp" alt="">
            </a>
            <a target="_blank" href="https://gkr2.ru/">
                <img src="<?=ASSETS_PATH?>/wp-content/uploads/2022/10/site_logo.webp" alt="">
            </a>
            <a target="_blank" href="Array" class="show_video"><span class="play_video_icon"></span>
                <p>Видео о компании</p>
            </a>
        </div>
	    <?// Список новостей
	    $APPLICATION->IncludeComponent(
	    	"bitrix:news.list",
	    	"filials__footer",                            // [bottom, .default, official, table]
	    	array(
	    		// region Основные параметры
	    		"IBLOCK_TYPE"                      =>  "content",              // Тип информационного блока (используется только для проверки) : array ( '-' => ' ', 'catalog' => '[catalog] Каталоги', 'news' => '[news] Новости', 'offers' => '[offers] Торговые предложения', 'services' => '[services] Сервисы', 'references' => '[references] Справочники', )
	    		"IBLOCK_ID"                        =>  "8",  // Код информационного блока : array ( 1 => 'Новости', 2 => 'Одежда', 3 => 'Одежда (предложения)', )
	    		"NEWS_COUNT"                       =>  "20",                // Количество новостей на странице
	    		// endregion
	    		// region Источник данных
	    		"SORT_BY1"                         =>  "PROPERTY_TYPE",       // Поле для первой сортировки новостей : array ( 'ID' => 'ID', 'NAME' => 'Название', 'ACTIVE_FROM' => 'Дата начала активности', 'SORT' => 'Сортировка', 'TIMESTAMP_X' => 'Дата последнего изменения', )
	    		"SORT_ORDER1"                      =>  "ASC",              // Направление для первой сортировки новостей : array ( 'ASC' => 'По возрастанию', 'DESC' => 'По убыванию', )
	    		"SORT_BY2"                         =>  "SORT",              // Поле для второй сортировки новостей : array ( 'ID' => 'ID', 'NAME' => 'Название', 'ACTIVE_FROM' => 'Дата начала активности', 'SORT' => 'Сортировка', 'TIMESTAMP_X' => 'Дата последнего изменения', )
	    		"SORT_ORDER2"                      =>  "ASC",               // Направление для второй сортировки новостей : array ( 'ASC' => 'По возрастанию', 'DESC' => 'По убыванию', )
	    		"FILTER_NAME"                      =>  "",                  // Фильтр
	    		"FIELD_CODE"                       =>  array(''),           // Поля : array ( 'ID' => 'ID', 'CODE' => 'Символьный код', 'XML_ID' => 'Внешний код', 'NAME' => 'Название', 'TAGS' => 'Теги', 'SORT' => 'Сортировка', 'PREVIEW_TEXT' => 'Описание для анонса', 'PREVIEW_PICTURE' => 'Картинка для анонса', 'DETAIL_TEXT' => 'Детальное описание', 'DETAIL_PICTURE' => 'Детальная картинка', 'DATE_ACTIVE_FROM' => 'Начало активности (дата)', 'ACTIVE_FROM' => 'Начало активности (время)', 'DATE_ACTIVE_TO' => 'Окончание активности (дата)', 'ACTIVE_TO' => 'Окончание активности (время)', 'SHOW_COUNTER' => 'Количество показов', 'SHOW_COUNTER_START' => 'Дата первого показа', 'IBLOCK_TYPE_ID' => 'Тип информационного блока', 'IBLOCK_ID' => 'ID информационного блока', 'IBLOCK_CODE' => 'Символьный код информационного блока', 'IBLOCK_NAME' => 'Название информационного блока', 'IBLOCK_EXTERNAL_ID' => 'Внешний код информационного блока', 'DATE_CREATE' => 'Дата создания', 'CREATED_BY' => 'Кем создан (ID)', 'CREATED_USER_NAME' => 'Кем создан (имя)', 'TIMESTAMP_X' => 'Дата изменения', 'MODIFIED_BY' => 'Кем изменен (ID)', 'USER_NAME' => 'Кем изменен (имя)', )
	    		"PROPERTY_CODE"                    =>  array('PHONE'),           // Свойства
	    		"CHECK_DATES"                      =>  "N",                 // Показывать только активные на данный момент элементы
	    		// endregion
	    		// region Шаблоны ссылок
	    		"DETAIL_URL"                       =>  "",                  // URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
	    		// endregion
	    		// region Управление режимом AJAX
	    		"AJAX_MODE"                        =>  "N",                 // Включить режим AJAX
	    		"AJAX_OPTION_JUMP"                 =>  "N",                 // Включить прокрутку к началу компонента
	    		"AJAX_OPTION_STYLE"                =>  "Y",                 // Включить подгрузку стилей
	    		"AJAX_OPTION_HISTORY"              =>  "N",                 // Включить эмуляцию навигации браузера
	    		"AJAX_OPTION_ADDITIONAL"           =>  "",                  // Дополнительный идентификатор
	    		// endregion
	    		// region Настройки кеширования
	    		"CACHE_TYPE"                       =>  "A",                 // Тип кеширования : array ( 'A' => 'Авто + Управляемое', 'Y' => 'Кешировать', 'N' => 'Не кешировать', )
	    		"CACHE_TIME"                       =>  "36000000",          // Время кеширования (сек.)
	    		"CACHE_NOTES"                      =>  "",                  //
	    		"CACHE_FILTER"                     =>  "N",                 // Кешировать при установленном фильтре
	    		"CACHE_GROUPS"                     =>  "N",                 // Учитывать права доступа
	    		// endregion
	    		// region Дополнительные настройки
	    		"PREVIEW_TRUNCATE_LEN"             =>  "",                  // Максимальная длина анонса для вывода (только для типа текст)
	    		"ACTIVE_DATE_FORMAT"               =>  "d.m.Y",             // Формат показа даты : array ( 'd-m-Y' => '22-02-2007', 'm-d-Y' => '02-22-2007', 'Y-m-d' => '2007-02-22', 'd.m.Y' => '22.02.2007', 'd.M.Y' => '22.Фев.2007', 'm.d.Y' => '02.22.2007', 'j M Y' => '22 Фев 2007', 'M j, Y' => 'Фев 22, 2007', 'j F Y' => '22 Февраля 2007', 'f j, Y' => 'Февраль 22, 2007', 'd.m.y g:i A' => '22.02.07 7:30 AM', 'd.M.y g:i A' => '22.Фев.07 7:30 AM', 'd.M.Y g:i A' => '22.Фев.2007 7:30 AM', 'd.m.y G:i' => '22.02.07 7:30', 'd.m.Y H:i' => '22.02.2007 07:30', 'SHORT' => 'Формат сайта', 'FULL' => 'Формат сайта (включая время)', )
	    		"SET_TITLE"                        =>  "N",                 // Устанавливать заголовок страницы
	    		"SET_BROWSER_TITLE"                =>  "N",                 // Устанавливать заголовок окна браузера
	    		"SET_META_KEYWORDS"                =>  "N",                 // Устанавливать ключевые слова страницы
	    		"SET_META_DESCRIPTION"             =>  "N",                 // Устанавливать описание страницы
	    		"SET_STATUS_404"                   =>  "N",                 // Устанавливать статус 404, если не найдены элемент или раздел
	    		"INCLUDE_IBLOCK_INTO_CHAIN"        =>  "N",                 // Включать инфоблок в цепочку навигации
	    		"ADD_SECTIONS_CHAIN"               =>  "N",                 // Включать раздел в цепочку навигации
	    		"HIDE_LINK_WHEN_NO_DETAIL"         =>  "N",                 // Скрывать ссылку, если нет детального описания
	    		"PARENT_SECTION"                   =>  "",                  // ID раздела
	    		"PARENT_SECTION_CODE"              =>  "",                  // Код раздела
	    		"INCLUDE_SUBSECTIONS"              =>  "Y",                 // Показывать элементы подразделов раздела
	    		// endregion
	    		// region Настройки постраничной навигации
	    		"PAGER_TEMPLATE"                   =>  ".default",          // Шаблон постраничной навигации : array ( '.default' => '.default (Встроенный шаблон)', 'arrows_adm' => 'arrows_adm (Встроенный шаблон)', 'modern' => 'modern (Встроенный шаблон)', 'orange' => 'orange (Встроенный шаблон)', 'visual' => 'visual (Встроенный шаблон)', 'blog' => 'blog (Общий шаблон)', 'forum' => 'forum (Общий шаблон)', 'arrows' => 'arrows (Новый адаптивный шаблон интернет-магазина)', )
	    		"DISPLAY_TOP_PAGER"                =>  "N",                 // Выводить над списком
	    		"DISPLAY_BOTTOM_PAGER"             =>  "Y",                 // Выводить под списком
	    		"PAGER_TITLE"                      =>  "Новости",           // Название категорий
	    		"PAGER_SHOW_ALWAYS"                =>  "N",                 // Выводить всегда
	    		"PAGER_DESC_NUMBERING"             =>  "N",                 // Использовать обратную навигацию
	    		"PAGER_DESC_NUMBERING_CACHE_TIME"  =>  "36000",             // Время кеширования страниц для обратной навигации
	    		"PAGER_SHOW_ALL"                   =>  "N",                 // Показывать ссылку 'Все'
	    		// endregion
	    	)
	    );?>
        <div class="footer-mail">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g opacity="0.6">
                    <path d="M4 4H20C21.1 4 22 4.9 22 6V18C22 19.1 21.1 20 20 20H4C2.9 20 2 19.1 2 18V6C2 4.9 2.9 4 4 4Z"
                          stroke="#25343F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M22 6L12 13L2 6" stroke="#25343F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </g>
            </svg>
            <p>
                <a target="_blank" href="mailto:info@r2grupp.ru"><span class="__cf_email__">info@r2grupp.ru</span></a> <br>
                <a target="_blank" href="mailto:info@r2grupp.ru"><span class="__cf_email__">info@r2grupp.ru</span> </a>
                <span>(Сборные грузоперевозки)</span>
            </p>


        </div>
        <div class="footer-copy">
            <div class="footer-copy-wrapper">
                <div>
                    <p>© Транспортно-экспедиционная компания «Р2», 2011 - 2023. Все права защищены</p>
                </div>
                <div class="footer-dev">
                    <p>Created with love by <a target="_blank" href="https://afonico.ru/"><b>Afonico M&D</b></a></p>
                </div>


            </div>

        </div>



    </div>
</footer>

<? else: ?>
	<footer >
    <div class="footer">
    <div class="container">
      <div class="footer__cols">
        <div class="footer__col footer__col_0">
          <div class="footer__block ">
            <div class="footer__logo">
              <img src="<?=ASSETS_PATH?>/img/logofooter.svg" alt="">
            </div><!-- /.footer__logo -->
              <div class="footer__contacts">
                <div class="footercontact">
                  <div class="footercontact__img"><img src="<?=ASSETS_PATH?>/img/phonecall_2.svg" alt=""></div><!-- /.footercontact__img -->
                  <div class="footercontact__main">
                    <div class="footercontact__title">Офис</div><!-- /.footercontact__title -->
                    <div class="footercontact__value"><a href="tel:+7 (495) 989-05-06">+7 (495) 989-05-06</a></div><!-- /.footercontact__value -->

                  </div><!-- /.footercontact__main -->
                </div>
                <div class="footercontact">
                  <div class="footercontact__img"><img src="<?=ASSETS_PATH?>/img/phonecall_2.svg" alt=""></div><!-- /.footercontact__img -->
                  <div class="footercontact__main">
                    <div class="footercontact__title">Склад</div><!-- /.footercontact__title -->
                    <div class="footercontact__value"><a href="tel:+7 (495) 123-46-65">+7 (495) 123-46-65</a></div><!-- /.footercontact__value -->
                    <div class="footercontact__link">
                      <a href="#">Схема проезда на склад</a>
                    </div><!-- /.footercontact__link -->
                  </div><!-- /.footercontact__main -->

                </div>
                <div class="footercontact">
                  <div class="footercontact__img"><img src="<?=ASSETS_PATH?>/img/emailred.svg" alt=""></div><!-- /.footercontact__img -->
                  <div class="footercontact__main">
                  <div class="footercontact__value"><a href="mailto:info@r2grupp.ru">info@r2grupp.ru</a></div><!-- /.footercontact__value -->
                    <div class="footercontact__value"><a href="mailto:itl@r2grupp.ru">itl@r2grupp.ru</a></div><!-- /.footercontact__value -->
                 
                  </div><!-- /.footercontact__main -->

                </div>
              </div>

              <div class="footer__video">
                <div class="show_video"><span class="play_video_icon"><img src="<?=ASSETS_PATH?>/img/play_video_icon.svg" alt=""></span><p>Видео о компании</p></div>
              </div><!-- /.footer__video -->

              <div class="footer__copy onlydesktop">
                © Транспортно-экспедиционная компания «Р2», 2011 - 2023. Все права защищены
              </div><!-- /.footer__copy -->

              <div class="footer__dev onlydesktop">
                <a href="https://empis.ru" target="_blank" class="fdev">
                  <span class="fdev__title">Разработано в:</span>
                  <span class="fdev__icon"><img src="<?=ASSETS_PATH?>/img/empis.svg" alt=""></span>
                </a>
              </div>

          </div>
        </div>
        <div class="footer__col footer__col_1">
          <div class="footer__block footer__block_menu">

            <? // Меню - http://dev.1c-bitrix.ru/user_help/settings/settings/components_2/navigation/menu.php
            $APPLICATION->IncludeComponent(
            	"bitrix:menu",
            	"footer",                  // [bottom_menu, catalog_native, top_menu, .default, blue_tabs, catalog_horizontal, catalog_vertical, grey_tabs, horizontal_multilevel, tree, vertical_multilevel]
            	array(
            		// region Основные параметры
            		"ROOT_MENU_TYPE"         =>  "footer1",  // Тип меню для первого уровня : array ( 'left' => 'Левое меню', 'top' => 'Верхнее меню', 'bottom' => 'Нижнее меню', )
            		// endregion
            		// region Настройки кеширования
            		"MENU_CACHE_TYPE"        =>  "A",     // Тип кеширования : array ( 'A' => 'Авто', 'Y' => 'Кешировать', 'N' => 'Не кешировать', )
            		"MENU_CACHE_TIME"        =>  "360000",  // Время кеширования (сек.)
            		"MENU_CACHE_USE_GROUPS"  =>  "N",     // Учитывать права доступа
            		"MENU_CACHE_GET_VARS"    =>  "",      // Значимые переменные запроса
            		// endregion
            		// region Дополнительные настройки
            		"MAX_LEVEL"              =>  "2",     // Уровень вложенности меню : array ( 1 => '1', 2 => '2', 3 => '3', 4 => '4', )
            		"CHILD_MENU_TYPE"        =>  "left",  // Тип меню для остальных уровней : array ( 'left' => 'Левое меню', 'top' => 'Верхнее меню', 'bottom' => 'Нижнее меню', )
            		"USE_EXT"                =>  "Y",     // Подключать файлы с именами вида .тип_меню.menu_ext.php
            		"DELAY"                  =>  "N",     // Откладывать выполнение шаблона меню
            		"ALLOW_MULTI_SELECT"     =>  "N",     // Разрешить несколько активных пунктов одновременно
            		// endregion
            	)
            );?>
          </div>
        </div>
        <div class="footer__col footer__col_2">
          <div class="footer__block footer__block_menu">
              <? // Меню - http://dev.1c-bitrix.ru/user_help/settings/settings/components_2/navigation/menu.php
              $APPLICATION->IncludeComponent(
                  "bitrix:menu",
                  "footer",                  // [bottom_menu, catalog_native, top_menu, .default, blue_tabs, catalog_horizontal, catalog_vertical, grey_tabs, horizontal_multilevel, tree, vertical_multilevel]
                  array(
                      // region Основные параметры
                      "ROOT_MENU_TYPE"         =>  "footer2",  // Тип меню для первого уровня : array ( 'left' => 'Левое меню', 'top' => 'Верхнее меню', 'bottom' => 'Нижнее меню', )
                      // endregion
                      // region Настройки кеширования
                      "MENU_CACHE_TYPE"        =>  "A",     // Тип кеширования : array ( 'A' => 'Авто', 'Y' => 'Кешировать', 'N' => 'Не кешировать', )
                      "MENU_CACHE_TIME"        =>  "360000",  // Время кеширования (сек.)
                      "MENU_CACHE_USE_GROUPS"  =>  "N",     // Учитывать права доступа
                      "MENU_CACHE_GET_VARS"    =>  "",      // Значимые переменные запроса
                      // endregion
                      // region Дополнительные настройки
                      "MAX_LEVEL"              =>  "2",     // Уровень вложенности меню : array ( 1 => '1', 2 => '2', 3 => '3', 4 => '4', )
                      "CHILD_MENU_TYPE"        =>  "left",  // Тип меню для остальных уровней : array ( 'left' => 'Левое меню', 'top' => 'Верхнее меню', 'bottom' => 'Нижнее меню', )
                      "USE_EXT"                =>  "Y",     // Подключать файлы с именами вида .тип_меню.menu_ext.php
                      "DELAY"                  =>  "N",     // Откладывать выполнение шаблона меню
                      "ALLOW_MULTI_SELECT"     =>  "N",     // Разрешить несколько активных пунктов одновременно
                      // endregion
                  )
              );?>
          </div>
        </div>
        <div class="footer__col footer__col_3">
          <div class="footer__block footer__block_menu">
              <? // Меню - http://dev.1c-bitrix.ru/user_help/settings/settings/components_2/navigation/menu.php
              $APPLICATION->IncludeComponent(
                  "bitrix:menu",
                  "footer",                  // [bottom_menu, catalog_native, top_menu, .default, blue_tabs, catalog_horizontal, catalog_vertical, grey_tabs, horizontal_multilevel, tree, vertical_multilevel]
                  array(
                      // region Основные параметры
                      "ROOT_MENU_TYPE"         =>  "footer3",  // Тип меню для первого уровня : array ( 'left' => 'Левое меню', 'top' => 'Верхнее меню', 'bottom' => 'Нижнее меню', )
                      // endregion
                      // region Настройки кеширования
                      "MENU_CACHE_TYPE"        =>  "A",     // Тип кеширования : array ( 'A' => 'Авто', 'Y' => 'Кешировать', 'N' => 'Не кешировать', )
                      "MENU_CACHE_TIME"        =>  "360000",  // Время кеширования (сек.)
                      "MENU_CACHE_USE_GROUPS"  =>  "N",     // Учитывать права доступа
                      "MENU_CACHE_GET_VARS"    =>  "",      // Значимые переменные запроса
                      // endregion
                      // region Дополнительные настройки
                      "MAX_LEVEL"              =>  "2",     // Уровень вложенности меню : array ( 1 => '1', 2 => '2', 3 => '3', 4 => '4', )
                      "CHILD_MENU_TYPE"        =>  "footer",  // Тип меню для остальных уровней : array ( 'left' => 'Левое меню', 'top' => 'Верхнее меню', 'bottom' => 'Нижнее меню', )
                      "USE_EXT"                =>  "Y",     // Подключать файлы с именами вида .тип_меню.menu_ext.php
                      "DELAY"                  =>  "N",     // Откладывать выполнение шаблона меню
                      "ALLOW_MULTI_SELECT"     =>  "N",     // Разрешить несколько активных пунктов одновременно
                      // endregion
                  )
              );?>
          <!--   <div class="footer__title titleLine">О компании</div> -->
            <div class="footer__list">
              <ul>
                <li><a href="#">История компании</a></li>
                <li><a href="#">Клиенты</a></li>
                <li><a href="#">Новости</a></li>
                <li><a href="#">Документы</a></li>
                <li><a href="#">Контакты</a></li>

              </ul>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div><!-- /.footer -->
  <div class="subfooter onlymobile">
    <div class="footer__footer">
      <div class="footer__copy ">
        © Транспортно-экспедиционная компания «Р2», 2011 - 2023. Все права защищены
      </div><!-- /.footer__copy -->

      <div class="footer__dev ">
        <a href="https://empis.ru" target="_blank" class="fdev">
          <span class="fdev__title">Разработано в:</span>
          <span class="fdev__icon"><img src="<?=ASSETS_PATH?>/img/empis.svg" alt=""></span>
        </a>
      </div>
    </div><!-- /.footer__footer -->
  </div><!-- /.subfooter -->
  </footer>
<? endif; ?>

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
        <div class="modal__content">
           <p>Наш менеджер перезвонит Вам в ближайшее время.</p>
        </div>
    </div>
  </div>
</div>


<script>window.lazyLoadOptions = [{ elements_selector: "img[data-lazy-src],.rocket-lazyload,iframe[data-lazy-src]", data_src: "lazy-src", data_srcset: "lazy-srcset", data_sizes: "lazy-sizes", class_loading: "lazyloading", class_loaded: "lazyloaded", threshold: 300, callback_loaded: function (element) { if (element.tagName === "IFRAME" && element.dataset.rocketLazyload == "fitvidscompatible") { if (element.classList.contains("lazyloaded")) { if (typeof window.jQuery != "undefined") { if (jQuery.fn.fitVids) { jQuery(element).parent().fitVids() } } } } } }, { elements_selector: ".rocket-lazyload", data_src: "lazy-src", data_srcset: "lazy-srcset", data_sizes: "lazy-sizes", class_loading: "lazyloading", class_loaded: "lazyloaded", threshold: 300, }]; window.addEventListener('LazyLoad::Initialized', function (e) {
        var lazyLoadInstance = e.detail.instance; if (window.MutationObserver) {
            var observer = new MutationObserver(function (mutations) {
                var image_count = 0; var iframe_count = 0; var rocketlazy_count = 0; mutations.forEach(function (mutation) {
                    for (var i = 0; i < mutation.addedNodes.length; i++) {
                        if (typeof mutation.addedNodes[i].getElementsByTagName !== 'function') { continue }
                        if (typeof mutation.addedNodes[i].getElementsByClassName !== 'function') { continue }
                        images = mutation.addedNodes[i].getElementsByTagName('img'); is_image = mutation.addedNodes[i].tagName == "IMG"; iframes = mutation.addedNodes[i].getElementsByTagName('iframe'); is_iframe = mutation.addedNodes[i].tagName == "IFRAME"; rocket_lazy = mutation.addedNodes[i].getElementsByClassName('rocket-lazyload'); image_count += images.length; iframe_count += iframes.length; rocketlazy_count += rocket_lazy.length; if (is_image) { image_count += 1 }
                        if (is_iframe) { iframe_count += 1 }
                    }
                }); if (image_count > 0 || iframe_count > 0 || rocketlazy_count > 0) { lazyLoadInstance.update() }
            }); var b = document.getElementsByTagName("body")[0]; var config = { childList: !0, subtree: !0 }; observer.observe(b, config)
        }
    }, !1)</script>
</body>
</html>
