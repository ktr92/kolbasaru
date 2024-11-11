
<div id="myModal_payment" class="modal fade nbki_v4">
    <div class="modal-dialog modal-dialog_login modal-dialog_payment">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" id="modal_zvonok_close" data-dismiss="modal" aria-hidden="true">
                    <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2 2L17 17M17 2L2 17" stroke="#4563FF" stroke-width="2.5" stroke-linecap="round"/>
                    </svg>
                </button>
            </div>
            <div class="modal-body ">
                    <div class="modal__title modal__title_big">Оплатить онлайн</div>
                    <div class="modal_zvonok_form_content">
                        <div class="pblock">
                            <div class="pblock__left">
                                <div class="pblock__content">
                                    <div class="pblock__title">Запрос в ЦККИ</div>
                                    <div class="pblock__text">(Центральный каталог кредитных историй)</div>
                                </div><!-- /.pblock__content -->
                            </div><!-- /.pblock__left -->
                            <div class="pblock__right">
                                <div class="pblock__content">
                                    <div class="pblock__value">300 ₽</div>
                                </div><!-- /.pblock__content -->
                            </div><!-- /.pblock__right -->
                        </div><!-- /.pblock -->
                       <!--  <div class="pagetext" style="margin-bottom: 12px;">
                            <small style="font-size: 14px; color: #000;" class="payment_form_text1">
                                <span style="color: red;">Внимание!</span> Первый и второй  (за 12 месяцев) кредитный отчет оплачивать не нужно! После оплаты кредитная история НЕ БУДЕТ ОТПРАВЛЕНА, после оплаты необходимо направить запрос (<a href="" class="linkbordered">см. пункты выше</a>)
                            </small>
                            <small style="font-size: 14px; color: #000; display: none;" class="payment_form_text2">
                            </small>
                        </div>
 -->

                        <form id="formPay" action="" class="lkform lkform_modal">
                            <div class="lkform__items">
                             <div class="lkform__item lkform__item_edit" style="display: none">
                                    <input type="text" name="svpayment" value="450 руб.">
                                    <input type="hidden" name="service_val">
                                    <input type="hidden" name="service_name">
                                </div>
                                <div class="formcols__item ">
                                    <div class="formcols__input">
                                    <input name="name" type="text" value="" maxlength="50" class="forminput" placeholder="Фамилия, имя и отчество *">
                                    <div class="error_text"></div>
                                    </div>
                                </div>

                                <div class="formcols__items">
                                    <div class="formcols__item formcols__item_291">
                                        <div class="formcols__input">
                                        <input name="email" type="email" value="" maxlength="50" class="forminput" placeholder="Электронная почта *" >
                                        <div class="error_text"></div>
                                        </div>
                                    </div>
                                    <div class="formcols__item formcols__item_320">
                                        <div class="formcols__input">
                                        <input name="phone" value="" type="tel" class="forminput" placeholder="Мобильный телефон *">
                                        <div class="error_text"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="pagerow">
                                    <div class="buttoncaption">
                                    <div class="buttoncaption__button">
                                        <input type="submit" class="btn btn_main btn_main_default" value="Перейти к оплате" style="margin: 0;s">
                                    </div>
                                    <div class="buttoncaption__caption">
                                    <div class="check-block check-block_big" style="max-width: 350px;">
                                    <input type="checkbox" id="formpayment" name="agree">
                                        <label for="formpayment">
                                         Я соглашаюсь с <a href="/documents/Consent_personal_data_sait_2021dec.pdf" class="link_blue" target="_blank">Политикой АО «НБКИ» по&nbsp;обработке персональных данных </a>
                                       </label>
                                    <div class="error_text"></div>
                                    </div>
                                    </div>
                                    </div>
                                </div>

                                <?/*
                                <div class="lkform__item lkform__item_captcha">
                                    <img src="/images/captcha.png">
                                </div>*/?>

                            </div>
                        </form>
                </div>
            </div>

        </div>
    </div>
</div>
