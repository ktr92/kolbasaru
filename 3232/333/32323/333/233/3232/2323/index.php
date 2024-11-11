<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetPageProperty("keywords", "Реквизиты АО \"Национальное бюро кредитных историй\"");
$APPLICATION->SetPageProperty("description", "Реквизиты АО «Национальное бюро кредитных историй». Данные о компании.");
$APPLICATION->SetTitle("Реквизиты НБКИ | Национальное бюро кредитных историй");
?>
	<div class="rsblock nbki_v5 rsblock_v5 pb-40 rsblock_type_v52">

		<div class="stepmobile">
			<a href="/corp/" class="stepmobile__back">
				<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
					<mask id="mask0_22273_44232" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0"
					      width="20" height="20">
						<rect width="20" height="20" transform="matrix(-1 0 0 1 20 0)" fill="#D9D9D9"></rect>
					</mask>
					<g mask="url(#mask0_22273_44232)">
						<path d="M10.458 15.896C10.6113 15.7433 10.688 15.587 10.688 15.427C10.688 15.2677 10.6183 15.1113 10.479 14.958L6.167 10.667H15.688C15.8547 10.667 16.0073 10.601 16.146 10.469C16.2847 10.337 16.354 10.1807 16.354 10C16.354 9.81933 16.2847 9.663 16.146 9.531C16.0073 9.399 15.8547 9.333 15.688 9.333H6.167L10.479 5.062C10.6183 4.90933 10.688 4.74966 10.688 4.583C10.688 4.41633 10.6113 4.25666 10.458 4.104C10.3053 3.96533 10.1527 3.896 10 3.896C9.84734 3.896 9.69467 3.96533 9.542 4.104L4.229 9.438C4.13167 9.52066 4.06234 9.61066 4.021 9.708C3.979 9.80533 3.958 9.90266 3.958 10C3.958 10.0973 3.979 10.1947 4.021 10.292C4.06234 10.3893 4.13167 10.4793 4.229 10.562L9.542 15.896C9.69467 16.0347 9.84734 16.104 10 16.104C10.1527 16.104 10.3053 16.0347 10.458 15.896Z"
						      fill="#4563FF"></path>
					</g>
				</svg>
				<span>На главную</span>
			</a><!-- /.stepmobile__back -->
		</div>


		<h2 class="onlydesktop">Оплатить услуги картой онлайн</h2>
		<h2 class="onlymobile">Оплатить услуги <br> картой онлайн</h2>
		<form action="#" class="form_type_v5">

			<div class="asideblock_v5">
				<div class="asideblock_v5__main">
					<div class="asideblock_v5__wrapper">
						<div class="asideblock_v5__form form_v5">
							<div class="lkform__item lkform__item_edit" style="display: none">
								<input type="hidden" name="svpayment" value="450₽">
								<input type="hidden" name="service_val" value="450.00">
								<input type="hidden" name="service_name" value="Кредитная история">
							</div>
							<div class="formcols__input ">
								<div class="custom-select">
									<span class="placeholder">Выберите услугу</span>

									<select name="service" id='form_v5_selector'>
										<option value="Отчет по кредитной истории">Отчет по&nbsp;кредитной истории
										</option>
										<option value="Запрос в ЦККИ (Центральный каталог кредитных историй)">
											Запрос в&nbsp;ЦККИ (Центральный каталог кредитных историй)
										</option>
										<option value="Формирование / замена / аннулирование кода субъекта">
											Формирование / замена / аннулирование кода субъекта
										</option>

									</select>
								</div>
								<div class="formcols__info">Внимание! Первый и&nbsp;второй (в&nbsp;течение 12&nbsp;месяцев)
									кредитный отчет оплачивать не&nbsp;нужно
								</div><!-- /.formcols__info -->
								<div class="error_text" style="display: none;"></div>
							</div>
							<div class="formcols__item ">
								<div class="formcols__input">
									<input name="name" type="text" value="" maxlength="50" class="forminput required"
									       placeholder="Фамилия, имя и отчество *">
									<span class="placeholder">ФИО *</span>
								</div>
							</div>
							<div class="formcols__items">
								<div class="formcols__item formcols__item_291">
									<div class="formcols__input">
										<input name="email" type="email" value="" maxlength="50"
										       class="forminput email required" placeholder="Электронная почта *">
										<span class="placeholder">Электронная почта *</span>
									</div>
								</div>
								<div class="formcols__item formcols__item_320">
									<div class="formcols__input">
										<input name="phone" value="" type="tel" class="forminput"
										       placeholder="Мобильный телефон">
										<span class="placeholder">Мобильный телефон</span>
									</div>
								</div>
							</div>
							<div class="pagerow onlydesktop">
								<div class="buttoncaption">
									<div class="buttoncaption__button">
										<button type="submit" class="btn btn_main btn_main_default" style="margin: 0;"
										        disabled>Перейти к оплате
										</button>
									</div>
									<div class="buttoncaption__caption">
										<div class="check-block check-block_big" style="max-width: 350px;">
											<input type="checkbox" id="form_v5_payment" name="agree">
											<label for="form_v5_payment">
												Я соглашаюсь с <a
														href="https://nbki.ru/upload/iblock/5fa/muqsrd2n4cuyky63jz7wl1telgqzyppx.pdf"
														class="link_blue" target="_blank">Политикой АО&nbsp;«НБКИ» по&nbsp;обработке
													персональных данных </a>
											</label>
											<div class="error_text"></div>
										</div>
									</div>
								</div>
							</div>


							<div id="svpayment1" data-price="450" data-value="450.00" data-title="Кредитная <br>история"
							     data-text="<span class='onlydesktop'> Отчет о&nbsp;кредитной активности физического лица</span><span class='onlymobile'>Сведения о&nbsp;кредитной активности физического лица. Стоимость указана за&nbsp;третий и&nbsp;каждый последующий запрос.</span>"
							     data-subtext="за&nbsp;третий и&nbsp;каждый последующий запрос"
							     data-link="/nbki-history/kreditnyj-otchet/"
							     data-svtext="Внимание! Кредитная история не&nbsp;отправляется автоматически. После&nbsp;оплаты направьте запрос на&nbsp;получение одним из&nbsp;способов, указанных на&nbsp;странице «<a href='/nbki-history/kreditnyj-otchet/' target='_blank'>Отчет по&nbsp;кредитной истории</a>».<br> Не забудьте приложить к&nbsp;запросу квитанцию об&nbsp;оплате."
							     data-info="Внимание! Первый и&nbsp;второй (в&nbsp;течение 12&nbsp;месяцев) кредитный отчет оплачивать не&nbsp;нужно"></div>

							<div id="svpayment2" data-price="300" data-value="300.00"
							     data-title="Запрос сведений из&nbsp;ЦККИ"
							     data-text="Сведения из&nbsp;Центрального каталога кредитных историй помогут понять, <br> в&nbsp;каком бюро хранится ваша&nbsp;кредитная история"
							     data-subtext="" data-link="/historylist/"
							     data-svtext="Внимание! Перечень БКИ не&nbsp;отправляется автоматически. После оплаты направьте запрос на&nbsp;получение одним из&nbsp;способов, указанных на&nbsp;странице  «<a href='/historylist/' target='_blank'>Запрос в&nbsp;ЦККИ сведений о&nbsp;кредитной истории</a>». Не&nbsp;забудьте приложить к&nbsp;запросу квитанцию об&nbsp;оплате."
							     data-info=""></div>

							<div id="svpayment3" data-price="300" data-value="300.00"
							     data-title="Код субъекта кредитной истории"
							     data-text="Вы можете создать, изменить или&nbsp;удалить пароль для&nbsp;доступа к&nbsp;информации, хранящейся в&nbsp;ЦККИ"
							     data-subtext="" data-link="/code/"
							     data-svtext="Внимание! После оплаты направьте запрос на&nbsp;нужное вам действие с&nbsp;кодом субъекта одним из&nbsp;способов, указанных на&nbsp;странице «<a href='/code/' target='_blank'>Код субъекта кредитной истории</a>».<br> Не&nbsp;забудьте приложить к&nbsp;запросу квитанцию об&nbsp;оплате."
							     data-info=""></div>


						</div>
						<!-- /.asideblock_v5__form -->
					</div>
					<!-- /.asideblock_v5__wrapper -->

					<div class="form_v5__info" id="svtext">
						Внимание! Кредитная история не&nbsp;отправляется автоматически. После&nbsp;оплаты направьте
						запрос на&nbsp;получение одним из&nbsp;способов, указанных на&nbsp;странице «<a
								href='/nbki-history/kreditnyj-otchet/' target='_blank'>Отчет по&nbsp;кредитной
							истории</a>». <br>Не забудьте приложить к&nbsp;запросу квитанцию об&nbsp;оплате.
					</div><!-- /.form_v5__info -->

				</div>
				<!-- /.asideblock_v5__main -->
				<div class="asideblock_v5__aside">
					<div class="asideblock_v5__banner">
						<div class="asideblock_v5__content">
							<div class="asideblock_v5__bannertitle">Кредитная <br>история</div>
							<!-- /.asideblock_v5__bannertitle -->
							<div class="asideblock_v5__bannertext"><span class='onlydesktop'> Отчет о кредитной
									активности физического лица</span><span class='onlymobile'>Сведения о&nbsp;кредитной
									активности физического лица. Стоимость указана за&nbsp;третий и&nbsp;каждый
									последующий запрос.</span></div>
							<!-- /.asideblock_v5__bannertext -->
						</div>
						<!-- /.asideblock_v5__content -->
						<div class="asideblock_v5__footer">
							<div class="asideblock_v5__price"><span>450</span>₽</div>
							<!-- /.asideblock_v5__price -->
							<div class="asideblock_v5__pricetext">за третий и каждый последующий запрос</div>
							<!-- /.asideblock_v5__pricetext -->
						</div>
						<!-- /.asideblock_v5__footer -->

						<div class="pagerow onlymobile">
							<div class="buttoncaption">
								<div class="buttoncaption__button">
									<button type="submit" class="btn btn_main btn_main_default" style="margin: 0;"
									        disabled>Перейти к оплате
									</button>
								</div>
								<div class="buttoncaption__caption">
									<div class="check-block check-block_big" style="max-width: 350px;">
										<input type="checkbox" id="form_v5_payment_mob" name="agree">
										<label for="form_v5_payment_mob">
											Я соглашаюсь с <a href="https://nbki.ru/upload/iblock/5fa/muqsrd2n4cuyky63jz7wl1telgqzyppx.pdf"
											                  class="link_blue" target="_blank">Политикой АО&nbsp;«НБКИ»
												по&nbsp;обработке персональных данных </a>
										</label>
										<div class="error_text"></div>
									</div>
								</div>
							</div>
						</div>

					</div>
					<!-- /.asideblock_v5__banner -->
				</div>
				<!-- /.asideblock_v5__aside -->
			</div>
			<!-- /.asideblock_v5 -->
		</form>
	</div><!-- /.rsblock -->

	<div class="flex items-center justify-between rekv nbki_v5">
		<h1>Реквизиты АО «НБКИ»</h1>
		<div class="docblock docblock_pdf docblock_alone">
			<div class="docblock__content">
				<div class="docblock__icon">
					<a href="/documents/DetailsNBKI.pdf" class="onlydesktop"><img src="/images/pdf_black.svg"
					                                                              alt=""></a>
					<a href="/documents/DetailsNBKI.pdf" class="onlymobile"><img src="/images/pdf_blue.svg" alt=""></a>
				</div>
				<div class="docblock__text">
					<div class="docblock__name">
						<a href="/documents/DetailsNBKI.pdf">Скачать реквизиты </a>
					</div>
					<a href="/documents/DetailsNBKI.pdf"> </a>
					<div class="docblock__info">
						<a href="/documents/DetailsNBKI.pdf">
							.pdf (602 КБ)</a>
					</div>
				</div>
			</div>
		</div>


	</div>


	<div class="tableblock tableblock_2col nbki_v5">
        <? $APPLICATION->IncludeFile(
            INCLUDE_PATH . "/pages/company/rekvizit/table.php",
            [],
            [
                "MODE" => "html",
                "NAME" => "Текст",
            ]
        ); ?>
	</div>

	<script>

        $(document).on("click", '.select-items > div', function (e) {
            let idx = $(this).index() + 1
            $('.asideblock_v5__bannertitle').html($(`#svpayment${idx}`).data('title'))
            $('.asideblock_v5__bannertext').html($(`#svpayment${idx}`).data('text'))
            $('.asideblock_v5__price span').html($(`#svpayment${idx}`).data('price'))
            $('.asideblock_v5__pricetext').html($(`#svpayment${idx}`).data('subtext'))
            $('.asideblock_v5 .formcols__info').html($(`#svpayment${idx}`).data('info'))
            $('#svtext').html($(`#svpayment${idx}`).data('svtext'))


            $('[name="svpayment"]').val($(`#svpayment${idx}`).data('price'))
            $('[name="service_val"]').val($(`#svpayment${idx}`).data('value'))
            $('[name="service_name"]').val($(`#svpayment${idx}`).data('title'))
        })

        $(".form_type_v5 .check-block input").on("change", function (e) {
            if ($(this).is(":checked") && validateForm()) {
                $(this).siblings('label').removeClass('error')
                $(this).closest('form').find('[type="submit"]').removeAttr("disabled")
            } else {
                $(this).siblings('label').addClass('error')
                $(this).closest('form').find('[type="submit"]').prop("disabled", true)
            }
        })

        $('.form_type_v5 input.required').on('input, change', function () {
            let $check
            if ($(window).width() < 999) {
                $check = $('#form_v5_payment_mob')
            } else {
                $check = $('#form_v5_payment')
            }
            if (validateForm()) {
                if ($check.is(":checked")) {
                    $check.siblings('label').removeClass('error')
										$(this).closest('form').find('[type="submit"]').removeAttr("disabled")
                } else {
                    $check.siblings('label').addClass('error')
										$(this).closest('form').find('[type="submit"]').prop("disabled", true)
                }

            } else {
							$(this).closest('form').find('[type="submit"]').prop("disabled", true)
						}
        })


        function isEmail(email) {
            var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/
            return regex.test(email)
        }

        function showError(input) {
            input.addClass("error")
            input.closest(".formcols__item").find(".errortext").show()
        }

        function hideError(input) {
            input.removeClass("error")
            input.closest(".formcols__item").find(".errortext").hide()
        }

        function validateForm() {
            let valid = true
            let emailvalid = true
            const $form = $('.form_type_v5')
            const $required = $form.find("input.required")


            $required.each(function () {
                if ($(this).val().length < 1) {
                    showError($(this))
                    valid = false
                } else {
                    hideError($(this))
                }
            })


            $form.find("input.email").each(function () {
                emailvalid = isEmail($(this).val())
                if (!emailvalid) {
                    showError($(this))
                } else {
                    hideError($(this))
                }
            })

            return valid && emailvalid
        }


        $(".form_type_v5").on("submit", function (e) {
            e.preventDefault()
	        const $form = $(this);

            let isvalid = validateForm() || false

            $form.find('[type="submit"]').attr('disabled', true)
            if (isvalid) {
                // отправка формы
                // $("#myModal_ty").modal("show")
                $.ajax({
                    method: "POST",
                    url: "/ajax/payment_initialization.php",
                    data: $form.serialize(),
                })
                    .done(function (msg) {

                        if (typeof ingEvents !== "undefined") {

                            ingEvents.Event({category: 'forms', action: 'submit', label: 'oplata_na', ya_label: 'oplata_na'});
                        }
                       /*  window.location = msg; */
												window.open(msg, '_blank');

                    })
                    .error(function() {
                        $form.find('[type="submit"]').removeAttr('disabled')
                    });

            } else {
                $('html, body').animate({scrollTop: $('.form_type_v5').offset().top}, 'slow');
            }
        })
	</script>

<? /*
  <div class="flex items-center justify-between rekv">
  	<h1>Реквизиты</h1>
  	<div class="docblock docblock_pdf docblock_alone">
  		<div class="docblock__content">
  			<div class="docblock__icon">
  				<a href="/documents/DetailsNBKI.pdf"><img src="/images/pdf.svg" alt=""></a>
  			</div>
  			<div class="docblock__text">
  				<div class="docblock__name">
   <a href="/documents/DetailsNBKI.pdf">Скачать реквизиты </a>
  				</div>
  				<a href="/documents/DetailsNBKI.pdf"> </a>
  				<div class="docblock__info">
  					<a href="/documents/DetailsNBKI.pdf">
  					.pdf (602 КБ)</a>
  				</div>
  			</div>
  		</div>
  	</div>
  </div>
  <div class="tableblock tableblock_2col nbki_v4">
  	<? $APPLICATION->IncludeFile(
    INCLUDE_PATH . "/pages/company/rekvizit/table.php",
    [],
    [
    	"MODE" => "html",
    	"NAME" => "Текст",
    ]
    ); ?>
</div>
<br>
*/ ?>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>
