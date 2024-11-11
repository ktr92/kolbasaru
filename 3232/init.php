<?php

if (defined('ADMIN_SECTION')) $APPLICATION->SetAdditionalCSS('/css/admin.css');   // поправьте путь к файлу

require_once(dirname(__FILE__)."/include/const.php");
require_once(dirname(__FILE__)."/include/defines.php");
require_once(dirname(__FILE__)."/include/functions.php");
require_once(dirname(__FILE__)."/include/eventHandlers.php");
require_once(dirname(__FILE__)."/include/CStorage.php");
require_once(dirname(__FILE__)."/include/BXHelper.php");
require_once(dirname(__FILE__)."/include/CHLEntity.php");


AddEventHandler("main", "OnEndBufferContent", "ChangeMyContent");
function ChangeMyContent(&$content)
{
   $content = str_replace('<font class="tablebodytext"><font color="#FF0000">
		Срок работы пробной версии продукта истек.
		Через две недели этот сайт полностью прекратит свою работу.
		Вы можете купить полнофункциональную версию продукта на сайте <a href="http://www.1c-bitrix.ru/?r1=bsm7trial&amp;r2=expiried">www.1c-bitrix.ru</a>.
		</font></font>', "", $content);
}
defined('_DS_') or define('_DS_', DIRECTORY_SEPARATOR);
if(is_file($_SERVER['DOCUMENT_ROOT'] . _DS_ . 'local' . _DS_ . 'Lema' . _DS_ . 'autoloader.php'))
    require_once $_SERVER['DOCUMENT_ROOT'] . _DS_ . 'local' . _DS_ . 'Lema' . _DS_ . 'autoloader.php';
?>