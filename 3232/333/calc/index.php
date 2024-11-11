<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Расчет доставки");

$debugData = [
    'CITY_FROM' => 'Москва',
    'CITY_TO' => 'Санкт-Петербург'
];
?>
<form name="calc" class="calcpage">
	<div class="calcpage__main delivery_auto">
		<div class="form-step" data-entity="form-step-1">
			<div class="calcpage__block calcitem">
				<div class="calcitem__content">
					<div class="calcform" data-stepvisible="anyway">
						<div class="calcform__content">
							<div class="calcform__inputs">
								<div class="calcform__items calcform__items_two calcform__items_tabs">
									<div class="calcform__item">
										<div class="calcitem__button">
											<label class="active" for="delivery_auto">
												<input type="radio" value="" id="delivery_auto" data-overweight='500'
												       data-oversize='4' name="delivery_type" checked=""
												       data-steptype="source" data-stepdata='delivery_auto'>
												<div class='btncalc btncalc_type2'>
													<span class="btncalc__img btncalc__img_left">
														<svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
														     viewBox="0 0 22 22" fill="none">
															<path d="M0 4.58331V6.41665H12.8333V10.0833V11.9166V14.6666H7.53564C7.03233 14.1081 6.31117 13.75 5.5 13.75C4.68883 13.75 3.96767 14.1081 3.46436 14.6666H2.75V13.75L4.58333 11.9166H0.916667V16.5H2.75C2.75 18.0189 3.98108 19.25 5.5 19.25C7.01892 19.25 8.25 18.0189 8.25 16.5H13.75C13.75 18.0189 14.9811 19.25 16.5 19.25C18.0189 19.25 19.25 18.0189 19.25 16.5H20.1667H21.0833V11.9166L18.5858 6.92332C18.4309 6.61257 18.115 6.41665 17.7676 6.41665H14.6667V4.58331H0ZM0.916667 8.24998V10.0833H7.33333V8.24998H0.916667ZM14.6667 8.24998H17.2L18.1167 10.0833H14.6667V8.24998ZM14.6667 11.9166H19.0334L19.25 12.3499V14.6666H18.5356C18.0323 14.1081 17.3112 13.75 16.5 13.75C15.7923 13.75 15.154 14.0252 14.6667 14.4643V11.9166ZM5.5 15.3541C6.13158 15.3541 6.64583 15.8684 6.64583 16.5C6.64583 17.1316 6.13158 17.6458 5.5 17.6458C4.86842 17.6458 4.35417 17.1316 4.35417 16.5C4.35417 15.8684 4.86842 15.3541 5.5 15.3541ZM16.5 15.3541C17.1316 15.3541 17.6458 15.8684 17.6458 16.5C17.6458 17.1316 17.1316 17.6458 16.5 17.6458C15.8684 17.6458 15.3542 17.1316 15.3542 16.5C15.3542 15.8684 15.8684 15.3541 16.5 15.3541Z"
															      fill="#25343F"/>
														</svg>
													</span>
													<span class="btncalc__content">
														<span class="btncalc__text">Авто</span>
														<span class="btncalc__subtext">~3-4 дней</span>
													</span>
												</div>
											</label>
										</div>
									</div>
									<div class="calcform__item">
										<div class="calcitem__button">
											<label class="active" for="delivery_zhd">
												<input type="radio" value="" id="delivery_zhd" data-overweight='1000'
												       data-oversize='3.5' name="delivery_type" data-steptype="source"
												       data-stepdata='delivery_zhd'>
												<div class='btncalc btncalc_type2'>
													<span class="btncalc__img btncalc__img_left">
														<svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
														     viewBox="0 0 22 22" fill="none">
															<path d="M5.49984 2.75V4.58333H3.6665V6.41667H5.49984V8.25H3.6665V10.0833H5.49984V11.9167H3.6665V13.75H5.49984V15.5833H3.6665V17.4167H5.49984V19.25H7.33317V2.75H5.49984ZM14.6665 2.75V4.58333H9.1665V6.41667H14.6665V8.25H9.1665V10.0833H14.6665V11.9167H9.1665V13.75H14.6665V15.5833H9.1665V17.4167H14.6665V19.25H16.4998V17.4167H18.3332V15.5833H16.4998V13.75H18.3332V11.9167H16.4998V10.0833H18.3332V8.25H16.4998V6.41667H18.3332V4.58333H16.4998V2.75H14.6665Z"
															      fill="#25343F"/>
														</svg>
													</span>
													<span class="btncalc__content">
														<span class="btncalc__text">Ж/Д</span>
														<span class="btncalc__subtext">~1-2 дня</span>
													</span>
												</div>
											</label>
										</div>
									</div>
								</div>
							</div>
							<!-- /.calcform__inputs -->
							<div class="calcform__inputs">
								<div class="calcform__items calcform__items_two">
									<div class="calcform__item">
										<div class="calcform__title">Город отправления</div>
										<div class="inputLocation">
											<div class="switcher">
												<a href="#">
													<img src="<?= ASSETS_PATH ?>/img/swap_horiz.svg" alt="">
												</a>
											</div>
											<img src="<?= ASSETS_PATH ?>/img/Tracking.svg">
											<input data-required="required" type="text" autocomplete="off"
											       id="cityInput1" class="cityInput" data-entity="city-autocomplete"
											       placeholder="" name="from_text" value="">
											<input type="hidden" name="from" value="" data-entity="city-kladr-id">
										</div>
										<div class="calcform__fastbtn" data-fast='from_text'>
											<a href="#">Москва</a>
											<a href="#">Санкт-Петербург</a>
											<a href="#">Новосибирск</a>
										</div>
										<!-- /.calcform__fastbtn -->
									</div>
									<div class="calcform__item">
										<div class="calcform__title">Город назначения</div>
										<div class="inputLocation">
											<img src="<?= ASSETS_PATH ?>/img/Tracking.svg">
											<input data-required="required" type="text" autocomplete="off"
											       name="to_text" id="cityInput2" class="cityInput" placeholder=""
											       data-entity="city-autocomplete" value="">
											<input type="hidden" name="to" value="" data-entity="city-kladr-id">
										</div>
										<div class="calcform__fastbtn" data-fast='to_text'>
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
			</div>
			<div class="calcpage__block calcselectblock calcitem " data-calcselect='from'>
				<div class="calcitem__header">
					<div class="calcheader">
						<div class="calcheader__title">
							<span class="calcheader__name">
								Пункт отправки
							</span>
						</div>
					</div>
				</div>
				<div class="calcitem__content" data-stepvisible="anyway">
					<div class="calcselect ">
						<div class="calcselect__wrapper">
							<div class="selectresult">
								<div class="selectresult__icon">
									<img src="<?= ASSETS_PATH ?>/img/selectresult__icon.svg" alt="">
								</div>
								<!-- /.selectresult__icon -->
								<div class="selectresult__content">
									<span class="selectresult__termname" data-ternimalresult=""
									      data-stepdata="f_otpravki" data-steptype="source"></span>
									<span class="selectresult__termid" data-ternimalresult_id=""
									      data-stepdata="f_otpravki_id" data-steptype="source"></span>
								</div>
								<!-- /.selectresult__content -->
							</div>
							<div class="calcselect__select">
								<input type="hidden" name='TERMINAL_FROM' data-input='terminal'>
								<button type='button' class="calcselect__button" data-selectbutton="selectfrom">
									<div class="calcselect__buttonicon">
										<img src="<?= ASSETS_PATH ?>/img/target.svg" alt="">
									</div>
									<!-- /.calcselect__buttonicon -->
									<div class="calcselect__buttontext">Выбрать терминал</div>
								</button>
								<!-- /.calcselect__button -->
								<div class="calcselect__list" data-entity="terminal-from">
									<ul>
										<li class='calcselect__item' data-terminal='someid_1'>
											<span class="calcselect__itemname"
											      data-terminalname='Москва, ул. Соколово-Мещерская, 23'>Москва, ул.
												Соколово-Мещерская, 23</span>
											<span class="calcselect__itemid" data-terminalid='Терминал MSK1411'>Терминал
												MSK1411</span>
										</li>
										<li class='calcselect__item' data-terminal='someid_2'>
											<span class="calcselect__itemname"
											      data-terminalname='Москва, ул. Соколово-Мещерская, 25'>Москва, ул.
												Соколово-Мещерская, 25</span>
											<span class="calcselect__itemid" data-terminalid='Терминал MSK1422'>Терминал
												MSK1422</span>
										</li>
										<li class='calcselect__item' data-terminal='someid_3'>
											<span class="calcselect__itemname"
											      data-terminalname='Москва, ул. Соколово-Мещерская, 29'>Москва, ул.
												Соколово-Мещерская, 29</span>
											<span class="calcselect__itemid" data-terminalid='Терминал MSK1438'>Терминал
												MSK1438</span>
										</li>
									</ul>
								</div>
								<!-- /.calcselect__list -->
							</div>
							<!-- /.calcselect__select -->
							<div class="calcselect__message">
								<div class="warnmessage">
									<div class="warnmessage__icon">
										<img src="<?= ASSETS_PATH ?>/img/warnmessage.svg" alt="">
									</div>
									<div class="warnmessage__text">Вначале выберите город отправления</div>
								</div>
								<!-- /.warnmessage -->
							</div>
							<!-- /.calcselect__message -->
						</div>
						<!-- /.calcselect__wrapper -->
					</div>
					<!-- /.calcselect -->
				</div>
				<!-- /.calcitem__content -->
			</div>
			<!-- /.calcpage__block -->
			<div class="calcpage__block calcitem calcselectblock disabled" data-calcselect='to'>
				<div class="calcitem__header">
					<div class="calcheader">
						<div class="calcheader__title">
							<span class="calcheader__name">
								Пункт доставки
							</span>
						</div>
					</div>
				</div>
				<div class="calcitem__content" data-stepvisible="anyway">
					<div class="calcselect ">
						<div class="calcselect__wrapper">
							<div class="selectresult">
								<div class="selectresult__icon">
									<img src="<?= ASSETS_PATH ?>/img/selectresult__icon.svg" alt="">
								</div>
								<!-- /.selectresult__icon -->
								<div class="selectresult__content">
									<span class="selectresult__termname" data-ternimalresult=""
									      data-stepdata="f_dostavki" data-steptype="source"></span>
									<span class="selectresult__termid" data-ternimalresult_id=""
									      data-stepdata="f_dostavki_id" data-steptype="source"></span>
								</div>
								<!-- /.selectresult__content -->
							</div>
							<div class="calcselect__select">
								<input type="hidden" name='TERMINAL_TO' data-input='terminal'>
								<button type='button' class="calcselect__button">
									<div class="calcselect__buttonicon">
										<img src="<?= ASSETS_PATH ?>/img/target.svg" alt="">
									</div>
									<!-- /.calcselect__buttonicon -->
									<div class="calcselect__buttontext">Выбрать терминал</div>
								</button>
								<!-- /.calcselect__button -->
								<div class="calcselect__list" data-entity="terminal-to">
									<ul>
										<li class='calcselect__item' data-terminal='someid_1'>
											<span class="calcselect__itemname"
											      data-terminalname='Москва, ул. Соколово-Мещерская, 23'>Москва, ул.
												Соколово-Мещерская, 23</span>
											<span class="calcselect__itemid" data-terminalid='Терминал MSK1411'>Терминал
												MSK1411</span>
										</li>
										<li class='calcselect__item' data-terminal='someid_2'>
											<span class="calcselect__itemname"
											      data-terminalname='Москва, ул. Соколово-Мещерская, 25'>Москва, ул.
												Соколово-Мещерская, 25</span>
											<span class="calcselect__itemid" data-terminalid='Терминал MSK1422'>Терминал
												MSK1422</span>
										</li>
										<li class='calcselect__item' data-terminal='someid_3'>
											<span class="calcselect__itemname"
											      data-terminalname='Москва, ул. Соколово-Мещерская, 29'>Москва, ул.
												Соколово-Мещерская, 29</span>
											<span class="calcselect__itemid" data-terminalid='Терминал MSK1438'>Терминал
												MSK1438</span>
										</li>
									</ul>
								</div>
								<!-- /.calcselect__list -->
							</div>
							<!-- /.calcselect__select -->
							<div class="calcselect__message">
								<div class="warnmessage">
									<div class="warnmessage__icon">
										<img src="<?= ASSETS_PATH ?>/img/warnmessage.svg" alt="">
									</div>
									<div class="warnmessage__text">Вначале выберите город назначения</div>
								</div>
								<!-- /.warnmessage -->
							</div>
							<!-- /.calcselect__message -->
						</div>
						<!-- /.calcselect__wrapper -->
					</div>
					<!-- /.calcselect -->
				</div>
				<!-- /.calcitem__content -->
			</div>
			<!-- /.calcpage__block -->
			<div class="calcpage__block calcitem calctabs calcitem_tabs-js">
				<div class="calcitem__header">
					<div class="calcheader">
						<div class="calcheader__title">
							<span class="calcheader__name">
								Информация о грузе
							</span>
						</div>
					</div>
					<div class="calctabs-js">
						<ul>
							<label class="active" for="set_weight"><span class='calctabs__name'>Общие данные</span>
								<input data-radiotab="tab" checked type="radio" value="Y" id="set_weight"
								       name="infogruztab" checked="">
							</label>
							<label class="" for="set_size">
								<span class='calctabs__name'>Указать габариты</span> <input data-radiotab="tab"
								                                                            type="radio" id="set_size"
								                                                            value="N"
								                                                            name="infogruztab">
								<span class="calcheader__help">
									<span class="help-call"></span>
									<span class="help-tooltip">
										<span class="help-tooltip__content">
											<span class="help-tooltip__text for_auto">Груз считается негабаритным если:
												вес одного неделимого грузового места более 500 кг либо сумма измерений
												3х сторон более 4х метров</span>
											<span class="help-tooltip__text for_zhd">Груз считается негабаритным если:
												вес одного неделимого места более 1000 кг, либо сумма измерений 3х
												сторон более 3,5х метров</span>
											<!-- 	<span class="help-tooltip__info">+8 к защите груза</span> -->
										</span>
									</span>
								</span>
							</label>
						</ul>
					</div>
				</div>
				<div class="calcitem__content">
					<div class="calcform calcform-js  active" data-stepvisible="set_weight">
						<div class="calcform__content">
							<div class="calcform__inputs">
								<div class="calcform__items calcform__items_two">
									<div class="calcform__item">
										<div class="calcform__title">Общий вес</div>
										<div class="form-control__wrapper range-slider"
										     data-range-slider-type="weight">
											<input data-stepdata="ob_weight" data-steptype="source"
											       class="form-control range-slider__control" data-max="30000"
											       data-min="1"
											       data-weight-format="" name="weight" placeholder="Вес груза, кг"
											       type="text"
											       inputmode="decimal"
											       value="30">
											<div class="range-slider__ui"></div>
										</div>
									</div>
									<div class="calcform__item">
										<div class="calcform__title">Объем груза</div>
										<div class="form-control__wrapper range-slider"
										     data-range-slider-type="volume">
											<input data-stepdata="ob_vol" data-steptype="source"
											       class="form-control range-slider__control" data-max="30"
											       data-min="0.01"
											       data-volume-format="" name="volume" placeholder="Объём груза, м³"
											       type="text"
											       inputmode="decimal"
											       value="1">
											<div class="range-slider__ui"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="calcform calcform_spot calcform-js" data-stepvisible="set_size">
						<div class="calcform__content ">
							<div class="calcform__inputs">
								<div class="calcform__items calcform__items_two">
									<div class="calcform__item">
										<div class="calcform__title">Общий обьем</div>
										<div class="form-control__wrapper "
										     data-range-slider-type="volume">
											<input disabled data-stepdata="tot_volume" data-steptype="source"
											       class="form-control range-slider__control auto_volume" data-max="30"
											       data-min="0.01"
											       name='boxVolume'
											       data-volume-format="" name="volume" placeholder="Общий обьем, м³"
											       type="text"
											       inputmode="decimal"
											       value="1">
										</div>
									</div>
									<div class="calcform__item">
										<div class="calcform__title">Общий вес</div>
										<div class="form-control__wrapper "
										     data-range-slider-type="weight">
											<input disabled data-stepdata="tot_weight" data-steptype="source"
											       class="form-control range-slider__control auto_weight"
											       data-max="30000"
											       data-min="1"
											       name='boxWeight'
											       data-weight-format="" name="weight" placeholder="Вес груза, кг"
											       type="text"
											       inputmode="decimal"
											       value="30">
										</div>
									</div>
								</div>
							</div>
							<div class="calcform__inputs calcform__inputs_spot" data-inputset='1'>
								<div class="calcform__titlespot js-calcspot">1 место</div>
								<div class="calcform__items calcform__items_four">
									<div class="calcform__item">
										<div class="calcform__title">Длина</div>
										<div class="form-control__wrapper"
										     data-range-slider-type="size">
											<input data-stepdata="ob_len-1" data-stepset="1"
											       data-steptype="source_set"
											       class="calc_length form-control range-slider__control"
											       data-max="1000"
											       data-min="1" data-size-format="" name="boxLength[]"
											       placeholder="Самое длинное" type="text" inputmode="decimal"
											       value="1">
										</div>
									</div>
									<div class="calcform__item">
										<div class="calcform__title">Ширина</div>
										<div class="form-control__wrapper"
										     data-range-slider-type="size">
											<input data-stepdata="ob_shir-1" data-stepset="1"
											       data-steptype="source_set"
											       class="calc_width form-control range-slider__control"
											       data-max="1000"
											       data-min="1"
											       data-size-format="" name="boxWidth[]" placeholder="Самое широкое"
											       type="text" inputmode="decimal" value="1">
										</div>
									</div>
									<div class="calcform__item">
										<div class="calcform__title">Высота</div>
										<div class=" form-control__wrapper"
										     data-range-slider-type="size">
											<input data-stepdata="ob_h-1" data-stepset="1"
											       data-steptype="source_set"
											       class="calc_height form-control range-slider__control"
											       data-max="1000"
											       data-min="1" data-size-format="" name="boxHeight[]"
											       placeholder="Самое высокое" type="text" inputmode="decimal"
											       value="1">
										</div>
									</div>
									<div class="calcform__item calcform__item_xl">
										<div class="calcform__title">Вес места</div>
										<div class="form-control__wrapper range-slider"
										     data-range-slider-type="weight">
											<input data-stepdata="ob_w-1" data-stepset="1"
											       data-steptype="source_set"
											       class="form-control range-slider__control calc_weight"
											       data-max="5000"
											       data-min="1" data-weight-format="" name="boxWeight[]"
											       placeholder="Вес груза, кг" type="text" inputmode="decimal"
											       value="30">
											<div class="range-slider__ui"></div>
										</div>
									</div>
								</div>
								<div class="calcform__warn warn_over">
									<div class="warnmessage warnmessage_type2">
										<div class="warnmessage__icon">
											<img src="<?= ASSETS_PATH ?>/img/warnmessage.svg" alt="">
										</div>
										<div class="warnmessage__text">Данные размеры груза превышают максимально
											допустимые габариты и груз будет оценен как “Негабаритный”
										</div>
									</div>
								</div>
								<!-- /.calcform__warn -->
							</div>
						</div>
						<button type='button' class="calctabs__add">
							<img src="<?= ASSETS_PATH ?>/img/calctabs__add.svg" alt="">
							<span>Добавить место</span>
						</button>
					</div>
					<div class="calcform__switches" data-stepvisible="anyway">
						<ol class="switches">
							<li>
								<span class="switches__name">
									<img src="<?= ASSETS_PATH ?>/img/zabor.svg" alt="">
									<span data-text="checkboxtext">Забор груза</span>
									<span class="calcheader__help">
										<span class="help-call"></span>
										<span class="help-tooltip">
											<span class="help-tooltip__content">
												<span class="help-tooltip__text">Температурный режим доступен только для
													тарифа “Железнодорожные&nbsp;пути”
												</span>
											</span>
										</span>
									</span></span>
								<input type="checkbox" id="switches_1" name="ZABOR" value="" data-stepdata="zabor"
								       data-steptype="source">
								<label for="switches_1">
									<span></span>
								</label>
							</li>
							<li>
								<span class="switches__name">
									<img src="<?= ASSETS_PATH ?>/img/chInTransit.svg" alt="">
									<span data-text="checkboxtext">Доставка груза</span>
									<span class="calcheader__help">
										<span class="help-call"></span>
										<span class="help-tooltip">
											<span class="help-tooltip__content">
												<span class="help-tooltip__text">Температурный режим доступен только для
													тарифа “Железнодорожные&nbsp;пути”
												</span>
											</span>
										</span>
									</span></span>
								<input type="checkbox" id="switches_2" name="DOSTAVKA" value="" data-stepdata="dostavka"
								       data-steptype="source">
								<label for="switches_2">
									<span></span>
								</label>
							</li>
							<li>
								<span class="switches__name">
									<img src="<?= ASSETS_PATH ?>/img/Wooden Box.svg" alt="">
									<span data-text="checkboxtext">Обрешетка</span>
									<span class="calcheader__help">
										<span class="help-call"></span>
										<span class="help-tooltip">
											<span class="help-tooltip__content">
												<span class="help-tooltip__text">Температурный режим доступен только для
													тарифа “Железнодорожные&nbsp;пути”
												</span>
											</span>
										</span>
									</span></span>
								<input type="checkbox" id="switches_3" name="OBRESHETKA" value=""
								       data-stepdata="obreshetka" data-steptype="source">
								<label for="switches_3">
									<span></span>
								</label>
							</li>
							<li>
								<span class="switches__name">
									<img src="<?= ASSETS_PATH ?>/img/Sun.svg" alt="">
									<span data-text="checkboxtext">Температурный режим +2 ... +5</span>
									<span class="calcheader__help">
										<span class="help-call help-call_red"></span>
										<span class="help-tooltip">
											<span class="help-tooltip__content">
												<span class="help-tooltip__text">Температурный режим доступен только для
													тарифа “Железнодорожные&nbsp;пути”
												</span>
											</span>
										</span>
									</span></span>
								<input type="checkbox" id="switches_4" name="TEMPER" value="" data-stepdata="temper"
								       data-steptype="source">
								<label for="switches_4">
									<span></span>
								</label>
							</li>
							<li>
								<span class="switches__name">
									<img src="<?= ASSETS_PATH ?>/img/SecurityEnergy_1.svg" alt="">
									<span data-text="checkboxtext">Утепление в 1 слой</span>
									<span class="calcheader__help">
										<span class="help-call "></span>
										<span class="help-tooltip">
											<span class="help-tooltip__content">
												<span class="help-tooltip__text">Температурный режим доступен только для
													тарифа “Железнодорожные&nbsp;пути”
												</span>
											</span>
										</span>
									</span></span>
								<input type="checkbox" id="switches_5" name="TEPLO_1" value="" data-stepdata="teplo_1"
								       data-steptype="source">
								<label for="switches_5">
									<span></span>
								</label>
							</li>
							<li>
								<span class="switches__name">
									<img src="<?= ASSETS_PATH ?>/img/SecurityEnergy_1.svg" alt="">
									<span data-text="checkboxtext">Утепление в 2 слоя</span>
									<span class="calcheader__help">
										<span class="help-call "></span>
										<span class="help-tooltip">
											<span class="help-tooltip__content">
												<span class="help-tooltip__text">Температурный режим доступен только для
													тарифа “Железнодорожные&nbsp;пути”
												</span>
											</span>
										</span>
									</span></span>
								<input type="checkbox" id="switches_6" name="TEPLO_2" value="" data-stepdata="teplo_2"
								       data-steptype="source">
								<label for="switches_6">
									<span></span>
								</label>
							</li>
							<li>
								<span class="switches__name">
									<img src="<?= ASSETS_PATH ?>/img/SecurityEnergy_3.svg" alt="">
									<span data-text="checkboxtext">Утепление в 3 слоя</span>
									<span class="calcheader__help">
										<span class="help-call "></span>
										<span class="help-tooltip">
											<span class="help-tooltip__content">
												<span class="help-tooltip__text">Температурный режим доступен только для
													тарифа “Железнодорожные&nbsp;пути”
												</span>
											</span>
										</span>
									</span></span>
								<input type="checkbox" id="switches_7" name="TEPLO_3" value="" data-stepdata="teplo_3"
								       data-steptype="source">
								<label for="switches_7">
									<span></span>
								</label>
							</li>
						</ol>
					</div>
					<!-- /.calcform__switches -->
				</div>
			</div>
		</div>
		<div class="form-step" data-entity="form-step-2" style="display:none;">
			<div class="calcback">
				<a href="#" data-stepback='form-step-1' data-entity="step-prev">
					<img src="<?= ASSETS_PATH ?>/img/calcback.svg" alt="">
					<span>Вернуться назад</span>
				</a>
			</div>
			<!-- /.calcback -->
			<div class="calcpage__block calcitem calctabs calcitem_tabs-js">
				<div class="calcitem__header">
					<div class="calcheader">
						<div class="calcheader__title">
							<span class="calcheader__name">
								Отправитель
							</span>
						</div>
					</div>
					<div class="calctabs-js">
						<ul>
							<label class="active" for="send_fiz"><span class='calctabs__name'>Физ. лицо</span>
								<input
										data-radiotab="tab"
										checked=""
										type="radio"
										value="Y"
										id="send_fiz"
										data-steptype="source"
										data-stepdata="send_fiz"
										name="sendfizyur">
							</label>
							<label class="" for="send_yur"><span class='calctabs__name'>Юр. лицо</span>
								<input
										data-radiotab="tab"
										type="radio"
										data-isrequired="delivery-address"
										value="N"
										id="send_yur"
										data-steptype="source"
										data-stepdata="send_yur"
										name="sendfizyur"></label>
						</ul>
					</div>
					<div class="calcform__warn  calcform__warn_aside">
						<div class="warnmessage warnmessage_type2">
							<div class="warnmessage__icon">
								<img src="<?= ASSETS_PATH ?>/img/warnmessage.svg" alt="">
							</div>
							<div class="warnmessage__text">Обязательно нужна <a href="#">ДОВЕРЕННОСТЬ</a> на&nbsp;отправку
								груза
							</div>
						</div>
					</div>
				</div>
				<div class="calcitem__content">
					<div class="calcform calcform-js active" data-stepvisible="send_fiz">
						<div class="calcform__content">
							<div class="calcform__inputs">
								<div class="calcform__items calcform__items_full">
									<div class="calcform__item">
										<div class="calcform__title">ФИО</div>
										<input type="text" placeholder="" name="F_FIO" data-stepdata="send_fio"
										       data-steptype="source" data-required="required" data-min="2"
										       data-max="300" value='Константинопольский Константин Константинович'>
									</div>
								</div>
								<div class="calcform__items calcform__items_two">
									<div class="calcform__item">
										<div class="calcform__title">Документ</div>
										<select name="F_DOCTYPE" id="" data-stepdata="send_doc" data-steptype="source"
										        value="Паспорт РФ" disabled>
											<option value="Паспорт РФ" selected>Паспорт РФ</option>
											<!-- <option value="Водительское удостоверение" data-select="doc">
                                              Водительское удостоверение
                                            </option>
                                            <option value="Иностранный паспорт" data-select="doc">Иностранный
                                              паспорт
                                            </option>
                                            <option value="Удостоверение личности офицера" data-select="doc">
                                              Удостоверение личности офицера
                                            </option>
                                            <option value="Паспорт моряка" data-select="doc">Паспорт моряка</option>
                                            <option value="Загран. паспорт" data-select="doc">Загран. паспорт
                                            </option>
                                            <option value="Военный билет" data-select="doc">Военный билет</option> -->
										</select>
										<!-- /# -->
									</div>
									<div class="calcform__item">
										<div class="calcform__title">Серия и номер документа</div>
										<div class="calcform__multipleInput" data-select="input_doc">
											<div class="inputDoc calcform__multipleInput" data-select="passport">
												<input type="text" name="F_PASS_1" placeholder="" class="inputPassport1"
												       data-steptype="source" data-stepdata="send_pasp1"
												       data-required="required" data-min="4" data-max="4"
												       data-mask="passport_1">
												<input type="text" name="F_PASS_2" placeholder="" class="inputPassport2"
												       data-steptype="source" data-stepdata="send_pasp2"
												       data-required="required" data-min="6" data-max="6"
												       data-mask="passport_2">
											</div>
											<div class="inputDoc " data-select="doc"
											     style="display: none; width: 100%;">
												<input type="text" name="F_DOC" placeholder="" class="inputDocument"
												       style="width: 100%;" data-steptype="source"
												       data-stepdata="send_anotherdoc" data-required="required"
												       data-min="3" data-max="30">
											</div>
										</div>
										<!-- /.calcform__multipleInput -->
									</div>
								</div>
								<div class="calcform__items calcform__items_two">
									<div class="calcform__item calcform__item_phones">
										<div class="calcform__title">Телефон</div>
										<input type="tel" name="F_PHONE" data-stepdata="send_tel" data-steptype="source"
										       data-required="required" data-min="18" data-max="18">
									</div>
									<div class="calcform__item">
										<div class="calcform__title">E-mail
										</div>
										<div class="calcform__multipleInput">
											<input type="text" name="F_EMAIL" data-stepdata="send_email"
											       data-steptype="source">
										</div>
										<!-- /.calcform__multipleInput -->
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="calcform calcform-js " data-stepvisible="send_yur">
						<div class="calcform__content">
							<div class="calcform__inputs">
								<div class="calcform__items calcform__items_two">
									<div class="calcform__item calcform__item_small">
										<div class="calcform__title">Правовая форма</div>
										<select name="U_FORM" id="" data-stepdata="send_yurform" data-steptype="source">
											<option value="ООО" selected="">ООО</option>
											<option value="ОАО">ОАО</option>
											<option value="ЗАО">ЗАО</option>
											<option value="ИП">ИП</option>
										</select>
										<!-- /# -->
									</div>
									<div class="calcform__item ">
										<div class="calcform__title">Название компании</div>
										<input type="text" name="U_COMPANY" placeholder="" data-stepdata="send_yurname"
										       data-steptype="source" data-required="required" data-min="2"
										       data-max="300">
									</div>
								</div>
								<div class="calcform__items calcform__items_two">
									<div class="calcform__item">
										<div class="calcform__title">ИНН</div>
										<input type="text" name="U_INN" placeholder="" data-stepdata="send_inn"
										       data-steptype="source" data-required="required" data-min="10"
										       data-max="10" data-mask='inn'>
										<!-- /.calcform__addTel -->
									</div>
									<div class="calcform__item">
										<div class="calcform__title">
											КПП
											<!-- /.notreq -->
										</div>
										<div class="calcform__multipleInput">
											<input type="text" name="U_KPP" placeholder="" data-stepdata="send_kpp"
											       data-steptype="source" data-min="1" data-max="9" data-mask="kpp">
										</div>
										<!-- /.calcform__multipleInput -->
									</div>
								</div>
								<div class="calcform__items calcform__items_full">
									<div class="calcform__item ">
										<div class="calcform__title">Контактное лицо</div>
										<input type="text" name="U_FIO" placeholder="" data-stepdata="send_yurfio"
										       data-steptype="source" data-min="3" data-max="300">
										<!-- /.calcform__addTel -->
									</div>
								</div>
								<div class="calcform__items calcform__items_two">
									<div class="calcform__item">
										<div class="calcform__title">
											Телефон
											<!-- /.notreq -->
										</div>
										<div class="calcform__multipleInput">
											<input type="tel" name="U_PHONE" placeholder="" data-stepdata="send_yurtel"
											       data-steptype="source" data-required="required" data-min="18"
											       data-max="18">
										</div>
										<!-- /.calcform__multipleInput -->
									</div>
									<div class="calcform__item">
										<div class="calcform__title">Email</div>
										<input type="email" name="U_EMAIL" placeholder="" data-stepdata="send_yuremail"
										       data-steptype="source" data-min="3" data-max="300">
										<!-- /.calcform__addTel -->
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="calcform__switches" data-stepvisible="anyway">
						<ol class="switches">
							<li>
								<span class="switches__name">
									<img src="<?= ASSETS_PATH ?>/img/zabor.svg" alt="">
									<span data-text="checkboxtext">Забор груза</span>
									<span class="calcheader__help">
										<span class="help-call"></span>
										<span class="help-tooltip">
											<span class="help-tooltip__content">
												<span class="help-tooltip__text">Температурный режим доступен только для
													тарифа “Железнодорожные&nbsp;пути”
												</span>
											</span>
										</span>
									</span></span>
								<input type="checkbox" id="switches_2_1" name="ZABOR_SEND" value=""
								       data-stepdata="zabor_send" data-steptype="source" data-depend="ZABOR_SEND">
								<label for="switches_2_1">
									<span></span>
								</label>
							</li>
						</ol>
					</div>
					<div class="calcform__items calcform__items_full" data-dependfrom='ZABOR_SEND'
					     data-stepvisible="anyway">
						<div class="calcform__item ">
							<div class="calcform__title">Откуда забрать груз?</div>
							<input type="text" name="FROM_PLACE" data-stepdata="send_tel" data-steptype="source">
						</div>
					</div>
				</div>
			</div>
			<div class="calcpage__block calcitem calctabs calcitem_tabs-js">
				<div class="calcitem__header">
					<div class="calcheader">
						<div class="calcheader__title">
							<span class="calcheader__name">
								Получатель
							</span>
						</div>
					</div>
					<div class="calctabs-js">
						<ul>
							<label class="active" for="receive_fiz"><span class='calctabs__name'>Физ. лицо</span>
								<input data-radiotab="tab" type="radio" checked="" value="Y" id="receive_fiz"
								       name="receivefizyur">
							</label>
							<label class="" for="receive_yur"><span class='calctabs__name'>Юр. лицо</span><input
										data-radiotab="tab" type="radio" data-isrequired="delivery-address" value="N"
										id="receive_yur" name="receivefizyur"></label>
						</ul>
					</div>
					<div class="calcform__warn  calcform__warn_aside">
						<div class="warnmessage warnmessage_type2">
							<div class="warnmessage__icon">
								<img src="<?= ASSETS_PATH ?>/img/warnmessage.svg" alt="">
							</div>
							<div class="warnmessage__text">Обязательно нужна <a href="#">ДОВЕРЕННОСТЬ</a> на&nbsp;получение
								груза
							</div>
						</div>
					</div>
				</div>
				<div class="calcitem__content">
					<div class="calcform calcform-js active" data-stepvisible="receive_fiz">
						<div class="calcform__content">
							<div class="calcform__inputs">
								<div class="calcform__items calcform__items_full">
									<div class="calcform__item">
										<div class="calcform__title">ФИО</div>
										<input type="text" placeholder="" name="R_F_FIO" data-stepdata="receive_fio"
										       data-steptype="source" data-required="required" data-min="2"
										       data-max="300" value='Константинопольский Константин Константинович'>
									</div>
								</div>
								<div class="calcform__items calcform__items_two">
									<div class="calcform__item">
										<div class="calcform__title">Документ</div>
										<select name="R_F_DOCTYPE" id="" data-stepdata="receive_doc"
										        data-steptype="source" value="Паспорт РФ" disabled>
											<option value="Паспорт РФ" selected="">Паспорт РФ</option>
											<!-- <option value="Водительское удостоверение" data-select="doc">
                                              Водительское удостоверение
                                            </option>
                                            <option value="Иностранный паспорт" data-select="doc">Иностранный
                                              паспорт
                                            </option>
                                            <option value="Удостоверение личности офицера" data-select="doc">
                                              Удостоверение личности офицера
                                            </option>
                                            <option value="Паспорт моряка" data-select="doc">Паспорт моряка</option>
                                            <option value="Загран. паспорт" data-select="doc">Загран. паспорт
                                            </option>
                                            <option value="Военный билет" data-select="doc">Военный билет</option> -->
										</select>
										<!-- /# -->
									</div>
									<div class="calcform__item">
										<div class="calcform__title">Серия и номер документа</div>
										<div class="calcform__multipleInput" data-select="input_doc">
											<div class="inputDoc calcform__multipleInput" data-select="passport">
												<input type="text" name="R_F_PASS_1" placeholder=""
												       class="inputPassport1" data-steptype="source"
												       data-stepdata="receive_pasp1" data-required="required"
												       data-min="4" data-max="4" data-mask="passport_1">
												<input type="text" name="R_F_PASS_2" placeholder=""
												       class="inputPassport2" data-steptype="source"
												       data-stepdata="receive_pasp2" data-required="required"
												       data-min="6" data-max="6" data-mask="passport_2">
											</div>
											<div class="inputDoc " data-select="doc"
											     style="display: none; width: 100%;">
												<input type="text" name="R_F_DOC" placeholder="" class="inputDocument"
												       style="width: 100%;" data-steptype="source"
												       data-stepdata="receive_anotherdoc" data-required="required"
												       data-min="3" data-max="30">
											</div>
										</div>
										<!-- /.calcform__multipleInput -->
									</div>
								</div>
								<div class="calcform__items calcform__items_two">
									<div class="calcform__item calcform__item_phones">
										<div class="calcform__title">Телефон</div>
										<input type="tel" name="R_F_PHONE" data-stepdata="receive_tel"
										       data-steptype="source" data-required="required" data-min="18"
										       data-max="18">
									</div>
									<div class="calcform__item">
										<div class="calcform__title">E-mail
										</div>
										<div class="calcform__multipleInput">
											<input type="text" name="R_F_EMAIL" data-stepdata="receive_email"
											       data-steptype="source">
										</div>
										<!-- /.calcform__multipleInput -->
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="calcform calcform-js " data-stepvisible="receive_yur">
						<div class="calcform__content">
							<div class="calcform__inputs">
								<div class="calcform__items calcform__items_two">
									<div class="calcform__item calcform__item_small">
										<div class="calcform__title">Правовая форма</div>
										<select name="R_U_FORM" id="" data-stepdata="receive_yurform"
										        data-steptype="source">
											<option value="ООО" selected="">ООО</option>
											<option value="ОАО">ОАО</option>
											<option value="ЗАО">ЗАО</option>
											<option value="ИП">ИП</option>
										</select>
										<!-- /# -->
									</div>
									<div class="calcform__item ">
										<div class="calcform__title">Название компании</div>
										<input type="text" name="R_U_COMPANY" placeholder=""
										       data-stepdata="receive_yurname" data-steptype="source"
										       data-required="required" data-min="2" data-max="300">
									</div>
								</div>
								<div class="calcform__items calcform__items_two">
									<div class="calcform__item">
										<div class="calcform__title">ИНН</div>
										<input type="text" name="R_U_INN" placeholder="" data-stepdata="receive_yurinn"
										       data-steptype="source" data-required="required" data-min="13"
										       data-max="13" data-mask="inn">
										<!-- /.calcform__addTel -->
									</div>
									<div class="calcform__item">
										<div class="calcform__title">
											КПП
											<!-- /.notreq -->
										</div>
										<div class="calcform__multipleInput">
											<input type="text" name="R_U_KPP" placeholder=""
											       data-stepdata="receive_yurkpp" data-steptype="source" data-min="1"
											       data-max="9" data-mask="kpp">
										</div>
										<!-- /.calcform__multipleInput -->
									</div>
								</div>
								<div class="calcform__items calcform__items_full">
									<div class="calcform__item ">
										<div class="calcform__title">Контактное лицо</div>
										<input type="text" name="R_U_FIO" placeholder="" data-stepdata="receive_yurfio"
										       data-steptype="source" data-min="3" data-max="300">
										<!-- /.calcform__addTel -->
									</div>
								</div>
								<div class="calcform__items calcform__items_two">
									<div class="calcform__item">
										<div class="calcform__title">
											Телефон
											<!-- /.notreq -->
										</div>
										<div class="calcform__multipleInput">
											<input type="tel" name="R_U_PHONE" placeholder=""
											       data-stepdata="receive_yurtel" data-steptype="source"
											       data-required="required" data-min="18" data-max="18">
										</div>
										<!-- /.calcform__multipleInput -->
									</div>
									<div class="calcform__item">
										<div class="calcform__title">Email</div>
										<input type="email" name="R_U_EMAIL" placeholder=""
										       data-stepdata="receive_yuremail" data-steptype="source" data-min="3"
										       data-max="300">
										<!-- /.calcform__addTel -->
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="calcform__switches" data-stepvisible="anyway">
						<ol class="switches">
							<li>
								<span class="switches__name">
									<img src="<?= ASSETS_PATH ?>/img/zabor.svg" alt="">
									<span data-text="checkboxtext">Доставка груза</span>
									<span class="calcheader__help">
										<span class="help-call"></span>
										<span class="help-tooltip">
											<span class="help-tooltip__content">
												<span class="help-tooltip__text">Температурный режим доступен только для
													тарифа “Железнодорожные&nbsp;пути”
												</span>
											</span>
										</span>
									</span></span>
								<input type="checkbox" id="switches_3_1" name="DELIVERY_receive" value=""
								       data-stepdata="delivery_receive" data-steptype="source"
								       data-depend="DELIVERY_receive">
								<label for="switches_3_1">
									<span></span>
								</label>
							</li>
						</ol>
					</div>
					<div class="calcform__items calcform__items_full" data-dependfrom='DELIVERY_receive'
					     data-stepvisible="anyway">
						<div class="calcform__item ">
							<div class="calcform__title">Куда доставить груз?</div>
							<input type="text" name="receive_PLACE" data-stepdata="receive_place"
							       data-steptype="source">
						</div>
					</div>
				</div>
			</div>
			<div class="calcpage__block  calcitem  " data-stepvisible="anyway">
				<div class="calcitem__header">
					<div class="calcheader">
						<div class="calcheader__title">
							<span class="calcheader__name">
								Платеж
							</span>
						</div>
					</div>
				</div>
				<div class="calcitem__content">
					<div class="calcselect customselect calcform">
						<div class="customselect__wrapper">
							<div class="customselect__select">
								<input type="hidden" name="PAYER" data-input="customselect" value="Получатель"
								       data-steptype="source" data-stepdata="payeer">
								<button type="button" class="customselect__button " data-selectbutton="payr">
									<div class="customselect__buttonicon">
										<img src="<?= ASSETS_PATH ?>/img/credit_score_FILL0_wght400_GRAD0_opsz24.svg"
										     alt="">
									</div>
									<div class="customselect__buttontext">
										<div class="customselect__button_title">Посылку оплатит</div>
										<div class="customselect__button_subtitle" data-customselect='Получатель'>
											Получатель
										</div>
									</div>
								</button>
								<!-- /.calcselect__button -->
								<div class="calcselect__list ">
									<ul>
										<li class="calcselect__item" data-value="receiver">
											Получатель
										</li>
										<li class="calcselect__item" data-value="sender">
											Отправитель
										</li>
										<li class="calcselect__item" data-value="thirdperson">
											Третье лицо
										</li>
									</ul>
								</div>
								<!-- /.calcselect__list -->
							</div>
							<!-- /.calcselect__select -->
						</div>
						<!-- /.calcselect__wrapper -->
						<div class="calcform__content" data-calchidden="thirdperson">
							<div class="calcform__inputs">
								<div class="calcform__items calcform__items_two">
									<div class="calcform__item calcform__item_small">
										<div class="calcform__title">Правовая форма</div>
										<select name="R_U_FORM_THIRD" id="" data-stepdata="receive_otherform"
										        data-steptype="source">
											<option value="ООО" selected="">ООО</option>
											<option value="ОАО">ОАО</option>
											<option value="ЗАО">ЗАО</option>
											<option value="ИП">ИП</option>
										</select>
										<!-- /# -->
									</div>
									<div class="calcform__item ">
										<div class="calcform__title">Название компании</div>
										<input type="text" name="R_U_COMPANY_THIRD" placeholder=""
										       data-stepdata="receive_othername" data-steptype="source"
										       data-required="required" data-min="2" data-max="300">
									</div>
								</div>
								<div class="calcform__items calcform__items_two">
									<div class="calcform__item">
										<div class="calcform__title">ИНН</div>
										<input type="text" name="R_U_INN_THIRD" placeholder=""
										       data-stepdata="receive_otherinn" data-steptype="source"
										       data-required="required" data-min="10" data-max="10" data-mask="inn">
										<!-- /.calcform__addTel -->
									</div>
									<div class="calcform__item">
										<div class="calcform__title">
											КПП
											<!-- /.notreq -->
										</div>
										<div class="calcform__multipleInput">
											<input type="text" name="R_U_KPP_THIRD" placeholder=""
											       data-stepdata="receive_otherkpp" data-steptype="source" data-min="1"
											       data-max="9" data-mask="kpp">
										</div>
										<!-- /.calcform__multipleInput -->
									</div>
								</div>
								<div class="calcform__items calcform__items_full">
									<div class="calcform__item ">
										<div class="calcform__title">Контактное лицо</div>
										<input type="text" name="R_U_FIO_THIRD" placeholder=""
										       data-stepdata="receive_otherfio" data-steptype="source" data-min="3"
										       data-max="300">
										<!-- /.calcform__addTel -->
									</div>
								</div>
								<div class="calcform__items calcform__items_two">
									<div class="calcform__item">
										<div class="calcform__title">
											Телефон
											<!-- /.notreq -->
										</div>
										<div class="calcform__multipleInput">
											<input type="tel" name="R_U_PHONE_THIRD" placeholder=""
											       data-stepdata="receive_othertel" data-steptype="source"
											       data-required="required" data-min="18" data-max="18">
										</div>
										<!-- /.calcform__multipleInput -->
									</div>
									<div class="calcform__item">
										<div class="calcform__title">Email</div>
										<input type="email" name="R_U_EMAIL_THIRD" placeholder=""
										       data-stepdata="receive_otheremail" data-steptype="source" data-min="3"
										       data-max="300">
										<!-- /.calcform__addTel -->
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /.calcitem__content -->
			</div>
		</div>
		<div class="form-step" data-entity="form-step-3" style="display:none;">
			<div class="calcback">
				<a href="#" data-stepback='form-step-2' data-entity="step-prev">
					<img src="<?= ASSETS_PATH ?>/img/calcback.svg" alt="">
					<span>Вернуться назад</span>
				</a>
			</div>
			<!-- /.calcback -->
			<div class="calcpage__block calcitem calcitem_total">
				<div class="calcitem__header">
					<div class="calcheader">
						<div class="calcheader__title">
							<span class="calcheader__name">Расчет и оформление доставки</span>
						</div>
					</div>
				</div>
				<div class="calcitem__content">
					<div class="calcform">
						<div class="calcform__content">
							<div class="calcform__fromto fromto">
								<div class="fromto__cols">
									<div class="fromto__col">
										<div class="fromto__item fromto__item_from">
											<div class="selectresult">
												<div class="selectresult__icon">
													<img src="<?= ASSETS_PATH ?>/img/selectresult__icon.svg" alt="">
												</div>
												<!-- /.selectresult__icon -->
												<div class="selectresult__content">
													<div class="selectresult__termname" data-stepdata="f_otpravki"
													     data-steptype="result"></div>
													<div class="selectresult__termid" data-stepdata="f_otpravki_id"
													     data-steptype="result"></div>
												</div>
											</div>
										</div>
									</div>
									<!-- /.fromto__col -->
									<div class="fromto__col">
										<div class="fromto__item fromto__item_to">
											<div class="selectresult">
												<div class="selectresult__icon">
													<img src="<?= ASSETS_PATH ?>/img/selectresult__icon.svg" alt="">
												</div>
												<!-- /.selectresult__icon -->
												<div class="selectresult__content">
													<div class="selectresult__termname" data-stepdata="f_dostavki"
													     data-steptype="result"></div>
													<div class="selectresult__termid" data-stepdata="f_dostavki_id"
													     data-steptype="result"></div>
												</div>
											</div>
										</div>
										<!-- /.fromto__from -->
									</div>
								</div>
								<!-- /.calcitem__totals -->
								<!-- /.fromto__cols -->
							</div>
							<!-- /.calcform__fromto -->
							<div class="calctotal">
								<div class="calctotal__title">Тариф отправки</div>
								<div class="calctotal__value">
									<ul>
										<li data-type>
											<span data-if='delivery_auto' class='calctotal__valueflex'>
												<img src="<?= ASSETS_PATH ?>/img/InTransit.svg" alt="">
												<span>Авто</span>
											</span>
											<span data-if='delivery_zhd' class='calctotal__valueflex'>
												<img src="<?= ASSETS_PATH ?>/img/Tracks.svg" alt="">
												<span>Ж/Д</span>
											</span>
										</li>

									</ul>
								</div>
							</div>
							<!-- /.calctotal -->
						</div>
					</div>
				</div>
			</div>
			<div class="calcpage__block calcitem calcitem_total">
				<div class="calcitem__content calcitem__totals_multiple">

					<!-- <div class="calctotal" data-if='set_size'>
                      <div class="calctotal__title">Габариты груза</div>
                      <div class="calctotal__value">
                        <span data-steptype="result" data-stepdata="tot_volume"></span> x
                        <span data-steptype="result" data-stepdata="ob_shir"></span> x
                        <span data-steptype="result" data-stepdata="ob_h"></span> м
                      </div>
                    </div> -->
					<div class="calctotal" data-if='tot_weight'>
						<div class="calctotal__title">Вес груза</div>
						<div class="calctotal__value"><span data-steptype="result" data-stepdata="tot_weight"></span> кг
						</div>
					</div>
					<!-- /.calctotal -->

					<div class="calctotal" data-if='tot_volume'>
						<div class="calctotal__title">Обьем груза</div>
						<div class="calctotal__value"><span data-steptype="result" data-stepdata="tot_volume"></span>
							м<sup>2</sup></div>
					</div>
					<!-- /.calctotal -->
					<div class="calctotal" data-if='ob_weight'>
						<div class="calctotal__title">Вес груза</div>
						<div class="calctotal__value"><span data-steptype="result" data-stepdata="ob_weight"></span> кг
						</div>
					</div>
					<!-- /.calctotal -->

					<div class="calctotal" data-if='ob_vol'>
						<div class="calctotal__title">Обьем груза</div>
						<div class="calctotal__value"><span data-steptype="result" data-stepdata="ob_vol"></span> м<sup>2</sup>
						</div>
					</div>
					<!-- /.calctotal -->
				</div>
			</div>
			<!-- .calcitem__totals -->

			<div class="calcpage__block calcitem calcitem_total">
				<div class="calcitem__content calcitem__totals calcitem__totals_multiple calcitem__totals_large">
					<div class="calctotal">
						<div class="calctotal__title">Дополнительные услуги</div>
						<div class="calctotal__value">
							<ul>
								<li class='checkicon'><span data-steptype="result" data-if="zabor">Забор груза</span>
								</li>
								<li class='checkicon'><span data-steptype="result" data-if="dostavka">Доставка груза
									</span></li>
								<li class='checkicon'><span data-steptype="result" data-if="obreshetka">Обрешетка</span>
								</li>
								<li class='checkicon'><span data-steptype="result" data-if="dop_ftemperull">Температурный
										режим +2 ... +5</span></li>
								<li class='checkicon'><span data-steptype="result" data-if="teplo_1">Утепление в 1
										слой</span></li>
								<li class='checkicon'><span data-steptype="result" data-if="teplo_2">Утепление в 2
										слоя</span></li>
								<li class='checkicon'><span data-steptype="result" data-if="teplo_3">Утепление в 3
										слоя</span></li>
								<!--   <li data-if="dop_floor">Этаж: <span data-steptype="result" data-stepdata="dop_floor"></span>
                                    <span data-steptype="result" data-stepdata="dop_lift"></span>
                                  </li>
                                  -->
							</ul>
						</div>
					</div>
					<!-- /.calctotal -->
				</div>
			</div>
			<!-- .calcitem__totals -->

			<div class="calcpage__block calcitem calcitem_total">
				<div class="calcitem__content calcitem__totals calcitem__totals_multiple calcitem__totals_large">
					<div class="calctotal">
						<div class="calctotal__title">Отправитель</div>
						<div class="calctotal__value">

							<div data-if="send_fio" data-stepdata="send_fiz" data-totaltype="fizyur">
								<ul>

									<li>
										<span data-steptype="result" data-stepdata="send_fio">Константинопольский
											Константин Константинович</span>
										<span class='light' data-stepdata="send_fiz" data-totaltype="fizyur">Физ.
											лицо</span>

									</li>

									<li data-if="send_pasp1">
										<span data-steptype="result" data-stepdata="send_doc"></span>:&nbsp;
										<span data-steptype="result" data-stepdata="send_pasp1"></span>&nbsp;
										<span data-steptype="result" data-stepdata="send_pasp2"></span>
									</li>
									<li data-if="send_anotherdoc">
										<span data-steptype="result" data-stepdata="send_doc"></span>:&nbsp;
										<span data-steptype="result" data-stepdata="send_anotherdoc"></span>&nbsp;
									</li>
									<li>
										Телефон: <span data-steptype="result" data-stepdata="send_tel"></span>
									</li>

									<li data-if="send_email">
										Email: <span data-steptype="result" data-stepdata="send_email"></span>
									</li>
								</ul>
							</div>
							<div data-if="send_yurname" data-stepdata="send_yur" data-totaltype="fizyur">
								<ul>
									<li>
										<span data-steptype="result" data-stepdata="send_yurform"></span>&nbsp;<span
												data-steptype="result" data-stepdata="send_yurname"></span>
										<span class='light'>Юр. лицо</span>

									</li>
									<li data-if="send_inn">
										ИНН: <span data-steptype="result" data-stepdata="send_inn"></span>
									</li>
									<li data-if="send_kpp">
										КПП: <span data-steptype="result" data-stepdata="send_kpp"></span>
									</li>
									<li data-if="send_yurfio">
										Контакное лицо: <span data-steptype="result" data-stepdata="send_yurfio"></span>
									</li>
									<li data-if="send_yurtel">
										Телефон: <span data-steptype="result" data-stepdata="send_yurtel"></span>
									</li>
									<li data-if="send_yuremail">
										Email: <span data-steptype="result" data-stepdata="send_yuremail"></span>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /.calctotal -->
				</div>
			</div>
			<!-- .calcitem__totals -->
			<div class="calcpage__block calcitem calcitem_total">
				<div class="calcitem__content calcitem__totals calcitem__totals_multiple calcitem__totals_large">
					<div class="calctotal">
						<div class="calctotal__title">Получатель</div>
						<div class="calctotal__value">
							<div data-if="receive_fio" data-stepdata="receive_fiz" data-totaltype="fizyur">
								<ul>

									<li>
										<span data-steptype="result" data-stepdata="receive_fio">Константинопольский
											Константин Константинович
										</span>
										<span class='light' data-stepdata="send_fiz" data-totaltype="fizyur">Физ.
											лицо</span>

									</li>
									<li data-if="receive_pasp1">
										<span data-steptype="result" data-stepdata="receive_doc"></span>:&nbsp;
										<span data-steptype="result" data-stepdata="receive_pasp1"></span>&nbsp;
										<span data-steptype="result" data-stepdata="receive_pasp2"></span>
									</li>
									<li data-if="receive_anotherdoc">
										<span data-steptype="result" data-stepdata="receive_doc"></span>:&nbsp;
										<span data-steptype="result" data-stepdata="receive_anotherdoc"></span>&nbsp;
									</li>
									<li>
										Телефон: <span data-steptype="result" data-stepdata="receive_yurtel"></span>
									</li>
									<li data-if="receive_tel2">
										<span data-steptype="result" data-stepdata="receive_tel2"></span>
									</li>
									<li data-if="receive_yuremail">
										Email: <span data-steptype="result" data-stepdata="receive_email"></span>
									</li>
								</ul>
							</div>
							<div data-if="receive_yurname" data-stepdata="receive_yur" data-totaltype="fizyur">
								<ul>

									<li>
										<span data-steptype="result" data-stepdata="receive_yurform"></span>&nbsp;<span
												data-steptype="result" data-stepdata="receive_yurname"></span>
										<span class='light'>Юр. лицо</span>

									</li>
									<li>
										ИНН: <span data-steptype="result" data-stepdata="receive_yurinn"></span>
									</li>
									<li>
										КПП: <span data-steptype="result" data-stepdata="receive_yurkpp"></span>
									</li>
									<li>
										Контакное лицо: <span data-steptype="result"
										                      data-stepdata="receive_yurfio"></span>
									</li>
									<li data-if="receive_yurtel">
										Телефон: <span data-steptype="result" data-stepdata="receive_yurtel"></span>
									</li>
									<li data-if="receive_yuremail">
										Email: <span data-steptype="result" data-stepdata="receive_yuremail"></span>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<!-- /.calctotal -->
			</div>
			<!-- .calcitem__totals -->
			<div class="calcpage__block calcitem calcitem_total">
				<div class="calcitem__content calcitem__totals calcitem__totals_multiple calcitem__totals_large">
					<div class="calctotal">
						<div class="calctotal__title">Оплата услуг</div>
						<div class="calctotal__value">
							<ul>
								<li>
									<span data-steptype="result" data-stepdata="payeer"></span>
								</li>
								<!-- <li data-if="payer_fio">
                                  <span data-steptype="result" data-stepdata="payer_fio"></span>
                                </li>
                                <li data-if="payer_pasp1">
                                  <span data-steptype="result" data-stepdata="payer_doc"></span>
                                  <span data-steptype="result" data-stepdata="payer_pasp1"></span>
                                  <span data-steptype="result" data-stepdata="payer_pasp2"></span>
                                </li>
                                <li data-if="payer_anotherdoc">
                                  <span data-steptype="result" data-stepdata="payer_doc"></span>
                                  <span data-steptype="result" data-stepdata="payer_anotherdoc"></span>
                                </li>
                                <li data-if="payer_tel">
                                  <span data-steptype="result" data-stepdata="payer_tel"></span>
                                </li>
                                <li data-if="payer_tel2">
                                  <span data-steptype="result" data-stepdata="payer_tel2"></span>
                                </li>
                                <li data-if="payer_check">
                                  <span data-steptype="result" data-stepdata="payer_check"></span>
                                </li> -->
								<div data-if="receive_otherform">
									<ul>

										<li>
											<span data-steptype="result" data-stepdata="receive_otherform"></span>&nbsp;<span
													data-steptype="result" data-stepdata="receive_othername"></span>

										</li>
										<li>
											ИНН: <span data-steptype="result" data-stepdata="receive_otherinn"></span>
										</li>
										<li>
											КПП: <span data-steptype="result" data-stepdata="receive_otherkpp"></span>
										</li>
										<li>
											Контакное лицо: <span data-steptype="result"
											                      data-stepdata="receive_otherfio"></span>
										</li>
										<li data-if="receive_othertel">
											Телефон: <span data-steptype="result"
											               data-stepdata="receive_othertel"></span>
										</li>
										<li data-if="receive_otheremail">
											Email: <span data-steptype="result"
											             data-stepdata="receive_otheremail"></span>
										</li>
									</ul>
								</div>
							</ul>
						</div>
					</div>
				</div>
			</div>

			<div class="calcpage__block calcitem calcitem_total calcitem_formdata">
				<div class="calcitem__content calcitem__totals calcitem__totals_multiple calcitem__totals_large">

					<div class="calcrow">
						<div class="calcrow__title">Я (заказчик) являюсь:</div>
						<div class="calcform__radiobuttons">
							<div class="radiobuttons">
								<div class="radiotype ">
									<div class="radiotype__item">
										<label for="radio2-1" class="radiotype__label">
											<span>
												<input type="radio" name="NOTIFY_TYPE" checked="checked"
												       value="Отправитель" id="radio2-1" data-stepdata="contact_type1"
												       data-steptype="source">
												<span class="radiotype__text"
												      data-text="checkboxtext">Отправитель</span>
											</span>
										</label>
									</div>
									<div class="radiotype__item">
										<label for="radio2-2" class="radiotype__label">
											<span>
												<input type="radio" name="NOTIFY_TYPE" value="Получатель" id="radio2-2"
												       data-stepdata="contact_type2" data-steptype="source">
												<span class="radiotype__text" data-text="checkboxtext">Получатель</span>
											</span>
										</label>
									</div>
									<div class="radiotype__item">
										<label for="radio2-3" class="radiotype__label">
											<span>
												<input type="radio" name="NOTIFY_TYPE" value="Третье лицо" id="radio2-3"
												       data-stepdata="contact_type3" data-steptype="source">
												<span class="radiotype__text" data-text="checkboxtext">Третье
													лицо</span>
											</span>
										</label>
									</div>
								</div>
							</div>
						</div>
					</div>


					<div class="calcform__items calcform__items_two">

						<div class="calcform__item">
							<div div class="calcform__title">Телефон для связи и уведомления по SMS</div>
							<input type="tel" name="NOTIFY_PHONE" placeholder="" data-stepdata="contact_phone"
							       data-steptype="source" data-required="required">

						</div>
						<div class="calcform__item">
							<div class="calcform__title">E-mail для связи и отправки уведомлений</div>
							<input type="text" name="NOTIFY_EMAIL" placeholder="" data-stepdata="contact_phone"
							       data-steptype="source">
						</div>
					</div>


					<div class="calcform__warn  calcform__warn_total">
						<div class="warnmessage warnmessage_type2 warnmessage_light">
							<div class="warnmessage__icon">
								<img src="<?= ASSETS_PATH ?>/img/warnmessage.svg" alt="">
							</div>
							<div class="warnmessage__text">За соответствие, данных при сдачи груза, о получателе, городе
								назначения и характере груза, ответственность несет отправитель.
							</div>
						</div>
					</div>

					<div class="pageform__check">
						<div class="manager-form__privacy">
							<label class="checkbox">
								<input required="" data-required="required" type="checkbox" name="privacy">
								<span class="checkbox__box"></span>
								Я согласен на обработку своих персональных данных согласно <a href="#" target='_blank'>
									Политике конфиденциальности</a>
							</label>
						</div>
					</div>

				</div>
				<!-- .calcitem__totals -->
			</div>
		</div>


	</div>
	<div class="calcpage__aside">
		<div class="calcaside">
			<div class="calcresults calcitem">
				<div class="calcitem__header">
					<div class="calcheader">
						<div class="calcheader__title">
							<div class="calcheader__name">Ваш расчет</div>
							<div class="calcheader__icon">
								<div class="calcheader__image">
									<img src="<?= ASSETS_PATH ?>/img/Cardboard_Carton_2_560 1.png" alt="">
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="calcitem__content">
					<div class="step-1 ">
						<div class="calcprice">
							<div class="calcprice__items">
								<div class="calcprice__params">
									<ul class="calcprice-params">
										<li>
											<span class="calcprice-params_left">
												Стоимость доставки на терминал
											</span>
											<span class="calcprice-params_right">429 ₽ </span>
										</li>
										<li>
											<span class="calcprice-params_left">
												Температурный режим
											</span>
											<span class="calcprice-params_right">1 250 ₽ </span>
										</li>
										<li>
											<span class="calcprice-params_left">
												Утепление в 1 слой
											</span>
											<span class="calcprice-params_right">1 250 ₽ </span>
										</li>
										<li>
											<span class="calcprice-params_left">
												Забор груза
											</span>
											<span class="calcprice-params_right">
												<a href="#">Обратитесь к менеджеру</a>
											</span>
										</li>
										<li>
											<span class="calcprice-params_left">
												Тариф
											</span>
											<span class="calcprice-params_right">
												<img src="<?= ASSETS_PATH ?>/img/InTransit.svg" alt="">
												Авто
											</span>
										</li>
										<li>
											<span class="calcprice-params_left">
												Тариф
											</span>
											<span class="calcprice-params_right">
												<img src="<?= ASSETS_PATH ?>/img/Tracks.svg" alt="">
												Ж/Д
											</span>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="calcitem__footer">
					<div class="calcitem__total">
						<div class="calcitem__subtitle">Итого</div>
						<!-- /.calcitem__subtitle -->
						<div class="calcitem__pricetotal">5 684 ₽</div>
						<!-- /.calcitem__pricetotal -->
					</div>
					<!-- /.calcitem__total -->
					<div class="calcitem__button">
						<a href="#" class="btncalc" data-entity="step-next">
							<span class='btncalc__img btncalc__img_left'>
								<img src="<?= ASSETS_PATH ?>/img/btncalc__img_left.svg" alt="">
							</span>
							<span class='btncalc__text'>Оформить</span>
							<span class='btncalc__img btncalc__img_right'>
								<img src="<?= ASSETS_PATH ?>/img/btncalc__img_right.svg" alt="">
							</span>
						</a>
					</div>
					<!-- /.calcitem__button -->
					<div class="calcitem__info">
						<div class="calcitem__infomessage">
							* Расчет предварительный. Точный расчет производится при отправке груза
						</div>
						<!-- /.calcitem__infomessage -->
					</div>
					<!-- /.calcitem__info -->
				</div>
				<!-- /.calcitem__footer -->
			</div>
		</div>
	</div>
	<!-- /.calcaside -->
</form>
<div id="debug"></div>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>
