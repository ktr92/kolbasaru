<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("");
?>


    <div class="pageheader">
      <div class="container">
        <div class="breadcrumb">
          <p id="breadcrumbs">
            <span>
              <span><a href="https://r2grupp.ru/">Главная</a> <span class="razdl">|</span> <span class="breadcrumb_last" aria-current="page">История компании</span></span>
            </span>
          </p>
        </div>
        <div class="pageheader__wrapper">
          <div class="pageheader__content">
            <div class="pageheader__title">
              <h1>
                Перевозка сборных <br />
                грузов
              </h1>
            </div>
            <!-- /.pageheader__title -->
            <div class="pageheader__text">
              <p>
                Сборные грузоперевозки актуальны для тех, кому нужно отправить небольшую партию товара. Наша компания осуществляет весь основной спектр услуг, связанный со складской переработкой и перевозкой сборных грузов.
              </p>
            </div>
            <!-- /.pageheader__text -->
          </div>
          <!-- /.pageheader__content -->
          <div class="pageheader__image"><img src="<?= ASSETS_PATH ?>/img/sbor-tumb.png" alt="" /></div>
          <!-- /.pageheader__image -->
        </div>
        <!-- /.pageheader__wrapper -->
      </div>
      <!-- /.container -->
    </div>
    <!-- /.pageheader -->

    <section>
      <div class="pagecontent">
        <div class="container">
          <div class="pagecontent__title">
            <h2>Направления перевозок</h2>
          </div>
          <!-- /.pagecontent__title -->
          <div class="pagetabs" data-tabs="sb">
            <div class="pagetabs__nav">
              <div class="pagetabs__navitem active" data-tab="sb1">
                <div class="pagetabs__tab">
                  <div class="pagetabs__navicon table-svg">
                    <img src="<?= ASSETS_PATH ?>/img/tab1_ifactive.svg" alt="" class="ifactive" />
                    <img src="<?= ASSETS_PATH ?>/img/tab1_ifnotactive.svg" alt="" class="ifnotactive" />
                  </div>
                  <!-- /.pagetabs__navicon -->
                  <div class="pagetabs__navtitle">Тарифы на Авто и Ж/Д перевозку</div>
                  <!-- /.pagetabs__navtitle -->
                </div>
                <!-- /.pagetabs__tab -->
              </div>
              <!-- /.pagetabs__navitem -->
              <div class="pagetabs__navitem " data-tab="sb2">
                <div class="pagetabs__tab">
                  <div class="pagetabs__navicon table-svg">
                    <img src="<?= ASSETS_PATH ?>/img/tab2_ifactive.svg" alt="" class="ifactive" />
                    <img src="<?= ASSETS_PATH ?>/img/tab2_ifnotactive.svg" alt="" class="ifnotactive" />
                  </div>
                  <!-- /.pagetabs__navicon -->
                  <div class="pagetabs__navtitle">Забор / Доставка груза</div>
                  <!-- /.pagetabs__navtitle -->
                </div>
                <!-- /.pagetabs__tab -->
              </div>
              <!-- /.pagetabs__navitem -->
              <div class="pagetabs__navitem" data-tab="sb3">
                <div class="pagetabs__tab">
                  <div class="pagetabs__navicon table-svg">
                    <img src="<?= ASSETS_PATH ?>/img/tab3_ifactive.svg" alt="" class="ifactive" />
                    <img src="<?= ASSETS_PATH ?>/img/tab3_ifnotactive.svg" alt="" class="ifnotactive" />
                  </div>
                  <!-- /.pagetabs__navicon -->
                  <div class="pagetabs__navtitle">Стоимость доп. услуг</div>
                  <!-- /.pagetabs__navtitle -->
                </div>
                <!-- /.pagetabs__tab -->
              </div>
              <!-- /.pagetabs__navitem -->
            </div>
            <!-- /.pagetabs__nav -->

            <div class="pagetabs__main">
              <div class="pagetabs__content active" data-tabcontent="sb1">
                <div class="pagetabscontent">
                <div class="pagetabscontent__header">
                    <div class="pagetabscontent__title">Терминал - Терминал</div>
                    <a href="#" class="pagetabscontent__link">Сбросить</a><!-- /.pagetabscontent__link -->
                  </div><!-- /.pagetabscontent__header -->
                  <div class="pagetabscontent__form">
                    <form action="">
                      <div class="calcitem__content">
                        <div class="calcform">
                          <div class="calcform__content">
                            <div class="calcform__inputs">
                              <div class="calcform__items calcform__items_two">
                                <div class="calcform__item">
                                  <div class="calcform__title">Город отправки</div>
                                  <div class="inputLocation">
                                    <div class="switcher">
                                      <a href="#">
                                        <img src="<?= ASSETS_PATH ?>/img/swap_horiz.svg" alt="" />
                                      </a>
                                    </div>
                                    <img src="<?= ASSETS_PATH ?>/img/Tracking.svg" />
                                    <input data-required="required" type="text" autocomplete="off" class="cityInput cityInput_tab" placeholder="" name="from_text_tab1" value="" />
                                  </div>
                                  <div class="calcform__fastbtn" data-fast="from_text_tab1">
                                    <a href="#">Москва</a>
                                    <a href="#">Санкт-Петербург</a>
                                    <a href="#">Новосибирск</a>
                                  </div>
                                  <!-- /.calcform__fastbtn -->

                                  <div class="caclform__popup">
                                    <div class="popupmultiple">
                                      <div class="popupmultiple__header">
                                        <label class="checkbox">
                                          <input required="" data-required="required" type="checkbox" name="multiple_1">
                                          <span class="checkbox__box"></span>
                                          Выбрать все
                                        </label>
                                      </div><!-- /.popupmultiple__header -->
                                      <div class="popupmultiple__main">
                                        <div class="popupmultiple__cols">
                                          <div class="popupmultiple__item">
                                            <label class="checkbox">
                                              <input required="" data-required="required" type="checkbox" name="multiple_1">
                                              <span class="checkbox__box"></span>
                                              Магадан
                                            </label>
                                          </div>
                                          <div class="popupmultiple__item">
                                            <label class="checkbox">
                                              <input required="" data-required="required" type="checkbox" name="multiple_1">
                                              <span class="checkbox__box"></span>
                                              Магадан
                                            </label>
                                          </div>
                                          <div class="popupmultiple__item">
                                            <label class="checkbox">
                                              <input required="" data-required="required" type="checkbox" name="multiple_1">
                                              <span class="checkbox__box"></span>
                                              Магадан
                                            </label>
                                          </div>
                                          <div class="popupmultiple__item">
                                            <label class="checkbox">
                                              <input required="" data-required="required" type="checkbox" name="multiple_1">
                                              <span class="checkbox__box"></span>
                                              Магадан
                                            </label>
                                          </div>
                                          <div class="popupmultiple__item">
                                            <label class="checkbox">
                                              <input required="" data-required="required" type="checkbox" name="multiple_1">
                                              <span class="checkbox__box"></span>
                                              Магадан
                                            </label>
                                          </div>
                                          <div class="popupmultiple__item">
                                            <label class="checkbox">
                                              <input required="" data-required="required" type="checkbox" name="multiple_1">
                                              <span class="checkbox__box"></span>
                                              Магадан
                                            </label>
                                          </div>
                                          <div class="popupmultiple__item">
                                            <label class="checkbox">
                                              <input required="" data-required="required" type="checkbox" name="multiple_1">
                                              <span class="checkbox__box"></span>
                                              Магадан
                                            </label>
                                          </div>
                                          <div class="popupmultiple__item">
                                            <label class="checkbox">
                                              <input required="" data-required="required" type="checkbox" name="multiple_1">
                                              <span class="checkbox__box"></span>
                                              Магадан
                                            </label>
                                          </div>
                                          <div class="popupmultiple__item">
                                            <label class="checkbox">
                                              <input required="" data-required="required" type="checkbox" name="multiple_1">
                                              <span class="checkbox__box"></span>
                                              Магадан
                                            </label>
                                          </div>
                                          <div class="popupmultiple__item">
                                            <label class="checkbox">
                                              <input required="" data-required="required" type="checkbox" name="multiple_1">
                                              <span class="checkbox__box"></span>
                                              Магадан
                                            </label>
                                          </div>
                                          <div class="popupmultiple__item">
                                            <label class="checkbox">
                                              <input required="" data-required="required" type="checkbox" name="multiple_1">
                                              <span class="checkbox__box"></span>
                                              Магадан
                                            </label>
                                          </div>
                                          <div class="popupmultiple__item">
                                            <label class="checkbox">
                                              <input required="" data-required="required" type="checkbox" name="multiple_1">
                                              <span class="checkbox__box"></span>
                                              Магадан
                                            </label>
                                          </div>
                                          <div class="popupmultiple__item">
                                            <label class="checkbox">
                                              <input required="" data-required="required" type="checkbox" name="multiple_1">
                                              <span class="checkbox__box"></span>
                                              Магадан
                                            </label>
                                          </div>
                                          <div class="popupmultiple__item">
                                            <label class="checkbox">
                                              <input required="" data-required="required" type="checkbox" name="multiple_1">
                                              <span class="checkbox__box"></span>
                                              Магадан
                                            </label>
                                          </div>
                                          <div class="popupmultiple__item">
                                            <label class="checkbox">
                                              <input required="" data-required="required" type="checkbox" name="multiple_1">
                                              <span class="checkbox__box"></span>
                                              Магадан
                                            </label>
                                          </div>
                                          <div class="popupmultiple__item">
                                            <label class="checkbox">
                                              <input required="" data-required="required" type="checkbox" name="multiple_1">
                                              <span class="checkbox__box"></span>
                                              Магадан
                                            </label>
                                          </div>
                                          <div class="popupmultiple__item">
                                            <label class="checkbox">
                                              <input required="" data-required="required" type="checkbox" name="multiple_1">
                                              <span class="checkbox__box"></span>
                                              Магадан
                                            </label>
                                          </div>
                                          <div class="popupmultiple__item">
                                            <label class="checkbox">
                                              <input required="" data-required="required" type="checkbox" name="multiple_1">
                                              <span class="checkbox__box"></span>
                                              Магадан
                                            </label>
                                          </div>
                                          <div class="popupmultiple__item">
                                            <label class="checkbox">
                                              <input required="" data-required="required" type="checkbox" name="multiple_1">
                                              <span class="checkbox__box"></span>
                                              Магадан
                                            </label>
                                          </div>
                                          <div class="popupmultiple__item">
                                            <label class="checkbox">
                                              <input required="" data-required="required" type="checkbox" name="multiple_1">
                                              <span class="checkbox__box"></span>
                                              Магадан
                                            </label>
                                          </div>
                                          <div class="popupmultiple__item">
                                            <label class="checkbox">
                                              <input required="" data-required="required" type="checkbox" name="multiple_1">
                                              <span class="checkbox__box"></span>
                                              Магадан
                                            </label>
                                          </div>
                                          <div class="popupmultiple__item">
                                            <label class="checkbox">
                                              <input required="" data-required="required" type="checkbox" name="multiple_1">
                                              <span class="checkbox__box"></span>
                                              Магадан
                                            </label>
                                          </div>
                                          <div class="popupmultiple__item">
                                            <label class="checkbox">
                                              <input required="" data-required="required" type="checkbox" name="multiple_1">
                                              <span class="checkbox__box"></span>
                                              Магадан
                                            </label>
                                          </div>
                                        </div><!-- /.popupmultiple__cols -->
                                      </div><!-- /.popupmultiple__main -->
                                    </div><!-- /.popupmultiple -->
                                  </div><!-- /.caclform__popup -->
                                </div>
                                <div class="calcform__item">
                                  <div class="calcform__title">Город доставки</div>
                                  <div class="inputLocation">
                                    <img src="<?= ASSETS_PATH ?>/img/Tracking.svg" />
                                    <input data-required="required" type="text" autocomplete="off" name="to_text" id="cityInput2" class="cityInput" placeholder="" value="" />
                                  </div>
                                  <div class="calcform__fastbtn" data-fast="to_text">
                                    <a href="#">Москва</a>
                                    <a href="#">Санкт-Петербург</a>
                                    <a href="#">Новосибирск</a>
                                  </div>
                                  <!-- /.calcform__fastbtn -->
                                  <div class="caclform__popup">
                                    <div class="popupmultiple">
                                      <div class="popupmultiple__header">
                                        <label class="checkbox">
                                          <input required="" data-required="required" type="checkbox" name="multiple_1">
                                          <span class="checkbox__box"></span>
                                          Выбрать все
                                        </label>
                                      </div><!-- /.popupmultiple__header -->
                                      <div class="popupmultiple__main">
                                        <div class="popupmultiple__cols">
                                          <div class="popupmultiple__item">
                                            <label class="checkbox">
                                              <input required="" data-required="required" type="checkbox" name="multiple_1">
                                              <span class="checkbox__box"></span>
                                              Магадан
                                            </label>
                                          </div>
                                          <div class="popupmultiple__item">
                                            <label class="checkbox">
                                              <input required="" data-required="required" type="checkbox" name="multiple_1">
                                              <span class="checkbox__box"></span>
                                              Магадан
                                            </label>
                                          </div>
                                          <div class="popupmultiple__item">
                                            <label class="checkbox">
                                              <input required="" data-required="required" type="checkbox" name="multiple_1">
                                              <span class="checkbox__box"></span>
                                              Магадан
                                            </label>
                                          </div>
                                          <div class="popupmultiple__item">
                                            <label class="checkbox">
                                              <input required="" data-required="required" type="checkbox" name="multiple_1">
                                              <span class="checkbox__box"></span>
                                              Магадан
                                            </label>
                                          </div>
                                          <div class="popupmultiple__item">
                                            <label class="checkbox">
                                              <input required="" data-required="required" type="checkbox" name="multiple_1">
                                              <span class="checkbox__box"></span>
                                              Магадан
                                            </label>
                                          </div>
                                          <div class="popupmultiple__item">
                                            <label class="checkbox">
                                              <input required="" data-required="required" type="checkbox" name="multiple_1">
                                              <span class="checkbox__box"></span>
                                              Магадан
                                            </label>
                                          </div>
                                          <div class="popupmultiple__item">
                                            <label class="checkbox">
                                              <input required="" data-required="required" type="checkbox" name="multiple_1">
                                              <span class="checkbox__box"></span>
                                              Магадан
                                            </label>
                                          </div>
                                          <div class="popupmultiple__item">
                                            <label class="checkbox">
                                              <input required="" data-required="required" type="checkbox" name="multiple_1">
                                              <span class="checkbox__box"></span>
                                              Магадан
                                            </label>
                                          </div>
                                          <div class="popupmultiple__item">
                                            <label class="checkbox">
                                              <input required="" data-required="required" type="checkbox" name="multiple_1">
                                              <span class="checkbox__box"></span>
                                              Магадан
                                            </label>
                                          </div>
                                          <div class="popupmultiple__item">
                                            <label class="checkbox">
                                              <input required="" data-required="required" type="checkbox" name="multiple_1">
                                              <span class="checkbox__box"></span>
                                              Магадан
                                            </label>
                                          </div>
                                          <div class="popupmultiple__item">
                                            <label class="checkbox">
                                              <input required="" data-required="required" type="checkbox" name="multiple_1">
                                              <span class="checkbox__box"></span>
                                              Магадан
                                            </label>
                                          </div>
                                          <div class="popupmultiple__item">
                                            <label class="checkbox">
                                              <input required="" data-required="required" type="checkbox" name="multiple_1">
                                              <span class="checkbox__box"></span>
                                              Магадан
                                            </label>
                                          </div>
                                          <div class="popupmultiple__item">
                                            <label class="checkbox">
                                              <input required="" data-required="required" type="checkbox" name="multiple_1">
                                              <span class="checkbox__box"></span>
                                              Магадан
                                            </label>
                                          </div>
                                          <div class="popupmultiple__item">
                                            <label class="checkbox">
                                              <input required="" data-required="required" type="checkbox" name="multiple_1">
                                              <span class="checkbox__box"></span>
                                              Магадан
                                            </label>
                                          </div>
                                          <div class="popupmultiple__item">
                                            <label class="checkbox">
                                              <input required="" data-required="required" type="checkbox" name="multiple_1">
                                              <span class="checkbox__box"></span>
                                              Магадан
                                            </label>
                                          </div>
                                          <div class="popupmultiple__item">
                                            <label class="checkbox">
                                              <input required="" data-required="required" type="checkbox" name="multiple_1">
                                              <span class="checkbox__box"></span>
                                              Магадан
                                            </label>
                                          </div>
                                          <div class="popupmultiple__item">
                                            <label class="checkbox">
                                              <input required="" data-required="required" type="checkbox" name="multiple_1">
                                              <span class="checkbox__box"></span>
                                              Магадан
                                            </label>
                                          </div>
                                          <div class="popupmultiple__item">
                                            <label class="checkbox">
                                              <input required="" data-required="required" type="checkbox" name="multiple_1">
                                              <span class="checkbox__box"></span>
                                              Магадан
                                            </label>
                                          </div>
                                          <div class="popupmultiple__item">
                                            <label class="checkbox">
                                              <input required="" data-required="required" type="checkbox" name="multiple_1">
                                              <span class="checkbox__box"></span>
                                              Магадан
                                            </label>
                                          </div>
                                          <div class="popupmultiple__item">
                                            <label class="checkbox">
                                              <input required="" data-required="required" type="checkbox" name="multiple_1">
                                              <span class="checkbox__box"></span>
                                              Магадан
                                            </label>
                                          </div>
                                          <div class="popupmultiple__item">
                                            <label class="checkbox">
                                              <input required="" data-required="required" type="checkbox" name="multiple_1">
                                              <span class="checkbox__box"></span>
                                              Магадан
                                            </label>
                                          </div>
                                          <div class="popupmultiple__item">
                                            <label class="checkbox">
                                              <input required="" data-required="required" type="checkbox" name="multiple_1">
                                              <span class="checkbox__box"></span>
                                              Магадан
                                            </label>
                                          </div>
                                          <div class="popupmultiple__item">
                                            <label class="checkbox">
                                              <input required="" data-required="required" type="checkbox" name="multiple_1">
                                              <span class="checkbox__box"></span>
                                              Магадан
                                            </label>
                                          </div>
                                        </div><!-- /.popupmultiple__cols -->
                                      </div><!-- /.popupmultiple__main -->
                                    </div><!-- /.popupmultiple -->
                                  </div><!-- /.caclform__popup -->
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                  <!-- /.pagetabscontent__form -->

                  <div class="pagetabscontent__table">
                    <table style="border-collapse: collapse;">
                      <thead>
                        <tr>
                          <th rowspan="3">Пункт отправления</th>
                          <th rowspan="3">Пункт назначения</th>
                          <th rowspan="3">Тариф</th>
                          <th colspan="3" style="text-align: center;">Минимальная сумма</th>
                          <th colspan="5" style="text-align: center;">По весу, кг</th>
                          <th colspan="5" style="text-align: center;">По объему, м<sup>3</sup></th>
                        </tr>
                        <tr>
                          <th style="text-align: center;">До 50 кг /0.1 м3</th>
                          <th style="text-align: center;">До 100 кг/0.3 м3</th>
                          <th style="text-align: center;">До 200 кг/0,6 м3</th>
                          <th style="text-align: center;">свыше 5000 кг.</th>
                          <th style="text-align: center;">3001-5000</th>
                          <th style="text-align: center;">1001-3000</th>
                          <th style="text-align: center;">501-1000</th>
                          <th style="text-align: center;">201-500</th>
                          <th style="text-align: center;">свыше 30</th>
                          <th style="text-align: center;">15-30</th>
                          <th style="text-align: center;">8-15</th>
                          <th style="text-align: center;">2-8</th>
                          <th style="text-align: center;">0,61-2</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Москва</td>
                          <td>Санкт-Петербург</td>
                          <td>ж/д</td>
                          <td>350,00</td>
                          <td>500,00</td>
                          <td>750,00</td>
                          <td>5,35</td>
                          <td>5,60</td>
                          <td>5,85</td>
                          <td>6,10</td>
                          <td>6,40</td>
                          <td>1420,00</td>
                          <td>1500,00</td>
                          <td>1580,00</td>
                          <td>1660,00</td>
                          <td>1700,00</td>
                        </tr>
                        <tr>
                          <td>Москва</td>
                          <td>Новосибирск</td>
                          <td>ж/д</td>
                          <td>500,00</td>
                          <td>1500,00</td>
                          <td>2000,00</td>
                          <td>7,50</td>
                          <td>7,90</td>
                          <td>8,30</td>
                          <td>8,70</td>
                          <td>9,00</td>
                          <td>2200,00</td>
                          <td>2300,00</td>
                          <td>2400,00</td>
                          <td>2500,00</td>
                          <td>2640,00</td>
                        </tr>
                        <tr>
                          <td>Москва</td>
                          <td>Красноярск</td>
                          <td>ж/д</td>
                          <td>500,00</td>
                          <td>1500,00</td>
                          <td>2000,00</td>
                          <td>6,90</td>
                          <td>7,30</td>
                          <td>7,70</td>
                          <td>8,00</td>
                          <td>8,30</td>
                          <td>2100,00</td>
                          <td>2200,00</td>
                          <td>2300,00</td>
                          <td>2400,00</td>
                          <td>2520,00</td>
                        </tr>
                        <tr>
                          <td>Москва</td>
                          <td>Братск</td>
                          <td>ж/д</td>
                          <td>500,00</td>
                          <td>1500,00</td>
                          <td>2000,00</td>
                          <td>10,00</td>
                          <td>10,60</td>
                          <td>11,20</td>
                          <td>11,80</td>
                          <td>12,00</td>
                          <td>3000,00</td>
                          <td>3150,00</td>
                          <td>3300,00</td>
                          <td>3450,00</td>
                          <td>3600,00</td>
                        </tr>
                        <tr>
                          <td>Москва</td>
                          <td>Иркутск</td>
                          <td>ж/д</td>
                          <td>500,00</td>
                          <td>1500,00</td>
                          <td>2000,00</td>
                          <td>7,90</td>
                          <td>8,30</td>
                          <td>8,70</td>
                          <td>9,10</td>
                          <td>9,55</td>
                          <td>2400,00</td>
                          <td>2500,00</td>
                          <td>2600,00</td>
                          <td>2700,00</td>
                          <td>2880,00</td>
                        </tr>
                        <tr>
                          <td>Москва</td>
                          <td>Улан-Удэ</td>
                          <td>ж/д</td>
                          <td>500,00</td>
                          <td>1500,00</td>
                          <td>2000,00</td>
                          <td>10,30</td>
                          <td>10,90</td>
                          <td>11,50</td>
                          <td>12,10</td>
                          <td>12,30</td>
                          <td>3440,00</td>
                          <td>3600,00</td>
                          <td>3760,00</td>
                          <td>3860,00</td>
                          <td>4130,00</td>
                        </tr>
                        <tr>
                          <td>Москва</td>
                          <td>Чита</td>
                          <td>ж/д</td>
                          <td>500,00</td>
                          <td>1500,00</td>
                          <td>2000,00</td>
                          <td>13,00</td>
                          <td>13,70</td>
                          <td>14,40</td>
                          <td>14,70</td>
                          <td>15,00</td>
                          <td>3650,00</td>
                          <td>3790,00</td>
                          <td>3850,00</td>
                          <td>4000,00</td>
                          <td>4200,00</td>
                        </tr>
                        <tr>
                          <td>Москва</td>
                          <td>Благовещенск</td>
                          <td>ж/д</td>
                          <td>500,00</td>
                          <td>1500,00</td>
                          <td>2000,00</td>
                          <td>16,50</td>
                          <td>17,50</td>
                          <td>18,50</td>
                          <td>19,50</td>
                          <td>20,00</td>
                          <td>4950,00</td>
                          <td>5150,00</td>
                          <td>5350,00</td>
                          <td>5550,00</td>
                          <td>5750,00</td>
                        </tr>
                        <tr>
                          <td>Москва</td>
                          <td>Хабаровск</td>
                          <td>ж/д</td>
                          <td>500,00</td>
                          <td>1500,00</td>
                          <td>2000,00</td>
                          <td>13,00</td>
                          <td>13,80</td>
                          <td>14,60</td>
                          <td>15,40</td>
                          <td>15,60</td>
                          <td>3100,00</td>
                          <td>3250,00</td>
                          <td>3400,00</td>
                          <td>3550,00</td>
                          <td>3720,00</td>
                        </tr>
                        <tr>
                          <td>Москва</td>
                          <td>Владивосток</td>
                          <td>ж/д</td>
                          <td>500,00</td>
                          <td>1500,00</td>
                          <td>2000,00</td>
                          <td>12,00</td>
                          <td>12,60</td>
                          <td>13,20</td>
                          <td>13,80</td>
                          <td>14,40</td>
                          <td>3000,00</td>
                          <td>3150,00</td>
                          <td>3300,00</td>
                          <td>3450,00</td>
                          <td>3600,00</td>
                        </tr>
                        <tr>
                          <td>Новосибирск</td>
                          <td>Владивосток</td>
                          <td>ж/д</td>
                          <td>500,00</td>
                          <td>1000,00</td>
                          <td>1500,00</td>
                          <td>12,00</td>
                          <td>12,50</td>
                          <td>13,00</td>
                          <td>13,50</td>
                          <td>14,00</td>
                          <td>2900,00</td>
                          <td>3000,00</td>
                          <td>3100,00</td>
                          <td>3200,00</td>
                          <td>3350,00</td>
                        </tr>
                        <tr>
                          <td>Санкт-Петербург</td>
                          <td>Москва</td>
                          <td>ж/д</td>
                          <td>350,00</td>
                          <td>500,00</td>
                          <td>750,00</td>
                          <td>4,60</td>
                          <td>5,10</td>
                          <td>5,50</td>
                          <td>5,90</td>
                          <td>6,50</td>
                          <td>1200,00</td>
                          <td>1280,00</td>
                          <td>1360,00</td>
                          <td>1440,00</td>
                          <td>1600,00</td>
                        </tr>
                        <tr>
                          <td>Санкт-Петербург</td>
                          <td>Новосибирск</td>
                          <td>ж/д</td>
                          <td>500,00</td>
                          <td>1 500,00</td>
                          <td>2 000,00</td>
                          <td>12,10</td>
                          <td>13,00</td>
                          <td>13,80</td>
                          <td>14,60</td>
                          <td>15,50</td>
                          <td>3400,00</td>
                          <td>3580,00</td>
                          <td>3760,00</td>
                          <td>3940,00</td>
                          <td>4240,00</td>
                        </tr>
                        <tr>
                          <td>Санкт-Петербург</td>
                          <td>Красноярск</td>
                          <td>ж/д</td>
                          <td>500,00</td>
                          <td>1500,00</td>
                          <td>2000,00</td>
                          <td>11,50</td>
                          <td>12,40</td>
                          <td>13,20</td>
                          <td>13,90</td>
                          <td>14,80</td>
                          <td>3300,00</td>
                          <td>3480,00</td>
                          <td>3660,00</td>
                          <td>3840,00</td>
                          <td>4120,00</td>
                        </tr>
                        <tr>
                          <td>Санкт-Петербург</td>
                          <td>Братск</td>
                          <td>ж/д</td>
                          <td>500,00</td>
                          <td>1500,00</td>
                          <td>2000,00</td>
                          <td>14,60</td>
                          <td>15,70</td>
                          <td>16,70</td>
                          <td>17,70</td>
                          <td>18,50</td>
                          <td>4200,00</td>
                          <td>4430,00</td>
                          <td>4660,00</td>
                          <td>4890,00</td>
                          <td>5200,00</td>
                        </tr>
                        <tr>
                          <td>Санкт-Петербург</td>
                          <td>Иркутск</td>
                          <td>ж/д</td>
                          <td>500,00</td>
                          <td>1500,00</td>
                          <td>2000,00</td>
                          <td>12,50</td>
                          <td>13,40</td>
                          <td>14,20</td>
                          <td>15,00</td>
                          <td>16,05</td>
                          <td>3600,00</td>
                          <td>3780,00</td>
                          <td>3960,00</td>
                          <td>4140,00</td>
                          <td>4480,00</td>
                        </tr>
                        <tr>
                          <td>Санкт-Петербург</td>
                          <td>Улан-Удэ</td>
                          <td>ж/д</td>
                          <td>500,00</td>
                          <td>1500,00</td>
                          <td>2000,00</td>
                          <td>14,90</td>
                          <td>16,00</td>
                          <td>17,00</td>
                          <td>18,00</td>
                          <td>18,80</td>
                          <td>4640,00</td>
                          <td>4880,00</td>
                          <td>5120,00</td>
                          <td>5300,00</td>
                          <td>5730,00</td>
                        </tr>
                        <tr>
                          <td>Санкт-Петербург</td>
                          <td>Чита</td>
                          <td>ж/д</td>
                          <td>500,00</td>
                          <td>1500,00</td>
                          <td>2000,00</td>
                          <td>17,60</td>
                          <td>18,80</td>
                          <td>19,90</td>
                          <td>20,60</td>
                          <td>21,50</td>
                          <td>4850,00</td>
                          <td>5070,00</td>
                          <td>5210,00</td>
                          <td>5440,00</td>
                          <td>5800,00</td>
                        </tr>
                        <tr>
                          <td>Санкт-Петербург</td>
                          <td>Благовещенск</td>
                          <td>ж/д</td>
                          <td>500,00</td>
                          <td>1500,00</td>
                          <td>2000,00</td>
                          <td>21,10</td>
                          <td>22,60</td>
                          <td>24,00</td>
                          <td>25,40</td>
                          <td>26,50</td>
                          <td>6150,00</td>
                          <td>6430,00</td>
                          <td>6710,00</td>
                          <td>6990,00</td>
                          <td>7350,00</td>
                        </tr>
                        <tr>
                          <td>Санкт-Петербург</td>
                          <td>Хабаровск</td>
                          <td>ж/д</td>
                          <td>500,00</td>
                          <td>1500,00</td>
                          <td>2000,00</td>
                          <td>17,60</td>
                          <td>18,90</td>
                          <td>20,10</td>
                          <td>21,30</td>
                          <td>22,10</td>
                          <td>4300,00</td>
                          <td>4530,00</td>
                          <td>4760,00</td>
                          <td>4990,00</td>
                          <td>5320,00</td>
                        </tr>
                        <tr>
                          <td>Санкт-Петербург</td>
                          <td>Владивосток</td>
                          <td>ж/д</td>
                          <td>500,00</td>
                          <td>1500,00</td>
                          <td>2000,00</td>
                          <td>16,60</td>
                          <td>17,70</td>
                          <td>18,70</td>
                          <td>19,70</td>
                          <td>20,90</td>
                          <td>4200,00</td>
                          <td>4430,00</td>
                          <td>4660,00</td>
                          <td>4890,00</td>
                          <td>5200,00</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <!-- /.pagetabscontent__table -->

                  <div class="pagetabs__info">
                    <p>*Если вес груза на 1м3 больше или равен колонке плотность 230, то для расчета стоимости берется 1 кг; иначе для расчета стоимости берется 1м3.</p>
                    <p>
                      Расчет объемного груза производится с поправочным коэффициентом 1,1
                    </p>
                    <p>* Груз считается негабаритным если: вес одного неделимого места более 1000 кг , либо сумма измерений 3х сторон более 3,5х метров</p>
                    <p>
                      ** Перевозка грузов осуществляется нашей компанией в универсальных контейнерах / крытых вагонах без поддержания температурного режима. Для грузов, требующих особые условия доставки, мы предлагаем услугу «утепление
                      пенопластом», что позволит снизить риск заморозки, но не гарантирует сохранности внутренних вложений, исходя из погодных условий на территории РФ, тем самым заказчик несет полную ответственность за сохранность груза,
                      требующего при транспортировке поддержания температурного режима
                    </p>
                  </div>
                  <!-- /.pagetabs__info -->

                  <div class="pagetabscontent__table pagetabscontent__table_horiz">
                    <table>
                      <tbody>
                      <tr>
                          <th>Стоимость с учетом НДС (руб)</th>
                          <th></th>
                      </tr>
                      <tr>
                          <th>Вид услуги</th>
                          <th>Единица измерения</th>
                      </tr>
                      <tr>
                          <td>Хранение груза на складе </td>
                          <td>100,00 /м3*</td>
                      </tr>
                      <tr>
                          <td>Картон</td>
                          <td>100,00/лист</td>
                      </tr>
                      <tr>
                          <td>Оргалит</td>
                          <td>400,00/лист</td>
                      </tr>
                      <tr>
                          <td>Доска</td>
                          <td>220,00/шт</td>
                      </tr>
                      <tr>
                          <td>Пенопласт </td>
                          <td>420,00/лист</td>
                      </tr>
                      <tr>
                          <td>Паллетирование</td>
                          <td>300,00/паллет</td>
                      </tr>
                      <tr>
                          <td>Поддон</td>
                          <td>250,00/шт</td>
                      </tr>
                      <tr>
                          <td>Изготовление обрешетки**</td>
                          <td>1400,00 /м3</td>
                      </tr>
                      </tbody>
                  </table>
                  </div><!-- /.pagetabscotent__table -->

                  <div class="pagetabs__info">
                    <p>* Бесплатное хранение груза после прибытия на терминал назначения и оповещения ГП составляет 3-е суток (кроме ВС)</p>
                    <p>* *После изготовления обрешетки вес и объем груза увеличивается на 25%</p>
                  </div>
                  <!-- /.pagetabs__info -->



                  <div class="pagetabscontent__table pagetabscontent__table_horiz">
                    <table>
                      <tbody>
                      <tr>
                          <th>Наценка к тарифу</th>
                      </tr>
                      <tr>
                          <td>Температурный режим +2 +5 С (Не распростроняется на тариф ЭКСПРЕСС»)</td>
                          <td>30%</td>
                      </tr>
                      <tr>
                          <td>Негабаритный груз *</td>
                          <td>30%</td>
                      </tr>
                     
                      </tbody>
                  </table>
                  </div><!-- /.pagetabscotent__table -->

                  <div class="pagetabs__info">
                    <p>* Груз считается негабаритным если: вес одного неделимого грузового места более 500 кг либо сумма измерений 3х сторон более 4х метров
                    </p>
                  </div>
                  <!-- /.pagetabs__info -->
                  <div class="pagetabscontent__format"><a href="#" class="xls">Открыть в формате XLS</a></div>
                  <!-- /.pagetabscontent__format -->
                </div>
                <!-- /.pagetabscontent -->
              </div>
              <!-- /.pagetabs__content -->
              <div class="pagetabs__content " data-tabcontent="sb2">
                <div class="pagetabscontent">
                  <div class="pagetabscontent__title">Забор / Доставка груза</div>
                  <div class="pagetabscontent__form">
                    <form action="">
                      <div class="calcitem__content">
                        <div class="calcform">
                          <div class="calcform__content">
                            <div class="calcform__inputs">
                              <div class="calcform__items calcform__items_full">
                                <div class="calcform__item">
                                  <div class="calcform__title">Город отправки</div>
                                  <div class="inputLocation">
                                    
                                    <img src="<?= ASSETS_PATH ?>/img/Tracking.svg" />
                                    <input data-required="required" type="text" autocomplete="off" class="cityInput" placeholder="" name="from_text2" value="" />
                                  </div>
                                  <div class="calcform__fastbtn" data-fast="from_text2">
                                    <a href="#">Москва</a>
                                    <a href="#">Санкт-Петербург</a>
                                    <a href="#">Новосибирск</a>
                                  </div>
                                  <!-- /.calcform__fastbtn -->
                                </div>
                                
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                  <!-- /.pagetabscontent__form -->

                  <div class="pagetabs__info">
                    <p>Тарифные ставки по перевозкам автотранспортом по г. Москве и Московской обл.</p>
                    <p>Тарифная ставка за перевозку (рейс) рассчитываются исходя из следующих условий:</p>
                    <ul>
                        <li>Стоимость пробега за МКАД, оплачивается за каждый километр в обе стороны (при перевозках по
                            Москве и МО).</li>
                        <li>Все нижеуказанные цены включают НДС 20%</li>
                        <li>Таблица расчета ставки по часам.</li>
                    </ul>
                </div><!-- /.pagetabs__info -->

                <div class="pagetabscontent__table pagetabscontent__table_horiz">
                  <table style="border-collapse: collapse; width: 100%;">
                    <tbody>
                    <tr>
                        <th>Количество, кг</th>
                        <td>до 25</td>
                        <td>до 50</td>
                        <td>до 100</td>
                        <td>до 500</td>
                        <td>до 1 000</td>
                        <td>до 1 500</td>
                        <td>до 2 000</td>
                        <td>до 3 000</td>
                        <td>до 5 000</td>
                        <td>до 10 000</td>
                        <td>до 20 000</td>
                    </tr>
                    <tr>
                        <th>Объем, куб.м.</th>
                        <td>до 0,1</td>
                        <td>до 0,25</td>
                        <td>до 0,5</td>
                        <td>до 2</td>
                        <td>до 4</td>
                        <td>до 8</td>
                        <td>до 12</td>
                        <td>до 16</td>
                        <td>до 30</td>
                        <td>до 40</td>
                        <td>до 86</td>
                    </tr>
                    <tr>
                        <th>Габариты (Д/Ш/В), м</th>
                        <td>до 0,5/0,5/0,5</td>
                        <td>до 1,0/0,5/0,5</td>
                        <td>до 1,2/0,8/0,8</td>
                        <td>до 1,5/1,2/1,6</td>
                        <td>до 3/1,7/1,8</td>
                        <td>до 3/1,7/1,8</td>
                        <td>до 4/2,05/2</td>
                        <td>до 4/2,05/2</td>
                        <td>до 5/2,2/2,2</td>
                        <td>до 6/2,4/2,4</td>
                        <td>до 13/2,4/2,5</td>
                    </tr>
                    <tr>
                        <th>Макс. кол-во евро паллет</th>
                        <td>—</td>
                        <td>—</td>
                        <td>1</td>
                        <td>2</td>
                        <td>3</td>
                        <td>5</td>
                        <td>7</td>
                        <td>8</td>
                        <td>10</td>
                        <td>16</td>
                        <td>32</td>
                    </tr>
                    <tr>
                        <th>Стоимость перевозки по г. Москва (в пределах МКАД)</th>
                        <td>1 000</td>
                        <td>1 200</td>
                        <td>1 500</td>
                        <td>2 000</td>
                        <td>2 700</td>
                        <td>3 600</td>
                        <td>4 600</td>
                        <td>6 500</td>
                        <td>8 400</td>
                        <td>15 000</td>
                        <td>19 000</td>
                    </tr>
                    <tr>
                        <th>Стоимость перевозки по г. Москва (в пределах МКАД), при подаче строго ко времени (+20%)
                        </th>
                        <td>1 200</td>
                        <td>1 440</td>
                        <td>1 800</td>
                        <td>2 400</td>
                        <td>3 240</td>
                        <td>4 320</td>
                        <td>5 520</td>
                        <td>7 800</td>
                        <td>10 080</td>
                        <td>18 000</td>
                        <td>22 800</td>
                    </tr>
                    <tr>
                        <th>Стоимость перевозки груза с боковой растентовкой (один бок)</th>
                        <td>—</td>
                        <td>—</td>
                        <td>—</td>
                        <td>500</td>
                        <td>500</td>
                        <td>500</td>
                        <td>1000</td>
                        <td>1000</td>
                        <td>2 000</td>
                        <td>2 500</td>
                        <td>2 500</td>
                    </tr>
                    <tr>
                        <th>Стоимость выезда за пределы МКАД (руб/км**)</th>
                        <td>20</td>
                        <td>25</td>
                        <td>25</td>
                        <td>25</td>
                        <td>30</td>
                        <td>30</td>
                        <td>35</td>
                        <td>35</td>
                        <td>40</td>
                        <td>45</td>
                        <td>50</td>
                    </tr>
                    <tr>
                        <th>Нормативное время ПРР (загрузка / разгрузка)</th>
                        <td>0:15</td>
                        <td>0:15</td>
                        <td>0:15</td>
                        <td>0:30</td>
                        <td>0:30</td>
                        <td>0:30</td>
                        <td>1:00</td>
                        <td>1:00</td>
                        <td>1:30</td>
                        <td>2:00</td>
                        <td>3:00</td>
                    </tr>
                    <tr>
                        <th>Стоимость сверхнормативного простоя под погрузкой, руб/час</th>
                        <td>400</td>
                        <td>400</td>
                        <td>400</td>
                        <td>500</td>
                        <td>500</td>
                        <td>500</td>
                        <td>800</td>
                        <td>800</td>
                        <td>1000</td>
                        <td>1200</td>
                        <td>1400</td>
                    </tr>
                    <tr>
                        <th>Въезд в пределы ТТК</th>
                        <td>500</td>
                        <td>500</td>
                        <td>500</td>
                        <td>500</td>
                        <td>500</td>
                        <td>500</td>
                        <td>1 000</td>
                        <td>1 500</td>
                        <td>1 500</td>
                        <td>2 000</td>
                        <td>2 500</td>
                    </tr>
                    <tr>
                        <th>Въезд в пределы СК</th>
                        <td>500</td>
                        <td>500</td>
                        <td>500</td>
                        <td>500</td>
                        <td>1000</td>
                        <td>1 000</td>
                        <td>1 500</td>
                        <td>1 500</td>
                        <td>2 000</td>
                        <td>2 500</td>
                        <td>3 000</td>
                    </tr>
                    </tbody>
                </table>
                </div><!-- /.pagetabscontent__table -->

                <div class="pagetabs__info">
                  <p>
                    1. Заявки на предоставление услуг по забору грузов размещаются до 16:00* в рабочий день, предшествующий дню выполнения заявки.</p>

                    <p>При отказе от услуги позднее 17:00* или в день перевозки клиент оплачивает 100% стоимости услуг</p>

                      <p>3. При наличии свободных транспортных средств существует возможность выполнения заявки день в день, при этом стоимость увеличится на 25%</p>

                        <p>4. При заказе услуги автоэкспедирования с подачей автомобиля в промежуток времени с 6:00 до 8:00* и с 18:00 до 22:00*, стоимость услуги увеличивается на 50%</p>

                          <p>5. При заказе автомобиля в выходной день или в период с 22:00 до 6:00* стоимость увеличивается на 100%</p>

                            <p>6. Если при предоставлении услуги на экспедирование груза, ПРР (погрузочно-разгрузочные работы) не начались в течении нормативных сроков, экспедитор имеет право самостоятельно принять решение о невыполнении данной заявки, при этом клиент оплачивает 100% стоимости услуг, согласно заявленным параметрам груза</p>

                              <p>7. В случае предоставления услуги на экспедирование груза, если количество оказалось меньше чем в заявке, то клиент оплачивает услугу исходя из заявленного количества груза</p>

                                <p>8. В случае предоставления услуги на экспедирование груза, если количество оказалось больше чем в заявке, то решение о выполнении заявки принимает экспедитор, при этом клиент оплачивает услугу, исходя из фактического кол-ва груза. В случае принятия решения о невыполнении заявки клиент оплачивает 100% стоимости услуги исходя из габаритов и количества заявленного груза.</p>

                                  <p>9. При выезде за МКАД далее 100 км, стоимость рассчитывается индивидуально</p>

                                    <p>10. Услуга предоставляется на основании письменной заявки, заверенной подписью и печатью клиента</p>

                                      <p>11. В случае погрузки на 2-х складах и более, расположенной не на территории грузоотправителя, рассчитывается как дополнительная заявка, при этом время работы начинается с момента прибытия экспедитора на первую точку и заканчивается по окончанию работы на последней точке.</p>

                                        <p>12. В случае погрузки на 2-х складах и более, оплачивается каждая доп точка погрузки в размере 500 руб за каждую точку, расположенную на территории грузоотправителя, при этом время работы начинается с момента прибытия экспедитора на первую точку и заканчивается по окончанию работы на последней точке.</p>

<p>13. Холостой пробег транспорта выставляется исходя из параметров груза, указанных в заявке по тарифу</p>

<p>14. Заезд за документами в офис клиента — 500 руб., при условии нахождения офиса от места погрузки не далее 3 км и количестве груза менее 5 000кг и 30м3</p>

<p>15. Погрузочно-разгрузочные работы при доставке/заборе груза рассчитываются индивидуально по запросу.</p>

<p>16.Время простоя сверх норматива оплачивается дополнительно, основанием для выставления счета за простой является отметка фирмы-отправителя/получателя о времени прибытия и убытия а/м в заявке, маршрутном листе, ТН, экспедиторской расписке. Если фирма-отправитель/получатель по каким либо причинам не ставит отметку в заявке, маршрутном листе, ТН, экспедиторской расписке, то данные для простоя берутся со спутников GPS установленных на автомобилях компании. Стоимость простоя указанного в таблице округляется до часа.</p>

<p>17. Стоимость забора режимных грузов +30% от прайса</p>

<p>Цены указаны с учетом НДС (20%)</p>

<p>*Время указанно местное — Московское</p>

<p>** Стоимость пробега за МКАД оплачивается за каждый км в обе стороны</p>
                  </p>
                </div><!-- /.pagetabs__info -->

              </div>
            </div>

            <div class="pagetabs__content " data-tabcontent="sb3">
              <div class="pagetabscontent">
                <div class="pagetabscontent__title">Стоимость доп. услуг</div>
                <div class="pagetabscontent__table pagetabscontent__table_horiz">
                  <table style="width: 100%; border-collapse: collapse;">
                    <thead>
                    <tr>
                        <th style="width: 52.139%;">Вид услуги</th>
                        <th style="width: 47.5936%;">Единица измерения</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td style="width: 52.139%;">Хранение груза на складе</td>
                        <td style="width: 47.5936%;">100,00/м<sup>3</sup></td>
                    </tr>
                    <tr>
                        <td style="width: 52.139%;">Картон</td>
                        <td style="width: 47.5936%;">100,00/лист</td>
                    </tr>
                    <tr>
                        <td style="width: 52.139%;">Оргалит</td>
                        <td style="width: 47.5936%;">400,00/лист</td>
                    </tr>
                    <tr>
                        <td style="width: 52.139%;">Доска</td>
                        <td style="width: 47.5936%;">220,00/шт</td>
                    </tr>
                    <tr>
                        <td style="width: 52.139%;">Пенопласт</td>
                        <td style="width: 47.5936%;">420,00/лист</td>
                    </tr>
                    <tr>
                        <td style="width: 52.139%;">Паллетирование</td>
                        <td style="width: 47.5936%;">300,00/паллет</td>
                    </tr>
                    <tr>
                        <td style="width: 52.139%;">Поддон</td>
                        <td style="width: 47.5936%;">250,00/шт</td>
                    </tr>
                    </tbody>
                </table>
                </div><!-- /.pagetabscontent__table -->
                <div class="pagetabscontent__table pagetabscontent__table_horiz">
                  <table style="border-collapse: collapse;">
                    <thead>
                    <tr>
                        <th rowspan="2">Наименование услуги</th>
                        <th class="text-center" rowspan="2">Стоимость с учетом НДС (руб) м<sup>3</sup></th>
                        <th rowspan="2">Размер наценки</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Утепление* в 1 слой</td>
                        <td>1150,00</td>
                        <td>15% — на м<sup>3</sup></td>
                    </tr>
                    <tr>
                        <td>Утепление* в 2 слоя</td>
                        <td>2300,00</td>
                        <td>30% — на м<sup>3</sup></td>
                    </tr>
                    <tr>
                        <td>Утепление* в 3 слоя</td>
                        <td>3450,00</td>
                        <td>40% — на м<sup>3</sup></td>
                    </tr>
                    <tr>
                        <td>Изготовление обрешетки</td>
                        <td>1400,00</td>
                        <td>25% — на кг и м<sup>3</sup></td>
                    </tr>
                    <tr>
                        <td>Перевозка с поддержанием температурного режима (+5/-18)</td>
                        <td class="text-center" colspan="2">наценка к тарифу 30%</td>
                    </tr>
                    </tbody>
                </table>
                </div><!-- / -->

                <div class="pagetabs__info">
                  <p>*Перевозка грузов осуществляется нашей компанией в универсальных контейнерах / крытых вагонах без поддержания температурного режима. Для грузов, требующих особые условия доставки, мы предлагаем услугу «утепление пенопластом», что позволит снизить риск заморозки, но не гарантирует сохранности внутренних вложений, исходя из погодных условий на территории РФ, тем самым заказчик несет полную ответственность за сохранность груза, требующего при транспортировке поддержания температурного режима

                  </p>
                </div><!-- /.pagetabs__info -->

                <div class="pagetabscontent__table pagetabscontent__table_horiz">
                  <table style="border-collapse: collapse;">
                    <thead>
                    <tr>
                        <th rowspan="2">Наименование услуги</th>
                        <th class="text-center" colspan="2">Стоимость с учетом НДС (руб)</th>
                    </tr>
                    <tr>
                        <th>40 ф</th>
                        <th>20 ф</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Перетарка груза на складе (консолидация)</td>
                        <td>30 000,00</td>
                        <td>17 000,00</td>
                    </tr>
                    <tr>
                        <td>Перетарка груза напрямую в ТС без завоза груза на склад</td>
                        <td>28 000,00</td>
                        <td>15 000,00</td>
                    </tr>
                    <tr>
                        <td>Услуги экспедитора (фото отчет)</td>
                        <td>3 500,00</td>
                        <td>2 500,00</td>
                    </tr>
                    <tr>
                        <td>Платное хранение груза на 3-е сутки</td>
                        <td class="text-center" colspan="2">100 руб/м<sup>3</sup></td>
                    </tr>
                    </tbody>
                </table>
                </div><!-- /.pagetabscontent__table -->
              </div>
            </div>
            <!-- /.pagetabs__main -->
          </div>
          <!-- /.pagetabs -->

          
        </div>
        <!-- /.container -->

        

      </div>
      <!-- /.pagefull -->

      <div class="pagefitches">
        <div class="container">
          <div class="auto-advantages-wrapper">
            <h2 class="auto-advantages-title">Ключевые преимущества сборных грузов</h2>
            <div class="perhaps-zhelez-items-wrap auto-wrap">
                <div class="perhaps-zhelez-item-box new-box">
                    <img src="<?= ASSETS_PATH ?>/img/sbor-icon-1.svg" alt="">
                    <h3>Быстрая доставка </h3>
                    <span>
                        Выбор скорости и тарифа: перевозка автомобильным транспортом и жд транспортом
                    </span>
                </div>
                <div class="perhaps-zhelez-item-box new-box">
                    <img src="<?= ASSETS_PATH ?>/img/sbor-icon-2.svg" alt="">
                    <h3>Низкая стоимость </h3>
                    <span>
                        Вы экономите время и деньги, что немаловажно в наше время
                    </span>
                </div>
                <div class="perhaps-zhelez-item-box new-box">
                    <img src="<?= ASSETS_PATH ?>/img/sbor-icon-3.svg" alt="">
                    <h3>Сервис</h3>
                    <span>
                        Наши менеджеры всегда находятся на связи и готовы прийти на помощь, в решении любых вопросов
                    </span>
                </div>
                <div class="perhaps-zhelez-item-box new-box">
                    <img src="<?= ASSETS_PATH ?>/img/sbor-icon-4.svg" alt="">
                    <h3>Отслеживание</h3>
                    <span>
                        На всем протяжении пути мы следим и информируем наших клиентов о местонахождении груза, от сдачи в
                        пункте отправления до пункта назначения
                    </span>
                </div>
                <div class="perhaps-zhelez-item-box new-box">
                    <img src="<?= ASSETS_PATH ?>/img/sbor-icon-5.svg" alt="">
                    <h3>Грузим негабарит</h3>
                    <span>
                        Умеем работать с негабаритным грузом
                    </span>
                </div>
                <div class="perhaps-zhelez-item-box new-box">
                    <img src="<?= ASSETS_PATH ?>/img/sbor-icon-6.svg" alt="">
                    <h3>Утепляем</h3>
                    <span>
                        Утепление груза пенопластом позволяет нашим клиентам экономить деньги
                    </span>
                </div>
                <div class="perhaps-zhelez-item-box new-box">
                    <img src="<?= ASSETS_PATH ?>/img/sbor-icon-7.svg" alt="">
                    <h3>Качество погрузки</h3>
                    <span>
                        У нас работают профессионалы
                    </span>
                </div>
                <div class="perhaps-zhelez-item-box new-box">
                    <img src="<?= ASSETS_PATH ?>/img/sbor-icon-8.svg" alt="">
                    <h3>Забота о вашем грузе</h3>
                    <span>
                        Бережно доставим его к вам
                    </span>
                </div>
            </div>
        </div>
        </div><!-- /.container -->
      </div><!-- /.pagefitches -->
    </section>


<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>