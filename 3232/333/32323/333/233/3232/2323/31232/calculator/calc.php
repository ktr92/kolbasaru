<!DOCTYPE html>
<html lang="ru">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>NEWNBKI</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
  <link rel="stylesheet" type="text/css" href="libs/font-awesome-4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/slick.css">
  <link rel="stylesheet" type="text/css" href="css/slick-theme.css">
  <link rel="stylesheet" type="text/css" href="libs/lightbox/css/lightbox.min.css">
  <link rel="stylesheet" href="css/animation.css">
  <link rel="stylesheet" type="text/css" href="fonts/fonts.css">
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <link rel="stylesheet" type="text/css" href="css/restyle.css">
  <link rel="stylesheet" type="text/css" href="css/template_styles.css">
  <link rel="stylesheet" type="text/css" href="css/jQuery.inputSliderRange.css">
  <link rel="stylesheet" type="text/css" href="css/nouislider.min.css">
  <link rel="stylesheet" type="text/css" href="css/datepicker.min.css">
  <link rel="stylesheet" type="text/css" href="css/corp.css">
  <link rel="stylesheet" type="text/css" href="css/calc.css?key=<?php echo time(); ?>">
  <!--[if lt IE 9]>
																<script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
																<![endif]-->
</head>

<body>
  <header id="header" class="header clearfix">
    <div class="header__main clearfix">
      <div class="container">
        <div class="headermain">
          <div class="headermain__items">
            <div class="headermain__item">
              <div class="headerrow">
                <div class="burgermenu burgermenu_desktop">
                  <button class="headermain__menu js-menu js-menu_desktop">
                    <img src="/local/templates/nbkiv4/public/img/burger.svg" alt="" class="burgermenu--open ">
                    <img src="/local/templates/nbkiv4/public/img/Union.svg" alt="" class="burgermenu--close ">
                  </button>
                </div>
                <div class="headerleft">
                  <div class="logo">
                    <img src="/local/templates/nbkiv4/public/img/nbki-logo.svg" alt="" class="nbki-logo_desktop">
                    <img src="/local/templates/nbkiv4/public/img/nbki-logo2.svg" alt="" class="nbki-logo_mobile">
                  </div>
                </div>
                <div class="headerchange">
                  <div class="headertop__links">
                    <div class="headertop__link current">
                      <a href="#" class="active current">Физические
                        лица</a>
                    </div>
                    <div class="headertop__link notcurrent">
                      <a href="#">Юридические
                        лица</a>
                    </div>
                    <div class="headertop__link notcurrent">
                      <a href="#">Корпоративные
                        клиенты</a>
                    </div>

                    <div class="headertop__dropdown">
                      <div class=" hidden">
                        <a href="/" class="active current">Физические
                          лица</a>
                      </div>
                      <div class=" visible">
                        <a href="/judicial/">Юридические
                          лица</a>
                      </div>
                      <div class=" visible">
                        <a href="/corp/">Корпоративные
                          клиенты</a>
                      </div>

                    </div>
                  </div>
                </div>
              </div>
              <!-- /.headerrow -->
            </div>
            <div class="headermain__item headermain__item_right">
              <div class="mobilepanel">
                <div class="headercenter__search">
                  <div class="searchbutton searchbutton_mobile">
                    <img src="/local/templates/nbkiv4/public/img/mobilesearch.svg" alt="">
                  </div>
                </div>
                <div class="headerright">

                  <div class="lklink lklink_mobile">
                    <a href="https://person.nbki.ru/login?utm_source=fl&amp;utm_medium=mainpage&amp;utm_campaign=button&amp;utm_term=lk"
                      onclick="ym('9726127','reachGoal', 'lk_click'); _tmr.push({ type: 'reachGoal', id: 3341940, value: 650, goal: 'registratsiya'}); return true;">
                      <svg width="17" height="19" viewBox="0 0 17 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="8.5" cy="4.5" r="3.5" stroke="#AEB5D1" stroke-width="2"></circle>
                        <path d="M16 18C16 14.134 12.6421 11 8.5 11C4.35786 11 1 14.134 1 18" stroke="#AEB5D1"
                          stroke-width="2" stroke-linecap="round"></path>
                      </svg>
                    </a>
                  </div>
                </div>
                <div class="burgermenu burgermenu_mobile">
                  <button class="headermain__menu js-menu js-menu_mobile">
                    <svg class="burgermenu--open " width="18" height="16" viewBox="0 0 18 16" fill="none"
                      xmlns="http://www.w3.org/2000/svg">
                      <path d="M1 2H17" stroke="#AEB5D1" stroke-width="2" stroke-linecap="round"></path>
                      <path d="M1 8H17" stroke="#AEB5D1" stroke-width="2" stroke-linecap="round"></path>
                      <path d="M1 14H17" stroke="#AEB5D1" stroke-width="2" stroke-linecap="round"></path>
                    </svg>
                    <img src="/local/templates/nbkiv4/public/img/hamburger2.svg" alt="" class="burgermenu--close ">
                  </button>
                </div>
              </div>
              <div class="headercenter">
                <div class="headercenter__menu">
                  <div class="headermenu">
                    <ul>
                      <li>
                        <a href="/company/">О бюро</a>
                      </li>
                      <li>
                        <a href="/company/news/">Новости</a>
                      </li>
                      <li>
                        <a href="https://story.nbki.ru" target="_blank">Истории о кредитах</a>
                      </li>
                      <li>
                        <a href="/faq/">Вопросы и ответы</a>
                      </li>
                      <li>
                        <a href="/contacts/">Контакты</a>
                      </li>
                    </ul>

                  </div>
                </div>


                <div class="headercenter__search">
                  <div class="searchbutton searchbutton_desktop">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <circle cx="9.5" cy="9.5" r="7" stroke="#000"></circle>
                      <path
                        d="M20.2927 21.2929C20.6833 21.6834 21.3164 21.6834 21.707 21.2929C22.0975 20.9024 22.0975 20.2692 21.707 19.8787L20.2927 21.2929ZM14.207 15.2071L20.2927 21.2929L21.707 19.8787L15.6212 13.7929L14.207 15.2071Z"
                        fill="#000"></path>
                    </svg>
                  </div>
                </div>
                <span class="mobilemenubtn">
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <line x1="5" y1="6" x2="19" y2="6" stroke="#C2BFCC" stroke-width="2" stroke-linecap="round"></line>
                    <line x1="5" y1="12" x2="19" y2="12" stroke="#C2BFCC" stroke-width="2" stroke-linecap="round">
                    </line>
                    <line x1="5" y1="18" x2="19" y2="18" stroke="#C2BFCC" stroke-width="2" stroke-linecap="round">
                    </line>
                  </svg>
                </span>
              </div>

              <div class="headerright">
                <div class="lklink lklink_desktop"><a href="https://person.nbki.ru/login?utm_source=fl&amp;utm_medium=mainpage&amp;utm_campaign=button&amp;utm_term=lk
              " onclick="ym('9726127','reachGoal', 'lk_click'); _tmr.push({ type: 'reachGoal', id: 3341940, value: 650, goal: 'registratsiya'}); return true;">
                    <span>Войти</span> <img src="/local/templates/nbkiv4/public/img/hlogin.svg" alt=""></a>
                </div>
              </div>

            </div>
          </div>
        </div>
        <div class="search__full" itemscope="" itemtype="https://schema.org/WebSite">
          <meta itemprop="url" content="https://nbki.ru/">
          <form action="/search/" itemprop="potentialAction" itemscope="" itemtype="https://schema.org/SearchAction">
            <div class="search__items">
              <meta itemprop="target" content="https://nbki.ru/search/?q={q}">
              <input itemprop="query-input" class="search__input" type="text" name="q" placeholder="Что вы ищете?">
              <div class="search__buttons">
                <button class="search__submit btn_main" type="submit">
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="9.5" cy="9.5" r="7" stroke="#fff"></circle>
                    <path
                      d="M20.2927 21.2929C20.6833 21.6834 21.3164 21.6834 21.707 21.2929C22.0975 20.9024 22.0975 20.2692 21.707 19.8787L20.2927 21.2929ZM14.207 15.2071L20.2927 21.2929L21.707 19.8787L15.6212 13.7929L14.207 15.2071Z"
                      fill="#fff"></path>
                  </svg>
                  <span>Найти</span>
                </button>
                <span class="search__button_close search__button_open">
                  <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 15L15 1" stroke="#C2BFCC" stroke-width="2" stroke-linecap="round"></path>
                    <path d="M1 1L15 15" stroke="#C2BFCC" stroke-width="2" stroke-linecap="round"></path>
                  </svg>
                </span>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="mainmenu">
      <div class="container">
        <div class="mainmenu__content mainmenu__content--desktop">
          <div class="mainmenu__main mainmenu__cols">
            <div class="mainmenu__cols ">
              <div class="mainmenu__col">
                <div class="mainmenu__menu">
                  <div class="mainmenu__title"><a>Услуги физическим лицам</a></div>
                  <div class="mainmenu__list">
                    <ul itemscope="" itemtype="http://www.schema.org/SiteNavigationElement" class="allmenu__lvl1">
                      <li itemprop="name"> <a itemprop="url" href="/pkr/">Узнать кредитный рейтинг</a></li>
                      <li itemprop="name"><a href="/nbki-history/">Получить кредитную историю</a></li>
                      <li itemprop="name"> <a itemprop="url" href="/spor/">Оспорить кредитную историю</a> </li>
                      <li itemprop="name"><a itemprop="url" href="/historylist/">Справка из ЦККИ</a></li>
                      <li itemprop="name"><a href="/code/">Действия с кодом субъекта</a></li>
                      <li itemprop="name"><a href="/zashchita-ot-moshennichestva/">Защита от мошенничества</a></li>
                      <li itemprop="name"><a href="/podpiska-na-credithistory/">Подписка на кредитную историю</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="mainmenu__col">
                <div class="mainmenu__menu">
                  <div class="mainmenu__title"><a>Услуги юридическим лицам</a></div>
                  <div class="mainmenu__list">
                    <ul itemscope="" itemtype="http://www.schema.org/SiteNavigationElement">
                      <li itemprop="name"><a itemprop="url" href="/judicial/svedeniya/">Получить кредитную историю</a>
                      </li>
                      <li itemprop="name"> <a itemprop="url" href="/judicial/spor/">Оспорить кредитную историю</a></li>
                      <li itemprop="name"><a itemprop="url" href="/judicial/historylist/">Справка из ЦККИ</a></li>
                      <li itemprop="name"><a itemprop="url" href="/judicial/code/">Действия с кодом субъекта</a></li>
                      <li itemprop="name"> <a itemprop="url"
                          href="/uslugi-dlya-finansovykh-upravlyayushchikh/">Финансовым управляющим</a></li>
                    </ul>
                  </div>
                </div>

              </div>

              <div class="mainmenu__col">
                <div class="mainmenu__menu">
                  <div class="mainmenu__title"><a>Информация</a></div>
                  <div class="mainmenu__list">
                    <ul itemscope="" itemtype="http://www.schema.org/SiteNavigationElement">
                      <li itemprop="name"> <a itemprop="url" href="/contacts/">Контакты</a></li>
                      <li itemprop="name"> <a itemprop="url" href="/company/news/">Новости</a></li>
                      <li itemprop="name"><a itemprop="url" href="/press/pressabout/">Пресса о нас</a></li>
                      <li itemprop="name"> <a itemprop="url" href="/faq/">Вопросы и ответы</a></li>
                      <li itemprop="name"> <a itemprop="url" href="/poleznaya-informatsiya/">Полезная информация</a>
                      </li>
                    </ul>
                  </div>
                </div>

              </div>
              <div class="mainmenu__col">
                <div class="mainmenu__menu">
                  <div class="mainmenu__title"><a>Корпоративным клиентам</a></div>
                  <div class="mainmenu__list">
                    <ul itemscope="" itemtype="http://www.schema.org/SiteNavigationElement">
                      <li></li>
                      <li itemprop="name"> <a itemprop="url" href="/corp/">Подробная информация</a></li>
                      <li itemprop="name"> <a itemprop="url" href="/corp/become-a-client/">Стать клиентом НБКИ</a></li>
                    </ul>
                  </div>
                </div>
              </div><!-- /.mainmenu__col -->
              <div class="mainmenu__col">
                <div class="mainmenu__menu">
                  <div class="mainmenu__title"><a>О бюро</a></div>
                  <div class="mainmenu__list">
                    <ul itemscope="" itemtype="http://www.schema.org/SiteNavigationElement" class="allmenu__lvl1">
                      <li itemprop="name"><a itemprop="url" href="/company/">О бюро</a></li>
                      <li itemprop="name"> <a itemprop="url" href="/company/documents/">Документы НБКИ</a></li>
                      <li itemprop="name"> <a itemprop="url" href="/company/rekvizit/">Реквизиты</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="mainmenu__footer mainmenu__cols">

            <div class="mainmenu__links">
              <div class="mainmenu__title"><a href="/privacy_rules/">Пользовательское соглашение</a></div>
              <div class="mainmenu__title"><a href="https://person.nbki.ru/login" rel="nofollow">Вход в личный
                  кабинет</a></div>
            </div><!-- /.mainmenu__links -->
            <div class="mainmenu__phones">
              <div class="phone"><span>Наш телефон в Москве:</span><a href="tel:84952217837">8 (495) 221-78-37</a></div>
              <div class="phone"><span>Бесплатный звонок:</span><a href="tel:88006006404">8 (800) 600-64-04</a></div>
            </div>
          </div>
        </div>
        <div class="mainmenu__content mainmenu__content--mobile mainmenumob">
          <div class="accordmenu">
            <div class="accordmenu__title js-accord"><span>Услуги</span></div>
            <div class="accordmenu__content">
              <ul>
                <li><a href="/serviceszaem/pkr/">Узнать кредитный рейтинг</a></li>
                <li><a href="/nbki-history/">Получить кредитную историю</a></li>
                <li><a href="/serviceszaem/spor/">Оспорить кредитную историю</a></li>
                <li><a href="/serviceszaem/historylist/">Справка из ЦККИ</a></li>
                <li><a href="/serviceszaem/code/">Действия с кодом субъекта</a></li>
                <li><a href="/zashchita-ot-moshennichestva/">Защита от мошенничества</a></li>
                <li><a href="/podpiska-na-credithistory/">Подписка на кредитную историю</a></li>
              </ul>
            </div>
          </div><!-- /.accordmenu -->
          <div class="accordmenu">
            <div class="accordmenu__title js-accord"><span>О компании</span></div>
            <div class="accordmenu__content">
              <ul class="allmenu__lvl1">
                <li><a href="/company/">О бюро</a></li>
                <li><a href="/company/documents/">Документы НБКИ</a></li>
                <li><a href="/company/rekvizit/">Реквизиты</a></li>
              </ul>
            </div>
          </div><!-- /.accordmenu -->

          <div class="accordmenu">
            <div class="accordmenu__title js-accord"><span>Информация</span></div>
            <div class="accordmenu__content">
              <ul>
                <li><a href="/contacts/">Контакты</a></li>
                <li><a href="/company/news/">Новости</a></li>
                <li><a href="/press/pressabout/">Пресса о нас</a></li>
                <li><a href="/faq/">Вопросы и ответы</a></li>
                <li><a href="/poleznaya-informatsiya/">Полезная информация</a></li>
              </ul>
            </div>
          </div><!-- /.accordmenu -->
          <div class="accordmenu">
            <div class="accordmenu__title"><a href="//story.nbki.ru" target="_blank">Истории о кредитах</a>
            </div>
          </div><!-- /.accordmenu -->


          <div class="mainmenumob__button">
            <a href="https://person.nbki.ru/login?utm_source=fl&amp;utm_medium=mainpage&amp;utm_campaign=button&amp;utm_term=lk"
              class="btn_main btn_main_white" target="_blank">Личный кабинет</a>
          </div><!-- /.mainmenumob -->


          <div class="mainmenu__phones ">
            <div class="phone"><span>Наш телефон в Москве:</span><a href="tel:84952217837">8 (495) 221-78-37</a>
            </div>
            <div class="phone"><span>Бесплатный звонок:</span><a href="tel:88006006404">8 (800)
                600-64-04</a></div>
          </div>
        </div>
      </div>
      <div class="mobilemenu">
        <span class="mobilemenuclose">
          <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M1 15L15 1" stroke="#C2BFCC" stroke-width="2" stroke-linecap="round"></path>
            <path d="M1 1L15 15" stroke="#C2BFCC" stroke-width="2" stroke-linecap="round"></path>
          </svg>
        </span>
        <div class="mobilemenu__wrapper">
          <div class="mobilemenu__menu">
            <ul>
              <li class="mobilemenu__parent">О компании</li>
              <li class="mobilemenu__parent">Информация</li>
              <li class="mobilemenu__parent">Услуги</li>
              <li class="mobilemenu__notparent"> <a href="/contacts/">Контакты</a></li>
            </ul>
          </div>
          <div class="mobilemenu__item">
            <span class="mobilemenuclose">
              <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1 15L15 1" stroke="#C2BFCC" stroke-width="2" stroke-linecap="round"></path>
                <path d="M1 1L15 15" stroke="#C2BFCC" stroke-width="2" stroke-linecap="round"></path>
              </svg>
            </span>
            <div class="mobilemenu__title">
              <svg width="6" height="9" viewBox="0 0 6 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M5 8L1 4.49999L4.99992 1" stroke="#7B7794" stroke-linecap="round"></path>
              </svg>
              <span>О компании</span>
            </div>
            <div class="mobilemenu__menu" itemscope="" itemtype="http://www.schema.org/SiteNavigationElement">
              <div class="mainmenu__title mainmenu__title_nochild"><a href="/company/">О бюро</a></div>

              <div class="mainmenu__title mainmenu__title_nochild" itemprop="name"><a itemprop="url"
                  href="/company/documents/">Документы НБКИ</a></div>

              <div class="mainmenu__title mainmenu__title_nochild" itemprop="name"><a itemprop="url"
                  href="/company/rekvizit/">Реквизиты</a></div>
              <div class="mainmenu__title mainmenu__title_nochild"><a href="/privacy_rules/">Политика
                  конфиденциальности</a></div>
            </div>
          </div>
          <div class="mobilemenu__item">
            <span class="mobilemenuclose">
              <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1 15L15 1" stroke="#C2BFCC" stroke-width="2" stroke-linecap="round"></path>
                <path d="M1 1L15 15" stroke="#C2BFCC" stroke-width="2" stroke-linecap="round"></path>
              </svg>
            </span>
            <div class="mobilemenu__title">
              <svg width="6" height="9" viewBox="0 0 6 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M5 8L1 4.49999L4.99992 1" stroke="#7B7794" stroke-linecap="round"></path>
              </svg>
              <span>Информация</span>
            </div>
            <div class="mobilemenu__menu" itemscope="" itemtype="http://www.schema.org/SiteNavigationElement">
              <div class="mainmenu__title mainmenu__title_nochild" itemprop="name"><a itemprop="url"
                  href="/company/news/">Новости</a></div>
              <div class="mainmenu__title mainmenu__title_nochild" itemprop="name"><a itemprop="url"
                  href="/press/pressabout/">Пресса о нас</a></div>
              <div class="mainmenu__title mainmenu__title_nochild" itemprop="name"><a itemprop="url"
                  href="/faq/">Вопросы и ответы</a></div>
              <div class="mainmenu__title mainmenu__title_nochild" itemprop="name"><a itemprop="url"
                  href="https://story.nbki.ru/">Истории о кредитах</a></div>
              <div class="mainmenu__title mainmenu__title_nochild"><a href="/privacy_rules/">Пользовательское
                  соглашение</a></div>
              <div class="mainmenu__title mainmenu__title_nochild"><a href="">Карта сайта</a></div>
              <div class="mainmenu__title mainmenu__title_nochild" itemprop="name"><a itemprop="url"
                  href="/contacts/">Контакты</a></div>
            </div>
          </div>
          <div class="mobilemenu__item">
            <span class="mobilemenuclose">
              <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1 15L15 1" stroke="#C2BFCC" stroke-width="2" stroke-linecap="round"></path>
                <path d="M1 1L15 15" stroke="#C2BFCC" stroke-width="2" stroke-linecap="round"></path>
              </svg>
            </span>
            <div class="mobilemenu__title">
              <svg width="6" height="9" viewBox="0 0 6 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M5 8L1 4.49999L4.99992 1" stroke="#7B7794" stroke-linecap="round"></path>
              </svg>
              <span>Услуги</span>
            </div>
            <div class="mobilemenu__menu">
              <div class="mainmenu__title"><a href="">Услуги физическим лицам</a></div>
              <div class="mainmenu__list">
                <ul itemscope="" itemtype="http://www.schema.org/SiteNavigationElement">
                  <li itemprop="name"><a itemprop="url" href="/serviceszaem/pkr/">Узнать кредитный рейтинг</a></li>
                  <li itemprop="name"><a itemprop="url" href="/nbki-history/">Получить кредитную историю</a></li>
                  <li itemprop="name"><a itemprop="url" href="/serviceszaem/spor/">Оспорить кредитную историю</a></li>
                  <li itemprop="name"><a itemprop="url" href="/serviceszaem/historylist/">Получить сведения из ЦККИ</a>
                  </li>
                  <li itemprop="name"><a itemprop="url" href="/serviceszaem/code/">Действия с кодом субъекта</a></li>
                  <li itemprop="name"><a itemprop="url" href="/zashchita-ot-moshennichestva/">Защита от
                      мошенничества</a></li>
                  <li itemprop="name"><a itemprop="url" href="/podpiska-na-credithistory/">Подписка на кредитную
                      историю</a></li>
                </ul>
              </div>
            </div>
            <div class="mobilemenu__menu">
              <div class="mainmenu__title"><a href="">Услуги юридическим лицам</a></div>
              <div class="mainmenu__list">
                <ul itemscope="" itemtype="http://www.schema.org/SiteNavigationElement">
                  <li itemprop="name"><a itemprop="url" href="/serviceszaem/svedeniya/yuridicheskim-litsam/">Получить
                      кредитную историю</a></li>
                  <li itemprop="name"><a itemprop="url" href="/serviceszaem/spor/juridical_person/">Оспорить кредитную
                      историю</a></li>
                  <li itemprop="name"><a itemprop="url" href="/serviceszaem/historylist/juridical_person/">Получить
                      сведения из ЦККИ</a></li>
                  <li itemprop="name"><a itemprop="url" href="/serviceszaem/code/juridical_person/">Действия с кодом
                      субъекта</a></li>
                  <li itemprop="name"><a itemprop="url"
                      href="/serviceszaem/uslugi-dlya-finansovykh-upravlyayushchikh/">Финансовым управляющим</a></li>
                </ul>
              </div>
            </div>
            <div class="mainmenu__menu">
              <div class="mainmenu__title"><a href="">Корпоративным клиентам</a></div>
              <div class="mainmenu__list">
                <ul itemscope="" itemtype="http://www.schema.org/SiteNavigationElement">
                  <li itemprop="name"><a itemprop="url" href="/servicescredit/">Подробная информация</a></li>
                  <li itemprop="name"><a itemprop="url" href="/i-want-to-become-a-client/form/">Стать клиентом НБКИ</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="mobilemenu__links">
            <a href="https://person.nbki.ru/login">Войти в личный кабинет</a><br><br>
          </div>
          <div class="mobilemenu__footer">
            <div class="phones">
              <div class="phone"><span>Наш телефон в Москве:</span><a href="tel:84952217837">8 (495) 221-78-37</a></div>
              <div class="phone"><span>Бесплатный звонок:</span><a href="tel:88006006404">8 (800) 600-64-04</a></div>
            </div>
          </div>
        </div>
      </div>
      <!-- /.container -->
    </div>
  </header>
  <main>
    <div class="page page_calc  nbki_v4">
      <div class="container">
        <div class="pagecontent calcpage">
          <div class="nbki_v4 wrapperwhite">
            <div class="pagetitle  ">
              <h1>Кредитный калькулятор НБКИ</h1>
            </div>

            <div class="calcform">
              <form action="">
                <div class="calcform__block">
                  <div class="calcform__row">
                    <div class="calcform__col">
                      <div class="calcform__item">
                        <div class="calcform__input">
                          <label class="form__label" for="calc_summ">
                            <div class="form-control__wrapper range-slider" data-range-slider-type="calc_summ">
                              <span class="placeholder">Выберите сумму кредита, руб.</span>

                              <input id="calc_summ" type="text" data-stepdata="calc_summ" data-steptype="source"
                                class="form-control range-slider__control" data-max="10000000" data-min="1000"
                                data-summ-format="" name="calc_summ" type="text" inputmode="decimal" value="5000000">
                              <div class="range-slider__ui"></div>

                            </div>
                          </label>

                          <div class="calcform__limit">
                            <div class="calclimit calclimit__min">1000 руб.</div>
                            <div class="calclimit calclimit__right">10 млн руб.</div>

                          </div><!-- /.calcaform__limit -->

                        </div><!-- /.calcform__input -->
                        <div class="calcform__slider"></div><!-- /.calcform__slider -->
                      </div><!-- /.calcform__item -->
                    </div><!-- /.calcform__col -->
                    <div class="calcform__col">
                      <div class="calcform__item">
                        <div class="calcform__input">
                          <label class="form__label" for="calc_creditTerm">
                            <div class="form-control__wrapper range-slider" data-range-slider-type="calc_creditTerm">
                              <span class="placeholder">Выберите срок кредита, мес.</span>

                              <input id="calc_creditTerm" type="text" data-stepdata="calc_creditTerm"
                                data-steptype="source" class="form-control range-slider__control" data-max="84"
                                data-min="1" data-number-format="" name="calc_creditTerm" type="text"
                                inputmode="decimal" value="42">
                              <div class="range-slider__ui"></div>

                            </div>
                          </label>

                          <div class="calcform__limit">
                            <div class="calclimit calclimit__min">1 мес.</div><!-- /.calclimit calclimit__min -->
                            <div class="calclimit calclimit__right">84 мес.</div>
                            <!-- /.calclimit calclimit__right -->
                          </div><!-- /.calcaform__limit -->

                        </div><!-- /.calcform__input -->
                        <div class="calcform__slider"></div><!-- /.calcform__slider -->
                      </div><!-- /.calcform__item -->
                    </div><!-- /.calcform__col -->
                    <div class="calcform__col">
                      <div class="calcform__item">
                        <div class="calcform__input">
                          <label class="form__label" for="calc_creditRate">
                            <div class="form-control__wrapper range-slider" data-range-slider-type="calc_creditRate">
                              <span class="placeholder">Выберите ставку кредита, %</span>

                              <input id="calc_creditRate" type="text" data-stepdata="calc_creditRate"
                                data-steptype="source" class="form-control range-slider__control" data-max="99.99"
                                data-min="00.00" data-rate-format="" name="calc_creditRate" type="text"
                                inputmode="decimal" value="50.00 %">
                              <div class="range-slider__ui" id='calc_creditRate_slider'></div>

                            </div>
                          </label>


                          <div class="calcform__limit">
                            <div class="calclimit calclimit__min">0%</div>
                            <div class="calclimit calclimit__right">100%</div>
                          </div><!-- /.calcaform__limit -->

                        </div><!-- /.calcform__input -->
                        <div class="calcform__slider"></div><!-- /.calcform__slider -->
                      </div><!-- /.calcform__item -->
                    </div><!-- /.calcform__col -->
                  </div><!-- /.calcform__row -->
                </div><!-- /.calcform__block -->
                <div class="calcform__block calcform__block_border calcform__block_params">
                  <div class="calcform__content flex">
                    <div class="calcform__main">
                      <div class="calcform__item">
                        <div class="calcform__input">
                          <label for="" class='mobile_flex'>
                            <span class="placeholder">Дата выдачи</span>

                            <input type="text" data-toggle="datepicker" class='expand_more'>
                          </label>
                        </div><!-- /.calcform__input -->
                      </div><!-- /.calcform__item -->
                      <div class="calcform__item calcform__item_select">
                        <div class="calcform__input mobile_flex">
                          <span class="placeholder">Тип платежа</span><!-- /.placeholder -->

                          <div class="calcform__select">
                            <select>
                              <option value="0">Аннуитетный</option>
                              <option value="1">Дифференцированный</option>
                            </select>
                          </div>
                        </div><!-- /.calcform__input -->
                      </div><!-- /.calcform__item -->

                      <div class="calcform__aside onlyMobile">
                        <div class="calcform__total">
                          <div class="calctotal">
                            <div class="calctotal__item">
                              <div class="calctotal__title">Ежемесячный платеж</div><!-- /.calctotal__title -->
                              <div class="calctotal__value">2 000</div><!-- /.calctotal__value -->
                            </div><!-- /.calctotal__item -->
                            <div class="calctotal__item">
                              <div class="calctotal__title">Общая выплата</div><!-- /.calctotal__title -->
                              <div class="calctotal__value">1 350 000</div><!-- /.calctotal__value -->
                            </div><!-- /.calctotal__item -->
                            <div class="calctotal__item calctotal__item_table">
                              <div class="calctable">
                                <table>
                                  <tbody>
                                    <tr>
                                      <td>
                                        <span
                                          class="calctable__color calctable__color-blue"></span><!-- /.calctable__color calctable__color-blue -->
                                      </td>
                                      <td>
                                        <span class="calctable__title">Кредит</span><!-- /.calctable__title -->
                                      </td>
                                      <td>
                                        <span class="calctable__value">1 000 000 руб.</span><!-- /.calctable__value -->
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        <span
                                          class="calctable__color calctable__color-red"></span><!-- /.calctable__color calctable__color-blue -->
                                      </td>
                                      <td>
                                        <span class="calctable__title">Переплата</span><!-- /.calctable__title -->
                                      </td>
                                      <td>
                                        <span class="calctable__value">350 000 руб.</span><!-- /.calctable__value -->
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        <span class=""></span><!-- /.calctable__color calctable__color-blue -->
                                      </td>
                                      <td>
                                        <span class="calctable__title">Итого</span><!-- /.calctable__title -->
                                      </td>
                                      <td>
                                        <span class="calctable__value">1 350 000 руб.</span><!-- /.calctable__value -->
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>
                              </div><!-- /.calctable -->
                            </div><!-- /.calctotal__item -->
                          </div><!-- /.calctotal -->
                        </div><!-- /.calcform__total -->
                      </div><!-- /.calcform__aside -->

                      <div class="calcform__item">
                        <div class="calcform__buttons flex">
                          <div class="calcform__button">
                            <button class='btn_main btn_calc'>
                              Рассчитать
                            </button>
                          </div><!-- /.calcform__button -->
                          <div class="calcform__button">
                            <a href='#myModal_download' data-toggle="modal" class='btn_blborder btn_calc'>
                              Отправить на email
                            </a>


                            <div id="myModal_download" class="modal fade modal_calc">
                              <div class="modal-dialog">
                                <div class="modal-content">

                                  <div class="modal-body">
                                    <div class="modal_zvonok_content">
                                      <div class="modal__header">
                                        <div class="modal__title">График платежей сформирован</div>
                                        <span class="modalclose" data-dismiss="modal" aria-hidden="true">
                                          <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                              d="M23.7656 22.6336C23.8399 22.708 23.8988 22.7962 23.9391 22.8933C23.9793 22.9904 24 23.0945 24 23.1996C24 23.3047 23.9793 23.4088 23.9391 23.5059C23.8988 23.603 23.8399 23.6912 23.7656 23.7656C23.6912 23.8399 23.603 23.8988 23.5059 23.9391C23.4088 23.9793 23.3047 24 23.1996 24C23.0945 24 22.9904 23.9793 22.8933 23.9391C22.7962 23.8988 22.708 23.8399 22.6336 23.7656L16 17.1309L9.36637 23.7656C9.21626 23.9157 9.01268 24 8.8004 24C8.58812 24 8.38454 23.9157 8.23443 23.7656C8.08433 23.6155 8 23.4119 8 23.1996C8 22.9873 8.08433 22.7837 8.23443 22.6336L14.8691 16L8.23443 9.36637C8.08433 9.21626 8 9.01268 8 8.8004C8 8.58812 8.08433 8.38454 8.23443 8.23443C8.38454 8.08433 8.58812 8 8.8004 8C9.01268 8 9.21626 8.08433 9.36637 8.23443L16 14.8691L22.6336 8.23443C22.7837 8.08433 22.9873 8 23.1996 8C23.4119 8 23.6155 8.08433 23.7656 8.23443C23.9157 8.38454 24 8.58812 24 8.8004C24 9.01268 23.9157 9.21626 23.7656 9.36637L17.1309 16L23.7656 22.6336Z"
                                              fill="#4563FF" />
                                          </svg>

                                        </span>
                                      </div><!-- /.modal__header -->

                                      <div class="modal_zvonok_form_content">
                                        <div class="modal__content formblock">
                                          <form method="post" action="#">

                                            <div class="modal__inputs formblock__inputs">
                                              <div class="modal__input formblock__input">
                                                <div class="calcform__item calcform__item_select">
                                                  <div class="calcform__input">
                                                    <span class="placeholder">Электронная
                                                      почта</span><!-- /.placeholder -->
                                                    <input type="email" data-number-format="" value="ivanov@mail.com"
                                                      name="">

                                                  </div><!-- /.calcform__input -->
                                                </div>
                                              </div>

                                            </div>

                                            <div class="calcform__buttons">
                                              <button type="submit" class="btn_main btn_calc btn_main_small">Отправить
                                                график на email</button>
                                            </div>
                                            <div class="calcform__item calcform__item_check">
                                              <div class="check-block">
                                                <input type="checkbox" id="id_checkcalc_modal">
                                                <label for="id_checkcalc_modal">Я согласен на обработку и хранение
                                                  персональных данных</label>
                                                <div class="error_text"></div>
                                              </div>
                                            </div><!-- /.calcform__item -->

                                            <!--  <div class="calcform__buttons mb-0">
                                              <a href='#' download
                                                class="btn_blborder btn_calc w-full btn_main_small ">Скачать
                                                график
                                                платежей</a>
                                            </div> -->
                                          </form>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div><!-- /.calcform__button -->
                          <div class="calcform__button">
                            <a href="#" class='calcform__link'>
                              <img src="images/download.svg" alt="">
                              <span>Скачать .pdf</span>
                            </a>
                          </div><!-- /.calcform__button -->
                        </div><!-- /.calcform__buttons -->
                      </div><!-- /.calcform__item -->
                      <!--  <div class="calcform__item">
                        <div class="check-block check-block_big">
                          <input type="checkbox" id="id_checkcalc">
                          <label for="id_checkcalc">Я согласен на обработку и хранение персональных данных</label>
                          <div class="error_text"></div>
                        </div>
                      </div> --><!-- /.calcform__item -->
                    </div><!-- /.calcform__main -->
                    <div class="calcform__aside onlyDesktop">
                      <div class="calcform__total">
                        <div class="calctotal">
                          <div class="calctotal__item">
                            <div class="calctotal__title">Ежемесячный платеж</div><!-- /.calctotal__title -->
                            <div class="calctotal__value">2 000</div><!-- /.calctotal__value -->
                          </div><!-- /.calctotal__item -->
                          <div class="calctotal__item">
                            <div class="calctotal__title">Общая выплата</div><!-- /.calctotal__title -->
                            <div class="calctotal__value">1 350 000</div><!-- /.calctotal__value -->
                          </div><!-- /.calctotal__item -->
                          <div class="calctotal__item calctotal__item_table">
                            <div class="calctable">
                              <table>
                                <tbody>
                                  <tr>
                                    <td>
                                      <span
                                        class="calctable__color calctable__color-blue"></span><!-- /.calctable__color calctable__color-blue -->
                                    </td>
                                    <td>
                                      <span class="calctable__title">Кредит</span><!-- /.calctable__title -->
                                    </td>
                                    <td>
                                      <span class="calctable__value">1 000 000 руб.</span><!-- /.calctable__value -->
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      <span
                                        class="calctable__color calctable__color-red"></span><!-- /.calctable__color calctable__color-blue -->
                                    </td>
                                    <td>
                                      <span class="calctable__title">Переплата</span><!-- /.calctable__title -->
                                    </td>
                                    <td>
                                      <span class="calctable__value">350 000 руб.</span><!-- /.calctable__value -->
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      <span class=""></span><!-- /.calctable__color calctable__color-blue -->
                                    </td>
                                    <td>
                                      <span class="calctable__title">Итого</span><!-- /.calctable__title -->
                                    </td>
                                    <td>
                                      <span class="calctable__value">1 350 000 руб.</span><!-- /.calctable__value -->
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </div><!-- /.calctable -->
                          </div><!-- /.calctotal__item -->
                        </div><!-- /.calctotal -->
                      </div><!-- /.calcform__total -->
                    </div><!-- /.calcform__aside -->
                  </div><!-- /.calcform__content -->
                </div><!-- /.calcform__block -->
                <div class="calcform__block calcform__block_nob">
                  <h1>Досрочные погашения</h1>

                  <div class="calcform__newrowscontainer">

                  </div><!-- /.calcform__newrowscontainer -->

                  <!-- этот код ниже будет генерироватья для каждого из "Досрочные погашения" при добавлении , с изменением id инпутов и data-атрибутов  --/


                    <div class="calcform__block calcform__block_newblock" data-newblock="1">
                      <div class="calcform__newrow" data-newrow="1">
                        <div class="calcnewrow">
                          <div class="calcnewrow__col">
                            <div class="calcform__item calcform__item_select">
                              <div class="calcform__input">
                                <div class="calcform__select">
                                  <select name='newrow_1_1'>
                                    <option value="0">Единовременно</option>
                                    <option value="1">Ежемесячно</option>
                                  </select>
                                </div>
                                <span class="placeholder">Периодичность погашения</span>
                              </div>
                            </div>
                          </div>
                          <div class="calcnewrow__col">
                            <div class="calcform__item calcform__item_select">
                              <div class="calcform__input">
                                <div class="calcform__select">
                                  <select name='newrow_1_2'>
                                    <option value="0">Уменьшение срока кредита</option>
                                    <option value="1">Уменьшение суммы платежа</option>
                                  </select>
                                </div>
                                <span class="placeholder">Тип расчёта</span>
                              </div>
                            </div>
                          </div>
                          <div class="calcnewrow__col">
                            <div class="calcform__item calcform__item_select">
                              <div class="calcform__input">
                                <input type="text" data-number-format="" value='20000000' name='newrow_1_3'>
                                <span class="placeholder">Сумма</span>
                              </div>
                            </div>
                          </div>
                          <div class="calcnewrow__col">
                            <div class="calcform__item">
                              <div class="calcform__input">
                                <label for="">
                                  <input type="text" data-toggle="datepicker" class='expand_more' name='newrow_1_4'>
                                  <span class="placeholder">Дата</span>
                                </label>
                              </div>
                            </div>
                          </div>
                          <div class="calcnewrow__col">
                            <div class="calcform__icon">
                              <a href="#" class="calcform_remove" data-remove='1'>
                                <img src="images/calcform_remove.svg" alt="">
                              </a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div> -->
                  <div class="calcform__item">
                    <div class="calcform__buttons calcform__buttons_type2 flex">
                      <div class="calcform__button">
                        <a href='#' class="btn_main btn_calc" data-addnewrow='calcnewrow'>
                          Добавить
                        </a>
                      </div>
                      <div class="calcform__button">
                        <a href='#' class="btn_main btn_calc btn_blborder" data-clearcalc='calcnewrow'>
                          Очистить
                        </a>
                      </div>

                    </div>

                  </div>
              </form>
            </div>



          </div>
        </div><!-- /.nbki_v4 wrapperwhite -->

        <div class="calccontent">
          <div class="calccontent__banner">
            <div class="calccontent__imgbanner">
              <a href="https://person.nbki.ru/login?utm_source=sait&utm_medium=calculator" target='_blank'
                class='onDesktop'><img src="images/banner_alfa_5min_1021x1001.jpg" alt=""></a>
              <a href="https://person.nbki.ru/login?utm_source=sait&utm_medium=calculator" target='_blank'
                class='onMobile'><img src="images/alfa-mobile.png" alt=""></a>

            </div><!-- /.calccontent__imgbanner -->
          </div><!-- /.calccontent__banner -->

          <div class="calccontent__banner">
            <div class="newsdetail__banner">
              <div class="pagebanner pagebanner_blue pagebanner_pkr ">
                <div class="pagebanner__content">
                  <div class="pagebanner__cols">
                    <div class="pagebanner__left">
                      <div class="pagebanner__main">
                        <div class="pagebanner__title onlyDesktop">
                          Подобрать кредит, который одобрят
                        </div>
                      </div>
                      <div class="pagebanner__text">
                        Рассчитайте персональный кредитный рейтинг<br> и подберите самый выгодный кредит
                      </div>
                      <div class="pagebanner__buttons">
                        <a href="https://person.nbki.ru/login?utm_source=sait&utm_medium=calculator" target="_blank"
                          class="btn_main btn_main2">Перейти в личный кабинет</a> <span class="pagebanner__info">Это
                          бесплатно</span>
                      </div>
                    </div>
                    <div class="pagebanner__right">
                      <div class="pagebanner__title onlyMobile">
                        Подобрать кредит, <br> который одобрят
                      </div>
                      <div class="pagebanner__image">
                        <img src="https://story.nbki.ru/upload/pkr-blue.gif" alt="пкр">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- /.calccontent__banner -->

          <div class="calccontent__items">
            <h2>
              Зачем нужен кредитный калькулятор:
            </h2>
            <div class="cols3">
              <div class="cols3__col">
                <div class="calccontent__item">
                  <div class="caclcontent__icon caclcontent__icon_blue"></div>
                  <!-- /.caclcontent__icon caclcontent__icon_blue -->
                  <div class="calccontent__title">
                    Проверка основных кредитных показателей
                  </div>
                  <div class="calccontent__text">
                    Узнайте сумму ежемесячного платежа и общей выплаты
                  </div>
                </div>
              </div>
              <div class="cols3__col">
                <div class="calccontent__item">
                  <div class="caclcontent__icon "></div>
                  <!-- /.caclcontent__icon caclcontent__icon_blue -->
                  <div class="calccontent__title">
                    Оценка собственных сил
                  </div>
                  <div class="calccontent__text">
                    Проверьте, подойдут ли вам условия выбранного вами банка
                  </div>
                </div>
              </div>
              <div class="cols3__col">
                <div class="calccontent__item">
                  <div class="caclcontent__icon caclcontent__icon_red"></div>
                  <!-- /.caclcontent__icon caclcontent__icon_blue -->
                  <div class="calccontent__title">
                    Помощь в выборе оптимального кредитного предложения
                  </div>
                  <div class="calccontent__text">
                    Сравните варианты и подберите кредит по возможностям
                  </div>
                </div>
              </div>

            </div>
          </div><!-- /.calccontent__items -->

          <div class="calccontent__description">
            <h2>Кредитный калькулятор НБКИ</h2>
            <div class="text">
              <p>Получение кредита – ответственный шаг, для принятия которого необходимо оценить свои возможности.
                Кредитный калькулятор НБКИ поможет вам подобрать параметры кредита, платить по которому вам будет
                максимально комфортно.</p>
              <p> С помощью кредитного калькулятора НБКИ можно сравнить ежемесячный платеж и сумму переплаты по
                нескольким кредитам и выбрать оптимальные параметры – сумму кредита, ставку и срок.</p>
              <p>Для более точного понимания всех параметров кредита, на который вы можете претендовать рекомендуем вам
                рассчитать в своем <a href="https://person.nbki.ru/login?utm_source=sait&utm_medium=calculator"
                  target="_blank" class='link_blue'>личном кабинете.</a> Чем выше значение ПКР, тем лучшие
                условия по кредиту вы можете
                получить.</p>
            </div><!-- /.text -->
          </div><!-- /.calccontent__description -->

        </div><!-- /.calccontent -->
      </div>
    </div>
    </div>
  </main>
  <footer id="footer" class="footer clearfix">
    <div class="container">
      <div class="footer__main">
        <div class="mainfooter">
          <div class="mainfooter__left">
            <div class="mainfooter__menublock">
              <div class="mainfooter__menu">
                <div class="mainfooter__title"><a href="#">Услуги</a></div>
                <div class="mainfooter__links">
                  <ul>
                    <li>
                      <a href="/pkr/" class="">Узнать кредитный рейтинг</a>
                    </li>
                    <li>
                      <a href="/nbki-history/" class="">Получить кредитную историю</a>
                    </li>
                    <li>
                      <a href="/spor/" class="">Оспорить кредитную историю</a>
                    </li>
                    <li>
                      <a href="/historylist/" class="">Справка из ЦККИ</a>
                    </li>
                    <li>
                      <a href="/code/?utm_medium=footer&amp;utm_campaign=link&amp;utm_term=subject" class="">Действия с
                        кодом субъекта</a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="mainfooter__menu">
                <div class="mainfooter__title"><a href="#">О бюро</a></div>
                <div class="mainfooter__links">
                  <ul>
                    <li>
                      <a href="/corp/" class="">Корпоративным клиентам</a>
                    </li>
                    <li>
                      <a href="https://person.nbki.ru/login" class="">Личный кабинет для физических лиц</a>
                    </li>
                    <li>
                      <a href="#" class="js-acc__link">Личный кабинет для корпоративных клиентов</a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="mainfooter__menu">
                <div class="mainfooter__title"><a href="#">Информация</a></div>
                <div class="mainfooter__links">
                  <ul>
                    <li>
                      <a href="/company/news/" class="">Новости</a>
                    </li>
                    <li>
                      <a href="/faq/" class="">Вопросы и ответы</a>
                    </li>
                    <li>
                      <a href="/company/reviews/" class="">Отзывы</a>
                    </li>
                    <li>
                      <a href="/poleznaya-informatsiya/" class="">Полезная информация</a>
                    </li>
                    <li>
                      <a href="/contacts/" class="">Контакты</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="mainfooter__right">
            <div class="mainfooter__phones">
              <div class="phones">
                <div class="phone"><span>Наш телефон в Москве:</span><a href="tel:84952217837">8 (495) 221-78-37</a>
                </div>
                <div class="phone"><span>Бесплатный звонок:</span><a href="tel:88006006404">8 (800) 600-64-04</a></div>
              </div>
            </div>
            <div class="footerbottom__socials hidden-lg hidden-md visible-sm visible-xs">
              <div class="socials">
                <div class="socials__items">
                  <div class="socials__item">

                    <a href="https://vk.com/public189456417" target="_blank">
                      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M3.17157 3.17157C2.42143 3.92172 2 4.93913 2 6V18C2 19.0609 2.42143 20.0783 3.17157 20.8284C3.92172 21.5786 4.93913 22 6 22H18C19.0609 22 20.0783 21.5786 20.8284 20.8284C21.5786 20.0783 22 19.0609 22 18V6C22 4.93913 21.5786 3.92172 20.8284 3.17157C20.0783 2.42143 19.0609 2 18 2H6C4.93913 2 3.92172 2.42143 3.17157 3.17157ZM4.58579 4.58579C4.96086 4.21071 5.46957 4 6 4H18C18.5304 4 19.0391 4.21071 19.4142 4.58579C19.7893 4.96086 20 5.46957 20 6V18C20 18.5304 19.7893 19.0391 19.4142 19.4142C19.0391 19.7893 18.5304 20 18 20H6C5.46957 20 4.96086 19.7893 4.58579 19.4142C4.21071 19.0391 4 18.5304 4 18V6C4 5.46957 4.21071 4.96086 4.58579 4.58579Z"
                          fill="white" fill-opacity="0.5"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M7.94745 9.67958L7.94748 9.67966L7.94865 9.68308L7.95489 9.70105C7.96074 9.71781 7.96996 9.74393 7.98243 9.77843C8.0074 9.84748 8.04529 9.94985 8.09521 10.0778C8.19533 10.3343 8.34241 10.6902 8.52909 11.0845C8.91473 11.899 9.42241 12.7757 9.97498 13.3203C10.3573 13.6971 10.716 13.8671 11.0003 13.9425V10.0003C11.0003 9.44799 11.448 9.00027 12.0003 9.00027C12.5526 9.00027 13.0003 9.44799 13.0003 10.0003V12.4366L13.3097 12.1412L16.3097 9.27698C16.7092 8.8956 17.3422 8.91027 17.7236 9.30973C18.1049 9.70919 18.0903 10.3422 17.6908 10.7236L15.5663 12.7519L17.5802 14.1856C18.0302 14.5059 18.1352 15.1303 17.8149 15.5802C17.4946 16.0302 16.8702 16.1352 16.4203 15.8149L13.4203 13.6791L13.0003 13.3801V14.9286C13.0003 15.3606 12.7228 15.7438 12.3124 15.8786L12.0003 14.9286C12.3124 15.8786 12.3119 15.8788 12.3113 15.879L12.3101 15.8794L12.3077 15.8801L12.3025 15.8818L12.2904 15.8856C12.2816 15.8883 12.2714 15.8914 12.2597 15.8947C12.2365 15.9014 12.2075 15.9091 12.1733 15.9174C12.1048 15.9339 12.0145 15.9524 11.9053 15.9678C11.6875 15.9985 11.3901 16.0171 11.0391 15.9786C10.3218 15.9001 9.42553 15.587 8.57102 14.7447C7.75995 13.9453 7.13127 12.8059 6.72145 11.9403C6.5104 11.4945 6.34499 11.0943 6.23204 10.8048C6.17542 10.6597 6.13164 10.5416 6.10156 10.4584C6.08651 10.4167 6.07487 10.3838 6.06674 10.3605L6.05719 10.333L6.05441 10.3249L6.05352 10.3222L6.05321 10.3213L6.05308 10.3209C6.05303 10.3208 6.05298 10.3206 7.00027 10.0003L6.05298 10.3206C5.87605 9.79745 6.15674 9.2299 6.67991 9.05298C7.20289 8.87611 7.7702 9.15652 7.94736 9.6793L7.94741 9.67945L7.94745 9.67958Z"
                          fill="white" fill-opacity="0.5"></path>
                      </svg>
                    </a>
                  </div>

                  <div class="socials__item">
                    <a href="https://www.youtube.com/channel/UC-quFSK5Vpq23UOogbUcSUg" rel="nofollow" target="_blank">
                      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M7.84475 4.77475C10.4368 4.40775 13.5628 4.40775 16.1548 4.77475C18.5098 5.10875 20.3348 6.76075 20.6828 8.54075C21.1058 10.6958 21.1058 13.3038 20.6828 15.4587C20.3337 17.2387 18.5098 18.8908 16.1548 19.2248C13.5628 19.5918 10.4358 19.5918 7.84475 19.2248C5.48975 18.8908 3.66575 17.2387 3.31675 15.4587C2.89375 13.3038 2.89375 10.6958 3.31675 8.54075C3.66575 6.76075 5.48975 5.10875 7.84475 4.77475ZM16.4347 2.79475C13.6577 2.40175 10.3418 2.40175 7.56475 2.79475C4.54975 3.22175 1.89975 5.37275 1.35475 8.15675C0.88175 10.5658 0.88175 13.4338 1.35475 15.8428C1.89975 18.6268 4.54975 20.7778 7.56475 21.2048C10.3418 21.5977 13.6577 21.5977 16.4347 21.2048C19.4497 20.7778 22.0998 18.6268 22.6448 15.8428C23.1178 13.4338 23.1178 10.5658 22.6448 8.15675C22.0998 5.37275 19.4497 3.22175 16.4347 2.79475ZM10.5548 7.16775C10.4042 7.06727 10.2291 7.00956 10.0483 7.00078C9.86744 6.99199 9.68761 7.03247 9.52798 7.11788C9.36835 7.20329 9.23491 7.33043 9.14188 7.48574C9.04884 7.64105 8.99972 7.81871 8.99975 7.99975V15.9998C8.99972 16.1808 9.04884 16.3584 9.14188 16.5138C9.23491 16.6691 9.36835 16.7962 9.52798 16.8816C9.68761 16.967 9.86744 17.0075 10.0483 16.9987C10.2291 16.9899 10.4042 16.9322 10.5548 16.8318L16.5548 12.8317C16.6917 12.7404 16.804 12.6167 16.8817 12.4716C16.9593 12.3264 17 12.1644 17 11.9998C17 11.8351 16.9593 11.6731 16.8817 11.5279C16.804 11.3828 16.6917 11.2591 16.5548 11.1678L10.5548 7.16775ZM14.1967 11.9998L10.9998 14.1318V9.86875L14.1967 11.9998Z"
                          fill="white" fill-opacity="0.5"></path>
                      </svg>
                    </a>
                  </div>

                  <div class="socials__item">
                    <a href="https://zen.yandex.ru/nbki" rel="nofollow" target="_blank">
                      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="12" cy="12" r="10" stroke="#7B7794" stroke-width="2"></circle>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M11.8583 5C11.8253 7.87985 11.637 9.49155 10.5642 10.5642C9.49155 11.637 7.87985 11.8253 5 11.8583V12.2763C7.87985 12.3093 9.49155 12.4976 10.5642 13.5703C11.6201 14.6262 11.8192 16.2043 11.8567 19H12.2779C12.3154 16.2043 12.5145 14.6262 13.5703 13.5703C14.6262 12.5145 16.2043 12.3154 19 12.2779V11.8566C16.2043 11.8191 14.6262 11.6201 13.5703 10.5642C12.4976 9.49155 12.3093 7.87985 12.2763 5H11.8583Z"
                          fill="#7B7794"></path>
                      </svg>
                    </a>
                  </div>


                  <div class="socials__item">
                    <a href="https://ok.ru/group/57783371890929" rel="nofollow" target="_blank"> <svg width="24"
                        height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="12" cy="12" r="10" stroke="white" stroke-opacity="0.5" stroke-width="2"></circle>
                        <path data-skip-moving="true" fill-rule="evenodd" clip-rule="evenodd"
                          d="M11.9924 12.1924C10.2233 12.1924 8.78456 10.8037 8.78456 9.09664C8.78456 7.38899 10.2233 6 11.9924 6C13.7618 6 15.2002 7.38899 15.2002 9.09664C15.2002 10.8037 13.7618 12.1924 11.9924 12.1924ZM11.9918 7.8137C12.7242 7.8137 13.32 8.3886 13.32 9.0956C13.32 9.80204 12.7242 10.3773 11.9918 10.3773C11.26 10.3773 10.6636 9.80204 10.6636 9.0956C10.6636 8.3886 11.26 7.8137 11.9918 7.8137ZM15.1715 16.4954L13.3322 14.8133C14.0019 14.6738 14.6478 14.4315 15.2427 14.0899C15.693 13.8303 15.8286 13.2861 15.5449 12.8744C15.2614 12.4618 14.6667 12.3376 14.2157 12.5972C12.868 13.3721 11.1328 13.372 9.78582 12.5972C9.33481 12.3376 8.73988 12.4618 8.45698 12.8744C8.1733 13.2864 8.30854 13.8303 8.75878 14.0899C9.3537 14.4312 9.99962 14.6738 10.6694 14.8133L8.82984 16.4954C8.45383 16.8396 8.45383 17.3977 8.83024 17.7419C9.01864 17.9138 9.26511 17.9998 9.51159 17.9998C9.75846 17.9998 10.0053 17.9138 10.1937 17.7419L12.0006 16.0889L13.809 17.7419C14.185 18.086 14.7951 18.086 15.1715 17.7419C15.5483 17.3977 15.5483 16.8393 15.1715 16.4954Z"
                          fill="white" fill-opacity="0.5"></path>
                      </svg>
                    </a>
                  </div>

                  <div class="socials__item">
                    <a href="https://t.me/bkinbki" target="_blank">

                      <img src="/images/tgicon.svg" alt="" style="width:23px; height:23px; opacity: 0.7">


                    </a>
                  </div>


                </div>
              </div>
            </div>
            <div class="mainfooter__navs">
              <div class="mainfooter__nav">
                <a href="/privacy_rules/">Пользовательское соглашение</a>
              </div>
              <div class="mainfooter__nav">
                <a href="/upload/iblock/5fa/muqsrd2n4cuyky63jz7wl1telgqzyppx.pdf" target="_blank">Политика обработки
                  данных</a>
              </div>
              <!--<div class="mainfooter__nav"><a href="/sitemap/">Карта сайта</a></div>-->
            </div>
          </div>
        </div>
      </div>
      <div class="footer__bottom">
        <div class="footerbottom">
          <div class="footerbottom__links">
            <div class="footerbottom__text">
              © Национальное бюро кредитных историй, 2006–2023 </div>
            <div class="footerbottom__text footerbottom__text_dev" style="display:none;">
              <span>Дизайн сайта — <a href="https://mediaaid.ru" rel="nofollow" target="_blank">mad!</a></span>
              <span>Разработка сайта - <a href="https://www.empis.ru/" rel="nofollow" target="_blank">EMPIS</a></span>
            </div>
          </div>
          <div class="footerbottom__socials visible-lg visible-md hidden-sm hidden-xs">
            <div class="socials">
              <div class="socials__items">
                <div class="socials__item">

                  <a href="https://vk.com/public189456417" target="_blank">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M3.17157 3.17157C2.42143 3.92172 2 4.93913 2 6V18C2 19.0609 2.42143 20.0783 3.17157 20.8284C3.92172 21.5786 4.93913 22 6 22H18C19.0609 22 20.0783 21.5786 20.8284 20.8284C21.5786 20.0783 22 19.0609 22 18V6C22 4.93913 21.5786 3.92172 20.8284 3.17157C20.0783 2.42143 19.0609 2 18 2H6C4.93913 2 3.92172 2.42143 3.17157 3.17157ZM4.58579 4.58579C4.96086 4.21071 5.46957 4 6 4H18C18.5304 4 19.0391 4.21071 19.4142 4.58579C19.7893 4.96086 20 5.46957 20 6V18C20 18.5304 19.7893 19.0391 19.4142 19.4142C19.0391 19.7893 18.5304 20 18 20H6C5.46957 20 4.96086 19.7893 4.58579 19.4142C4.21071 19.0391 4 18.5304 4 18V6C4 5.46957 4.21071 4.96086 4.58579 4.58579Z"
                        fill="white" fill-opacity="0.5"></path>
                      <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M7.94745 9.67958L7.94748 9.67966L7.94865 9.68308L7.95489 9.70105C7.96074 9.71781 7.96996 9.74393 7.98243 9.77843C8.0074 9.84748 8.04529 9.94985 8.09521 10.0778C8.19533 10.3343 8.34241 10.6902 8.52909 11.0845C8.91473 11.899 9.42241 12.7757 9.97498 13.3203C10.3573 13.6971 10.716 13.8671 11.0003 13.9425V10.0003C11.0003 9.44799 11.448 9.00027 12.0003 9.00027C12.5526 9.00027 13.0003 9.44799 13.0003 10.0003V12.4366L13.3097 12.1412L16.3097 9.27698C16.7092 8.8956 17.3422 8.91027 17.7236 9.30973C18.1049 9.70919 18.0903 10.3422 17.6908 10.7236L15.5663 12.7519L17.5802 14.1856C18.0302 14.5059 18.1352 15.1303 17.8149 15.5802C17.4946 16.0302 16.8702 16.1352 16.4203 15.8149L13.4203 13.6791L13.0003 13.3801V14.9286C13.0003 15.3606 12.7228 15.7438 12.3124 15.8786L12.0003 14.9286C12.3124 15.8786 12.3119 15.8788 12.3113 15.879L12.3101 15.8794L12.3077 15.8801L12.3025 15.8818L12.2904 15.8856C12.2816 15.8883 12.2714 15.8914 12.2597 15.8947C12.2365 15.9014 12.2075 15.9091 12.1733 15.9174C12.1048 15.9339 12.0145 15.9524 11.9053 15.9678C11.6875 15.9985 11.3901 16.0171 11.0391 15.9786C10.3218 15.9001 9.42553 15.587 8.57102 14.7447C7.75995 13.9453 7.13127 12.8059 6.72145 11.9403C6.5104 11.4945 6.34499 11.0943 6.23204 10.8048C6.17542 10.6597 6.13164 10.5416 6.10156 10.4584C6.08651 10.4167 6.07487 10.3838 6.06674 10.3605L6.05719 10.333L6.05441 10.3249L6.05352 10.3222L6.05321 10.3213L6.05308 10.3209C6.05303 10.3208 6.05298 10.3206 7.00027 10.0003L6.05298 10.3206C5.87605 9.79745 6.15674 9.2299 6.67991 9.05298C7.20289 8.87611 7.7702 9.15652 7.94736 9.6793L7.94741 9.67945L7.94745 9.67958Z"
                        fill="white" fill-opacity="0.5"></path>
                    </svg>
                  </a>
                </div>

                <div class="socials__item">
                  <a href="https://www.youtube.com/channel/UC-quFSK5Vpq23UOogbUcSUg" rel="nofollow" target="_blank">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M7.84475 4.77475C10.4368 4.40775 13.5628 4.40775 16.1548 4.77475C18.5098 5.10875 20.3348 6.76075 20.6828 8.54075C21.1058 10.6958 21.1058 13.3038 20.6828 15.4587C20.3337 17.2387 18.5098 18.8908 16.1548 19.2248C13.5628 19.5918 10.4358 19.5918 7.84475 19.2248C5.48975 18.8908 3.66575 17.2387 3.31675 15.4587C2.89375 13.3038 2.89375 10.6958 3.31675 8.54075C3.66575 6.76075 5.48975 5.10875 7.84475 4.77475ZM16.4347 2.79475C13.6577 2.40175 10.3418 2.40175 7.56475 2.79475C4.54975 3.22175 1.89975 5.37275 1.35475 8.15675C0.88175 10.5658 0.88175 13.4338 1.35475 15.8428C1.89975 18.6268 4.54975 20.7778 7.56475 21.2048C10.3418 21.5977 13.6577 21.5977 16.4347 21.2048C19.4497 20.7778 22.0998 18.6268 22.6448 15.8428C23.1178 13.4338 23.1178 10.5658 22.6448 8.15675C22.0998 5.37275 19.4497 3.22175 16.4347 2.79475ZM10.5548 7.16775C10.4042 7.06727 10.2291 7.00956 10.0483 7.00078C9.86744 6.99199 9.68761 7.03247 9.52798 7.11788C9.36835 7.20329 9.23491 7.33043 9.14188 7.48574C9.04884 7.64105 8.99972 7.81871 8.99975 7.99975V15.9998C8.99972 16.1808 9.04884 16.3584 9.14188 16.5138C9.23491 16.6691 9.36835 16.7962 9.52798 16.8816C9.68761 16.967 9.86744 17.0075 10.0483 16.9987C10.2291 16.9899 10.4042 16.9322 10.5548 16.8318L16.5548 12.8317C16.6917 12.7404 16.804 12.6167 16.8817 12.4716C16.9593 12.3264 17 12.1644 17 11.9998C17 11.8351 16.9593 11.6731 16.8817 11.5279C16.804 11.3828 16.6917 11.2591 16.5548 11.1678L10.5548 7.16775ZM14.1967 11.9998L10.9998 14.1318V9.86875L14.1967 11.9998Z"
                        fill="white" fill-opacity="0.5"></path>
                    </svg>
                  </a>
                </div>

                <div class="socials__item">
                  <a href="https://zen.yandex.ru/nbki" rel="nofollow" target="_blank">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <circle cx="12" cy="12" r="10" stroke="#7B7794" stroke-width="2"></circle>
                      <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M11.8583 5C11.8253 7.87985 11.637 9.49155 10.5642 10.5642C9.49155 11.637 7.87985 11.8253 5 11.8583V12.2763C7.87985 12.3093 9.49155 12.4976 10.5642 13.5703C11.6201 14.6262 11.8192 16.2043 11.8567 19H12.2779C12.3154 16.2043 12.5145 14.6262 13.5703 13.5703C14.6262 12.5145 16.2043 12.3154 19 12.2779V11.8566C16.2043 11.8191 14.6262 11.6201 13.5703 10.5642C12.4976 9.49155 12.3093 7.87985 12.2763 5H11.8583Z"
                        fill="#7B7794"></path>
                    </svg>
                  </a>
                </div>


                <div class="socials__item">
                  <a href="https://ok.ru/group/57783371890929" rel="nofollow" target="_blank"> <svg width="24"
                      height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <circle cx="12" cy="12" r="10" stroke="white" stroke-opacity="0.5" stroke-width="2"></circle>
                      <path data-skip-moving="true" fill-rule="evenodd" clip-rule="evenodd"
                        d="M11.9924 12.1924C10.2233 12.1924 8.78456 10.8037 8.78456 9.09664C8.78456 7.38899 10.2233 6 11.9924 6C13.7618 6 15.2002 7.38899 15.2002 9.09664C15.2002 10.8037 13.7618 12.1924 11.9924 12.1924ZM11.9918 7.8137C12.7242 7.8137 13.32 8.3886 13.32 9.0956C13.32 9.80204 12.7242 10.3773 11.9918 10.3773C11.26 10.3773 10.6636 9.80204 10.6636 9.0956C10.6636 8.3886 11.26 7.8137 11.9918 7.8137ZM15.1715 16.4954L13.3322 14.8133C14.0019 14.6738 14.6478 14.4315 15.2427 14.0899C15.693 13.8303 15.8286 13.2861 15.5449 12.8744C15.2614 12.4618 14.6667 12.3376 14.2157 12.5972C12.868 13.3721 11.1328 13.372 9.78582 12.5972C9.33481 12.3376 8.73988 12.4618 8.45698 12.8744C8.1733 13.2864 8.30854 13.8303 8.75878 14.0899C9.3537 14.4312 9.99962 14.6738 10.6694 14.8133L8.82984 16.4954C8.45383 16.8396 8.45383 17.3977 8.83024 17.7419C9.01864 17.9138 9.26511 17.9998 9.51159 17.9998C9.75846 17.9998 10.0053 17.9138 10.1937 17.7419L12.0006 16.0889L13.809 17.7419C14.185 18.086 14.7951 18.086 15.1715 17.7419C15.5483 17.3977 15.5483 16.8393 15.1715 16.4954Z"
                        fill="white" fill-opacity="0.5"></path>
                    </svg>
                  </a>
                </div>

                <div class="socials__item">
                  <a href="https://t.me/bkinbki" target="_blank">

                    <img src="/images/tgicon.svg" alt="" style="width:23px; height:23px; opacity: 0.7">


                  </a>
                </div>


              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <div class="s-overlay"></div>
  <!-- Модальные окно - Оплата -->
  <div id="modal_pay" class="modal fade">
    <div class="modal-dialog">
      <div class="modal-content">
        <span class="modalclose" data-dismiss="modal" aria-hidden="true">
          <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M1 15L15 1" stroke="#C2BFCC" stroke-width="2" stroke-linecap="round"></path>
            <path d="M1 1L15 15" stroke="#C2BFCC" stroke-width="2" stroke-linecap="round"></path>
          </svg>
        </span>
        <div class="modal-body">
          <div class="modal-title">Онлайн оплата услуги</div>
          <div class="modal__text">
            <p>
              <span style="color: #FF0029">Внимание!</span> Первый и&nbsp;второй (за 12 месяцев) кредитный отчет
              оплачивать не&nbsp;нужно.
            </p>
            <p>После оплаты кредитная история не&nbsp;будет отправлена, после оплаты необходимо направить запрос,
              смотри
              пункты выше</p>
          </div>
          <div class="modal__info">Стоимость услуги</div>
          <div class="modal__price">699 ₽</div>
          <div class="modal__content formblock">
            <form>
              <div class="modal__inputs formblock__inputs">
                <div class="modal__input formblock__input">
                  <input type="text" class="forminput" name="" placeholder="Фамилия">
                </div>
                <div class="modal__input formblock__input">
                  <input type="text" class="forminput" name="" placeholder="Имя">
                </div>
                <div class="modal__input formblock__input">
                  <input type="text" class="forminput" name="" placeholder="Отчество">
                </div>
                <div class="modal__input formblock__input">
                  <input type="tel" class="forminput" name="" placeholder="Мобильный телефон">
                </div>
                <div class="modal__input formblock__input">
                  <input type="email" class="forminput" name="" placeholder="Электронная почта">
                </div>
              </div>
              <div class="check-block">
                <input type="checkbox" id="checkbox_confirm">
                <label for="checkbox_confirm">Оплачивая услугу вы соглашаетесь с&nbsp; <a href=""
                    class="link_blue">Политикой в&nbsp;области обработки и&nbsp;защиты персональных данных АО
                    «НБКИ»</a>
                </label>
              </div>
              <div class="formblock__buttons">
                <button type="submit" class="btn_main btn_main_default">Оплатить</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script src='//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js'></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/slick.min.js"></script>
  <script src="js/maskedinput.js"></script>
  <script src="js/wow.min.js"></script>
  <script type="text/javascript" src="js/main.js"></script>
  <script type="text/javascript" src="js/jQuery.inputSliderRange.min.js"></script>
  <script type="text/javascript" src="js/nouislider.min.js"></script>
  <script type="text/javascript" src="js/jquery.inputmask.min.js"></script>
  <script type="text/javascript" src="js/datepicker.min.js"></script>
  <script type="text/javascript" src="js/wNumb.min.js"></script>
  <!--     <script type="text/javascript" src="js/calc.js"></script>
 -->
  <script>
    var rangeTimeout


    $(document).ready(function () {
      $("[data-summ-format]").inputmask("integer", {
        mask: "( 999){+|1}",
        numericInput: true,
        showMaskOnHover: false,
        showMaskOnFocus: false,
        rightAlign: false,
      })


      $("[data-rate-format]").inputmask({
        mask: "9[9][.9][9] %",
      })
      $("[data-number-format]").inputmask({
        mask: "( 999){+|1}",
        numericInput: true,
        showMaskOnHover: false,
        showMaskOnFocus: false,
        rightAlign: false,
      })

      /*  if ($(".range-slider").length) {
         var rangeSliders = $(".range-slider")
         rangeSliderInit(rangeSliders)
       } */
    })
    function initDatepicker() {
      $('[data-toggle="datepicker"]').datepicker({
        // options here
        autoHide: true,
        autoPick: true,
        format: "dd.mm.yyyy",
        language: "ru-Ru",
        date: Date.now(),
        weekStart: 1,
        days: [
          "Воскресенье",
          "Понедельник",
          "Вторник",
          "Среда",
          "Четверг",
          "Пятница",
          "Суббота",
        ],
        daysShort: ["Вс", "Пн", "Вт", "Ср", "Чт", "Пт", "Сб"],
        daysMin: ["Вс", "Пн", "Вт", "Ср", "Чт", "Пт", "Сб"],
        months: [
          "Январь",
          "Февраль",
          "Март",
          "Апрель",
          "Май",
          "Июнь",
          "Июль",
          "Август",
          "Сентябрь",
          "Октябрь",
          "Ноябрь",
          "Декабрь",
        ],
        monthsShort: [
          "Янв",
          "Фер",
          "Мар",
          "Апр",
          "Май",
          "Июн",
          "Июл",
          "Авг",
          "Сен",
          "Окт",
          "Ноя",
          "Дек",
        ],

        mutedClass: "muted",
        pickedClass: "picked",
        disabledClass: "disabled",
        highlightedClass: "highlighted",
        template:
          '<div class="datepicker-container">' +
          '<div class="datepicker-panel" data-view="years picker">' +
          "<ul>" +
          '<li data-view="years prev">&lsaquo;</li>' +
          '<li data-view="years current"></li>' +
          '<li data-view="years next">&rsaquo;</li>' +
          "</ul>" +
          '<ul data-view="years"></ul>' +
          "</div>" +
          '<div class="datepicker-panel" data-view="months picker">' +
          "<ul>" +
          '<li data-view="year prev">&lsaquo;</li>' +
          '<li data-view="year current"></li>' +
          '<li data-view="year next">&rsaquo;</li>' +
          "</ul>" +
          '<ul data-view="months"></ul>' +
          "</div>" +
          '<div class="datepicker-panel" data-view="days picker">' +
          "<ul>" +
          '<li data-view="month prev">&lsaquo;</li>' +
          '<li data-view="month current"></li>' +
          '<li data-view="month next">&rsaquo;</li>' +
          "</ul>" +
          '<ul data-view="week"></ul>' +
          '<ul data-view="days"></ul>' +
          "</div>" +
          "</div>",
        template:
          '<div class="datepicker-container">' +
          '<div class="datepicker-panel" data-view="years picker">' +
          '<ul class="datepicker-nav">' +
          '<li data-view="month prev">&lsaquo;</li>' +
          '<li data-view="month current"></li>' +
          '<li data-view="month next">&rsaquo;</li>' +
          "</ul>" +
          '<ul data-view="years"></ul>' +
          "</div>" +
          '<div class="datepicker-panel" data-view="months picker">' +
          '<ul class="datepicker-nav">' +
          '<li data-view="month prev">&lsaquo;</li>' +
          '<li data-view="month current"></li>' +
          '<li data-view="month next">&rsaquo;</li>' +
          "</ul>" +
          '<ul data-view="months"></ul>' +
          "</div>" +
          '<div class="datepicker-panel" data-view="days picker">' +
          '<ul class="datepicker-nav">' +
          '<li data-view="month prev">&lsaquo;</li>' +
          '<li data-view="month current"></li>' +
          '<li data-view="month next">&rsaquo;</li>' +
          "</ul>" +
          '<ul data-view="week"></ul>' +
          '<ul data-view="days"></ul>' +
          "</div>" +
          "</div>",
        /*  startDate: Date.now(), */
      })
    }
    function initSelect(selector) {
      var customSelect = selector

      customSelect.each(function () {
        var thisCustomSelect = $(this),
          options = thisCustomSelect.find("option"),
          firstOptionText = options.first().text()

        var selectedItem = $("<div></div>", {
          class: "calcform__select-selected",
        })
          .appendTo(thisCustomSelect)
          .text(firstOptionText)

        var allItems = $("<div></div>", {
          class: "calcform__select-all all-items-hide",
        }).appendTo(thisCustomSelect)

        options.each(function () {
          var that = $(this),
            optionText = that.text()

          var item = $("<div></div>", {
            class: "calcform__select-item",
            on: {
              click: function () {
                $(".calcform__select-item").removeClass("active")
                $(this).addClass("active")
                var selectedOptionText = that.text()
                selectedItem.text(selectedOptionText).removeClass("arrowanim")
                allItems.addClass("all-items-hide")
              },
            },
          })
            .appendTo(allItems)
            .text(optionText)
        })
        $(".calcform__select").each((index, item) => {
          /*   $(item).addClass("calcform__select_initialized") */
          $(item).find(".calcform__select-item:first").addClass("active")
        })
      })

      var selectedItem = $(".calcform__select:not(.calcform__select_initialized) .calcform__select-selected"),
        allItems = $(".calcform__select-all")

      selectedItem.on("click", function (e) {
        var currentSelectedItem = $(this),
          currentAllItems = currentSelectedItem.next(".calcform__select-all")

        allItems.not(currentAllItems).addClass("all-items-hide")
        selectedItem.not(currentSelectedItem).removeClass("arrowanim")

        currentAllItems.toggleClass("all-items-hide")
        currentSelectedItem.toggleClass("arrowanim")

        e.stopPropagation()
      })

      $(".calcform__select:not(.calcform__select_initialized)").addClass("calcform__select_initialized")


      $(document).on("click", function () {
        var opened = $(".calcform__select:not(.calcform__select_initialized)"),
          index = opened.parent().index()

        customSelect
          .eq(index)
          .find(".calcform__select-all")
          .addClass("all-items-hide")
        customSelect
          .eq(index)
          .find(".calcform__select-selected")
          .removeClass("arrowanim")
      })



    }

    $(document).ready(function () {
      let count = $("[data-newrow]").length

      $('[data-clearcalc]').on('click', function (e) {
        e.preventDefault()
        $('.calcform__newrowscontainer').html("")
        $(this).closest(".calcform__item").removeClass('active')
        $(this).closest(".calcform__block").removeClass('active')
      })

      $("[data-addnewrow]").on("click", function (e) {
        e.preventDefault()
        count++

        $(this).closest(".calcform__item").addClass('active')
        $(this).closest(".calcform__block").addClass('active')

        $('.calcform__newrowscontainer').append(`<div class="calcform__block calcform__block_newblock" data-newblock="${count}">
    <div class="calcform__newrow" data-newrow="${count}">
      <div class="calcnewrow">
        <div class="calcnewrow__col">
          <div class="calcform__item calcform__item_select">
            <div class="calcform__input">
              <div class="calcform__select">
                <span class="placeholder">Периодичность погашения</span><!-- /.placeholder -->

                <select  name='newrow_${count}_1'>
                  <option value="0">Единовременно</option>
                  <option value="1">Ежемесячно</option>
                </select>
              </div>
            </div><!-- /.calcform__input -->
          </div><!-- /.calcform__item -->
        </div><!-- /.calcnewrow__col -->
        <div class="calcnewrow__col">
          <div class="calcform__item calcform__item_select">
            <div class="calcform__input">
              <div class="calcform__select">
                <span class="placeholder">Тип расчёта</span><!-- /.placeholder -->

                <select name='newrow_${count}_2'>
                  <option value="0">Уменьшение срока кредита</option>
                  <option value="1">Уменьшение суммы платежа</option>
                </select>
              </div>
            </div><!-- /.calcform__input -->
          </div><!-- /.calcform__item -->
        </div><!-- /.calcnewrow__col -->
        <div class="calcnewrow__col">
          <div class="calcform__item ">
            <div class="calcform__input">
              <span class="placeholder">Сумма</span><!-- /.placeholder -->

              <input type="text" data-number-format="" value='20000000' name='newrow_${count}_3'>
            </div><!-- /.calcform__input -->
          </div><!-- /.calcform__item -->
        </div><!-- /.calcnewrow__col -->
        <div class="calcnewrow__col">
          <div class="calcform__item">
            <div class="calcform__input calcform__input_date">
              <label for="">
                <span class="placeholder">Дата</span>

                <input type="text" data-toggle="datepicker" class='expand_more' name='newrow_${count}_4'>
              </label>
            </div><!-- /.calcform__input -->
          </div><!-- /.calcform__item -->
        </div><!-- /.calcnewrow__col -->
        <div class="calcnewrow__col">
          <div class="calcform__icon">
            <a href="#" class="calcform_remove" data-remove='${count}'>
              <img src="images/calcform_remove.svg" alt="">
            </a><!-- /.calcform_remove -->
          </div><!-- /.calcform__icon -->
        </div><!-- /.calcnewrow__col -->
      </div><!-- /.calcnewrow -->
    </div><!-- /.calcform__newrow -->
  </div><!-- /.calcform__block calcform__block_newblock -->`)



        $(`[data-newblock-${count}] [data-number-format]`).inputmask({
          rightAlign: false,
          alias: 'numeric',
          digits: 2,
          suffix: ' м³',
          showMaskOnHover: false,
          showMaskOnFocus: false,
        });



        initSelect($(".calcform__select").not(".calcform__select_initialized"))
        initDatepicker()
      })


      $(document).on("click", "[data-remove]", function (e) {
        e.preventDefault()
        let id = $(this).data("remove")
        $(this).closest(`[data-newblock=${id}]`).remove()
      })
    })

    $(document).ready(function () {
      $(document).on("click", ".calcform__block_nob.active h1", function (e) {
        $('.calcform__newrowscontainer').slideToggle()
        $(this).closest('.calcform__block_nob').toggleClass('expanded')
      })


      initSelect($(".calcform__select"))

      initDatepicker()



      function initRangeslider(item) {

        let itemId = `#${item.closest('.range-slider').querySelector('input').getAttribute('id')}`

        console.log(itemId)

        let rangeSliderType = $(itemId).closest('.range-slider').data('range-slider-type')

        let rangeSliderMin = parseFloat($(itemId).data('min'))
        let rangeSliderMax = parseFloat($(itemId).data('max'))
        let rangeSliderStart = parseFloat($(itemId).attr('value'))
        let rangeSliderStep = parseFloat($(itemId).data('step')) || 1

        let rangeSliderOptions = null

        if (rangeSliderType === "calc_summ") {
          rangeSliderOptions = {
            start: [rangeSliderStart],
            range: {
              min: [rangeSliderMin, 1],
              "20%": [100000, 1000],
              "30%": [500000, 5000],
              "50%": [5000000, 10000],
              max: [rangeSliderMax],
            },
            connect: "lower",
          }
        } else if (rangeSliderType === "calc_creditRate") {
          rangeSliderOptions = {
            start: [rangeSliderStart],
            step: 0.01,
            range: {
              'min': [rangeSliderMin],
              'max': [rangeSliderMax],
            },
            format: wNumb({
              decimals: 2,
            }),
            connect: 'lower'
          }
        } else {
          rangeSliderOptions = {
            start: [rangeSliderStart],
            range: {
              min: [rangeSliderMin],
              max: [rangeSliderMax],
            },
            format: wNumb({
              decimals: 0,
            }),
            connect: "lower",
          }
        }

        noUiSlider.create(item, rangeSliderOptions);

        item.noUiSlider.on('slide', function (values, handle) {
          $(itemId).val(values[0])
        });

        $(itemId).on('change', function () {
          let val = parseFloat(String($(itemId).val()).replace(/\s/g, ''))
          console.log(val)

          if (val > rangeSliderMax) {
            val = rangeSliderMax
            $(this).val(rangeSliderMax)
          }

          if (val < rangeSliderMin) {
            val = rangeSliderMin
            $(this).val(rangeSliderMin)

          }
          item.noUiSlider.set(val, null);

        })
      }

      let sliders = document.querySelectorAll(".range-slider__ui")

      sliders.forEach(item => {
        initRangeslider(item)
      })




    })

  </script>
</body>

</html>