<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
<meta name="viewport" />
	    <link rel="preload" href="/fonts/HelveticaNeueCyr-Roman.woff" as="font" crossorigin="anonymous"/>
	    <link rel="preload" href="/fonts/HelveticaNeueCyr-Bold.woff" as="font" crossorigin="anonymous"/>
	    <link rel="preload" href="/fonts/HelveticaNeue.woff" as="font" crossorigin="anonymous"/>



	<link rel="stylesheet" href="/css/style.css?15">
    {* <link rel="stylesheet" href="/css/jquery.fancybox.css"> *}
    <link rel="stylesheet" href="/css/jquery-ui.css">
    <link rel="stylesheet" href="/css/owl.carousel.css">
    <link rel="stylesheet" href="/css/owl.theme.css">
    <link rel="stylesheet" href="/css/owl.transitions.css">

	<link rel="stylesheet" href="/css/craftmap/default.css">
	<link rel="stylesheet" href="/css/craftmap/demo1.css"> 




	<title>Грузоперевозки по России, доставка грузов в Москву - железнодорожные перевозки от транспортной компании ЖелдорАльянс</title>
    <meta name="description" content="🚄 21 год на рынке железнодорожных грузоперевозок по России и Москве ★ Доставка грузов 🚚 в 3000 населенных пунктов России ★ Официальный перевозчик Олимпийских игр Сочи 2014.">
{literal}

{/literal}

</head>
<body>
<div class="overlay"></div>

<div class="popup-message-ok">Ваша заявка принята<br /><span>менеджер перезвонит вам в ближайшее время</span></div>
<!-- Регистрация -->
			{*

*}
	<header>
		<div class="g-aligner">

			{include file="common/pieces/top_links.tpl"}


			<div class="information">
				<div class="login_pop index_pl">
				 {if Yii::app()->session['userData']}
				  {assign var="email" value=Yii::app()->session['userData']['user']['Email']}
                    {assign var="et" value=$email|strpos:"@"}

				 <a href="#" class="popup-close"></a>

				 <a href="/cabinet/">{$email|substr:0:$et}</a>
				 <span class='exit'>{$email}</span>
				 <a class="entd exit" href="/cabinet/">Заказы</a>
				 <a class="entd exit" href="/cabinet/cost/">Новый заказ</a>
					<a class="entd exit" href="/cabinet/logout/">Выход</a>
				{else}
					<form action="/cabinet/login/" id="loginform" method="post">
						<a href="#" class="popup-close"></a>
						<input type="email" class="valid secur" name="log-email" placeholder="E-mail" />
						<input type="password"  class="valid secur" name="log-pass"  placeholder="Пароль" />

						<a class="inter">Войти</a>
						<div class="reg">
							<a href="/registry/" id='regOp'>Регистрация</a>
							<a href="/recover/">Забыли пароль</a>
						</div>
					</form>
				{/if}
				</div>



			{*
			<form method="post" action="/auth/" id="regForm2">

        <div class="email">
            <label>
                <strong>Ваша электронная почта</strong>
                <input class="validate" autocomplete="off" type="text" value="" name="log-email" id="log-emai">
				<span class="er-text"><span class="left"></span><span class="text"></span><span class="right"></span></span>
            </label>
        </div>
        <div class="password">
            <label>
                <strong>Пароль</strong>
                <input class="validate" autocomplete="off" type="password" name="log-pass" id="log-pass">
				<a href="/recover/" class="fgp">забыли пароль ?</a>
				<span class="er-text"><span class="left"></span><span class="text"></span><span class="right"></span></span>
            </label>
        </div>

        <div class="submit-holder">
            <input type="submit" value="Войти">
        </div>
    </form>

			*}


				<!--div class="phone-new">8-800-222-17-17</div-->
				{assign var=regSelection value=Yii::app()->controller->checkRegSelection()}

				<noindex><div class="phone"></div></noindex>
				<div class="call-back"><a>Обратный Звонок</a></div>
				<div class="call-back-popup">
					<a href="#" class="popup-close"></a>
					<input type="text" name='name' class='secur valid'  placeholder="Имя" />
					<input type="tel" name='phone'  class='secur onlinumPhone valid' placeholder="Телефон" />
					<input type="text" name='city' class='valid' placeholder="Ваш город" />
					<textarea placeholder="Ваше сообщение" class="valid" name="comment" 2></textarea>

					<a class="send">Отправить</a>
				</div>
				<!--div class="call-back">
					<a rel="nofollow" class="zingayaLink zingayaf28543e82bbf4cc5ae38d20aceb878ce" id="zingayaLinkf28543e82bbf4cc5ae38d20aceb878ce" href="https://zingaya.com/widget/f28543e82bbf4cc5ae38d20aceb878ce" onclick="window.open(this.href+'?referrer='+escape(window.location.href)+'', '_blank', 'width=236,height=220,resizable=no,toolbar=no,menubar=no,location=no,status=no'); return false;">Онлайн-звонок</a>
				</div-->
				<div class="city region"><a id="city-choose" href="#">





				<span>{if isset($regSelection->id)}{$regSelection->name}{else}Москва{/if}</span>
				</a></div>

				<div class="city-popup__small {if !isset($smarty.cookies.opW)}active{/if}">
					<a href="#" class="popup-close"></a>
					<div class="popup-small__title">
						<h3>
							{if isset($smarty.cookies.cityName)}{$smarty.cookies.cityName}{else}Москва{/if}
						</h3>

					</div>
					<p>Это Ваш город ?</p>
					<a class="yes" href="#">Да</a>
					<a class="another-city region" href="#">Другой город</a>
				</div>

				<div class="city-popup__large">
					 {include file="common/pieces/cregion.tpl"}

				</div>

			</div>

		</div>
	</header>
  <!--<section class="main-banner">
    <img src="/img/main-banner/zhd-bg.jpg" alt="" class="main-banner__bg">
    <div class="g-aligner">
      <div class="main-banner__info">
        <img src="/img/main-banner/az-logo.svg" alt="" class="main-banner__info-logo">
        <noindex><p>Мы растем и меняемся.
          Вы знаете нас много лет, и теперь ЖелдорАльянс предстает
          в обновленном образе Азбуки Логистики!
          Все необходимые Вам услуги вы можете заказать на новом удобном сайте <a href="https://azlog.ru/" class="main-banner__link" rel="nofollow">Азбука Логистики</a></p>
          <a href="https://azlog.ru/" class="main-banner__btn" rel="nofollow">Перейти на новый сайт</a></noindex>
      </div>
    </div>
  </section>-->
	<section class="first">
		<div class="g-aligner">
			<!--noindex-->
			<div class="b-blinking announce_slider">
				<div class="e-alert">Внимание!</div>
				<div class="slider-news-top">
					<ul class="e-text">
                                            {foreach from=$this->newsInString item=ii}
                                                <li><div class="announce"><a href="/about/news/{$ii.id}/" style="color: #FF0000!important; font-size:15px; text-decoration:none;">{$ii.name}</a></div></li>
                                            {/foreach}
					    <!--<li><div class="announce"><a href="/about/news/145/" style="color: #FF0000!important; font-size:15px; text-decoration:none;">корректировка тарифов с 09 марта 2021 года, подробности внутри</a></div></li>
						<li><div class="announce"><a href="/about/news/138/" style="color: #FF0000!important; font-size:15px; text-decoration:none;">Закрытие пункта приема грузов в С-Петербурге на Минеральной. Подробности внутри</a></div></li>
				    	<li><div class="announce"><a href="/about/news/137/" style="color: #FF0000!important; font-size:15px; text-decoration:none;">Переезд склада и офиса в Омске. Подробности внутри</a></div></li>
						<li><div class="announce">Открытие нового филиала в Волгограде по адресу: проезд Нефтянников, 14</div></li>
						<li><div class="announce"><a href="/about/news/134/" style="color: #FF0000!important; font-size:15px; text-decoration:none;">Переезд склада в городе Благовещенск с с 20.07.2020 г. Подробности внутри.</a></div></li>
						<li><div class="announce">Филиал в г.Ижевск находится по новому адресу ул.Пойма, 22 литер В.</div></li>
					    <li><div class="announce"><a href="/about/news/130/" style="color: #FF0000!important; font-size:15px; text-decoration:none;">Переезд пункта приема на ул. Рябиновой. Подробности внутри</a></div></li>
              <li><div class="announce"><a href="/about/news/140/" style="color: #FF0000!important; font-size:15px; text-decoration:none;">График работы в новогодние праздники. Подробности внутри</a></div></li>-->

						<!--<li><div class="announce"><a href="/about/news/128/" style="color: #FF0000!important; font-size:15px; text-decoration:none;">Порядок приема алкогольной, табачной и животноводческой продукции. Подробности внутри</a></div></li>
						<li><div class="announce"><a href="/about/news/127/" style="color: #FF0000!important; font-size:15px; text-decoration:none;">Участились случаи мошенничества с использованием бренда «ЖелдорАльянс». Подробности внутри.</a></div></li>-->
						<!--<li><div class="announce"><a href="/about/news/125/" style="color: #FF0000!important; font-size:15px; text-decoration:none;">Переезд склада в г. Улан-Удэ с 30.06.2019г. Подробности внутри.</a></div></li>
						<li><div class="announce"><a href="/about/news/124/" style="color: #FF0000!important; font-size:15px; text-decoration:none;">Переезд склада в г. Краснодар с 01.07.2019г. Подробности внутри</a></div></li>
					    <li><div class="announce"><a href="/questions/8/" style="color: #FF0000!important; font-size:15px; text-decoration:none;">Электронный документооборот с нашей компанией, подробности внутри.</a></div></li>-->
				    	<!--<li><div class="announce"><a href="/about/news/119/" style="color: #FF0000!important; font-size:15px; text-decoration:none;">16.03.19 оформление документов будет производится по окончанию ремонтных работ</a></div></li>
						<li><div class="announce"><a href="/about/news/117/" style="color: #FF0000!important; font-size:15px; text-decoration:none;">Временные ограничения на передвижения транспортных средств в Красноярске с 21.02.19 по 14.03.19</a></div></li>-->
						<!--li><div class="announce"><a href="/about/news/115/" style="color: #FF0000!important; font-size:15px; text-decoration:none;">Открылся новый филиал в г. Якутске</a></div></li-->
						<!--<li><div class="announce"><a href="/services/insurance1/" style="color: #FF0000!important; font-size:15px; text-decoration:none;">Грузы стоимостью более 10 000 рублей принимаются с обязательным страхованием.</a></div></li>-->
						<!--<li><div class="announce"><a href="/about/news/109/" style="color: #FF0000!important; font-size:16px; text-decoration:none;">Со 2 апреля филиал в г.Краснодар будет находиться по новому адресу, подробности внутри!</a></div></li>-->
						<!--<li><div class="announce"><a href="/about/news/101/" style="color: #FF0000!important; font-size:16px; text-decoration:none;">С 03.04.17г Складской терминал в промзоне Парнас г. Санкт-Петербург переехал на новый адрес.</a></div></li>-->
						<!--<li><div class="announce"><a href="/about/news/99/" style="color: #FF0000!important; font-size:16px; text-decoration:none;">с 27 марта подразделение Южное переезжает на новый адрес</a></div></li>-->
					    <!--<li><div class="announce"><a href="/about/news/83/" style="color: #FF0000!important; font-size:16px; text-decoration:none;">НОВЫЕ ПРАВИЛА ПРИЕМА ГРУЗА К ПЕРЕВОЗКЕ!</a></div></li>-->
					</ul>
				</div>
			</div>
			<!--/noindex-->
			<div class="str-slide">
				<span class="slide-left"></span>
				<span class="slide-right"></span>
			</div>
			<div class="main_str-bot"></div>
			<div class="form-wrap slider_layout">
				<form action="/cost/" method="post" id="costForm" class="calculation-form">

						<input type="hidden" name="cost" value="1">
						<input type="hidden" name="From_City_ID" id="From_City_ID" tip="" value="">
						<input type="hidden" name="To_City_ID" id="To_City_ID" tip="" value="">

					<div class="transportation-price">Стоимость перевозки</div>
					<input type="text" class="cityFrom valid secur" name="cityFrom" autocomplete="off" placeholder="Откуда"><span class="error-on-main">Заполните поле</span>
					<input type="text" placeholder="Куда" class="cityWhere valid secur"  autocomplete="off" name="cityWhere"><span class="error-on-main">Заполните поле</span>
					<fieldset class="weight" style="">
						<input type="text" placeholder="Вес" id="input-ext" autocomplete="off" name="Weight" class="placeholder valid secur" >
						<span class="weight-ic"></span>
					</fieldset>
					<fieldset class="volume">
						<input type="text"  placeholder="Объем" autocomplete="off" name="Volume" class="placeholder valid secur" >
						<span class="volume-ic"></span>
					</fieldset>

					<button class="calculate-btn">Раcсчитать</button>
				</form>

				<div class="search-result" id="searchResults"></div>
                <div class="search-result" id="searchResults2" style="display:none;"></div>
				<!-------------------------------------------------------------------------------------------------------------------------------->
  {*<form action="/cost/" method="post" id="costForm">

                                        <input class="refresh" class="refresh" type="button">

                                    </div>
                                    <div class="dems">
                                        <div class="input-w">
                                            <div class="input-ext">
                                                <input id="input-ext" autocomplete="off" name="Weight" class="placeholder" type="text" value="Вес">
                                                <span>кг</span>
                                            </div>
                                        </div>
                                        <div class="input-v">
                                            <div class="input-ext">
                                                <input  autocomplete="off" name="Volume" class="placeholder" type="text" value="Объем">
                                                <span>м<sup>3</sup></span>
                                            </div>
                                        </div>
                                        <a class="cost-calc"></a>
                                        <div class="about_results">* Указаны примерные сроки и стоимость доставки.<br>
                                        Для более точного расчета заполните форму заказа
                                        и нажмите кнопку ”Рассчитать стоимость”</div>
                                        <a href="/clientorder/" class="fast_order">Быстрый заказ</a>
                                    </div>

                                </form>*}
<!-------------------------------------------------------------------------------------------------------------------------------->




<!-------------------------------------------------------------------------------------------------------------------------------->
  {*<form method="post" action="/cargo/">
                            <div class="place_check">
                                <input name="ttn" placeholder="TTH" class="TTH">
                                <input name="pin" placeholder="Пин-код" class="pin">
                                <input type="submit" value="Отследить">

                            </div>
                        </form>*}
<!-------------------------------------------------------------------------------------------------------------------------------->



				<form action="/cargo/"  method="post" class="place-form">
					<div class="cargo-place">Местонахождение груза</div>
					<fieldset>
						<input class="ttn valid secur"  name="ttn"  type="text" placeholder="ТТН">
						<input class="pin valid secur" name="pin" type="text" placeholder="ПИН">
					</fieldset>
					<button class="find-btn">Найти</button>
				</form>
			</div>
			<noindex><div id="owl-demo" class="owl-carousel owl-theme">
 {*$this->banner_main*}
		{*		<!--<div class="item">
				<div class="text__wrap">
					<div class="item__title">Тяжелее груз - ниже цена</div>
					<div class="item__disc" style="line-height: 21px;">
						<p style="color:#fff;font-size:14px;width: 440px;">Скидка 10% на перевозку груза весом от 500кг. до 999кг. из Казани и Саратова.</p>
					</div>
					<a rel="nofollow" href="/about/news/144/" class="item__link">Подробнее</a>
				</div>
				<img src="/img/content/fone-black-men.jpg" >
			</div>-->
			<!--<div class="item">
				<div class="text__wrap">
					<div class="item__title">Первый раз дешевле,<br>стоит попробовать</div>
					<div class="item__disc" style="line-height: 21px;">
						<p style="color:#fff;font-size:14px;width: 440px;">Ещё не пользовались нашими услугами? - 7% на первую перевозку! Из Казани и Саратова.</p>
					</div>
					<a rel="nofollow" href="/about/news/143/" class="item__link">Подробнее</a>
				</div>
				<img src="/img/content/fone-black-box.jpg">
			</div>-->*}
{*			<div class="item">*}
{*				<div class="text__wrap">*}
{*					<div class="item__title"><span style="color:#c41313">Переезд</span> нашего терминала<br>в Москве!</div>*}
{*					<div class="item__disc" style="line-height: 21px;">*}
{*						<p style="color:#fff;font-size:14px;width: 300px;">*}
{*С 11 апреля 2022 года,  наш терминал «‎Москва-Хорошевская» ( 2-й Хорошёвский проезд, 7 стр. 1А) находится по новому адресу - шоссе Энтузиастов 1А(Балашиха).</p>*}
{*					</div>*}
{*					<a rel="nofollow" href="/about/news/169/" class="item__link">Подробнее</a>*}
{*				</div>*}
{*				<img src="/img/main-banner/321.jpg">*}
{*			</div>*}
{*			<div class="item">*}
{*				<div class="text__wrap">*}
{*					<div class="item__title">Уважаемые клиенты!</div>*}
{*					<div class="item__disc" style="line-height: 21px;">*}
{*						<ul style="margin-top: 15px;">*}
{*							<li><span style="color:#bababa;">В связи с указом правительства Москвы, просим вас при отправке и получении груза</span></li>*}
{*							<li><strong>соблюдать обязательные</strong> <span style="color:#bababa;">меры безопасности:</span></li>*}
{*							<li><span style="color:#bababa;">необходимо </span><strong>держать дистанцию 1,5 м, быть в перчатках и маске!</strong></li>*}
{*						</ul>*}
{*						<p style="color:#fff;font-size:14px;width: 440px;">Благодарим вас за понимание!<br>Мы заботимся о вашем здоровье и здоровье своих сотрудников!</p>*}
{*					</div>*}
{*				</div>*}
{*				<img src="/img/banner2705-4.jpg">*}
{*			</div>*}
	{*		<!-- <div class="item">
				<div class="text__wrap">
				<div class="item__title">У нас появилась<br /><span style="color:#c41313">express</span> Доставка!</div>
			  	<div class="item__disc" style="line-height: 21px;">
					<ul style="margin-top: 15px;">
			  			<li>Москва - Новосибирск за 67ч. <span style="color:#eee;">(обычная доставка 4-5 дней)</span></li>
						<li>Москва - Омск за 52ч. <span style="color:#bababa;">(обычная доставка 3-4 дней)</span></li>
						<li>Москва - Чита за 124ч. <span style="color:#bababa;">(обычная доставка 8-9 дней)</span></li>
			  		</ul>
					<p style="color:#5a5858;font-size:14px;width: 440px;">Москва - Новосибирск, Москва - Омск груз принимается только по понедельникам, Москва - Чита - только по пятницам.</p>
				</div>
			  	<a rel="nofollow" href="/services/express_dostavka/" class="item__link">Узнать подробнее</a>
				</div>
				<img src="/img/new-ban2.jpg">
			</div>-->*}
			<div class="item">
				<div class="text__wrap">
				<div class="item__title">Планируете переезд?</div>
			  	<div class="item__disc" style="line-height: 21px;">
					Осуществляем доставку<br />домашних вещей по России
				</div>
			  	<a rel="nofollow" href="/services/home_relocation/" class="item__link">Узнать подробнее</a>
				</div>
				<img src="/img/zhda_bannerfin (2).png" width="1452" height="427">
			</div>
			<div class="item">
			  	<div class="text__wrap">
			  	<div class="item__title">Перевозка <br>в тепле</div>
			  	<div class="item__disc">Не дадим вашим грузам <br>замерзнуть</div>
			  	<a href="/about/news/25/" class="item__link">Узнать подробнее</a>
			  	</div>
			  	<img src="/img/slider-1.png" width="1452" height="427">
			  </div>
			<div class="item">
				<div class="text__wrap">
				<div class="item__title">Перевозка мототехники<br />с Дальнего Востока</div>
			  	<div class="item__disc" style="line-height: 30px;">

				</div>
			  	<a rel="nofollow" href="/about/news/122/" class="item__link">Узнать подробнее</a>
				</div>
				<img src="/img/zhda_banners_frost_fin.png" width="1452" height="427">
			</div>
	{*		<!--<div class="item">
				<div class="text__wrap alignet">
				<div class="item__title-big" style="font-size: 33px;">С 1 октября были открыты новые<br>направления для перевозки грузов:</div>
				<div class="item__disc" style="margin-top: 20px; width: 610px;">Владикавказ, Дербент, Когалым, Махачкала, Набережные Челны, Нефтеюганск, Нижневартовск, Новый Уренгой, Ноябрьск, Пятигорск, Самара, Тюмень, Сургут, Хасавюрт, Грозный, Нальчик, Черкесск, Назрань.</div>
				<a href="/services/shipping/" class="item__link">Узнать подробнее</a>
				</div>
				<img src="/img/content/img_truck.jpg">
			</div>-->*}

	{*		<!--div class="item">
				<div class="text__wrap alignet">
				<div class="item__title-big" style="font-size: 33px;">Доставим Ваши грузы в контейнерах!</div>
				<div class="item__disc">
			  		<ul style="margin-top: 15px;">
			  			<li>Москва - Владивосток (15-18 дней) от 12 р/кг 3000 р/куб</li>
						<li>Москва - Хабаровск (14-16 дней) от 12 р/кг 3500 р/куб</li>
						<li>Москва - Комсомольск-на-Амуре (16-20 дней) от 15 р/кг 3600 р/куб</li>
						<li>Отправка поездов из Москвы осуществляется 5 раз в неделю</li>
			  		</ul>
				</div>
				<a href="/services/shipping/" class="item__link">Узнать подробнее</a>
				</div>
				<img src="/img/content/banner_12.jpg">
			</div-->*}


{*			<div class="item">*}
{*				<div class="text__wrap alignet">*}
{*				<div class="item__title-big" style="font-size: 33px;">Экономьте на перевозке Ваших грузов!</div>*}
{*				<div class="item__disc">*}
{*					<!--ul>*}
{*						<li>Экономически выгодно для перевозок на большие расстояния</li>*}
{*						<li>Контейнер защищает груз от осадков, порчи<br>и несанкционированного вскрытия</li>*}
{*						<li>Удобно для перевозки<br>негабаритного груза</li>*}
{*						<li>Доставим в любую точку РФ</li>*}
{*			  		</ul-->*}
{*			  		<ul style="margin-top: 15px;">*}
{*			  			<li>Москва - Владивосток (15-17) от 13,50 р/кг 3100 р/куб</li>*}
{*						<li>Москва - Хабаровск (15-17) от 13,50 р/кг 3100 р/куб</li>*}
{*						<li>Москва - Комсомольск-на-Амуре (20-21) от 17 р/кг 4050 р/куб</li>*}
{*						<li>Москва - Иркутск (8-9) от 19 р/кг\ 4100 р/куб</li>*}
{*						<li>Москва - Чита (10-11) от 21 р/кг 4700 р/куб</li>*}
{*						<li>Москва - Улан-Удэ (9-10) от 20 р/кг 4400 р/куб</li>*}
{*						<li>Отправка поездов из Москвы осуществляется 5 раз в неделю</li>*}
{*			  		</ul>*}
{*				</div>*}
{*				<a href="/services/shipping/" class="item__link">Узнать подробнее</a>*}
{*				</div>*}
{*				<img src="/img/content/fone-black.jpg">*}
{*			</div>*}


	{*		<!--<div class="item">
				<div class="text__wrap">
				<div class="item__title">Уважаемые клиенты!</div>
				<p class="item__disc">В связи с ЧМ - 2018<br>В Москве будут введены ограничения на доставку и забор груза</p>
				<a href="/about/news/111/" class="item__link">Узнать подробнее</a>
				</div>
				<img src="/img/content/banner-cities2018.jpg" width="1452" height="427">
			</div>-->*}
{*			<div class="item">*}
{*			  	<div class="text__wrap">*}
{*			  	<div class="item__title">Уважаемые клиенты!</div>*}
{*			  	<div class="item__disc">Рады Вам сообщить об открытии<br>нового центрального терминала<br>12.000 м2 класса А по адресу:<br>г. Москва, ул. Салтыковская, д.26, к.2.<br>Режим работы: круглосуточный.</div>*}
{*			  	<a href="/about/news/100/" class="item__link">Узнать подробнее</a>*}
{*			  	</div>*}
{*			  	<img src="/img/slider-6.jpg">*}
{*			  </div>*}
			{*  <!--<div class="item">
				<div class="text__wrap">
				<div class="item__title">Доставка грузов из Китая<br /> от 7 дней.</div>
			  	<div class="item__disc" style="line-height: 21px;">
					Теперь доступны грузоперевозки<br /> из Китая по выгодным ценам!
				</div>
			  	<noindex><a rel="nofollow" target="_blank" href="http://hl-group.ru/" class="item__link">Узнать подробнее</a></noindex>
				</div>
				<img src="/img/zhda_banners_flags.jpg">
			</div> -->*}


		{*		  <!--<div class="item">
			  <div class="text__wrap">
			  	<div class="item__title">Ваши грузы<br>в надежных<br>руках</div>
			  	<div class="item__disc">Грузы застрахованы в компании с очень высоким рейтингом надежности*. Стоимость страховки от 5 рублей за груз!</div>
			  	<a href="/services/insurance1/" class="item__link">Узнать подробнее</a>
			  	<div class="item__disc__small">* Рейтинговое агентство «Эксперт РА» (RAEX) присвоило высокий уровень надежности СК «Cпасские ворота» на уровне А+</div>
			  	</div>
			  	<img src="/img/slider-3.png">
			  </div>
			  <div class="item">
			  <div class="text__wrap">
			  	<div class="item__title">Экспресс-прием<br>груза</div>
			  	<div class="item__disc">Ускоренное оформление, обслуживание вне очереди, выделенный проезд.
			  	</div>
			  	<a href="/services/receiving/" class="item__link">Узнать подробнее</a>
			  	</div>
			  	<img src="/img/slider-4.png">
			  </div>-->
			  <!--<div class="item">
				  <div class="text__wrap alignet">
				  	<div class="item__title-big">Наши преимущества</div>
				  	<div class="item__disc">
				  		<ul>
							<li>Крупнейшая филиальная сеть России</li>
				  			<li>17 лет на рынке железнодорожных грузоперевозок по России</li>
				  			<!--<li class="strong">Филиалы в 118 городах России</li>-->
				  			<!--<li class="strong">3 отделения в Китае</li>-->
				  			<!--<li>Доставка грузов в 3000 населенных пунктов России</li>
							<li>Собственный железнодорожный и автомобильный транспорт</li>
				  			<li>Официальный перевозчик Олимпийских игр в Сочи 2014</li>
				  			<li class="strong">Экспедирование груза «от двери до двери»</li>
				  		</ul>
				  	</div>
				  	</div>
			  	<img src="/img/content/back.jpg">-->
			  <!--</div>--> *}
			</div></noindex>
		</div>

	</section>

{if $arrExpress}
    <section class="express" style="display:block;">
        <div class="container">
            <div class="express__h2">
                <h2>График отправок в режиме Экспресс</h2>
                <span><img src="/upload/Fire.svg" alt=""></span>
            </div><!-- /.express__h2 -->
            <div class="express__wrapper">
                <div class="express__items">
                    {if 'Москва - Чита'|array_key_exists:$arrExpress}
                    <div class="express__item">
                        <div class="express__card">
                            <div class="expresscard">
                                <div class="expresscard__header">
                                    <div class="expresscard__name expresscard__from">
                                        <div class="expresscard__nameicon">
                                            <img src="/upload/Coat_of_Arms_of_Moscow.png" alt="">
                                        </div>
                                        <div class="expresscard__nametext">Москва</div>
                                    </div>
                                    <div class="expresscard__name expresscard__to">
                                        <div class="expresscard__nametext">Чита</div>
                                        <div class="expresscard__nameicon">
                                            <img src="/upload/chi.png" alt="">
                                        </div>
                                    </div>
                                </div><!-- /.expresscard__header -->
                                <div class="expresscard__status expresscard__status--inprocess"></div>
                                <div class="expresscard__tracking expresstrack">
                                    <div class="expresstrack__row">
                                        <div class="expresstrack__step expresstrack__step_start completed">
                                            <span class="is-complete"></span>
                                            <p>&nbsp;</p>
                                        </div>
                                        <div class="expresstrack__step expresstrack__step_middle completed">
                                            <span class="is-complete"></span>
                                            <p>5 дней</p>
                                        </div>
                                        <div class="expresstrack__step expresstrack__step_end">
                                            <span class="is-complete"></span>
                                            <p>&nbsp;</p>
                                        </div>
                                    </div>
                                </div><!-- /.expresscard__line -->
                                <div class="expresscard__dates">
                                    <div class="expressdates">
                                        <div class="expressdates__header">
                                            <div class="expressdates__caption">Дата отправки</div>
                                            <div class="expressdates__caption">Дата прибытия</div>
                                        </div><!-- /.expressdates__header -->
                                        <div class="expressdates__content">
                                            {foreach from=$arrExpress['Москва - Чита']['date'] item=arDate}
                                            <div class="expressdates__item">
                                                <div class="expressdates__row"> 
                                                    <div class="expressdates__start">{$arDate.departure}</div><!-- /.expressdates__from -->
                                                    <div class="expressdates__middle">
                                                        <img src="/upload/Rectangle2156.svg" alt="">
                                                    </div><!-- /.expressdates__middle -->
                                                    <div class="expressdates__end">{$arDate.arrival}</div><!-- /.expressdates__to -->
                                                </div><!-- /.expressdates__row -->
                                            </div><!-- /.expressdates__item -->
                                            {/foreach}
                                        </div><!-- /.expressdates__content -->
                                    </div><!-- /.expressdates -->
                                </div>
                            </div>
                        </div>
                    </div><!-- /.express__item -->
                    {/if}
                    {if 'Москва - Благовещенск'|array_key_exists:$arrExpress}
                    <div class="express__item">
                        <div class="express__card">
                            <div class="expresscard">
                                <div class="expresscard__header">
                                    <div class="expresscard__name expresscard__from">
                                        <div class="expresscard__nameicon">
                                            <img src="/upload/Coat_of_Arms_of_Moscow.png" alt="">
                                        </div>
                                        <div class="expresscard__nametext">Москва</div>
                                    </div>
                                    <div class="expresscard__name expresscard__to">
                                        <div class="expresscard__nametext">Благовещенск</div>
                                        <div class="expresscard__nameicon">
                                            <img src="/upload/blg.png" alt="">
                                        </div>
                                    </div>
                                </div><!-- /.expresscard__header -->
                                <div class="expresscard__status expresscard__status--inprocess"></div>
                                <div class="expresscard__tracking expresstrack">
                                    <div class="expresstrack__row">
                                        <div class="expresstrack__step expresstrack__step_start completed">
                                            <span class="is-complete"></span>
                                            <p>&nbsp;</p>
                                        </div>
                                        <div class="expresstrack__step expresstrack__step_middle completed">
                                            <span class="is-complete"></span>
                                            <p>6 дней</p>
                                        </div>
                                        <div class="expresstrack__step expresstrack__step_end">
                                            <span class="is-complete"></span>
                                            <p>&nbsp;</p>
                                        </div>
                                    </div>
                                </div><!-- /.expresscard__line -->
                                <div class="expresscard__dates">
                                    <div class="expressdates">
                                        <div class="expressdates__header">
                                            <div class="expressdates__caption">Дата отправки</div>
                                            <div class="expressdates__caption">Дата прибытия</div>
                                        </div><!-- /.expressdates__header -->
                                        <div class="expressdates__content">
                                            {foreach from=$arrExpress['Москва - Благовещенск']['date'] item=arDate}
                                            <div class="expressdates__item">
                                                <div class="expressdates__row"> 
                                                    <div class="expressdates__start">{$arDate.departure}</div><!-- /.expressdates__from -->
                                                    <div class="expressdates__middle">
                                                        <img src="/upload/Rectangle2156.svg" alt="">
                                                    </div><!-- /.expressdates__middle -->
                                                    <div class="expressdates__end">{$arDate.arrival}</div><!-- /.expressdates__to -->
                                                </div><!-- /.expressdates__row -->
                                            </div><!-- /.expressdates__item -->
                                            {/foreach}
                                        </div><!-- /.expressdates__content -->
                                    </div><!-- /.expressdates -->
                                </div><!-- /.expresscard__dates -->
                            </div><!-- /.expresscard -->
                        </div>
                    </div>
                    {/if}
                    {if 'Владивосток - Москва'|array_key_exists:$arrExpress}
                    <div class="express__item">
                        <div class="express__card">
                            <div class="expresscard">
                                <div class="expresscard__header">
                                    <div class="expresscard__name expresscard__from">
                                        <div class="expresscard__nameicon">
                                            <img src="/upload/gerb_Vladivostoka_1883.png" alt="">
                                        </div>
                                        <div class="expresscard__nametext"> Владивосток</div>
                                    </div>
                                    <div class="expresscard__name expresscard__to">
                                        <div class="expresscard__nametext">Москва</div>
                                        <div class="expresscard__nameicon">
                                            <img src="/upload/Coat_of_Arms_of_Moscow.png" alt="">
                                        </div>
                                    </div>
                                </div><!-- /.expresscard__header -->
                                <div class="expresscard__status expresscard__status--inprocess"></div>
                                <div class="expresscard__tracking expresstrack">
                                    <div class="expresstrack__row">
                                        <div class="expresstrack__step expresstrack__step_start completed">
                                            <span class="is-complete"></span>
                                            <p>&nbsp;</p>
                                        </div>
                                        <div class="expresstrack__step expresstrack__step_middle completed">
                                            <span class="is-complete"></span>
                                            <p>8 дней</p>
                                        </div>
                                        <div class="expresstrack__step expresstrack__step_end">
                                            <span class="is-complete"></span>
                                            <p>&nbsp;</p>
                                        </div>
                                    </div>
                                </div><!-- /.expresscard__line -->
                                <div class="expresscard__dates">
                                    <div class="expressdates">
                                        <div class="expressdates__header">
                                            <div class="expressdates__caption">Дата отправки</div>
                                            <div class="expressdates__caption">Дата прибытия</div>
                                        </div><!-- /.expressdates__header -->
                                        <div class="expressdates__content">
                                            {foreach from=$arrExpress['Владивосток - Москва']['date'] item=arDate}
                                            <div class="expressdates__item">
                                                <div class="expressdates__row"> 
                                                    <div class="expressdates__start">{$arDate.departure}</div><!-- /.expressdates__from -->
                                                    <div class="expressdates__middle">
                                                        <img src="/upload/Rectangle2156.svg" alt="">
                                                    </div><!-- /.expressdates__middle -->
                                                    <div class="expressdates__end">{$arDate.arrival}</div><!-- /.expressdates__to -->
                                                </div><!-- /.expressdates__row -->
                                            </div><!-- /.expressdates__item -->
                                            {/foreach}
                                        </div><!-- /.expressdates__content -->
                                    </div><!-- /.expressdates -->
                                </div><!-- /.expresscard__dates -->
                            </div><!-- /.expresscard -->
                        </div>
                    </div>
                    {/if}
                    {if 'Уссурийск - Москва'|array_key_exists:$arrExpress}
                    <div class="express__item">
                        <div class="express__card">
                            <div class="expresscard">
                                <div class="expresscard__header">
                                    <div class="expresscard__name expresscard__from">
                                        <div class="expresscard__nameicon">
                                            <img src="/upload/uss.jpg" alt="">
                                        </div>
                                        <div class="expresscard__nametext">Уссурийск</div>
                                    </div>
                                    <div class="expresscard__name expresscard__to">
                                        <div class="expresscard__nametext">Москва</div>
                                        <div class="expresscard__nameicon">
                                            <img src="/upload/Coat_of_Arms_of_Moscow.png" alt="">
                                        </div>
                                    </div>
                                </div><!-- /.expresscard__header -->
                                <div class="expresscard__status expresscard__status--inprocess"></div>
                                <div class="expresscard__tracking expresstrack">
                                    <div class="expresstrack__row">
                                        <div class="expresstrack__step expresstrack__step_start completed">
                                            <span class="is-complete"></span>
                                            <p>&nbsp;</p>
                                        </div>
                                        <div class="expresstrack__step expresstrack__step_middle completed">
                                            <span class="is-complete"></span>
                                            <p>7 дней</p>
                                        </div>
                                        <div class="expresstrack__step expresstrack__step_end">
                                            <span class="is-complete"></span>
                                            <p>&nbsp;</p>
                                        </div>
                                    </div>
                                </div><!-- /.expresscard__line -->
                                <div class="expresscard__dates">
                                    <div class="expressdates">
                                        <div class="expressdates__header">
                                            <div class="expressdates__caption">Дата отправки</div>
                                            <div class="expressdates__caption">Дата прибытия</div>
                                        </div><!-- /.expressdates__header -->
                                        <div class="expressdates__content">
                                            {foreach from=$arrExpress['Уссурийск - Москва']['date'] item=arDate}
                                            <div class="expressdates__item">
                                                <div class="expressdates__row"> 
                                                    <div class="expressdates__start">{$arDate.departure}</div><!-- /.expressdates__from -->
                                                    <div class="expressdates__middle">
                                                        <img src="/upload/Rectangle2156.svg" alt="">
                                                    </div><!-- /.expressdates__middle -->
                                                    <div class="expressdates__end">{$arDate.arrival}</div><!-- /.expressdates__to -->
                                                </div><!-- /.expressdates__row -->
                                            </div><!-- /.expressdates__item -->
                                            {/foreach}
                                        </div><!-- /.expressdates__content -->
                                    </div><!-- /.expressdates -->
                                </div><!-- /.expresscard__dates -->
                            </div><!-- /.expresscard -->
                        </div>
                    </div>
                    {/if}
                </div>
            </div><!-- /.express__wrapper -->
        </div><!-- /.container -->
    </section><!-- /.express -->
{/if}

<div class="map-svg-block-wrapper">
		<div class="map-svg-block-inner">
			<p class="map-svg-title">Грузоперевозки по всей России</p>




			{if false}




				<script>
				$(document).ready(function(){
					var mos = 	'';
					for (var level in markers)
					{
						for (var i = 0; i < markers[level].length; i++)
						{
						if(markers[level][i].id=='7700000000000000000000000'){
							mos = 'moscow'
						}else{
							mos = 'loc'+markers[level][i].id;
							mos = 'crimea'+markers[level][i].id;
						}

						var coeff = 1;
						var x = parseInt(markers[level][i].lx)*coeff;
						var y = parseInt(markers[level][i].ly)*coeff;

						var imgC ='';
						if(markers[level][i].onimgmap){
							imgC = markers[level][i].onimgmap;
						}else{
							imgC = x+', '+y;
						}

							if(markers[level][i].name!=='' && markers[level][i].pagename!==''){
								//$('.demo1').append('<div class="marker" id="'+mos+'" data-realcoord="'+markers[level][i].lx+','+markers[level][i].ly+'" data-coords="'+imgC+'"><span class="sity_hover">'+markers[level][i].name+'</span><div class="popup-top-wrapper"><div class="popup-top-image"><img src="../img/zhda_logo.png"></div><div class="popup-top-title"><a href="">'+markers[level][i].pagename+'</a></div></div><div class="popup-bottom-wrapper"><div class="popup-telephone">'+markers[level][i].phone+'</div><div class="popup-mail"><a href="mailto:'+markers[level][i].mailResponces+'">'+markers[level][i].mailResponces+'</a></div><div class="popup-address">'+markers[level][i].text+'</div></div></div>');
								$('.demo1').append('<div class="marker" id="'+mos+'" data-realcoord="'+markers[level][i].lx+','+markers[level][i].ly+'" data-coords="'+imgC+'"><span class="sity_hover">'+markers[level][i].name+'</span><div class="popup-top-wrapper"><div class="popup-top-image"><img src="../img/zhda_logo.png"></div><div class="popup-top-title"><a href="/branches/'+markers[level][i].rid+'/">'+markers[level][i].pagename+'</a></div></div>'+markers[level][i].text+'</div>');
								$('.demo1').after('<div class="controls">				<a href="#" rel="'+mos+'"></a>			</div>');
							}

						}
					}

					$('.demo1').craftmap({
						image: {
							width: 960,
							height: 514
						}
					});
					$('.demo2').craftmap({
						fullscreen: true,
						image: {
							width: 1994,
							height: 1303
						}
					});


					$(".marker").hover(
					  function() {
						$(this).addClass("hover_block");
					  }, function() {
						$(this).removeClass("hover_block");
					  }
					);
					$(".marker").click(function() {
						$(".overlay").css('display','block');
							$(".close").click(function(){
								overlay.hide();
								$(".popup").css('display','none');
							});
					});
					var overlay;
					overlay = $("body .overlay");



					$(".overlay").click(function() {
						$(this).css('display','none');
						$(".popup").css('display','none');
					});



				});

			</script>

			{/if}






			
			<div class="demo1">
				<img src="../img/russiamap_light.png" class="imgMap" />
		{*if $smarty.server.REMOTE_ADDR=='79.98.211.78'*}
			{foreach from=$this->branchesAll.mainA item=data}
    				{if $data.latlng ne '' && $data.c1_id ne 0 && $data.name!='' && $data.pagename!=''}
						{assign var=loc value=","|explode:$data.latlng}

						<div class="marker" id="{if $data.c1_id=='7700000000000000000000000'}moscow{else}crimea{$data.c1_id}{/if}" data-realcoord="{$loc.0},{$loc.1}" data-coords="{if $data.latlngm}{$data.latlngm}{else}{$loc.0},{$loc.1}{/if}">
							<span class="sity_hover">{$data.name}</span>
							<div class="popup-top-wrapper">
								<div class="popup-top-image">
									<img src="../img/zhda_logo.png">
								</div>
								<div class="popup-top-title">
									<a href="/branches/{$data.chpu}/">{$data.pagename}</a>
								</div>
							</div>
						{$data.text}
						</div>
		        	{/if}
            	{/foreach}

			    {foreach from=$this->branchesAll.data item=item}
			    	{foreach from=$item item=destin}
				        {foreach from=$destin item=data}
				        	{if $data.latlng ne '' && $data.c1_id ne 0 && $data.name!='' && $data.pagename!=''}
							{assign var=loc value=","|explode:$data.latlng}
<div class="marker" id="{if $data.c1_id=='7700000000000000000000000'}moscow{else}crimea{$data.c1_id}{/if}" data-realcoord="{$loc.0},{$loc.1}" data-coords="{if $data.latlngm}{$data.latlngm}{else}{$loc.0},{$loc.1}{/if}">
							<span class="sity_hover">{$data.name}</span>
							<div class="popup-top-wrapper">
								<div class="popup-top-image">
									<img src="../img/zhda_logo.png">
								</div>
								<div class="popup-top-title">
									<a href="/branches/{$data.chpu}/">{$data.pagename}</a>
								</div>
							</div>
						{$data.text}
						</div>
				        	{/if}
				        {/foreach}
			        {/foreach}
			    {/foreach}
				{*/if*}
			</div>
		</div>
	</div>










	<noindex>
			<!--<div class="news">
				<div class="g-aligner">
					<a href="/about/news/">Новости</a>
					{*announce_slider*}
					{if $this->newsNames ne ''}
					   <div class="announce_slider">
                            <div class="slider-news-top">
							<ul>
								{foreach from=$this->newsNames item=ii}
									{if $ii.name !== 'Внимание! Ограниченный режим работы филиала в г.Уфа!'}
									<li><div class="announce"><a style="color:#000; text-decoration:none;" href="/about/news/{$ii.id}/">{$ii.name}</a></div></li>
									{/if}
								{/foreach}
							</ul>
                            </div>
						</div>
						{/if}

				</div>
			</div>-->
	</noindex>

	<section class="third">
		<div class="g-aligner"  itemscope="" itemtype="http://schema.org/VideoObject">
			<p style="font: 37px 'HelveticaNeueCyr-Bold'; margin-top: 0;">ЖелдорАльянс – доставка сборных грузов от 1 кг!</p>
			<span itemprop="name" style="display:none;">Грузовые перевозки по Москве и РФ</span>
			<meta itemprop="thumbnail" content="/images/logo.png">


			<span style="display: none;" itemprop="description">&#128666; Грузовые перевозки по Москве и России, более &#9733; 17 лет на рынке &#128644; железнодорожных грузоперевозок. Доставка грузов &#128666; в 3000 населенных пунктов России.</span>

			<div style="float: left; width: 438px; height: 263px; margin: 0 20px 0px 0;" class="iframecontainer" id="iframecontainer">
			{* <iframe  loading="lazy"  width="438" height="263" src="https://www.youtube.com/embed/jhCN3zwGHuU?rel=0" frameborder="0" allowfullscreen="" mozallowfullscreen="" webkitallowfullscreen="" autoplay=0></iframe> *}

			<div class="iframe"></div>

			 {*  <iframe data-loader="youtube" data-src="jhCN3zwGHuU" width="" height="" frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> *}


			</div>
			<ul>
				<li><span>Крупнейшая филиальная сеть России</span></li>
				<li><span>21 год на рынке железнодорожных грузоперевозок по России</span></li>
				<li><span>Собственные багажные вагоны и автотранспорт</span></li>
				<li><span>Доставка грузов в 3000 населенных пунктов России</span></li>
				<li><span>Официальный перевозчик Олимпийских игр Сочи 2014</span></li>
				<li><span>Экспедирование груза «от двери до двери»</span></li>
				<li><span>Перевозка груза в режиме «тепло»</span></li>
			</ul>
		</div>
	</section>

	<section class="fourth" style="display:none;">
		<div class="g-aligner">
			<p style="margin: 0px;  color: #000;  margin-bottom: 19px;">Горячая линия</p>
			<p>Заранее благодарны Вам за участие в улучшении работы нашего альянса, обещаем, что все Ваши вопросы будут внимательно<br /> рассмотрены в течение 3 дней. Пожалуйста, заполните форму.</p>

			<!-------------------------------------------------------------------------------------------------------------------------------->
  {*<form id="infoForm" method="post" class="asas" onsubmit="yaCounter4951441.reachGoal('hotline'); return true;">

                        <label>Номер ТТН</label>
                        <input name="hotline[ttn]" type="text" value="">


                        <label>Номер телефона</label>
                        <input name="hotline[phone]" type="text" value="">

                        <label>E-mail</label>
                        <input name="hotline[email]" type="text" value="">

                        <label>Описание проблемы</label>
                        <textarea class="validate" id="aq-message" name="hotline[message]" cols="45" rows="10"></textarea>


	</form>*}
<!-------------------------------------------------------------------------------------------------------------------------------->
			<form  id="infoForm" method="post" action="/call_back/hotline/" class="hot-line">
				<fieldset class="hot-line__data">
					<input class="secur valid" name="hotline[ttn]" type="text" placeholder="Номер ТТН" required="required">
					<input class="secur valid" type="text" placeholder="Имя" required="required">
					<input class="secur valid" name="hotline[phone]" type="tel" placeholder="Номер телефона" required="required">
					<input type="email" class="secur valid" name="hotline[email]" placeholder="E-mail">
				</fieldset>
				<fieldset>
					<textarea name="hotline[message]" id="" cols="30" class="valid" rows="10" placeholder="Описание проблемы"></textarea>
					<button class="send-btn">Отправить</button>
				</fieldset>
			</form>
		</div>
	</section>



<section class="second" style="padding-top: 0px !important;">
		<div class="g-aligner">

<div class="group" style='margin-top:20px;'>


                        <article>
						    <h1>Грузоперевозки по России</h1>
                            <p>ЖелдорАльянс существует уже 21 год, за это время мы накопили большой опыт в оказании транспортных услуг. Приоритетным направлением нашей деятельности являются ЖД грузовые перевозки по России  железнодорожным  и автомобильным транспортом. Главное достоинство нашей компании — это соблюдение сроков доставки груза и обеспечение его сохранности, что достигается путем строгого следования всем правилам <a style="color: #0072ff;" href="/branches/moscow/">перевозки</a>, установленным законодательством, а также благодаря ответственному отношению к своей работе каждого сотрудника ЖелдорАльянс.</p>
							<h2 style="margin: 0.67em 0 !important;">Наши преимущества</h2>

							<p>Важное преимущество ЖелдорАльянс - это собственный автопарк, который поддерживается в рабочем состоянии благодаря регулярным техосмотрам и техническому обслуживанию. Также есть собственные багажные вагоны для осуществления железнодорожных перевозок по России. Большой опыт в составлении маршрутов и логистических схем позволяет нам гарантировать максимально быструю жд и <a href="/services/avtoperevozki_po_rossii/">автомобильную доставку грузов.</a></p>


							<!--noindex--><p>Преимущества сотрудничества с ЖелдорАльянс:</p>

							<ul>
								<li>демократичная ценовая политика на услуги вагонных грузовых перевозок;</li>
								<li>индивидуальный подход и возможность оказания нестандартных транспортных услуг;</li>
								<li>высокий уровень сервиса ЖД грузоперевозок;</li>
								<li>широкий охват населенных пунктов страны;</li>
								<li>возможность доставки груза «от двери до двери»;</li>
								<li>отсутствие проблем с крупногабаритными грузами, так как пункты приема груза   находится не в центральной части Москвы, а за пределами ТТК,  а основной терминал находится в районе ТТК;</li>
								<li>грамотные консультации по выбору оптимального способа доставки.</li>
							</ul>
							<!--/noindex-->
							<p>Мы гарантируем полную безопасность товара на всем протяжении маршрута перевозки груза по РЖД (Российским Железным Дорогам) и делаем все для того, чтобы клиенты продолжали пользоваться нашими услугами.</p>
							<!--
							<h2>Калькулятор расчёта</h2>

							<div>
								<img style="display: inline-block;vertical-align: top;width: 275px;height: 385px;margin-right: 20px;" src="/img/content/istock_000005187643small.jpg" alt="Грузоперевозки по Москве и России">

<div style="width: 660px;height: 400px;border: none;display: inline-block;vertical-align: top;overflow: hidden;position:relative ">
				<form action="/cost/" method="post" id="costForm_bottom" class="calculation-forma universalCalc">

						<input type="hidden" name="cost" value="1">
						<input type="hidden" name="From_City_ID" id="From_City_ID_bottom" tip="" value="">
						<input type="hidden" name="To_City_ID" id="To_City_ID_bottom" tip="" value="">

					<div class="transportation-price">Стоимость перевозки</div>
					<input type="text" class="cityFrom valid secur" name="cityFrom" autocomplete="off" placeholder="Откуда"><span class="error-on-main">Заполните поле</span>
					<input type="text" placeholder="Куда" class="cityWhere valid secur"  autocomplete="off" name="cityWhere"><span class="error-on-main">Заполните поле</span>
					<fieldset class="weight" style="">
						<input type="text" placeholder="Вес" id="input-ext_bottom" autocomplete="off" name="Weight" class="placeholder valid secur" >
						<span class="weight-ic"></span>
					</fieldset>
					<fieldset class="volume">
						<input type="text"  placeholder="Объем" autocomplete="off" name="Volume" class="placeholder valid secur" >
						<span class="volume-ic"></span>
					</fieldset>

					<button class="calculate-btn">Раcсчитать</button>
				</form>

				<div class="search-result srcf" id="searchResults_bottom" style="display:none;"></div>
                <div class="search-result srct" id="searchResults2_bottom" style="display:none;"></div>




				<form action="/cargo/"  method="post" class="place-forma">
					<div class="cargo-place">Местонахождение груза</div>
					<fieldset>
						<input class="ttn valid secur"  name="ttn"  type="text" placeholder="ТТН">
						<input class="pin valid secur" name="pin" type="text" placeholder="ПИН">
					</fieldset>
					<button class="find-btn">Найти</button>
				</form>




				</div>
							</div>
						-->

							<a class="click-spoiler">Показать полностью</a>
							<a class="click-spoiler-hide">Скрыть</a>
							<div class="spoiler">
								<noindex><h2>Грузовые перевозки по Москве, Московской области и РФ</h2>

							<p>ЖелдорАльянс старается учитывать все потребности и пожелания клиентов при оказании услуг доставки груза, а также при осуществлении автомобильных грузоперевозок по России. В комплекс наших услуг входят:</p>

							<ul>
								<li>разработка оптимального логистического маршрута;</li>
								<li>ж/д и автомобильная доставка <a href="/services/dostavka_sbornykh_gruzov/">сборных</a> и <a href="/services/perevozka_negabaritnyh_gruzov/">негабаритных грузов</a>, помощь в их формировании и погрузке;</li>								<li>возможность использования спецтранспорта и <a href="/services/shipping/">контейнеров;</a></li>								<li><a href="/services/receiving/">погрузка и выгрузка</a>;</li>								<li><a href="/services/dispatch/">экспедирование грузов по Москве и России;</a></li>								<li><a href="/services/documents/">оформление всех необходимых документов;</a></li>								<li><a href="/services/insurance1/">страхование груза</a> от повреждений и утери.</li>
							</ul>

							<p>ЖелдорАльянс может перевезти груз в любой регион страны, но наиболее активно осуществляется автотранспортное сообщение с юго-западными регионами, Уралом, а также с Сибирью и Дальним Востоком. Для некоторых регионов возможны только <a href="/services/dostavka_sbornykh_gruzov/">мультимодальные грузоперевозки</a> с использованием разных видов транспорта, в том числе морского. Компания постоянно развивается, увеличивая транспортную сеть и расширяя перечень населенных пунктов, в которые осуществляется доставка груза. </p></noindex>
							<!-- <table style="width:100%; margin-bottom:25px; margin-top: 30px; text-align: center;" class="table-main">
								<tbody>
									<tr>
										<td><a href="wcmfiles/gruzoperovozki_po_moskve.xlsx">Скачать прайс-лист по Москве</a></td>
										<td><a href="wcmfiles/gruzoperovozki_po_rossii.xlsx">Скачать прайс-лист по России</a></td>
										<td><a href="wcmfiles/dogovor_tk_zhda_17.doc">Скачать договор на оказание услуг по доставке грузов</a></td>
									</tr>
									<tr>
										<td><a href="wcmfiles/gruzoperovozki_po_moskve.xlsx"><img src="/wcmfiles/xls.png" style="height: 60px;"></a></td>
										<td><a href="wcmfiles/gruzoperovozki_po_rossii.xlsx"><img src="/wcmfiles/xls.png" style="height: 60px;"></a></td>
										<td><a href="wcmfiles/dogovor_tk_zhda_17.doc"><img src="/wcmfiles/doc.png" style="height: 60px;"></a></td>
									</tr>
								</tbody>
							</table> -->

<!-- 
<table style="width:100%; border: solid 1px #d0d5d9; margin-bottom:25px;   margin-top: 30px;" class="table-main">
<thead style="border-bottom: solid 1px #d0d5d9;">
				<tr>
				<th style="text-align:left; padding:10px 5px;">Железнодорожные грузоперевозки по городам России</th>
				<th style="border: solid 1px #d0d5d9;">Минимальная цена (руб.)</th>
                                <th style="border: solid 1px #d0d5d9;">Вес до 100 кг.</th>
				</tr>
</thead>
<tbody>
				<tr>
				<td style="padding:5px 5px; border: solid 1px #d0d5d9;"><a href="/branches/13/">Владивосток</a> - Москва</td>
				<td style="text-align: center; border: solid 1px #d0d5d9;">500</td>
				<td style="text-align: center; border: solid 1px #d0d5d9;">13,75</td>
                                   </tr>
				<tr>
				<td style="padding:5px 5px;border: solid 1px #d0d5d9;">Владивосток - <a href="/branches/saint_petersburg/">Санкт-Петербург</a></td>
				<td style="text-align: center;border: solid 1px #d0d5d9;">500</td>
				<td style="text-align: center;border: solid 1px #d0d5d9;">16,28</td>
				</tr>
				<tr>
				<td style="padding:5px 5px;border: solid 1px #d0d5d9;">Москва - <a href="/branches/saint_petersburg/">Санкт-Петербург</a></td>
				<td style="text-align: center;border: solid 1px #d0d5d9;">250</td>
				<td style="text-align: center;border: solid 1px #d0d5d9;">5,49</td>
				</tr>
				<tr>
				<td style="padding:5px 5px; border: solid 1px #d0d5d9;"><a href="/branches/21/">Москва</a> - Екатеринбург</td>
				<td style="text-align: center; border: solid 1px #d0d5d9;">250</td>
				<td style="text-align: center; border: solid 1px #d0d5d9;">8,55</td>
				</tr>
				<tr>
				<td style="padding:5px 5px; border: solid 1px #d0d5d9;">Москва - <a href="/branches/2/">Новосибирск</a></td>
				<td style="text-align: center; border: solid 1px #d0d5d9;">250</td>
				<td style="text-align: center; border: solid 1px #d0d5d9;">15,06</td>
				</tr>
				<tr>
				<td style="padding:5px 5px; border: solid 1px #d0d5d9;">Москва - <a href="/branches/27/">Красноярск</a></td>
				<td style="text-align: center; border: solid 1px #d0d5d9;">250</td>
				<td style="text-align: center; border: solid 1px #d0d5d9;">17,48</td>
				</tr>
				<tr>
				<td style="padding:5px 5px; border: solid 1px #d0d5d9;"><a href="/branches/106/">Уфа</a> - Москва</td>
				<td style="text-align: center; border: solid 1px #d0d5d9;">250</td>
				<td style="text-align: center; border: solid 1px #d0d5d9;">5,17</td>
				</tr>
				<tr>
				<td style="padding:5px 5px; border: solid 1px #d0d5d9;"><a href="/branches/54/">Екатеринбург</a> - Москва</td>
				<td style="text-align: center; border: solid 1px #d0d5d9;">200</td>
				<td style="text-align: center; border: solid 1px #d0d5d9;">4,73</td>
				</tr>
</tbody>
</table> -->

<!-- <p><a href="/calculator/" style="font-size: 18px; color: #000;">Калькулятор доставки груза</a></p> -->

                        </article>

</div><!-- Spoiler End -->
                    </div>



	</div>







	<section class="fifth" style="    padding-bottom: 43px;">
		<div class="g-aligner">
			<p style="margin: -35px 0 37px 0; font-size: 18px; text-transform: uppercase; font-weight: bold; text-align: center;">ГРУППА КОМПАНИЙ</p>
			<p style="text-align:center;">
						<span style="border:0" id="st1" target="_blank" href="#"><img src="/wcmfiles/pp1.png" width="264" height="107"></span>

			<a rel="nofollow" style="border:0" id="st" target="_blank" href="http://hl-group.ru/" width="260" height="100"><img src="/wcmfiles/logo-1.png" style="width: 260px; height: 100px;"></a>
			<a rel="nofollow" style="border:0" id="st2" target="_blank" href="//azlog.ru"><img src="/wcmfiles/pp2.png" width="179" height="119" ></a>
			</p>
			<div style="width: 100%; height: 1px; border-bottom: 1px solid #F4F4F4; margin: 36px 0;"></div>

			<!--
			<p style="margin: 0px; color: #000; font-weight: bold; text-align: center; font-size: 18px;">Наши партнёры</p>
		    -->
		    <!--
			<ul style=" margin: 37px auto 0; width: 703px; display: table;">
				<li style=" display: table-cell; vertical-align: middle; margin: 0; float: none; width: 50%;">
                    <a rel="nofollow" style="border:0" id="st" target="_blank" href="http://bixi.su/">
                    <img src="/wcmfiles/logo-2.png" style="height: 60px;">
                </a></li>
				<li style=" display: table-cell; vertical-align: middle; margin: 0; float: none; width: 50%;">
                    <a rel="nofollow" id="nin" style="border:0" target="_blank" href="http://ooo.standart.ru/">
                    <img src="/wcmfiles/logo-3.png"></a>
                </li>
			</ul>
		    -->
		    <!--
			<div style="width: 100%; height: 1px; border-bottom: 1px solid #F4F4F4; margin: 53px 0 0;"></div>
		-->
		</div>
	</section>
	<div class="footer__tg"><a href="//t.me/azlogru_bot" target="_blank"> <img src="/wcmfiles/tg.svg" alt="" width="50" height="50"></a> </div>
<footer>
		<div class="g-aligner">
			<div class="up-level">
				<div class="footer-info span4">
					<div class="company-info">
						<div class="block_logo">
							<a href="/" class="logo">ЖелдорАльянс</a>
						</div>
						<p>
							ЖелдорАльянс, Россия, Москва,<br>
							<noindex>Балашиха, ш.Энтузиастов вл1А</noindex>
						</p>
						<!--div class="block_tel">
							<span>8 (800) 222-17-17</span><br>
							Круглосуточно<br>
						</div-->
						<div class="block_tel">
							<noindex><span>8 (495) 980-24-44</span></noindex>
						</div>
						<div class="block_tel">
							<noindex><a href="mailto:info@zda24.ru" style="color:#0072ff; font-size: 1.1em;">info@zda24.ru</a></noindex>
						</div>
						<div class="social-wrapper">
{*							<a target="_blank" class="instagram-icon" href="https://www.instagram.com/zhdalians/"></a>*}
{*							<a target="_blank" class="twitter-icon" href="https://twitter.com/web_zhdalians"></a>*}
							<a target="_blank" class="whatsapp-icon" href="https://api.whatsapp.com/send?phone=79855415881"></a>
						</div>
					</div>

					
				</div>

				<div class="span5">
					<h3><a href="/about/">О компании</a></h3>
					<ul>
						<li><a href="/about/job/">Вакансии</a></li>
						<li><a href="/about/cooperation/">К сотрудничеству</a></li>
						<li><a href="/about/news/">Новости</a></li>
						<li><a href="/branches/21/">Контакты</a></li>
						<li><a href="/registry/">Регистрация</a></li>
					</ul>

					<h3 class="services_header"><a href="/call_back/">Сервисы</a></h3>
					<ul class="services_responces">
						<li><a href="/call_back/responces/">Книга отзывов и предложений</a></li>
					</ul>
					<ul class="servicesList">
						<li><a href="/calculator/">Калькулятор перевозки грузов</a></li>
						<li><a href="/branches/">Филиалы и тарифы</a></li>
						<li><a href="/branches/moscow/">Грузоперевозки по Москве и области</a></li>
						<li><a href="/branches/">Грузоперевозки по России</a></li>
						<li><a href="/services/perevozka_negabaritnyh_gruzov/">Перевозка негабаритных грузов</a></li>
						<li><a href="/services/dostavka_sbornykh_gruzov/">Доставка сборных грузов</a></li>
						<li><a href="/questions/">Вопросы и ответы</a>
						<li><a href="/login/">Партнерам</a></li>
						<li><a href="/regions/">Регионы</a></li>
						<li><a href="/sitemap/">Карта сайта</a></li>
					</ul>
				</div>
				<div class="span3">
					<h3><a href="/services/">Услуги</a></h3>
					<ul>
						<li><a href="/services/dostavka_sbornykh_gruzov/">Перевозки сборных грузов по России от 1кг</a></li>
						<li><a href="/services/insurance1/">Страхование груза</a></li>
						<li><a href="/services/receiving/">Получение и отправка груза без участия клиента</a></li>
						<li><a href="/services/for_shop/">Доставка грузов для магазинов</a></li>
						<li><a href="/services/dispatch/">Экспедирование</a></li>
						<li><a href="/services/preparation/">Подготовка груза к транспортировке</a></li>
						<li><a href="/services/documents/">Документы</a></li>
						<li><a href="/services/perevozka_negabaritnyh_gruzov/">Перевозка негабаритных грузов</a></li>
						<li><a href="/services/partners_shops/">Cотрудничество с интернет-магазинами</a></li>
						<li><a href="/services/order_for_china/">Доставка грузов из Китая</a></li>
						<li><a href="/services/shipping/">Контейнерные перевозки</a></li>
						<li><a href="/services/zhd_gruzoperevozki/">Железнодорожные грузоперевозки</a></li>
						<li><a href="/services/ftl/">Full Truck Load – FTL («Полная загрузка»)</a></li>
						<!--<li><a href="/services/securestorage/">Ответственное хранение на складе</a></li>-->
						<li><a href="/services/avtoperevozki_po_rossii/">Автоперевозки по России</a></li>
						<li><a href="/services/lgotnaya-dostavk/">Льготная доставка</a></li>
					</ul>
				</div>

			</div>
			<div class="bottom-level">
				<noindex>
					<div class="conpany-disc">
						Обращаем Ваше внимание на то, что данный интернет-сайт носит исключительно информационный характер не является публичной офертой, определяемой положениями ч.2 ст.437 Гражданского кодекса Российской Федерации. Для получения подробной информации о стоимости и сроках выполнения услуг, пожалуйста, обращайтесь к сотрудникам ЖелдорАльянс.***
					</div>
				</noindex>
			</div>
		</div>
	</footer>

<div class="preloader">
  <div class="preloader__img">
    <img src="/wcmfiles/prel.gif">
  </div>
</div>

{*
<!-- Код тега ремаркетинга Google -->
<!--------------------------------------------------
С помощью тега ремаркетинга запрещается собирать информацию, по которой можно идентифицировать личность пользователя. Также запрещается размещать тег на страницах с контентом деликатного характера. Подробнее об этих требованиях и о настройке тега читайте на странице http://google.com/ads/remarketingsetup.
--------------------------------------------------->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 998059168;
var google_custom_params = window.google_tag_params;
var google_remarketing_only = true;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/998059168/?value=0&amp;guid=ON&amp;script=0"/>
</div>
</noscript>

*}
    <!-- Start Chat code -->
    {* <link rel="stylesheet" href="https://cdn.saas-support.com/widget/cbk.css"> *}
    {* <script type="text/javascript" src="https://cdn.saas-support.com/widget/cbk.js?wcb_code=5099923abd5b50b8c43014901e859b34" charset="UTF-8" async></script> *}
    <!-- End Chat code -->

	<script src="/js/new/jquery-1.11.1.min.js"></script>
	<script>    
	$(".preloader").delay(1000).fadeOut("slow")
	</script>

    {* <script src="/js/new/jquery-ui.js"></script> *}
   {*  <script src="/js/new/jquery.fancybox.js"></script>*}



    <script src="/js/new/owl.carousel.min.js"></script>







   {* <script src="/js/new/html5shiv.min.js"></script> *}
    <script src="/js/new/script.js?v=2"></script>
	{***************************************}
    {*<script src="https://api-maps.yandex.ru/2.1/?apikey=476f37bb-9e8a-40f0-a8db-cb7cebca3c25&lang=ru_RU" type="text/javascript"></script> *}

    {*<script src="/js/less-1.3.0.min.js"></script> *}
    <script src="/js/jquery.validate-min.js"></script>
	<script src="/js/jcarousel.js"></script>

	 {* <script type="text/javascript" src="/js/jquery.lazy.min.js"></script>
  <script type="text/javascript" src="/js/jquery.lazy.youtube.min.js"></script> *}
	<script src="/js/js2.js"></script>


	<!--script src="/js/craftmap/jquery.js"></script-->
	<script src="/js/craftmap/craftmap.min.js"></script>
	{* <script src="/js/craftmap/init.js"></script> *}

	<script type="text/javascript">
	 {include file="common/pieces/markers.tpl"}
	</script>
	{***************************************}

	{literal}
<!-- Yandex.Metrika counter -->
<script type="text/javascript" >

setTimeout(() => {

	  (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();
   for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
   k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(91211384, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   })
	 },
	 5000
)

 
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/91211384" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
{/literal}
<script>
				$(document).ready(function(){
setTimeout(() => {
					$('.demo1').craftmap({
						image: {
							width: 960,
							height: 514
						}
					});
					$('.demo2').craftmap({
						fullscreen: true,
						image: {
							width: 1994,
							height: 1303
						}
					});


					$(".marker").hover(
					  function() {
						$(this).addClass("hover_block");
					  }, function() {
						$(this).removeClass("hover_block");
					  }
					);
					$(".marker").click(function() {
						$(".overlay").css('display','block');
							$(".close").click(function(){
								overlay.hide();
								$(".popup").css('display','none');
							});
					});
					var overlay;
					overlay = $("body .overlay");



					$(".overlay").click(function() {
						$(this).css('display','none');
						$(".popup").css('display','none');
					});
	 },
	 2000
)


				});

			</script>

<script>
	setTimeout(() => {
		var iframe = document.createElement('iframe');
		iframe.src = 'https://www.youtube.com/embed/jhCN3zwGHuU?rel=0';
		iframe.loading = 'lazy';
		document.querySelector('#iframecontainer').appendChild(iframe);
	}, 4000)
</script>

</body>
</html>
