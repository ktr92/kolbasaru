<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Оплата услуги");
?>

    <style>
        .radiotype1 input[type=radio] {
            display: none;
        }


        .radiotype1 .radiotype__label {
            padding-left: 0;
            cursor: pointer;
            margin-bottom: 5px;
            margin-right: 15px;
            transition: all 0.5s;
            max-width: 325px;
            position: relative;
            display: inline-block;
        }


        .radiotype1 span.radiotype__text {
            padding: 15px 15px 15px 75px;
            cursor: pointer;
            margin-bottom: 5px;
            transition: all 0.3s;
            background: none;
            border-radius: 5px;
            border: 3px solid rgba(82, 98, 114, 0.5);
            font-style: normal;
            font-weight: normal;
            font-size: 16px;
            line-height: 100%;

            color: #526272;

            display: block;
            background-position: left 10px center;
            background-size: initial;
            background-repeat: no-repeat;
        }


        .radiotype1 .radiotype__label.active span.radiotype__text {
            opacity: 1;
            border: 3px solid #0060a9;
            color: rgb(25, 25, 25);
        }

        .radiotype__text1 {
            font-size: 16px;
            color: rgb(25, 25, 25);
            font-weight: bold;
            line-height: 1.2;
            display: block;
        }

        .radiotype__text2 {
            font-size: 13px;
            color: rgb(25, 25, 25);
            line-height: 1.2;
            display: block;
            padding-top: 3px;
            font-style: italic;
        }

        .onlinepayment__title2 {
            font-size: 20px;
            color: rgb(25, 25, 25);
            line-height: 1.2;
            margin-bottom: 20px;
        }

        .onlinepayment__title1 {
            font-size: 40px;
            color: rgb(25, 25, 25);
            line-height: 1.2;
            margin-bottom: 20px;
        }

        .onlinepayment {
            padding: 50px 0;
        }

        .onlinepayment__form {
            max-width: 390px;
        }

        button[disabled], html input[disabled] {
            color: #9b9b9b;
            background: #ececec;
        }

        .lkform__items {
            margin-top: 20px;
        }

        .lkform__item {
            margin-bottom: 15px;
        }

        .btn-submit {
            border: none;
            height: 85%;
            line-height: 56px;
            width: 100%;
            max-width: 100%;
            border-radius: 28px;
            font-size: 21px;
            text-transform: none;
            font-weight: 500;
            margin-top: 15px;
            margin-top: 0;
            transition: all 0.3s ease;
        }

        .radiotype__icon {
            position: absolute;
            top: 5px;
            right: 7px;
            z-index: 10;
        }

        .radiotype__tooltip {
            position: absolute;
            top: -30px;
            left: calc(100% - 10px);
            display: none;
            width: 340px;
            z-index: 11;
            background: #fff;
            box-shadow: 0 0 20px -10px #000;
            font-size: 11px;
            font-style: italic;
            padding: 5px 10px;
            color: #000;
        }

        .radiotype__icon:hover + .radiotype__tooltip {
            display: block;
        }

        .radiotype__content {
            display: none;
        }

        .radiotype__content.active {
            display: block;
        }


    </style>

    <div class="pageblock">
        <div class="container">
            <div class="onlinepayment">

                <div class="onlinepayment__title2">Выберите услугу:</div>
                <div class="onlinepayment__radio">
                    <div class="radiobuttons">
                        <div class="radiotype1">
								<span class="radiotype__label active">
										<span>
											<span class="radiotype__text"
                                                  style="background-image: url(/images/online1.png)">
												<span class="radiotype__text1">КРЕДИТНАЯ ИСТОРИЯ</span>
												<span class="radiotype__text2">Третья, четвертая и т.д. в течение календарного года</span>
												<span class="radiotype__icon"><img src="/images/online4.png"
                                                                                   alt=""></span>
												<span class="radiotype__tooltip"><span
                                                            style="color: red;">Внимание!</span> Первая и вторая в течение календарного года кредитная история предоставляется бесплатно.</span>
											</span>
										</span>
									</span>
                            <span class="radiotype__label">
										<span>
											<span class="radiotype__text"
                                                  style="background-image: url(/images/online2.png)">
												<span class="radiotype__text1">Запрос в ЦККИ</span>
												<span class="radiotype__text2">Получение перечня бки, в которых хранится кредитная история</span>
											</span>
										</span>
									</span>
                            <span class="radiotype__label">
										<span>
											<span class="radiotype__text"
                                                  style="background-image: url(/images/online3.png)">
												<span class="radiotype__text1">Код субъекта КИ</span>
												<span class="radiotype__text2">Формирование/замена/аннулирование кода субъекта</span>
											</span>
										</span>
									</span>

                        </div>
                    </div>
                </div>

                <div class="onlinepayment__form">
                    <div class="radiotype__content active">
                        <form class="form-pay-inline" action="#">
                            <div class="lkform__items">
                                <div class="lkform__item">
                                    <label class="lkform__label" for="">Стоимость услуги</label>
                                    <input type="text" name="svpayment" value="450 руб." disabled="">
                                    <input type="hidden" name="service_val" value="450.00">
                                    <input type="hidden" name="service_name" value="Повторное, в рамках 12 месяцев, получение кредитного отчета">
                                </div>
                                <div class="lkform__item">
                                    <label class="lkform__label" for="">ФИО</label>
                                    <input type="text" id="" name="name" required>
                                </div>
                                <div class="lkform__item">
                                    <label class="lkform__label" for="">Телефон</label>
                                    <input type="text" id="" name="phone" required>
                                </div>
                                <div class="lkform__item">
                                    <label class="lkform__label" for="">E-mail</label>
                                    <input type="text" id="" name="email" required>
                                </div>
                                <div class="lkform__item">
                                    <div class="lkcheckbox">
                                        <input type="checkbox" id="formpayment2" name="agree" class="inputcheckbox">
                                        <label for="formpayment2"><span>Оплачивая услугу вы соглашаетесь с <a target="_blank" href="/documents/pravo/Data_processing_policy_2019.pdf" class="linkbordered">Политикой в области обработки и защиты персональных данных АО "НБКИ</a></span></label>
                                    </div>
                                </div>
                                <div class="lkform__error"></div>
                                <div class="lkform__item">
                                    <button id="" type="submit" class="btn-submit btn_red">Оплатить</button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="radiotype__content">
                        <form class="form-pay-inline" action="#">
                            <div class="lkform__items">
                                <div class="lkform__item">
                                    <label class="lkform__label" for="">Стоимость услуги</label>
                                    <input type="text" name="svpayment" value="300 руб." disabled="">
                                    <input type="hidden" name="service_val" value="300.00">
                                    <input type="hidden" name="service_name" value="Запрос в ЦККИ (Центральный каталог кредитных историй)">
                                </div>
                                <div class="lkform__item">
                                    <label class="lkform__label" for="">ФИО</label>
                                    <input type="text" id="" name="name" required>
                                </div>
                                <div class="lkform__item">
                                    <label class="lkform__label" for="">Телефон</label>
                                    <input type="text" id="" name="phone" required>
                                </div>
                                <div class="lkform__item">
                                    <label class="lkform__label" for="">E-mail</label>
                                    <input type="text" id="" name="email" required>
                                </div>
                                <div class="lkform__item">
                                    <div class="lkcheckbox">
                                        <input type="checkbox" id="formpayment3" name="agree" class="inputcheckbox">
                                        <label for="formpayment3"><span>Оплачивая услугу вы соглашаетесь с <a target="_blank" href="/documents/pravo/Data_processing_policy_2019.pdf" class="linkbordered">Политикой в области обработки и защиты персональных данных АО "НБКИ</a></span></label>
                                    </div>
                                </div>
                                <div class="lkform__error"></div>
                                <div class="lkform__item">
                                    <button id="" type="submit" class="btn-submit btn_red">Оплатить</button>
                                </div>

                            </div>
                        </form>
                    </div>


                    <div class="radiotype__content">
                        <form class="form-pay-inline" action="#">
                            <div class="lkform__items">
                                <div class="lkform__item">
                                    <label class="lkform__label" for="">Стоимость услуги</label>
                                    <input type="text" name="svpayment" value="300 руб." disabled="">
                                    <input type="hidden" name="service_val" value="300.00">
                                    <input type="hidden" name="service_name" value="Формирование/замена/аннулирование кода субъекта кредитной истории">
                                </div>
                                <div class="lkform__item">
                                    <label class="lkform__label" for="">ФИО</label>
                                    <input type="text" id="" name="name" required>
                                </div>
                                <div class="lkform__item">
                                    <label class="lkform__label" for="">Телефон</label>
                                    <input type="text" id="" name="phone" required>
                                </div>
                                <div class="lkform__item">
                                    <label class="lkform__label" for="">E-mail</label>
                                    <input type="text" id="" name="email" required>
                                </div>
                                <div class="lkform__item">
                                    <div class="lkcheckbox">
                                        <input type="checkbox" id="formpayment" name="agree" class="inputcheckbox">
                                        <label for="formpayment"><span>Оплачивая услугу вы соглашаетесь с <a target="_blank" href="/documents/pravo/Data_processing_policy_2019.pdf" class="linkbordered">Политикой в области обработки и защиты персональных данных АО "НБКИ</a></span></label>
                                    </div>
                                </div>
                                <div class="lkform__error"></div>
                                <div class="lkform__item">
                                    <button id="" type="submit" class="btn-submit btn_red">Оплатить</button>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <script>

        (function ($) {
            $(function () {

                $('.radiotype__label').on('click', function () {
                    $(this)
                        .addClass('active').siblings().removeClass('active')
                        .closest('div.onlinepayment').find('div.radiotype__content').removeClass('active').eq($(this).index()).addClass('active');
                });

            });
        })(jQuery);

    </script>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>