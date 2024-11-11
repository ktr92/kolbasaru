<?
$ASSETS = Bitrix\Main\Page\Asset::getInstance();
/* $ASSETS->addCss('/calculator/css/calc.css'); */
$ASSETS->addCss('/calculator/css/jQuery.inputSliderRange.css');
$ASSETS->addCss('/calculator/css/nouislider.min.css');
$ASSETS->addCss('/calculator/css/datepicker.min.css');
$ASSETS->addCss('/calculator/css/corp.css');
$ASSETS->addCss('/calculator/css/calc.css');

$ASSETS->addJs('/calculator/js/jQuery.inputSliderRange.min.js');
$ASSETS->addJs('/calculator/js/nouislider.min.js');
$ASSETS->addJs('/calculator/js/jquery.inputmask.min.js');
$ASSETS->addJs('/calculator/js/datepicker.min.js');
$ASSETS->addJs('/calculator/js/wNumb.min.js');
/* $ASSETS->addJs('/calculator/js/wNumb.min.js'); */
$ASSETS->addJs('/calculator/js/app.js');
?>
<main>
	<div class="page page_calc  nbki_v4">
		<div class="container">
			<div class="pagecontent calcpage">
				<div class="nbki_v4 wrapperwhite">
					<div class="pagetitle  ">
						<h1>Кредитный калькулятор НБКИ</h1>
					</div>

					<div class="calcform">
						<form action="" data-entity="calc-params" method="post">
							<input type="hidden" name="custom-submit" data-entity="custom-submit" value="N">
							<div class="calcform__block">
								<div class="calcform__row">
									<div class="calcform__col">
										<div class="calcform__item">
											<div class="calcform__input">
												<label class="form__label" for="calc_summ">
													<div class="form-control__wrapper range-slider"
													     data-range-slider-type="calc_summ">
														<span class="placeholder">Выберите сумму кредита, руб.</span>

														<input id="calc_summ" type="text" data-stepdata="calc_summ"
														       data-steptype="source"
														       class="form-control range-slider__control"
														       data-max="9999999999" data-min="1000"
														       data-summ-format="" name="Amount" type="text"
														       inputmode="decimal" value="5000000">
														<div class="range-slider__ui"></div>

													</div>
												</label>

												<div class="calcform__limit">
													<div class="calclimit calclimit__min">1000 руб.</div>
													<div class="calclimit calclimit__right">10+ млн.</div>

												</div><!-- /.calcaform__limit -->

											</div><!-- /.calcform__input -->
											<div class="calcform__slider"></div><!-- /.calcform__slider -->
										</div><!-- /.calcform__item -->
									</div><!-- /.calcform__col -->
									<div class="calcform__col">
										<div class="calcform__item">
											<div class="calcform__input">
												<label class="form__label" for="calc_creditTerm">
													<div class="form-control__wrapper range-slider"
													     data-range-slider-type="calc_creditTerm">
														<span class="placeholder">Выберите срок кредита, мес.</span>

														<input id="calc_creditTerm" type="text"
														       data-stepdata="calc_creditTerm"
														       data-steptype="source"
														       class="form-control range-slider__control" data-max="360"
														       data-min="1" data-number-format="" name="Period"
														       type="text"
														       inputmode="decimal" value="42">
														<div class="range-slider__ui"></div>

													</div>
												</label>

												<div class="calcform__limit">
													<div class="calclimit calclimit__min">1 мес.</div>
													<!-- /.calclimit calclimit__min -->
													<div class="calclimit calclimit__right">360 мес.</div>
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
													<div class="form-control__wrapper range-slider"
													     data-range-slider-type="calc_creditRate">
														<span class="placeholder">Выберите ставку кредита, %</span>

														<input id="calc_creditRate" type="text"
														       data-stepdata="calc_creditRate"
														       data-steptype="source"
														       class="form-control range-slider__control"
														       data-max="100.00"
														       data-min="00.00" data-rate-format=""
														       name="Rate" type="text"
														       value="50.00 %">
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

													<input type="text" name="Date" data-toggle="datepicker"
													       class='expand_more'>
												</label>
											</div><!-- /.calcform__input -->
										</div><!-- /.calcform__item -->
										<div class="calcform__item calcform__item_select">
											<div class="calcform__input mobile_flex">
												<span class="placeholder">Тип платежа</span><!-- /.placeholder -->

												<div class="calcform__select">
													<select name="PayType">
														<option value="1">Аннуитетный</option>
														<option value="2">Дифференцированный</option>
													</select>
												</div>
											</div><!-- /.calcform__input -->
										</div><!-- /.calcform__item -->

										<div class="calcform__aside onlyMobile">
											<div class="calcform__total">
												<div class="calctotal">
													<div class="calctotal__item">
														<div class="calctotal__title">Ежемесячный платеж</div>
														<!-- /.calctotal__title -->
														<div class="calctotal__value" data-entity="pay">2 000</div>
														<!-- /.calctotal__value -->
													</div><!-- /.calctotal__item -->
													<div class="calctotal__item">
														<div class="calctotal__title">Общая выплата</div>
														<!-- /.calctotal__title -->
														<div class="calctotal__value" data-entity="total">1 350 000
														</div>
														<!-- /.calctotal__value -->
													</div><!-- /.calctotal__item -->
													<div class="calctotal__item calctotal__item_table">
														<div class="calctable">
															<table>
																<tbody>
																<tr>
																	<td>
																		<span
																				class="calctable__color calctable__color-blue"></span>
																		<!-- /.calctable__color calctable__color-blue -->
																	</td>
																	<td>
																		<span class="calctable__title">Кредит</span>
																		<!-- /.calctable__title -->
																	</td>
																	<td>
																		<span class="calctable__value"
																		      data-entity="amount">1 000 000
																			руб.</span><!-- /.calctable__value -->
																	</td>
																</tr>
																<tr>
																	<td>
																		<span
																				class="calctable__color calctable__color-red"></span>
																		<!-- /.calctable__color calctable__color-blue -->
																	</td>
																	<td>
																		<span class="calctable__title">Переплата</span>
																		<!-- /.calctable__title -->
																	</td>
																	<td>
																		<span class="calctable__value"
																		      data-entity="overpice">350 000
																			руб.</span><!-- /.calctable__value -->
																	</td>
																</tr>
																<tr>
																	<td>
																		<span class=""></span>
																		<!-- /.calctable__color calctable__color-blue -->
																	</td>
																	<td>
																		<span class="calctable__title">Итого</span>
																		<!-- /.calctable__title -->
																	</td>
																	<td>
																		<span class="calctable__value"
																		      data-entity="total">1 350 000
																			руб.</span><!-- /.calctable__value -->
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
												<!-- <div class="calcform__button">
													<a href='#myModal_download' data-toggle="modal"
													   class='btn_blborder btn_calc'>
														Отправить на email
													</a>



												</div> --><!-- /.calcform__button -->
												<div class="calcform__button">
													<a href="" class='calcform__link' data-entity="download">
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
													<div class="calctotal__title">Ежемесячный платеж</div>
													<!-- /.calctotal__title -->
													<div class="calctotal__value" data-entity="pay">2 000</div>
													<!-- /.calctotal__value -->
												</div><!-- /.calctotal__item -->
												<div class="calctotal__item">
													<div class="calctotal__title">Общая выплата</div>
													<!-- /.calctotal__title -->
													<div class="calctotal__value" data-entity="total">1 350 000</div>
													<!-- /.calctotal__value -->
												</div><!-- /.calctotal__item -->
												<div class="calctotal__item calctotal__item_table">
													<div class="calctable">
														<table>
															<tbody>
															<tr>
																<td>
																	<span
																			class="calctable__color calctable__color-blue"></span>
																	<!-- /.calctable__color calctable__color-blue -->
																</td>
																<td>
																	<span class="calctable__title">Кредит</span>
																	<!-- /.calctable__title -->
																</td>
																<td>
																	<span class="calctable__value" data-entity="amount">1
																		000 000 руб.</span>
																	<!-- /.calctable__value -->
																</td>
															</tr>
															<tr>
																<td>
																	<span
																			class="calctable__color calctable__color-red"></span>
																	<!-- /.calctable__color calctable__color-blue -->
																</td>
																<td>
																	<span class="calctable__title">Переплата</span>
																	<!-- /.calctable__title -->
																</td>
																<td>
																	<span class="calctable__value"
																	      data-entity="overpice">350 000 руб.</span>
																	<!-- /.calctable__value -->
																</td>
															</tr>
															<tr>
																<td>
																	<span class=""></span>
																	<!-- /.calctable__color calctable__color-blue -->
																</td>
																<td>
																	<span class="calctable__title">Итого</span>
																	<!-- /.calctable__title -->
																</td>
																<td>
																	<span class="calctable__value" data-entity="total">1
																		350 000 руб.</span>
																	<!-- /.calctable__value -->
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
								<form data-entity="new-rows">
									<div class="calcform__newrowscontainer">

									</div><!-- /.calcform__newrowscontainer -->
								</form>


								<div class="calcform__block calcform__block_newblock calcform__block_form"
								     data-newblock="0">
									<div class="calcform__newrow" data-newrow="0">
										<div class="calcnewrow">
											<div class="calcnewrow__col">
												<div class="calcform__item calcform__item_select">
													<div class="calcform__input">
														<div class="calcform__select calcform__select_period">
															<select name='newrow_0_1'>
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
															<select name='newrow_0_2'>
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
														<input type="text" data-number-format="" value=''
														       name='newrow_0_3' value="">
														<span class="placeholder">Сумма</span>
													</div>
												</div>
											</div>
											<div class="calcnewrow__col">
												<div class="calcform__item">
													<div class="calcform__input">
														<label for="">
															<input type="text" data-toggle="datepicker"
															       class='expand_more' name='newrow_0_4'>
															<span class="placeholder">Дата</span>
														</label>
													</div>
												</div>
											</div>

										</div>
									</div>
								</div>
								<div class="calcform__item">
									<div class="calcform__buttons calcform__buttons_type2 flex">
										<div class="calcform__button">
											<a href='' class="btn_main btn_calc" data-addnewrow='calcnewrow'>
												Добавить
											</a>
										</div>
										<div class="calcform__button">
											<a href='' class="btn_main btn_calc btn_blborder"
											   data-clearcalc='calcnewrow'>
												Очистить
											</a>
										</div>

									</div>

								</div>
						</form>


					</div>


				</div>
			</div><!-- /.nbki_v4 wrapperwhite -->

			<div id="myModal_download" class="modal fade modal_calc">
				<div class="modal-dialog">
					<div class="modal-content">

						<div class="modal-body">
							<div class="modal_zvonok_content">
								<div class="modal__header">
									<div class="modal__title">График платежей
										сформирован
									</div>
									<span class="modalclose"
									      data-dismiss="modal"
									      aria-hidden="true">
										<svg width="32" height="32"
										     viewBox="0 0 32 32" fill="none"
										     xmlns="http://www.w3.org/2000/svg">
											<path
													d="M23.7656 22.6336C23.8399 22.708 23.8988 22.7962 23.9391 22.8933C23.9793 22.9904 24 23.0945 24 23.1996C24 23.3047 23.9793 23.4088 23.9391 23.5059C23.8988 23.603 23.8399 23.6912 23.7656 23.7656C23.6912 23.8399 23.603 23.8988 23.5059 23.9391C23.4088 23.9793 23.3047 24 23.1996 24C23.0945 24 22.9904 23.9793 22.8933 23.9391C22.7962 23.8988 22.708 23.8399 22.6336 23.7656L16 17.1309L9.36637 23.7656C9.21626 23.9157 9.01268 24 8.8004 24C8.58812 24 8.38454 23.9157 8.23443 23.7656C8.08433 23.6155 8 23.4119 8 23.1996C8 22.9873 8.08433 22.7837 8.23443 22.6336L14.8691 16L8.23443 9.36637C8.08433 9.21626 8 9.01268 8 8.8004C8 8.58812 8.08433 8.38454 8.23443 8.23443C8.38454 8.08433 8.58812 8 8.8004 8C9.01268 8 9.21626 8.08433 9.36637 8.23443L16 14.8691L22.6336 8.23443C22.7837 8.08433 22.9873 8 23.1996 8C23.4119 8 23.6155 8.08433 23.7656 8.23443C23.9157 8.38454 24 8.58812 24 8.8004C24 9.01268 23.9157 9.21626 23.7656 9.36637L17.1309 16L23.7656 22.6336Z"
													fill="#4563FF"/>
										</svg>

									</span>
								</div><!-- /.modal__header -->

								<div class="modal_zvonok_form_content">
									<div class="modal__content formblock">
										<form action="#"
										      data-entity="calc-email">

											<div class="modal__inputs formblock__inputs">
												<div class="modal__input formblock__input">
													<div class="calcform__item calcform__item_select">
														<div class="calcform__input">
															<span class="placeholder">Электронная
																почта</span>
															<!-- /.placeholder -->
															<input type="email"
															       data-number-format=""
															       value=""
															       name="EMAIL"
															       required
															>

														</div>
														<!-- /.calcform__input -->
													</div>
												</div>

											</div>

											<div class="calcform__buttons">
												<button type="submit"
												        class="btn_main btn_calc btn_main_small">
													Отправить
													график на email
												</button>
											</div>
											<div class="calcform__item calcform__item_check">
												<div class="check-block">
													<input type="checkbox"
													       id="id_checkcalc_modal"
													       required>
													<label for="id_checkcalc_modal">Я
														согласен на обработку и
														хранение
														персональных
														данных</label>
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
			<div id="myModal_warn" class="modal fade modal_calc">
				<div class="modal-dialog">
					<div class="modal-content">

						<div class="modal-body">
							<div class="modal_zvonok_content">
								<div class="modal__header">
									<div class="modal__title">Слишком много ежемесячных досрочных платежей
									</div>

								</div><!-- /.modal__header -->

								<div class="modal__content ">
									<div class="modal__text"><p>Можно добавить только одно ежемесячное досрочное
											погашение за весь период кредита</p></div><!-- /.modal__text -->
								</div>
								<div class="calcform__buttons">
									<a href="#" data-dismiss="modal" class="btn_main btn_calc ">
										Закрыть
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- 		<div class="calccontent">
                    <div class="calccontent__banner">
                        <div class="calccontent__imgbanner">
                            <a href="https://person.nbki.ru/login?utm_source=sait&utm_medium=calculator" target='_blank'
                               class='onDesktop'><img src="images/banner_alfa_5min_1021x1001.jpg" alt=""></a>
                            <a href="https://person.nbki.ru/login?utm_source=sait&utm_medium=calculator" target='_blank'
                               class='onMobile'><img src="images/alfa-mobile.png" alt=""></a>

                        </div>
                    </div> -->

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
									Рассчитайте персональный кредитный рейтинг<br> и подберите самый выгодный
									кредит
								</div>
								<div class="pagebanner__buttons">
									<a href="https://person.nbki.ru/login?utm_source=sait&utm_medium=calculator"
									   target="_blank"
									   class="btn_main btn_main2">Перейти в личный кабинет</a> <span
											class="pagebanner__info">Это
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
				<p>Получение кредита – ответственный шаг, для принятия которого необходимо оценить свои
					возможности.
					Кредитный калькулятор НБКИ поможет вам подобрать параметры кредита, платить по которому вам
					будет
					максимально комфортно.</p>
				<p> С помощью кредитного калькулятора НБКИ можно сравнить ежемесячный платеж и сумму переплаты
					по
					нескольким кредитам и выбрать оптимальные параметры – сумму кредита, ставку и срок.</p>
				<p>Для более точного понимания всех параметров кредита, на который вы можете претендовать
					рекомендуем вам
					рассчитать в своем <a
							href="https://person.nbki.ru/login?utm_source=sait&utm_medium=calculator"
							target="_blank" class='link_blue'>личном кабинете.</a> Чем выше значение ПКР, тем
					лучшие
					условия по кредиту вы можете
					получить.</p>
			</div><!-- /.text -->
		</div><!-- /.calccontent__description -->

	</div><!-- /.calccontent -->
	</div>
	</div>
	</div>
</main>

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
            /*  autoPick: true, */
            format: "dd.mm.yyyy",
            language: "ru-Ru",
            /*   date: Date.now(), */
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
                    datavalue: that.attr('value'),
                    on: {
                        click: function (e) {
                            console.log(e)
                            let decline = false
                            $('.calcform__newrowscontainer .calcform__select_period').each(function () {
                                if ($(this).find('select').val() == '1' && that.attr('value') == '1') {

                                    if ($(e.target).closest('.calcform__select').hasClass('calcform__select_period')) {
                                        decline = true
                                        $('#myModal_warn').modal('show')
                                    }

                                }
                            })

                            if (!decline) {
                                $(".calcform__select-item").removeClass("active")
                                $(this).addClass("active")
                                var selectedOptionText = that.text()
                                selectedItem.text(selectedOptionText).removeClass("arrowanim")
                                allItems.addClass("all-items-hide")
                                $(this).closest('.calcform__select').find('select').val($(this).attr('datavalue'))
                            }
                        },
                    },
                })
                    .appendTo(allItems)
                    .text(optionText)
            })
            $(".calcform__select").each((index, item) => {
                /*   $(item).addClass("calcform__select_initialized") */
                $(item).find(".calcform__select-item").removeClass("active")
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
        let count = 0

        let hasMonthly = false

        $('[data-clearcalc]').on('click', function (e) {
            e.preventDefault()
            $('.calcform__newrowscontainer').html("")
            $(this).closest(".calcform__item").removeClass('active')
            $(this).closest(".calcform__block").removeClass('active')
            count = 0
            valid = true
            hasMonthly = false
            $('[data-entity="calc-params"]').submit();

        })

        $("[data-addnewrow]").on("click", function (e) {
            e.preventDefault()

            $('[data-entity="calc-params"]').submit();

            let valid = true

            let period = $('select[name="newrow_0_1"]').val()
            let type = $('select[name="newrow_0_2"]').val()
            let summ = $('input[name="newrow_0_3"]').val()
            let date = $('input[name="newrow_0_4"]').val()


            $('.calcform__newrowscontainer .calcform__select_period').each(function () {
                if ($(this).find('select').val() == '1') {
                    hasMonthly = true

                    if (period == '1') {
                        // и опять выбрано ежемесячное

                        valid = false
												$('#myModal_warn').modal('show')
                       // alert('можно только 1 ежемесячный!')
                        return
                    }
                }
            })


            if (!summ.length) {
                valid = false
                $('input[name="newrow_0_3"]').addClass('input-error')
            } else {
                $('input[name="newrow_0_3"]').removeClass('input-error')
            }
            if (!date.length) {
                valid = false
                $('input[name="newrow_0_4"]').addClass('input-error')
            } else {
                $('input[name="newrow_0_4"]').removeClass('input-error')
            }


            if (valid) {

                count++

                if ($('.calcform__newrowscontainer select').val() == '1') {
                    hasMonthly = true
                }

                $(this).closest(".calcform__item").addClass('active')
                $(this).closest(".calcform__block").addClass('active')

                let options1 = period == '0' ? "<option value='0'>Единовременно</option><option value='1'>Ежемесячно</option>" : "<option value='1'>Ежемесячно</option><option value='0'>Единовременно</option>"
                let options2 = type == '0' ? "<option value='0'>Уменьшение срока кредита</option><option value='1'>Уменьшение суммы платежа</option>" : "<option value='1'>Уменьшение суммы платежа</option><option value='0'>Уменьшение срока кредита</option>"

                $('.calcform__newrowscontainer').prepend(`<div class="calcform__block calcform__block_newblock" data-newblock="${count}">
    <div class="calcform__newrow" data-newrow="${count}">
      <div class="calcnewrow">
        <div class="calcnewrow__col">
          <div class="calcform__item calcform__item_select">
            <div class="calcform__input">
              <div class="calcform__select calcform__select_period">
                <span class="placeholder">Периодичность погашения</span><!-- /.placeholder -->

                <select  name='newrow_${count}_1'>
                  ${options1}
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
                  ${options2}
                </select>
              </div>
            </div><!-- /.calcform__input -->
          </div><!-- /.calcform__item -->
        </div><!-- /.calcnewrow__col -->
        <div class="calcnewrow__col">
          <div class="calcform__item ">
            <div class="calcform__input">
              <span class="placeholder">Сумма</span><!-- /.placeholder -->

              <input type="text" data-number-format="" value='${summ}' name='newrow_${count}_3'>
            </div><!-- /.calcform__input -->
          </div><!-- /.calcform__item -->
        </div><!-- /.calcnewrow__col -->
        <div class="calcnewrow__col">
          <div class="calcform__item">
            <div class="calcform__input calcform__input_date">
              <label for="">
                <span class="placeholder">Дата</span>

                <input type="text" data-toggle="datepicker" class='expand_more' name='newrow_${count}_4' value='${date}'>
              </label>
            </div><!-- /.calcform__input -->
          </div><!-- /.calcform__item -->
        </div><!-- /.calcnewrow__col -->
        <div class="calcnewrow__col">
          <div class="calcform__icon">
            <a href="#1" class="calcform_remove" data-remove='${count}'>
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

                $(".calcform__block_form .calcform__select-item:first").trigger('click')

                $('input[name="newrow_0_3"]').val("")
                $('input[name="newrow_0_4"]').val("")

            }

        })


        $(document).on("click", "[data-remove]", function (e) {
            e.preventDefault()
            let id = $(this).data("remove")
            $(this).closest(`[data-newblock=${id}]`).remove()
            $('[data-entity="calc-params"]').submit();
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
                        min: [rangeSliderMin, 100],
                        "25%": [10000, 1000],
                        "50%": [100000, 1000],
                        "75%": [1000000, 10000],
                        "99%": [10000000, 10000],
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
                    /* format: wNumb({
                        decimals: 2,
                    }), */
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
