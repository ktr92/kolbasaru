<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("description", "Полный список адресов и контактов сети фирменных магазинов мясной гастрономии «Мясницкий ряд».Полный ассортимент вкусной и натуральной продукции по ценам от производителя. Мы ждем вас!");
$APPLICATION->SetPageProperty("title", "Адреса фирменных магазинов мясной гастрономии «Мясницкий ряд»");
$APPLICATION->SetTitle("Магазины");
$APPLICATION->SetPageProperty("container_html", '<div class="switcher switcher_js">
		<a class="for_map active" href="#">На карте</a>
		<a href="#" class="list">Списком</a>
</div>
<span class="title_text">Интерактивная карта</span>');

$APPLICATION->SetPageProperty("container_class", 'magazin');
$APPLICATION->SetPageProperty("hide_container", 'Y');
?>

<?$APPLICATION->IncludeFile(SITE_TEMPLATE_PATH.'/_include/shops.php', array(), Array("SHOW_BORDER"=> false));?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
