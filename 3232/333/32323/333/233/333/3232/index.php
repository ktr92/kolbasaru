<?
define('HIDE_BC', 'Y');
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetPageProperty("description", "Что делать с недостоверной или ошибочной информацией в КИ? Как можно оспорить кредитную историю? Узнайте подробности на сайте НБКИ.");
$APPLICATION->SetPageProperty("title", "Оспорить кредитную историю");
$APPLICATION->SetPageProperty("customBg", "/local/templates/nbki/public/images/bg6.png");
$APPLICATION->SetTitle("Как оспорить кредитную историю в НБКИ?");
?><div class="container pagecontent_v4">
	<div class="mainblockpkr mainblockpkr_v4">
		<div class="container">
			<div class="mainblockpkr__wrapper">
				<div class="mainblockpkr__main">
					<div class="mainblockpkr__title">
						<h1><? $APPLICATION->IncludeFile(
								INCLUDE_PATH . "/pages/spor/header-label.php",
								[],
								[
									"MODE" => "html",
									"NAME" => "Текст",
								]
							); ?></h1>
					</div>
					<div class="mainblockpkr__image onlymobile_v4">
 <img src="/images/spor.svg" alt="">
					</div>
					<div class="mainblockpkr__text">
						<div>
							<p>
								<? $APPLICATION->IncludeFile(
									INCLUDE_PATH . "/pages/spor/header-text.php",
									[],
									[
										"MODE" => "html",
										"NAME" => "Текст",
									]
								); ?>
							</p>
						</div>
					</div>
				</div>
				<div class="mainblockpkr__image onlydesktop_v4">
 <img src="/images/spor.svg" alt="">
				</div>
			</div>
		</div>
	</div>
	<div class="footsteps">
		<div class="nbki_v4 wrapperwhite">
			<h2><? $APPLICATION->IncludeFile(
					INCLUDE_PATH . "/pages/spor/steps-label.php",
					[],
					[
						"MODE" => "html",
						"NAME" => "Текст",
					]
				); ?></h2>
			<div class="footsteps__wrapper">
				<div class="footsteps__items">
					<div class="footsteps__item">
						<div class="footsteps__number">
							<div class="footsteps__num">
								 1
							</div>
						</div>
						<div class="footsteps__main">
							<div class="footsteps__content">
								<div class="footsteps__header">
									<div class="footsteps__title">
										<? $APPLICATION->IncludeFile(
											INCLUDE_PATH . "/pages/spor/steps-1-label.php",
											[],
											[
												"MODE" => "html",
												"NAME" => "Текст",
											]
										); ?>
									</div>
								</div>
								 <!-- /.footsteps__header -->
								<div class="footsteps__text">
									<? $APPLICATION->IncludeFile(
										INCLUDE_PATH . "/pages/spor/steps-1-text.php",
										[],
										[
											"MODE" => "html",
											"NAME" => "Текст",
										]
									); ?>
								</div>
								<div class="footesteps__docs">
									<div class="cols2">
										<div class="cols2__col cols2__col_col50">
 <a href="/documents/forma_osp_1_fiz.pdf" target="_blank" class="linkpdf"> <span class="linkpdf__icon"> <img src="/images/pdf_v4.svg" alt=""> </span> <span class="linkpdf__text">Заявление о&nbsp;внесении изменений и/или дополнений в&nbsp;кредитную историю </span></a>
										</div>
									</div>
									 <!-- /.cols2 -->
								</div>
								 <!-- /.footesteps__docs -->
							</div>
						</div>
						 <!-- /.footsteps__main -->
					</div>
					 <!-- /.footsteps__item -->
					<div class="footsteps__item">
						<div class="footsteps__number">
							<div class="footsteps__num">
								 2
							</div>
						</div>
						<div class="footsteps__main">
							<div class="footsteps__content">
								<div class="footsteps__header">
									<div class="footsteps__title">
										<? $APPLICATION->IncludeFile(
											INCLUDE_PATH . "/pages/spor/steps-2-label.php",
											[],
											[
												"MODE" => "html",
												"NAME" => "Текст",
											]
										); ?>
									</div>
								</div>
								 <!-- /.footsteps__header -->
								<div class="footsteps__text">
									<? $APPLICATION->IncludeFile(
										INCLUDE_PATH . "/pages/spor/steps-2-text.php",
										[],
										[
											"MODE" => "html",
											"NAME" => "Текст",
										]
									); ?>
								 <!-- /.bordered --> <br>
								 </div>
							</div>
						</div>
						 <!-- /.footsteps__main -->
					</div>
					 <!-- /.footsteps__item -->
					<div class="footsteps__item">
						<div class="footsteps__number">
							<div class="footsteps__num">
								 3
							</div>
						</div>
						<div class="footsteps__main">
							<div class="footsteps__content">
								<div class="footsteps__header">
									<div class="footsteps__title">
										<? $APPLICATION->IncludeFile(
											INCLUDE_PATH . "/pages/spor/steps-3-label.php",
											[],
											[
												"MODE" => "html",
												"NAME" => "Текст",
											]
										); ?>
									</div>
								</div>
								 <!-- /.footsteps__header -->
								<div class="footsteps__text">
									<? $APPLICATION->IncludeFile(
										INCLUDE_PATH . "/pages/spor/steps-3-text.php",
										[],
										[
											"MODE" => "html",
											"NAME" => "Текст",
										]
									); ?>
								</div>
							</div>
						</div>
						 <!-- /.footsteps__main -->
					</div>
					 <!-- /.footsteps__item -->
					<div class="footsteps__item">
						<div class="footsteps__number">
							<div class="footsteps__num">
								 4
							</div>
						</div>
						<div class="footsteps__main">
							<div class="footsteps__content">
								<div class="footsteps__header">
									<div class="footsteps__title">
										<? $APPLICATION->IncludeFile(
											INCLUDE_PATH . "/pages/spor/steps-4-label.php",
											[],
											[
												"MODE" => "html",
												"NAME" => "Текст",
											]
										); ?>
									</div>
								</div>
								 <!-- /.footsteps__header -->
								<div class="footsteps__text">
									<? $APPLICATION->IncludeFile(
										INCLUDE_PATH . "/pages/spor/steps-4-text.php",
										[],
										[
											"MODE" => "html",
											"NAME" => "Текст",
										]
									); ?>
								</div>
							</div>
						</div>
						 <!-- /.footsteps__main -->
					</div>
					 <!-- /.footsteps__item -->
					<div class="footsteps__item">
						<div class="footsteps__number">
							<div class="footsteps__num">
								 5
							</div>
						</div>
						<div class="footsteps__main">
							<div class="footsteps__content">
								<div class="footsteps__header">
									<div class="footsteps__title">
										<? $APPLICATION->IncludeFile(
											INCLUDE_PATH . "/pages/spor/steps-5-label.php",
											[],
											[
												"MODE" => "html",
												"NAME" => "Текст",
											]
										); ?>
									</div>
								</div>
								 <!-- /.footsteps__header -->
								<div class="footsteps__text">
									<? $APPLICATION->IncludeFile(
										INCLUDE_PATH . "/pages/spor/steps-5-label.php",
										[],
										[
											"MODE" => "html",
											"NAME" => "Текст",
										]
									); ?>
								</div>
							</div>
						</div>
						 <!-- /.footsteps__main -->
					</div>
					 <!-- /.footsteps__item -->
				</div>
				 <!-- /.footsteps__items -->
			</div>
			 <!-- /.footsteps__wrapper -->
		</div>
		 <!-- /.nbki_v4 wrapperwhite -->
	</div>
	 <!-- /.footsteps -->
	<div class="infocard">
		<div class="nbki_v4 wrapperwhite">
			<div class="infocard__wrapper">
				<div class="infocard__img onlymobile_v4">
 <img src="/images/spor1.svg" alt="">
				</div>
				<div class="infocard__title">
					<? $APPLICATION->IncludeFile(
						INCLUDE_PATH . "/pages/spor/infocard-1-label.php",
						[],
						[
							"MODE" => "html",
							"NAME" => "Текст",
						]
					); ?>
				</div>
				<div class="infocard__content">
					<div class="infocard__image">
						<div class="infocard__img onlydesktop_v4">
 <img src="/images/spor1.svg" alt="">
						</div>
					</div>
					 <!-- /.infocard__image -->
					<div class="infocard__main">
						<div class="infocard__text">
							<? $APPLICATION->IncludeFile(
								INCLUDE_PATH . "/pages/spor/infocard-1-text.php",
								[],
								[
									"MODE" => "html",
									"NAME" => "Текст",
								]
							); ?>
						</div>
					</div>
					 <!-- /.infocard__main -->
				</div>
				 <!-- /.infocard__content -->
			</div>
			 <!-- /.infocard__wrapper -->
		</div>
	</div>
	 <!-- /.infocard -->
	<div class="infocard">
		<div class="nbki_v4 wrapperwhite">
			<div class="infocard__wrapper">
				<div class="infocard__img onlymobile_v4">
 <img src="/images/spor2.svg" alt="">
				</div>
				<div class="infocard__title">
					<? $APPLICATION->IncludeFile(
						INCLUDE_PATH . "/pages/spor/infocard-2-label.php",
						[],
						[
							"MODE" => "html",
							"NAME" => "Текст",
						]
					); ?>
				</div>
				<div class="infocard__content">
					<div class="infocard__image">
						<div class="infocard__img onlydesktop_v4">
 <img src="/images/spor2.svg" alt="">
						</div>
					</div>
					 <!-- /.infocard__image -->
					<div class="infocard__main">
						<? $APPLICATION->IncludeFile(
							INCLUDE_PATH . "/pages/spor/infocard-2-text.php",
							[],
							[
								"MODE" => "html",
								"NAME" => "Текст",
							]
						); ?>
					</div>
					 <!-- /.infocard__main -->
				</div>
				 <!-- /.infocard__content -->
			</div>
			 <!-- /.infocard__wrapper -->
		</div>
	</div>
	 <!-- /.infocard -->
	<div class="borderblock borderblock_dark">
		<div class="borderblock__line">
		</div>
		<div class="borderblock__content">
			<div class="cols2">
				<div class="cols2__col cols2__col_col50">
					<div class="itemblock__content">
						<div class="itemblock__header">
							<? $APPLICATION->IncludeFile(
								INCLUDE_PATH . "/pages/spor/infocard-3-text.php",
								[],
								[
									"MODE" => "html",
									"NAME" => "Текст",
								]
							); ?>
						</div>
						<div class="itemblock__text itemblock__text_medium itemblock__text_cut">
							<? $APPLICATION->IncludeFile(
								INCLUDE_PATH . "/pages/spor/infocard-4-text.php",
								[],
								[
									"MODE" => "html",
									"NAME" => "Текст",
								]
							); ?>
						</div>
						<div class="itemblock__list">
							<? $APPLICATION->IncludeFile(
								INCLUDE_PATH . "/pages/spor/infocard-5-text.php",
								[],
								[
									"MODE" => "html",
									"NAME" => "Текст",
								]
							); ?>
						</div>
						 <!-- /.itemblock__list -->
					</div>
				</div>
				<div class="cols2__col cols2__col_col50">
					<div class="itemblock__content">
						<div class="docblock docblock_word">
							<div class="docblock__content">
 <a href="/documents/Образец_искового_заявления_для_физического_лица_внесение_изменений.docx" target="_blank">
								<div class="docblock__icon">
 <img src="/images/word_black.svg" alt="">
								</div>
								<div class="docblock__text">
									<div class="docblock__name">
										 Образец искового заявления для физического лица (внесение изменений в&nbsp;ки)
									</div>
								</div>
 </a>
							</div>
						</div>
						<div class="docblock docblock_word">
							<div class="docblock__content">
 <a href="/documents/Образец_заявления_для_физического_лица_в_случае_ликвидации_источника.docx" target="_blank">
								<div class="docblock__icon">
 <img src="/images/word_black.svg" alt="">
								</div>
								<div class="docblock__text">
									<div class="docblock__name">
										 Образец искового заявления для физического лица в&nbsp;случае ликвидации источника формирования ки
									</div>
								</div>
 </a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="pagecontent">
		<div class="accordeonblock blockaccordeon_in_main" style="background: none">
			<div class="container">
				<h2 class="vopros" id="block_faq">Вопросы и&nbsp;ответы</h2>
				<div itemscope="" itemtype="http://schema.org/FAQPage">
					<div class="accordionwrapper" role="tablist">
					</div>
					<div class="questionwrapper">
						<p class="accordion__title" role="tab" id="ui-id-1" aria-controls="ui-id-2" aria-selected="true" aria-expanded="true" tabindex="0" itemprop="name">
 <span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-s" wfd-invisible="true"></span><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-s" wfd-invisible="true"></span>Что делать, если в&nbsp;кредитной истории есть ошибки?
						</p>
						<div class="accordion__content " id="ui-id-2" aria-labelledby="ui-id-1" role="tabpanel" aria-hidden="false" itemscope="" itemprop="mainEntity" itemtype="http://schema.org/Question">
							<p class="accordion__small" itemprop="acceptedAnswer" itemscope="" itemtype="http://schema.org/Answer">
 <span itemprop="text">Для того, чтобы найти и&nbsp;исправить ошибки и&nbsp;неточности в&nbsp;кредитной истории, нужно досконально ее проверить. <br>
								 Если вы&nbsp;хотите внести исправления в&nbsp;ваш кредитный отчет, отправьте официальный запрос в&nbsp;Национальное бюро кредитных историй. Напишите заявление, в&nbsp;котором будут указаны все недостоверные сведения, требующие изменений. Мы обратимся к&nbsp;передавшему оспариваемые данные источнику с&nbsp;просьбой о&nbsp;проверке правильности информации. Чтобы сократить время оспаривания, рекомендуем также напрямую обратиться к&nbsp;кредитору с&nbsp;соответствующим запросом. </span>
							</p>
						</div>
					</div>
					<div class="questionwrapper">
						<p class="accordion__title" role="tab" id="ui-id-3" aria-controls="ui-id-4" aria-selected="false" aria-expanded="false" tabindex="-1" itemprop="name">
 <span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e" wfd-invisible="true"></span><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e" wfd-invisible="true"></span>Каков срок рассмотрения заявления?
						</p>
						<div class="accordion__content" id="ui-id-4" aria-labelledby="ui-id-3" role="tabpanel" aria-hidden="true" style="display: none;" itemscope="" itemprop="mainEntity" itemtype="http://schema.org/Question" wfd-invisible="true">
							<p class="accordion__small" itemprop="acceptedAnswer" itemscope="" itemtype="http://schema.org/Answer">
 <span itemprop="text">Мы ответим вам в&nbsp;срок до&nbsp;двадцати рабочих дней. <br>
 <br>
								 НБКИ проведет дополнительную проверку сведений, которые содержатся в&nbsp;КИ. МЫ свяжемся с&nbsp;источником формирования кредитной истории, он в&nbsp;течение десяти рабочих дней обязан исправить кредитную историю в&nbsp;оспариваемой части или&nbsp;подтвердить корректность ранее переданных сведений. </span>
							</p>
						</div>
					</div>
					<div class="questionwrapper">
						<p class="accordion__title ui-accordion-header-collapsed ui-corner-all" role="tab" id="ui-id-5" aria-controls="ui-id-6" aria-selected="false" aria-expanded="false" tabindex="-1">
 <span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e" wfd-invisible="true"></span><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e" wfd-invisible="true"></span>Как я узнаю, что мое заявление рассмотрено?
						</p>
						<div class="accordion__content" id="ui-id-6" aria-labelledby="ui-id-5" role="tabpanel" aria-hidden="true" style="display: none;" itemscope="" itemprop="mainEntity" itemtype="http://schema.org/Question" wfd-invisible="true">
							<p class="accordion__small" itemprop="acceptedAnswer" itemscope="" itemtype="http://schema.org/Answer">
 <span itemprop="text">После получения результатов проверки от&nbsp;источника формирования КИ мы направим вам официальное ответное письмо на&nbsp;адрес, который вы&nbsp;укажете в&nbsp;своем заявлении. </span>
							</p>
						</div>
					</div>
					<div class="questionwrapper">
						<p class="accordion__title" role="tab" id="ui-id-7" aria-controls="ui-id-8" aria-selected="false" aria-expanded="false" tabindex="-1" itemprop="name">
 <span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e" wfd-invisible="true"></span><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e" wfd-invisible="true"></span>Что делать, если мне отказали в&nbsp;исправлении данных?
						</p>
						<div class="accordion__content" id="ui-id-8" aria-labelledby="ui-id-7" role="tabpanel" aria-hidden="true" style="display: none;" itemscope="" itemprop="mainEntity" itemtype="http://schema.org/Question" wfd-invisible="true">
							<p class="accordion__small" itemprop="acceptedAnswer" itemscope="" itemtype="http://schema.org/Answer">
 <span itemprop="text">В случае несовпадения мнения заемщика и&nbsp;кредитной организации можно обратиться в&nbsp;суд для&nbsp;обжалования отказа. Ответчиком в&nbsp;суде выступит источник формирования истории. </span>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="rsblock rsblock_more">
			<div class="container">
				<h2>Еще услуги</h2>
				<div class="mainblock__row">
					<div class="mainblock__col mainblock__col_small mainblock__col_compact">
						<div class="servicecard servicecard_big">
 <a href="/zashchita-ot-moshennichestva/ " class="servicecard__content">
							<div class="servicecard__main">
								<div class="servicecard__info">
									<div class="servicecard__icon">
 <img src="/images/z_more_v4.svg" alt="">
									</div>
									<div class="servicecard__title">
										 Защита от&nbsp;мошенников
									</div>
								</div>
							</div>
 </a>
						</div>
					</div>
					<div class="mainblock__col mainblock__col_small mainblock__col_compact">
						<div class="servicecard servicecard_big">
 <a href="/podpiska-na-credithistory/ " class="servicecard__content">
							<div class="servicecard__main">
								<div class="servicecard__info">
									<div class="servicecard__icon">
 <img src="/images/pod_more_v4.svg" alt="">
									</div>
									<div class="servicecard__title">
										 Подписка на&nbsp;кредитную <br>
										 историю
									</div>
								</div>
							</div>
 </a>
						</div>
					</div>
					<div class="mainblock__col mainblock__col_small mainblock__col_compact">
						<div class="servicecard servicecard_big">
 <a href="/serviceszaem/pkr/" class="servicecard__content">
							<div class="servicecard__main">
								<div class="servicecard__info">
									<div class="servicecard__icon">
 <img src="/images/pkr_more_v4.svg" alt="">
									</div>
									<div class="servicecard__title">
										 Персональный <br>
										 кредитный <br>
										 рейтинг
									</div>
								</div>
							</div>
 </a>
						</div>
					</div>
				</div>
			</div>
		</div>
 <br>
	</div>
 <br>
</div>
 <br><? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>