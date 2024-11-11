<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if IE 8 ]><html dir="<?php echo $direction; ?>" lang="<?php echo $lang; ?>" class="ie8"><![endif]-->
<!--[if IE 9 ]><html dir="<?php echo $direction; ?>" lang="<?php echo $lang; ?>" class="ie9"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html dir="<?php echo $direction; ?>" lang="<?php echo $lang; ?>">
<!--<![endif]-->
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title><?php echo $title; ?></title>
<base href="<?php echo $base; ?>" />
<?php if ($description) { ?>
<meta name="description" content="<?php echo $description; ?>" />
<?php } ?>
<?php if ($keywords) { ?>
<meta name="keywords" content="<?php echo $keywords; ?>" />
<?php } ?>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="preload" href="/catalog/view/theme/shopme/stylesheet/fonts/Roboto-Regular.ttf" as="font" crossorigin="anonymous"/>
<link rel="preload" href="/catalog/view/theme/shopme/stylesheet/fonts/Roboto-Medium.ttf" as="font" crossorigin="anonymous"/>
<link rel="preload" href="/catalog/view/theme/shopme/stylesheet/fonts/Roboto-Light.ttf" as="font" crossorigin="anonymous"/>
<link rel="preload" href="/catalog/view/theme/shopme/stylesheet/fonts/Roboto-Bold.ttf" as="font" crossorigin="anonymous"/>
<link rel="preload" href="/catalog/view/theme/shopme/stylesheet/fonts/Roboto-Black.ttf" as="font" crossorigin="anonymous"/>
<link rel="preload" href="/catalog/view/theme/shopme/stylesheet/font/fontello.woff" as="font" crossorigin="anonymous"/>
<link rel="preload" href="/catalog/view/javascript/font-awesome/fonts/fontawesome-webfont.woff2" as="font" crossorigin="anonymous"/>

<?php foreach ($links as $link) { ?>
<link href="<?php echo $link['href']; ?>" rel="<?php echo $link['rel']; ?>" />
<?php } ?>
<!-- Version 2.1.0 -->
<?php $config = $this->registry->get('config'); ?>
<script src="catalog/view/javascript/jquery/jquery-2.1.1.min.js" type="text/javascript"></script>
<!--[if lt IE 9]>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
<![endif]-->

<link href="catalog/view/javascript/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen" />
<link rel="stylesheet" type="text/css" href="catalog/view/theme/shopme/stylesheet/slick.css"/>
<link rel="stylesheet" type="text/css" href="catalog/view/theme/shopme/stylesheet/stylesheet.css?v=21022023" />
<link href="catalog/view/javascript/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="catalog/view/theme/shopme/stylesheet/responsive.css?v=09072022" />
<link rel="apple-touch-icon" href="/image/catalog/apple-touch-icon.png"/>
<link rel="apple-touch-icon-precomposed" sizes="57x57" href="/image/catalog/apple-touch-icon-precomposed.png"/>
<meta name="msapplication-square70x70logo" content="/image/catalog/windows-icon-70-70.png"/>
<?php foreach ($styles as $style) { ?>
<link rel="<?php echo $style['rel']; ?>" type="text/css" href="<?php echo $style['href']; ?>" media="<?php echo $style['media']; ?>" />
<?php } ?>
<?php if ($direction == 'rtl') { ?>
<link rel="stylesheet" type="text/css" href="catalog/view/theme/shopme/stylesheet/rtl.css" />
<?php } ?>
<script type="text/javascript" src="catalog/view/theme/shopme/js/shopme_common.js?v=1.1"></script>

<?php foreach ($scripts as $script) { ?>
<script type="text/javascript" src="<?php echo $script; ?>"></script>
<?php } ?>
<script src="https://api-maps.yandex.ru/2.1?lang=ru_RU&apikey=3033fcfa-8b4b-428c-bbe7-89f9f5a84824" ></script>
<script src="catalog/view/javascript/ll_shiptor/ll_shiptor.js" ></script>


<?php 
require_once( DIR_TEMPLATE.$config->get('config_template')."/lib/module.php" );
$modules = new Modules($this->registry);
$top_menu = $modules->getModules('top_menu'); 
?>
<?php foreach ($analytics as $analytic) { ?>
<?php echo $analytic; ?>
<?php } ?>
<?php echo $shopme_styles; ?>

</head>
<body class="<?php echo $class; ?><?php echo $config->get('shopme_default_product_style'); ?> <?php if ($config->get('shopme_use_custom')) { ?><?php echo $config->get('shopme_container_layout'); ?><?php } ?>">
<?php echo $shopme_cookie; ?>
	
	
<div class="outer_container">   
<header id="header" class="header_wrapper <?php echo $config->get('shopme_menu_sticky'); ?> <?php echo $config->get('shopme_header_style'); ?>">
<?php if($config->get('shopme_header_style')){ 
require('catalog/view/theme/shopme/template/common/headers/' . $config->get('shopme_header_style') . '.tpl' ); 
} ?>

</header>  

 <!-- header_wrapper ends -->
<div id="notification" class="container"></div>
<div class="breadcrumb_wrapper container"></div>





 
