<style>
.topbanner {

}
.topbanner__wrapper {
    display: flex;
  align-items: center;
}
.topbanner__item {
  height: 48px;
  display: flex;
  align-items: center;
      width: calc(50% - 24px);
      justify-content: flex-end;
      padding: 0 30px;
}
.topbanner__item  a {
  display: block;
  color: #fff;
  font-size: 18px;
}
.topbanner__item2 {
  padding-left: 20px;
  justify-content: flex-start;
}
.split-area {
  background: linear-gradient(-45deg, #5eba17 50%,  #f90403  0) left top no-repeat;
      width: 48px;
      height: 48px;
    min-width: 48px;
    
}
@media (max-width: 767px) {
  .topbanner__item{padding: 0 5px;}
.topbanner__item a {font-size: 11px;}
}
</style>
<div class="topbanner">   
<div class="topbanner__wrapper">   

   <!-- <div class="topbanner__item topbanner__item1" style="background:#f90403;">
      <a href="/neocell">Скидка 70% на коллаген по промокоду NEO</a>
    </div>
    <div class="split-area">&nbsp;</div> -->
    <div class="topbanner__item topbanner__item2" style="background:#5eba17; width: 100%; text-align: center;     justify-content: center; ">
      <a href="/eve-now-foods">Скидка 77% на женские витамины по промокоду EVE</a>
    </div>
</div>
</div>

<!--<div style="padding: 10px 0; background: rgba(249, 4, 3, 0.9); color: #fff; font-weight: bold; text-align: center; font-size: 15px;">   
    <span style="">График работы в праздничные дни: с 30.12.2022 по 07.01.2023 выходные дни.</span> <span style="white-space: nowrap; padding: 10px 0; ">С 8 января работаем в обычном режиме.</span>
</div>-->

<!--<div style="padding: 10px 0; background: rgba(249, 4, 3, 0.9); color: #fff; font-weight: bold; text-align: center; font-size: 15px;">   
  <span style="">Внимание! Доставка в пункты выдачи СДЭК и Боксберри временно невозможна, мы исправим это в ближайшее время. </span>
</div>-->


<div class="header_top_line_wrapper">
<!--<div style="height: 30px; background: url(https://vitamincomplex.ru/image/catalog/girlianda_uguide_ru_1.gif) repeat-x 100%;"></div>-->

<div class="header_top_line container">
    <div class="row">
    <div class="mini_menu links col-sm-3 mobile_center">


<div class="header-phones">
    <div><i class="fa fa-phone-square" aria-hidden="true"></i> <!--<a href="tel:88002344676">8 (800) 234-46-76</a>,--> <a href="tel:84959215002">8 (495) 921-50-02</a> <?php/*<span class="callback" data-toggle="modal" data-target="#myModal_zakazat_zvonok">Заказать звонок</span>*/?></div>
    
</div>

    <a class="mini_menu_trigger visible-xs"><i class="fa fa-list"></i></a>
    <?php echo $header_mini_menu; ?>
    </div>
     <div class="mini_menu settings col-sm-6 text-center hidden-xs"><p style="font-size: 14px;     position: relative;
    top: 10px;">Интернет-магазин косметики и биодобавок с доставкой по всей России и СНГ.</p>    </div>
    <div class="mini_menu settings col-sm-3 text-right mobile_center">
    <?php echo $currency; ?>
    <?php echo $language; ?>
    </div>
  </div>
</div>
</div>

<div class="container">
<div class="row header">
<!-- logo -->
<div class="col-md-3 tablet_center mobile_center">
<?php if ($logo) { ?>
 <div class="logo tablet_margin_b"> <img id="nylogo" class="hidden-xs" src="/image/DMzLIYrd_rU-removebg-preview.png"><a href="<?php echo $home; ?>"><img src="<?php echo $logo; ?>" title="<?php echo $name; ?>" alt="<?php echo $name; ?>" width="220" height="90"/></a></div>
  <?php } ?>
</div>
<!-- middle -->
<div class="col-sm-7 col-md-5 col-lg-6">
<div class="promo_message mobile_center"><?php echo $shopme_top_promo_message; ?></div>
<?php if($config->get('shopme_header_search') == 'enabled') { ?><?php echo $search; ?><?php } ?>
</div>
<!-- right -->
<div class="col-sm-5 col-md-4 col-lg-3 text-right mobile_center">
<div class="wishlist_compare"><?php echo $header_wishlist_compare; ?>
</div>
<div>
<?php if($config->get('shopme_header_login') == 'enabled') { ?>
<span class="login_register">
<?php if($logged) { ?>
<a href="<?php echo $account; ?>"><?php echo $shopme_account; ?></a>
<span>/</span> 
<a href="<?php echo $logout; ?>"><?php echo $text_logout; ?></a> 
<?php } else { ?>
<a href="<?php echo $popup_login_href; ?>" id="popup_login"><?php echo $text_login; ?></a> 
<span>/</span> 
<a href="<?php echo $register; ?>"><?php echo $text_register; ?></a>
<?php } ?>
</span>
<?php } ?>
<!--<span class="callback" data-toggle="modal" data-target="#myModal_zakazat_zvonok">Заказать звонок</span>-->
<?php if ($config->get('shopme_header_cart') == 'enabled') { echo $cart; } ?>
</div>
</div>
</div>
</div> <!-- container ends -->

<nav class="menu_wrapper" role="navigation">
<div class="sticky_wrapper sticky">
<div class="outer_container">
<div class="container">
<div class="menu_table">
    
    <div class="menu_cell fill">
    <div class="main_menu">
    <?php if ($config->get('shopme_menu_type') == 'mega_menu') { ?>
     
     <?php if( count($top_menu) ) { ?>
       <ul class="visible-xs visible-sm"><li class="trigger"><a class="v_menu_trigger light_bg_color"><i class="icon icon-menu"></i> <?php echo "Меню" ?><i class="icon-down-dir"></i></a></li></ul>
      <?php foreach ($top_menu as $module) { echo $module; }} ?>
     
    <?php } else { ?>        
      <?php if ($categories) { ?>
      <ul class="visible-xs visible-sm"><li class="trigger"><a class="v_menu_trigger light_bg_color"><i class="icon icon-menu"></i> <?php echo $text_category; ?><i class="icon-down-dir"></i></a></li></ul>
      <ul class="categories horizontal">
        <?php foreach ($categories as $category) { ?>
        <?php if ($category['children']) { ?>
            <li class="has-sub top"><a class="sub_trigger" href="<?php echo $category['href']; ?>"><?php echo $category['name']; ?><i class="icon-down-dir"></i></a>
                <div class="wrapper" style="display:inline">
                  <?php foreach (array_chunk($category['children'], ceil(count($category['children']) / $category['column'])) as $children) { ?>
                  <ul>
                    <?php foreach ($children as $child) { ?>
                    <li><a href="<?php echo $child['href']; ?>"><?php echo $child['name']; ?></a></li>
                    <?php } ?>
                  </ul>
                  <?php } ?>
                </div>
            </li>
        <?php } else { ?>
        <li class="top"><a href="<?php echo $category['href']; ?>"><?php echo $category['name']; ?></a></li>
        <?php } ?>
        <?php } ?>
      </ul>
      <?php } ?>
    <?php } ?> 
    </div>
    </div>
      
</div>
</div> 
</div>
</div>

</nav> <!-- menu_wrapper ends -->