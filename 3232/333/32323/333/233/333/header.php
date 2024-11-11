<?
global $APPLICATION;
?>

<main>
	<div class="rsmainslider rsmainslider_static rsmainslider_ki">
		<div class=" container">
			<div class="rsmainslider__container">
				<!--  <div class="rsmainslider__layer"> -->
				<!--   <div class="rsmainslider__layer"> -->
				<div class="rsmainslider__slider">
					<div class="rsmainslider--slide">
						<div class="rsmainslider__wrapper">
							<div class="rsmainslider__main">
								<div class="rsmainslider__title">
									<h1 class="rsmainslider__name"> <? $APPLICATION->IncludeComponent(
                                            "bitrix:main.include",
                                            "",
                                            array(
                                                "AREA_FILE_SHOW" => "file",
                                                "AREA_FILE_SUFFIX" => "inc",
                                                "EDIT_TEMPLATE" => "",
                                                "PATH" => INCLUDE_PATH . "/pages/history/title.block1.php"
                                            )
                                        ); ?></h1>
								</div>
								<div class="rsmainslider__mobileimg">
									<? /* <img src="<?= SITE_TEMPLATE_PATH ?>/img/kiv5.svg" alt=""> */ ?>
									<img src="<?= SITE_TEMPLATE_PATH ?>/public/img/ki02.webp"> 
								</div>
								<div class="rsmainslider__text">
									<div class="listblock__list  list_v5">
                                        <? $APPLICATION->IncludeComponent(
                                            "bitrix:main.include",
                                            "",
                                            array(
                                                "AREA_FILE_SHOW" => "file",
                                                "AREA_FILE_SUFFIX" => "inc",
                                                "EDIT_TEMPLATE" => "",
                                                "PATH" => INCLUDE_PATH . "/pages/history/text.block1.php"
                                            )
                                        ); ?>
									</div>
								</div>
								<div class="rsmainslider__buttons">
                                    <? $APPLICATION->IncludeComponent(
                                        "bitrix:main.include",
                                        "",
                                        array(
                                            "AREA_FILE_SHOW" => "file",
                                            "AREA_FILE_SUFFIX" => "inc",
                                            "EDIT_TEMPLATE" => "",
                                            "PATH" => INCLUDE_PATH . "/pages/history/link.block1.php"
                                        )
                                    ); ?>
									<div class="infblockv5 onlydesktop desktop">
										<div class="infblockv5__icon">
											<img src="<?= SITE_TEMPLATE_PATH ?>/img/infblockv5.svg" alt="">
										</div><!-- /.infblockv5__icon -->
										<div class="infblockv5__text ">
											<div class="listblock__list  list_v5">
                                                <? $APPLICATION->IncludeComponent(
                                                    "bitrix:main.include",
                                                    "",
                                                    array(
                                                        "AREA_FILE_SHOW" => "file",
                                                        "AREA_FILE_SUFFIX" => "inc",
                                                        "EDIT_TEMPLATE" => "",
                                                        "PATH" => INCLUDE_PATH . "/pages/history/text.block7.php"
                                                    )
                                                ); ?>
											</div><!-- /.infblockv5__text -->
										</div><!-- /.infblockv5 -->
									</div>
								</div>
								<div class="rsmainslider__image">
										<img src="<?= SITE_TEMPLATE_PATH ?>/public/img/ki02.webp" alt=""> 
									
								</div>

							</div>
							<!-- /.rsmainslider__wrapper -->
						</div>


					</div>
					<!--  </div>
                    </div> -->

				</div>
			</div>
		</div>
	</div>


	<div class="rsblock rsblock_v5 style_v5">
		<div class="container">
			<div class="infslider_v5">
				<div class="infslider_v5__container">
					<div class="infslider_v5__slider" data-slider='infslider_v5'>
						<div class="infslider_v5__slide">
							<div class="infslider_v5__item">
								<div class="infslider_v5__image">
									<img src="<?=SITE_TEMPLATE_PATH?>/public/images/inf1.svg" alt="">
								</div><!-- /.infslider_v5__image -->
								<div class="infslider_v5__text">Квалифицированное бюро кредитных <br> историй, включено в&nbsp;государственный <br> реестр Банка России.
								</div>
								<!-- /.infslider_v5__text -->
							</div><!-- /.infslider_v5__item -->
						</div><!-- /.infslider_v5__slide -->
						<div class="infslider_v5__slide">
							<div class="infslider_v5__item">
								<div class="infslider_v5__image">
									<img src="<?=SITE_TEMPLATE_PATH?>/public/images/ing2.svg" alt="">
								</div><!-- /.infslider_v5__image -->
								<div class="infslider_v5__text">Есть лицензия Федеральной службы <br> по&nbsp;техническому и&nbsp;экспортному контролю <br> на&nbsp;защиту конфиденциальной информации
								</div>
								<!-- /.infslider_v5__text -->
							</div><!-- /.infslider_v5__item -->
						</div><!-- /.infslider_v5__slide -->
						<div class="infslider_v5__slide">
							<div class="infslider_v5__item">
								<div class="infslider_v5__image">
									<img src="<?=SITE_TEMPLATE_PATH?>/public/images/inf3.svg" alt="">
								</div><!-- /.infslider_v5__image -->
								<div class="infslider_v5__text">АО «НБКИ» с&nbsp;2005&nbsp;года занимается <br> сбором, хранением и&nbsp;предоставлением <br> записей о&nbsp;кредитах
								</div>
								<!-- /.infslider_v5__text -->
							</div><!-- /.infslider_v5__item -->
						</div><!-- /.infslider_v5__slide -->
					</div><!-- /.infslider_v5__slider -->
				</div><!-- /.infslider_v5__container -->
			</div><!-- /.infslider_v5 -->
		</div><!-- /.container -->
	</div><!-- /.rsblock_v5 -->


	<div class="rsblock rsblock_v5 pb-64" id="about">
		<div class="container">
			<div class="blueblock blueblock--rounded blueblock_ki blueblock_ki_v5">
				<div class="blueblock__wrapper blueblock__wrapper--columns">
					<div class="blueblock__content blueblock__content--left">
						<div class="blueblock__main">
							<div class="blueblock__title">
								<h2><? $APPLICATION->IncludeFile(
                                        INCLUDE_PATH . "/pages/history/about-history-label.php",
                                        [],
                                        [
                                            "MODE" => "html",
                                            "NAME" => "Текст",
                                        ]
                                    ); ?></h2>
							</div>
							<div class="blueblock__text">
								<p><? $APPLICATION->IncludeFile(
                                        INCLUDE_PATH . "/pages/history/about-history.php",
                                        [],
                                        [
                                            "MODE" => "html",
                                            "NAME" => "Текст",
                                        ]
                                    ); ?></p>
							</div>
						</div>
						<div class="blueblock__buttons">
							<a href="https://person.nbki.ru/login" class="btn_main btn_main_white btn_main_white_v5"
							   target="_blank">Получить кредитную историю</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<div class="rsblock rsblock_v5 pb-40">
		<div class="container">
			<div class="calccontent__items calccontent__items_v5">
				<h2>
					Зачем нужна кредитная история
				</h2>
				<div class="cols4">
					<div class="cols4__col">
						<div class="calccontent__item calccontent__item_small">
							<div class="caclcontent__icon caclcontent__icon_blue"></div>
							<!-- /.caclcontent__icon caclcontent__icon_blue -->

							<div class="calccontent__text">
								Контролируйте информацию, которую передают банки
							</div>
						</div>
					</div>
					<div class="cols4__col">
						<div class="calccontent__item calccontent__item_small">
							<div class="caclcontent__icon "></div>
							<!-- /.caclcontent__icon caclcontent__icon_blue -->

							<div class="calccontent__text">
								Проверьте, не&nbsp;стали ли вы жертвой мошенников
							</div>
						</div>
					</div>
					<div class="cols4__col">
						<div class="calccontent__item calccontent__item_small">
							<div class="caclcontent__icon caclcontent__icon_red "></div>
							<!-- /.caclcontent__icon caclcontent__icon_blue -->

							<div class="calccontent__text">
								Оцените свою финансовую репутацию </div>
						</div>
					</div>
					<div class="cols4__col">
						<div class="calccontent__item calccontent__item_small">
							<div class="caclcontent__icon caclcontent__icon_red caclcontent__icon_redbg"></div>
							<!-- /.caclcontent__icon caclcontent__icon_blue -->

							<div class="calccontent__text">
								Узнайте причину отказа в&nbsp;кредите </div>
						</div>
					</div>

				</div>
			</div>
		</div><!-- /.container -->
	</div>


	<div class="rsmainslider rsmainslider_page rsmainslider_history rsmainslider_history_v5 pb-64" id="influence">
		<div class="rsblock">
			<div class="container">
				<h2 class='onlymobile'><? $APPLICATION->IncludeFile(
                        INCLUDE_PATH . "/pages/history/parts-history-label.php",
                        [],
                        [
                            "MODE" => "html",
                            "NAME" => "Текст",
                        ]
                    ); ?></h2>
				<div class="rsmainslider__container">
					<div class='rsmainslider_history_title onlydesktop'>
						<h2><? $APPLICATION->IncludeFile(
                                INCLUDE_PATH . "/pages/history/parts-history-label.php",
                                [],
                                [
                                    "MODE" => "html",
                                    "NAME" => "Текст",
                                ]
                            ); ?></h2>
					</div>
					<div class="rsmainslider__slider js-ki">
						<div class="rsmainslider--slide">
							<div class="rsmainslider__wrapper">
								<div class="rsmainslider__main">
									<div class="rsmainslider__title">
										<h3><? $APPLICATION->IncludeFile(
                                                INCLUDE_PATH . "/pages/history/parts-history-1-label.php",
                                                [],
                                                [
                                                    "MODE" => "html",
                                                    "NAME" => "Текст",
                                                ]
                                            );?></h3>
									</div>
									<div class="rsmainslider__text">
										<p><? $APPLICATION->IncludeFile(
                                                INCLUDE_PATH . "/pages/history/parts-history-1.php",
                                                [],
                                                [
                                                    "MODE" => "html",
                                                    "NAME" => "Текст",
                                                ]
                                            ); ?></p>
									</div>


								</div>
								<div class="rsmainslider__image">
									<img src="<?=SITE_TEMPLATE_PATH?>/public/img/process/ki_banner_1.webp">
								</div>
							</div>
						</div>
						<div class="rsmainslider--slide">
							<div class="rsmainslider__wrapper">
								<div class="rsmainslider__main">
									<div class="rsmainslider__title">
										<h3><? $APPLICATION->IncludeFile(
                                                INCLUDE_PATH . "/pages/history/parts-history-2-label.php",
                                                [],
                                                [
                                                    "MODE" => "html",
                                                    "NAME" => "Текст",
                                                ]
                                            ); ?></h3>
									</div>
									<div class="rsmainslider__text">
										<p><? $APPLICATION->IncludeFile(
                                                INCLUDE_PATH . "/pages/history/parts-history-2.php",
                                                [],
                                                [
                                                    "MODE" => "html",
                                                    "NAME" => "Текст",
                                                ]
                                            ); ?></p>
									</div>
								</div>
								<div class="rsmainslider__image">
								<img src="<?=SITE_TEMPLATE_PATH?>/public/img/process/ki_banner_2.webp" alt="">
								</div>
							</div>
						</div>

						<div class="rsmainslider--slide">
							<div class="rsmainslider__wrapper">
								<div class="rsmainslider__main">
									<div class="rsmainslider__title">
										<h3><? $APPLICATION->IncludeFile(
                                                INCLUDE_PATH . "/pages/history/parts-history-3-label.php",
                                                [],
                                                [
                                                    "MODE" => "html",
                                                    "NAME" => "Текст",
                                                ]
                                            ); ?></h3>
									</div>
									<div class="rsmainslider__text">
										<p><? $APPLICATION->IncludeFile(
                                                INCLUDE_PATH . "/pages/history/parts-history-3.php",
                                                [],
                                                [
                                                    "MODE" => "html",
                                                    "NAME" => "Текст",
                                                ]
                                            ); ?></p>
									</div>
								</div>
								<div class="rsmainslider__image">
									<img src="<?=SITE_TEMPLATE_PATH?>/public/img/process/ki_banner_3.webp" alt="">
								</div>
							</div>
						</div>
						<div class="rsmainslider--slide">
							<div class="rsmainslider__wrapper">
								<div class="rsmainslider__main">
									<div class="rsmainslider__title">
										<h3><? $APPLICATION->IncludeFile(
                                                INCLUDE_PATH . "/pages/history/parts-history-4-label.php",
                                                [],
                                                [
                                                    "MODE" => "html",
                                                    "NAME" => "Текст",
                                                ]
                                            ); ?></h3>
									</div>
									<div class="rsmainslider__text">
										<p><? $APPLICATION->IncludeFile(
                                                INCLUDE_PATH . "/pages/history/parts-history-4.php",
                                                [],
                                                [
                                                    "MODE" => "html",
                                                    "NAME" => "Текст",
                                                ]
                                            ); ?></p>
									</div>
								</div>
								<div class="rsmainslider__image">
									<img src="<?=SITE_TEMPLATE_PATH?>/public/img/process/ki_banner_4.webp" alt="" >
								</div>
							</div>
						</div>

					</div>

					<div class="rsmainslider__arrows">
						<div class="rsmainslider__arrow rsmainslider__arrowleft ">
							<img src="<?=SITE_TEMPLATE_PATH?>/public/images/left_v5.svg" alt="">
						</div>
						<div class="rsmainslider__arrow rsmainslider__arrowright ">
							<img src="<?=SITE_TEMPLATE_PATH?>/public/images/right_v5.svg" alt="">
						</div>
					</div><!-- /.rsmainslider__arrows -->
				</div>

			</div>
		</div>
	</div>


	<div class="rsblock rsblock_v5 pb-64">
		<div class="container">
			<div class=" blueblock_history blueblock_history_v5 bannerblock_v5 bannerblock_price_v5">
				<div class=" bannerblock_v5--columns">
					<div class=" bannerblock_v5__content--left">
						<div class="bannerblock_v5__main">
							<div class="bannerblock_v5__title">
								<h2><? $APPLICATION->IncludeFile(
                                        INCLUDE_PATH . "/pages/history/price-label.php",
                                        [],
                                        [
                                            "MODE" => "html",
                                            "NAME" => "Текст",
                                        ]
                                    ); ?></h2>
							</div>
							<div class="bannerblock_v5__text">
                                <? $APPLICATION->IncludeFile(
                                    INCLUDE_PATH . "/pages/history/price-1.php",
                                    [],
                                    [
                                        "MODE" => "html",
                                        "NAME" => "Текст",
                                    ]
                                ); ?>
							</div>
							<div class="bannerblock_v5__text">
								<? $APPLICATION->IncludeFile(
                                INCLUDE_PATH . "/pages/history/price-2.php",
                                [],
                                [
                                    "MODE" => "html",
                                    "NAME" => "Текст",
                                ]
                            ); ?></div>
						</div>
						<div class="blueblock__buttons onlydesktop">
							<a href="//person.nbki.ru/login" class="btn_main btn_main_v5 btn_main_bnr"
							   target="_blank">Получить
								онлайн</a>
						</div>
					</div>
					<div class="blueblock__imageright">
						<div class="card card_history">
							<div class="card__wrapper">
								<div class="card__content">
									<div class="colorcounts">
										<div class="colorcounts__items">
											<div class="colorcounts__item">
												<div class="colorcount">
													<div class="colorcount__number colorcount__number--red">2</div>
													<div class="colorcount__text">отчета в&nbsp;год бесплатно</div>
												</div>
											</div>
											<div class="colorcounts__item">
												<div class="colorcount">
													<div class="colorcount__number colorcount__number--blue">450 ₽
													</div>
													<div class="colorcount__text">каждый следующий</div>
												</div>
											</div>
										</div>
									</div>
									<div class="listblock__list list_v5 listblock__list_light">
										<ul class="listblock__green">
											<li>
												Если вы планируете оформить
												кредит или ипотеку и&nbsp;хотите
												оценить шансы на&nbsp;одобрение
											</li>
											<li>
												Если вам отказали в&nbsp;кредите и&nbsp;вы&nbsp;хотите узнать,
												почему
											</li>

										</ul>
									</div>
								</div><!-- /.card__content -->
							</div><!-- /.card__wrapper -->
						</div>
						<div class="blueblock__buttons onlymobile">
							<a href="//person.nbki.ru/login" class="btn_main btn_main_v5 btn_main_bnr"
							   target="_blank">Получить
								онлайн</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<div class="guideslider rsblock_v5   blueblock_process_v5 blueblock_process_v5--ki pb-40">
		<div class="container">
			<div class='blueblock'>
				<div class="guideslider__container  guideslider_v5">
					<div class="blueblock__title">
						<h2><? $APPLICATION->IncludeFile(
                                INCLUDE_PATH . "/pages/history/get-history-label.php",
                                [],
                                [
                                    "MODE" => "html",
                                    "NAME" => "Текст",
                                ]
                            ); ?></h2>
					</div>
					<div class="guideslider__slider">
						<div class="guideslider__slide">
							<div class="guidesliderr__item">

								<div class="guideslider__left">
									<div class="giudeslider__title">
                                        <? $APPLICATION->IncludeFile(
                                            INCLUDE_PATH . "/pages/history/get-history-1-label.php",
                                            [],
                                            [
                                                "MODE" => "html",
                                                "NAME" => "Текст",
                                            ]
                                        ); ?>
									</div>
									<div class="guideslider__text">
										<p>
											<? $APPLICATION->IncludeFile(
                                                INCLUDE_PATH . "/pages/history/get-history-1.php",
                                                [],
                                                [
                                                    "MODE" => "html",
                                                    "NAME" => "Текст",
                                                ]
                                            ); ?>
										</p>
									</div>
								</div>

								<div class="guideslider__right">
									<div class="guideslider__image">
										<img src="<?=SITE_TEMPLATE_PATH?>/public/img/pkr_process_v5_1.svg" alt="" class='onlydesktop'>
										<img src="<?=SITE_TEMPLATE_PATH?>/public/img/process/legko-ki-1.webp" alt="" class='onlymobile'>
									</div>
								</div>
							</div>
						</div>
						<div class="guideslider__slide">
							<div class="guidesliderr__item">
								<div class="guideslider__left">
									<div class="giudeslider__title">
                                        <? $APPLICATION->IncludeFile(
                                            INCLUDE_PATH . "/pages/history/get-history-2-label.php",
                                            [],
                                            [
                                                "MODE" => "html",
                                                "NAME" => "Текст",
                                            ]
                                        ); ?>
									</div>
									<div class="guideslider__text">
										<p>
                                            <? $APPLICATION->IncludeFile(
                                                INCLUDE_PATH . "/pages/history/get-history-2.php",
                                                [],
                                                [
                                                    "MODE" => "html",
                                                    "NAME" => "Текст",
                                                ]
                                            ); ?>
										</p>
									</div>
								</div>
								<div class="guideslider__right">
									<div class="guideslider__image">
										<img src="<?=SITE_TEMPLATE_PATH?>/public/img/pkr_process_v5_2.svg" alt="" class='onlydesktop'>
										<img src="<?=SITE_TEMPLATE_PATH?>/public/img/process/legko-ki-2.webp" alt="" class='onlymobile'>
									</div>
								</div>
							</div>
						</div>
						<div class="guideslider__slide">
							<div class="guidesliderr__item">
								<div class="guideslider__left">
									<div class="giudeslider__title">
                                        <? $APPLICATION->IncludeFile(
                                            INCLUDE_PATH . "/pages/history/get-history-3-label.php",
                                            [],
                                            [
                                                "MODE" => "html",
                                                "NAME" => "Текст",
                                            ]
                                        ); ?>
									</div>
									<div class="guideslider__text">
										<p><? $APPLICATION->IncludeFile(
                                                INCLUDE_PATH . "/pages/history/get-history-3.php",
                                                [],
                                                [
                                                    "MODE" => "html",
                                                    "NAME" => "Текст",
                                                ]
                                            ); ?>
										</p>
									</div>
								</div>
								<div class="guideslider__right">
									<div class="guideslider__image">
										<img src="<?=SITE_TEMPLATE_PATH?>/public/img/ki_process_v5_1.svg" alt="" class='onlydesktop'>
										<img src="<?=SITE_TEMPLATE_PATH?>/public/img/process/legko-ki-3.webp" alt="" class='onlymobile'>
									</div>
								</div>
							</div>
						</div>


					</div>

					<div class="blueblock__buttons">
						<a href="https://person.nbki.ru/login"
						   class="btn_main btn_main_white btn_main_white_v5 btn_main_white_blue"
						   target="_blank">Узнать свою КИ</a>
						<a href="//nbki.ru/serviceszaem/svedeniya1/"
						   class="btn_main btn_main_v5  btn_main_v5border_white " target="_blank">Другие способы
							получить КИ</a>
					</div>

				</div>

			</div>
		</div>
	</div>


	<div class="rsblock rsblock_v5 pb-64 mob-pb-22">
		<div class="rsreview">
			<div class="container">
				<h2>Отзывы наших клиентов</h2>
				<div class="rsreview__container">
					<div class="rsreview__slider js-reviews">
						<div class="rsreview__slide">
							<div class="rsreview__card">
								<div class="rsreviewcard" id="bx_3997782468_1024144">
									<div class="rsreviewcard__header">
										<div class="rsreviewcard__img"><img src="/local/templates/nbkiv4/public/img/kirev1.png" alt=""></div>
										<div class="rsreviewcard__name">Ульяна</div>
									</div>
									<div class="rsreviewcard__main">
										<div class="rsreviewcard__text">
											<p>По закону можно раз или 2 в&nbsp;год сделать проверку бесплатно своей
												кредитной истории. Делала это в&nbsp;НБКИ. Как мне кажется они
												предоставляют самые полные данные по&nbsp;всей кредитной истории. В
												истории были включены даже микрозаймы, о&nbsp;которых я вообще
												напрочь
												забыла. По ПКР, который выдается сайтом сразу понятно какие
												«условия» тебя ждут</p>
										</div><!-- /.rsreviewcard__text -->
									</div><!-- /.rsreviewcard__main -->
								</div><!-- /.rsreviewcard -->
							</div><!-- /.rsreview__card -->
						</div><!-- /.rsreview__slide -->
						<div class="rsreview__slide">
							<div class="rsreview__card">
								<div class="rsreviewcard" id="bx_3997782468_1024143">
									<div class="rsreviewcard__header">
										<div class="rsreviewcard__img"><img src="/local/templates/nbkiv4/public/img/kirev2.png" alt=""></div>
										<div class="rsreviewcard__name">Анна</div>
									</div>
									<div class="rsreviewcard__main">
										<div class="rsreviewcard__text">
											<p>Впредь не&nbsp;беру кредиты, пока не&nbsp;посмотрю свою кредитную
												историю. В
												прошлом году пошла в&nbsp;банк брать займ. Отказали целых 3
												организации.
												Уже хотела идти в&nbsp;МФО, но передумала. Нашла выход
												из&nbsp;ситуации:
												обратилась в&nbsp;НБКИ. Оказалось, что у&nbsp;меня висят
												просроченные
												долги -
												а&nbsp;это правда. Поэтому получаю отказы в&nbsp;кредите. Взялась за
												ум,
												начала исправлять ошибку. Новый кредит буду выплачивать уже
												исправно!</p>
										</div><!-- /.rsreviewcard__text -->
									</div><!-- /.rsreviewcard__main -->
								</div><!-- /.rsreviewcard -->
							</div><!-- /.rsreview__card -->
						</div><!-- /.rsreview__slide -->
						<div class="rsreview__slide">
							<div class="rsreview__card">
								<div class="rsreviewcard" id="bx_3997782468_1024134">
									<div class="rsreviewcard__header">
										<div class="rsreviewcard__img"><img src="/local/templates/nbkiv4/public/img/kirev3.png" alt=""></div>
										<div class="rsreviewcard__name">Андрей</div>
									</div>
									<div class="rsreviewcard__main">
										<div class="rsreviewcard__text">
											<p>Ради интереса решил проверить свою кредитную историю на&nbsp;сайте
												НБКИ.
												Не нашел ни единой ошибки. Удобный сайт, понятный интерфейс.
												Замечаний особых нет, разве что хочется 3-4 раза в&nbsp;год
												бесплатно
												проверять свою КИ. Но и&nbsp;двух вполне хватает.</p>
										</div><!-- /.rsreviewcard__text -->
									</div><!-- /.rsreviewcard__main -->
								</div><!-- /.rsreviewcard -->
							</div><!-- /.rsreview__card -->
						</div><!-- /.rsreview__slide -->
						<div class="rsreview__slide">
							<div class="rsreview__card">
								<div class="rsreviewcard" id="bx_3997782468_1024131">
									<div class="rsreviewcard__header">
										<div class="rsreviewcard__img"><img src="/local/templates/nbkiv4/public/img/kirev4.png" alt=""></div>
										<div class="rsreviewcard__name">Юрий
										</div>
									</div>
									<div class="rsreviewcard__main">
										<div class="rsreviewcard__text">
											<p>Решил перед тем как взять кредит, проверить свою кредитную историю.
												Сделал это с помощью НБКИ. Регистрация простая, сайт понятный. Сразу
												нашёл, что нужно и&nbsp;проверил себя. Данные прислали быстро, вся
												информация верная.</p>
										</div><!-- /.rsreviewcard__text -->
									</div><!-- /.rsreviewcard__main -->
								</div><!-- /.rsreviewcard -->
							</div><!-- /.rsreview__card -->
						</div><!-- /.rsreview__slide -->

					</div><!-- /.rsreview__slider js-reviews -->
					<div class="rsreview__arrows">
						<div class="rsreview__arrow rsreview__arrow_left slideLeft"><img
									src="/local/templates/nbkiv4/public/images/rsreviewleft.svg" alt=""></div>
						<div class="rsreview__arrow rsreview__arrow_right slideRight"><img
									src="/local/templates/nbkiv4/public/images/rsreviewright.svg" alt=""></div>
					</div><!-- /.rsreview__arrows -->
				</div><!-- /.rsreview__container -->
			</div><!-- /.container -->
		</div><!-- /.rsreview -->

	</div><!-- /.rsblock -->

	<div class="blockmobile rsblock rsblock_more rsblock_v5 pb-64">
		<div class="container">
			<h2>Еще услуги</h2>
			<div class="mainblock__row">

				<div class="mainblock__col mainblock__col_small mainblock__col_compact">
					<div class="servicecard servicecard_big">
						<a href='/pkr/' class="servicecard__content">
							<div class="servicecard__main">
								<div class="servicecard__info">
									<div class="servicecard__header">
										<div class="servicecard__title">
											Персональный <br> кредитный <br>
											рейтинг
										</div>
										<div class="servicecard__icon">
											<img src="<?=SITE_TEMPLATE_PATH?>/public/img/pkr_v52.svg" alt="">
										</div>
									</div>

								</div>
							</div>

						</a>
					</div>
				</div>

				<div class="mainblock__col mainblock__col_small mainblock__col_compact">
					<div class="servicecard servicecard_big">
						<a href='/zashchita-ot-moshennichestva/' class="servicecard__content">
							<div class="servicecard__main">
								<div class="servicecard__info">
									<div class="servicecard__header">
										<div class="servicecard__title">
											Защита от мошенничества
										</div>
										<div class="servicecard__icon">
											<img src="<?=SITE_TEMPLATE_PATH?>/public/img/zm.svg" alt="">
										</div>
									</div>

								</div>
							</div>

						</a>
					</div>
				</div>

				<div class="mainblock__col mainblock__col_small mainblock__col_compact">
					<div class="servicecard servicecard_big">
						<a href='/podpiska-na-credithistory/' class="servicecard__content">
							<div class="servicecard__main">
								<div class="servicecard__info">
									<div class="servicecard__header">
										<div class="servicecard__title">
											Подписка на&nbsp;кредитную историю
										</div>
										<div class="servicecard__icon">
											<img src="<?=SITE_TEMPLATE_PATH?>/public/img/pod_more_v4.svg" alt="">
										</div>
									</div>

								</div>
							</div>

						</a>
					</div>
				</div>

			</div>

		</div>
	</div><!-- /.blockmobile -->
	<div class="rsblock rsblock_more rsblock_v5 pb-64 blockdesktop">
		<div class="container">
			<h2>Еще услуги</h2>
			<div class="mainblock__row">

				<div class="mainblock__col mainblock__col_small mainblock__col_compact">
					<div class="servicecard servicecard_big">
						<div class="servicecard__content">
							<div class="servicecard__main">
								<div class="servicecard__info">
									<div class="servicecard__header">
										<div class="servicecard__title">
											Персональный <br> кредитный <br>
											рейтинг
										</div>
										<div class="servicecard__icon">
											<img src="<?=SITE_TEMPLATE_PATH?>/public/img/pkr_v52.svg" alt="">
										</div>
									</div>
									<div class="servicecard__text">
										Показатель вашей кредитоспособности, рассчитанный на&nbsp;основе данных
										кредитной истории.
									</div>
								</div>
							</div>
							<div class="servicecard__nav">
								<a href="/pkr/ " class="btn_main btn_main_v5 btn_main_large">Подробнее</a>
							</div>
						</div>
					</div>
				</div>

				<div class="mainblock__col mainblock__col_small mainblock__col_compact">
					<div class="servicecard servicecard_big">
						<div class="servicecard__content">
							<div class="servicecard__main">
								<div class="servicecard__info">
									<div class="servicecard__header">
										<div class="servicecard__title">
											Защита от мошенничества
										</div>
										<div class="servicecard__icon">
											<img src="<?=SITE_TEMPLATE_PATH?>/public/img/zm.svg" alt="">
										</div>
									</div>
									<div class="servicecard__text">
										Годовая подписка на&nbsp;уведомления о&nbsp;новых кредитах или паспортных
										данных
										в&nbsp;кредитной истории
									</div>
								</div>
							</div>
							<div class="servicecard__nav">
								<a href="/zashchita-ot-moshennichestva/"
								   class="btn_main btn_main_v5 btn_main_large">Подробнее</a>
							</div>
						</div>
					</div>
				</div>

				<div class="mainblock__col mainblock__col_small mainblock__col_compact">
					<div class="servicecard servicecard_big">
						<div class="servicecard__content">
							<div class="servicecard__main">
								<div class="servicecard__info">
									<div class="servicecard__header">
										<div class="servicecard__title">
											Подписка на&nbsp;кредитную историю
										</div>
										<div class="servicecard__icon">
											<img src="<?=SITE_TEMPLATE_PATH?>/public/img/pod_more_v4.svg" alt="">
										</div>
									</div>
									<div class="servicecard__text">
										Получение кредитной истории <br> на&nbsp;email в&nbsp;течение полугода
									</div>
								</div>
							</div>
							<div class="servicecard__nav">
								<a href="/podpiska-na-credithistory/"
								   class="btn_main  btn_main_v5 btn_main_large">Подробнее</a>
							</div>
						</div>
					</div>
				</div>

			</div>

		</div>
	</div>
	<div class="accordeonblock mob-pb-22">
		<div class="container">
			<h2 class="vopros" id="block_faq">
				Ответы на&nbsp;вопросы
			</h2>
			<div>
				<div class="" role="tablist" itemscope="" itemtype="http://schema.org/FAQPage">

					<div class="accordionwrapper" role="tablist">
						<div class="questionwrapper">
							<p class="accordion__title " role="tab" id="ui-id-1" aria-controls="ui-id-2"
							   aria-selected="false" aria-expanded="false" tabindex="-1"><span
										class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span>Что такое
								кредитная история (КИ)?</p>

							<div class="accordion__content " id="ui-id-2" aria-labelledby="ui-id-1" role="tabpanel"
							     aria-hidden="true" style="display: none;" itemscope="" itemprop="mainEntity"
							     itemtype="http://schema.org/Question">
								<meta itemprop="name" content="Что такое кредитная история (КИ)?">
								<p class="accordion__small" itemprop="acceptedAnswer" itemscope=""
								   itemtype="http://schema.org/Answer"><span itemprop="text">Кредитная история –
										это документ, в&nbsp;котором собрана информация обо всей кредитной
										активности
										юридического или физического лица. В ней содержится информация
										о&nbsp;запросах на
										кредиты, в&nbsp;том числе с отрицательным результатом, обслуживании
										и&nbsp;погашении
										задолженности, о&nbsp;поручительствах и&nbsp;кредиторах. Здесь же отражаются
										просрочки
										или, наоборот, досрочные погашения. На основании этих сведений банки делают
										вывод, насколько надежным клиентом является заемщик.</span> </p>
							</div>

						</div>
						<div class="questionwrapper">
							<p class="accordion__title " role="tab" id="ui-id-3" aria-controls="ui-id-4"
							   aria-selected="false" aria-expanded="false" tabindex="-1"><span
										class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span>Когда
								формируется КИ?</p>

							<div class="accordion__content " id="ui-id-4" aria-labelledby="ui-id-3" role="tabpanel"
							     aria-hidden="true" style="display: none;" itemscope="" itemprop="mainEntity"
							     itemtype="http://schema.org/Question">
								<meta itemprop="name" content="Когда формируется КИ?">
								<p class="accordion__small" itemprop="acceptedAnswer" itemscope=""
								   itemtype="http://schema.org/Answer"><span itemprop="text">Кредитная история
										создается, когда человек впервые запрашивает кредит или выступает
										в&nbsp;качестве
										поручителя. В дальнейшем история дополняется в&nbsp;зависимости от появления
										новой информации о&nbsp;том, насколько аккуратно заемщик обслуживает
										и&nbsp;погашает
										свой долг. Просмотр кредитной истории на&nbsp;регулярной основе позволит
										контролировать правильность переданной информации.</span> </p>
							</div>
						</div>
						<div class="questionwrapper">
							<p class="accordion__title " role="tab" id="ui-id-5" aria-controls="ui-id-6"
							   aria-selected="false" aria-expanded="false" tabindex="0"><span
										class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span>Где
								хранится кредитная история?</p>

							<div class="accordion__content " id="ui-id-6" aria-labelledby="ui-id-5" role="tabpanel"
							     aria-hidden="true" style="display: none;" itemscope="" itemprop="mainEntity"
							     itemtype="http://schema.org/Question">
								<meta itemprop="name" content="Где хранится кредитная история?">
								<p class="accordion__small" itemprop="acceptedAnswer" itemscope=""
								   itemtype="http://schema.org/Answer"><span itemprop="text">Все кредитные истории
										хранятся в&nbsp;бюро кредитных историй (БКИ). В России работают несколько
										таких
										организаций, среди них Национальное бюро кредитных историй является
										крупнейшим. Записи для&nbsp;пополнения кредитной истории в&nbsp;бюро
										передают
										кредиторы по&nbsp;мере появления новой информации о&nbsp;кредитах и&nbsp;их
										обслуживании
										заемщиком. Закон о&nbsp;персональных данных не&nbsp;распространяется на
										передачу
										в&nbsp;БКИ
										этих сведений.</span></p>
							</div>
						</div>
						<div class="questionwrapper">
							<p class="accordion__title " role="tab" id="ui-id-7" aria-controls="ui-id-8"
							   aria-selected="false" aria-expanded="false" tabindex="-1"><span
										class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span>Можно ли
								узнать кредитную историю онлайн? </p>

							<div class="accordion__content " id="ui-id-8" aria-labelledby="ui-id-7" role="tabpanel"
							     aria-hidden="true" style="display: none;" itemscope="" itemprop="mainEntity"
							     itemtype="http://schema.org/Question">
								<meta itemprop="name" content="Можно ли узнать кредитную историю онлайн?">
								<p class="accordion__small" itemprop="acceptedAnswer" itemscope=""
								   itemtype="http://schema.org/Answer"><span itemprop="text">Да! Самый простой,
										удобный и&nbsp;быстрый способ запросить кредитную историю - заказать услугу
										онлайн. Если у&nbsp;вас есть подтвержденный аккаунт на&nbsp;портале
										госуслуг, ее
										получение на&nbsp;сайте НБКИ в&nbsp;<a
												href="https://person.nbki.ru/subject-cabinet/" rel="nofollow">личном
											кабинете заемщика</a>&nbsp;займет 2-3 минуты.</span></p>
							</div>
						</div>
						<div class="questionwrapper">
							<p class="accordion__title " role="tab" id="ui-id-9" aria-controls="ui-id-10"
							   aria-selected="false" aria-expanded="false" tabindex="-1"><span
										class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span>Как
								получить кредитную историю в&nbsp;НБКИ?
							</p>

							<div class="accordion__content " id="ui-id-10" aria-labelledby="ui-id-9" role="tabpanel"
							     aria-hidden="true" style="display: none;" itemscope="" itemprop="mainEntity"
							     itemtype="http://schema.org/Question">
								<meta itemprop="name" content="Как получить кредитную историю в&nbsp;НБКИ?
                            ">
								<p class="accordion__small" itemprop="acceptedAnswer" itemscope=""
								   itemtype="http://schema.org/Answer"><span itemprop="text">Чтобы сделать запрос
										кредитного отчета через Интернет, понадобится иметь&nbsp;<a
												href="https://person.nbki.ru" rel="nofollow">учетную запись на
											официальном сайте НБКИ</a>&nbsp;и подтвержденный аккаунт на&nbsp;портале
										государственных услуг. Кроме того, можно отправить запрос письмом или
										телеграммой или воспользоваться услугой личной подачи заявления в&nbsp;офисе
										НБКИ
										для&nbsp;физических лиц.</span></p>
							</div>
						</div>
						<div class="questionwrapper">
							<p class="accordion__title " role="tab" id="ui-id-11" aria-controls="ui-id-12"
							   aria-selected="false" aria-expanded="false" tabindex="-1"><span
										class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span>Сколько раз
								можно узнавать?</p>

							<div class="accordion__content " id="ui-id-12" aria-labelledby="ui-id-11"
							     role="tabpanel" aria-hidden="true" style="display: none;" itemscope=""
							     itemprop="mainEntity" itemtype="http://schema.org/Question">
								<meta itemprop="name" content="Сколько раз можно узнавать?">
								<p class="accordion__small" itemprop="acceptedAnswer" itemscope=""
								   itemtype="http://schema.org/Answer"><span itemprop="text">Получать свою
										кредитную историю и&nbsp;контролировать правильность данных в&nbsp;ней можно
										любое
										количество раз. Рекомендуем это делать на&nbsp;регулярной основе. Ежегодно
										первые
										два отчета предоставляются бесплатно. Самый удобный способ быстрой проверки
										кредитной истории – online запрос.</span></p>
							</div>
						</div>
						<div class="questionwrapper">
							<p class="accordion__title " role="tab" id="ui-id-13" aria-controls="ui-id-14"
							   aria-selected="false" aria-expanded="false" tabindex="-1"><span
										class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span>Что делать,
								если в&nbsp;кредитной истории ошибка?</p>

							<div class="accordion__content " id="ui-id-14" aria-labelledby="ui-id-13"
							     role="tabpanel" aria-hidden="true" style="display: none;" itemscope=""
							     itemprop="mainEntity" itemtype="http://schema.org/Question">
								<meta itemprop="name" content="Что делать, если в&nbsp;кредитной истории ошибка?">
								<p class="accordion__small" itemprop="acceptedAnswer" itemscope=""
								   itemtype="http://schema.org/Answer"><span itemprop="text">Если вы просмотрели
										кредитную историю и&nbsp;заметили в&nbsp;ней неверные сведения, можете
										подать
										заявление на&nbsp;оспаривание в&nbsp;бюро кредитных историй. Для ускорения
										процесса
										рекомендуется одновременно подать соответствующее заявление кредитору,
										сформировавшему ошибочные сведения. Если наличие ошибки будет подтверждено,
										ее исправят.</span></p>
							</div>
						</div>
						<div class="questionwrapper">
							<p class="accordion__title " role="tab" id="ui-id-15" aria-controls="ui-id-16"
							   aria-selected="false" aria-expanded="false" tabindex="-1"><span
										class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span>Может ли
								история различаться в&nbsp;разных БКИ?</p>

							<div class="accordion__content " id="ui-id-16" aria-labelledby="ui-id-15"
							     role="tabpanel" aria-hidden="true" style="display: none;" itemscope=""
							     itemprop="mainEntity" itemtype="http://schema.org/Question">
								<meta itemprop="name" content="Может ли история различаться в&nbsp;разных БКИ?">
								<p class="accordion__small" itemprop="acceptedAnswer" itemscope=""
								   itemtype="http://schema.org/Answer"><span itemprop="text">Если банки, с которыми
										вы имели дело, сотрудничают с разными бюро, кредитные истории в&nbsp;них
										могут
										различаться. Проверить и&nbsp;получить наиболее полную информацию
										о&nbsp;том, где
										хранится ваша кредитная история, можно в&nbsp;Центральном каталоге кредитных
										историй Банка России.</span></p>
							</div>
						</div>
						<div class="questionwrapper">
							<p class="accordion__title " role="tab" id="ui-id-17" aria-controls="ui-id-18"
							   aria-selected="false" aria-expanded="false" tabindex="-1">Как посмотреть кредитную
								историю?<span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span>
							</p>

							<div class="accordion__content " id="ui-id-20" aria-labelledby="ui-id-19"
							     role="tabpanel" aria-hidden="true" style="display: none;" itemscope=""
							     itemprop="mainEntity" itemtype="http://schema.org/Question">
								<meta itemprop="name" content="Как посмотреть кредитную историю?">
								<p class="accordion__small" itemprop="acceptedAnswer" itemscope=""
								   itemtype="http://schema.org/Answer"><span itemprop="text"> Посмотреть свою
										кредитную историю можно в&nbsp;личном кабинете на&nbsp;сайте НБКИ. Чтобы это
										сделать,
										необходимо иметь подтвержденную учетную запись на&nbsp;сайте Госуслуг.
										Воспользоваться услугой можно и&nbsp;другими способами: по&nbsp;почте,
										телеграммой,
										обратившись в&nbsp;офис приема субъектов НБКИ, по&nbsp;электронной почте
										(эти
										варианты
										бесплатны), а&nbsp;также у&nbsp;кого-либо из&nbsp;партнеров НБКИ лично или
										онлайн
										(платно).</span> </p>
							</div>
						</div>
						<div class="questionwrapper">
							<p class="accordion__title " role="tab" id="ui-id-21" aria-controls="ui-id-22"
							   aria-selected="false" aria-expanded="false" tabindex="-1"><span
										class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span>Где можно
								проверить кредитную историю?</p>

							<div class="accordion__content " id="ui-id-22" aria-labelledby="ui-id-21"
							     role="tabpanel" aria-hidden="true" style="display: none;" itemscope=""
							     itemprop="mainEntity" itemtype="http://schema.org/Question">
								<meta itemprop="name" content="Где можно проверить кредитную историю?">
								<p class="accordion__small" itemprop="acceptedAnswer" itemscope=""
								   itemtype="http://schema.org/Answer"><span itemprop="text">Чтобы проверить
										кредитную историю быстро, достаточно зарегистрироваться на&nbsp;сайте НБКИ,
										имея
										подтвержденную учетную запись на&nbsp;портале Госуслуг, и&nbsp;сделать
										запрос в
										личном
										кабинете. Можно воспользоваться другими способами, обратившись в&nbsp;НБКИ
										по
										почте, с помощью телеграммы, лично в&nbsp;офисе приема субъектов или сделав
										запрос по&nbsp;электронной почте.</span> </p>
							</div>
						</div>
						<div class="questionwrapper">
							<p class="accordion__title " role="tab" id="ui-id-21" aria-controls="ui-id-22"
							   aria-selected="false" aria-expanded="false" tabindex="-1"><span
										class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span>Чем
								электронный отчет о&nbsp;кредитной истории отличается от бумажного
							</p>

							<div class="accordion__content " id="ui-id-22" aria-labelledby="ui-id-21"
							     role="tabpanel" aria-hidden="true" style="display: none;" itemscope=""
							     itemprop="mainEntity" itemtype="http://schema.org/Question">
								<meta itemprop="name"
								      content="Чем электронный отчет о&nbsp;кредитной истории отличается от бумажного">
								<p class="accordion__small" itemprop="acceptedAnswer" itemscope=""
								   itemtype="http://schema.org/Answer"><span itemprop="text">По закону
										о&nbsp;кредитных
										историях юридический статус кредитной истории на&nbsp;бумажном носителе
										ничем не
										отличается от статуса того же документа в&nbsp;электронном виде. Главное
										здесь –
										запрашивать историю только на&nbsp;официальных ресурсах бюро кредитных
										историй,
										потому что есть вероятность нарваться на&nbsp;мошенников.
									</span> </p>
							</div>
						</div>
						<div class="questionwrapper">
							<p class="accordion__title " role="tab" id="ui-id-21" aria-controls="ui-id-22"
							   aria-selected="false" aria-expanded="false" tabindex="-1"><span
										class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span>Как
								исправить кредитную историю?

							</p>

							<div class="accordion__content " id="ui-id-22" aria-labelledby="ui-id-21"
							     role="tabpanel" aria-hidden="true" style="display: none;" itemscope=""
							     itemprop="mainEntity" itemtype="http://schema.org/Question">
								<meta itemprop="name" content="Как исправить кредитную историю?">
								<p class="accordion__small" itemprop="acceptedAnswer" itemscope=""
								   itemtype="http://schema.org/Answer"><span itemprop="text">Исправить историю так,
										чтобы условно «плохие записи» исчезли, а&nbsp;остались только хорошие,
										нельзя.
										Ваши просрочки будут оставаться в&nbsp;кредитной истории минимум семь лет
										после
										полного погашения. Единственная альтернатива – брать новые кредиты и
										аккуратно их гасить. Тогда кредитная история начнет улучшаться.
									</span> </p>
							</div>
						</div>
						<div class="questionwrapper">
							<p class="accordion__title " role="tab" id="ui-id-21" aria-controls="ui-id-22"
							   aria-selected="false" aria-expanded="false" tabindex="-1"><span
										class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span>Что делать,
								если в&nbsp;кредитной истории ошибка?

							</p>

							<div class="accordion__content " id="ui-id-22" aria-labelledby="ui-id-21"
							     role="tabpanel" aria-hidden="true" style="display: none;" itemscope=""
							     itemprop="mainEntity" itemtype="http://schema.org/Question">
								<meta itemprop="name" content="Что делать, если в&nbsp;кредитной истории ошибка?">
								<p class="accordion__small" itemprop="acceptedAnswer" itemscope=""
								   itemtype="http://schema.org/Answer"><span itemprop="text">Иногда
										в&nbsp;кредитной
										истории действительно обнаруживаются неточности. Специально для&nbsp;этого
										закон
										предусматривает механизм <a href="/spor/" target="_blank"
										                            class="link_blue">оспаривания</a> . Для этого заемщик может подать
										заявление как в&nbsp;бюро кредитных историй, так и&nbsp;в банк,
										сформировавший
										неверную запись. Опасность обнаруженной ошибки в&nbsp;том, что она может
										свидетельствовать о&nbsp;попытке мошенников взять кредит по&nbsp;украденным
										данным.
										Именно потому важно регулярно проверять свою кредитную историю.

									</span> </p>
							</div>
						</div>
						<div class="questionwrapper">
							<p class="accordion__title " role="tab" id="ui-id-21" aria-controls="ui-id-22"
							   aria-selected="false" aria-expanded="false" tabindex="-1"><span
										class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span>Может ли
								история различаться в&nbsp;разных БКИ?


							</p>

							<div class="accordion__content " id="ui-id-22" aria-labelledby="ui-id-21"
							     role="tabpanel" aria-hidden="true" style="display: none;" itemscope=""
							     itemprop="mainEntity" itemtype="http://schema.org/Question">
								<meta itemprop="name" content="Что делать, если в&nbsp;кредитной истории ошибка?">
								<p class="accordion__small" itemprop="acceptedAnswer" itemscope=""
								   itemtype="http://schema.org/Answer"><span itemprop="text">По закону банки должны
										передавать информацию для&nbsp;формирования кредитной истории в&nbsp;одно
										или
										несколько бюро кредитных историй. При этом каждый банк вправе сам выбирать,
										с кем налаживать информационное сотрудничество. Поэтому кредитные истории в
										разных бюро могут отличаться. Но это не&nbsp;оказывает влияние
										на&nbsp;одобрение
										или
										отклонение очередной заявки, потому что при принятии решения кредитор
										запрашивает все кредитные истории во всех БКИ.


									</span> </p>
							</div>
						</div>
					</div>
				</div>
				<br>
			</div>
		</div>
	</div>

</main>
