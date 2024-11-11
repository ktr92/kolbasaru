$(document).ready(function() {
	oldBrowser();
	validateInput();
	customSelect();
	AllChooseFile();
	switcher();
	revealingList();
	initTabs();
	InitPopup();
	AlignPopup();
	clickPopup();
	ClearLabel();
	ellipsis();
	formatMagazine();
mobileMenu();
	//cardSlider();

	$(".js_phone_mask").mask("+7 (999) 999-99-99");
	$(".feedback_form.scroll").mCustomScrollbar();
function mobileMenu(){

		$(".js_mobile_menu").on("click" ,function(e){
			e.preventDefault();
			$(".bottom").find(".menu").slideDown().addClass("mobile-menu");
			$(".mobile_menu_btn ").hide();
		})
		$(".js_close").on("click" , function(e){
			e.preventDefault();
			$(".bottom").find(".menu").slideUp();
			$(".mobile_menu_btn").show();
		})
		$(document).mouseup(function (e){ 
			var div = $(".mobile-menu"); 
			if (!div.is(e.target)
			    && div.has(e.target).length === 0) { 
				div.slideUp(); 
				if($(window).width() <= 600){
				
					$(".mobile_menu_btn").show();
				}
			}
		});
	}

});
$(window).load(function() {
	initMainSlider();
	initGallarySlider();
	cardSlider();
});


function oldBrowser(){

	function get_browser(){
		var ua=navigator.userAgent,tem,M=ua.match(/(opera|chrome|safari|firefox|msie|trident(?=\/))\/?\s*(\d+)/i) || [];
		if(/trident/i.test(M[1])){
			tem=/\brv[ :]+(\d+)/g.exec(ua) || [];
			return 'IE '+(tem[1]||'');
		}
		if(M[1]==='Chrome'){
			tem=ua.match(/\bOPR\/(\d+)/)
			if(tem!=null)   {return 'Opera '+tem[1];}
		}
		M=M[2]? [M[1], M[2]]: [navigator.appName, navigator.appVersion, '-?'];
		if((tem=ua.match(/version\/(\d+)/i))!=null) {M.splice(1,1,tem[1]);}
		return M[0];
	}

	function get_browser_version(){
		var ua=navigator.userAgent,tem,M=ua.match(/(opera|chrome|safari|firefox|msie|trident(?=\/))\/?\s*(\d+)/i) || [];
		if(/trident/i.test(M[1])){
			tem=/\brv[ :]+(\d+)/g.exec(ua) || [];
			return 'IE '+(tem[1]||'');
		}
		if(M[1]==='Chrome'){
			tem=ua.match(/\bOPR\/(\d+)/)
			if(tem!=null)   {return 'Opera '+tem[1];}
		}
		M=M[2]? [M[1], M[2]]: [navigator.appName, navigator.appVersion, '-?'];
		if((tem=ua.match(/version\/(\d+)/i))!=null) {M.splice(1,1,tem[1]);}
		return M[1];
	}


	var browser=get_browser();
	var browser_version=get_browser_version();


	/*-------------OLD Browser Panel---------------------------------------*/
	if (browser=='Firefox'){
		if(browser_version<45){
			$(".all_old_browser").fadeIn();
			$('#old_browser_notification').fadeIn();
		}
	}

	if (browser=='Chrome'){
		if(browser_version<45){
			$(".all_old_browser").fadeIn();
			$('#old_browser_notification').fadeIn();
		}
	}

	if (browser.search("IE")!=-1){
		if(browser_version<=9){
			$(".all_old_browser").fadeIn();
			$('#old_browser_notification').fadeIn();
		}
	}

	if (browser_version.search("Opera")!=-1){
		var res = browser_version.split(" ");
		if(res[1]<35){
			$(".all_old_browser").fadeIn();
			$('#old_browser_notification').fadeIn();
		}
	}

	if (browser=='Safari'){
		if(browser_version<6){
			$(".all_old_browser").fadeIn();
			$('#old_browser_notification').fadeIn();

		}
	}
	/*end Get browser version*/


	/*panel for old browser*/
	$('.old_browser_notification_Close').click(function(e){
		e.preventDefault();
		$('#old_browser_notification').fadeOut();
		$(".all_old_browser").fadeOut();
	});
	/*panel for old browser*/
}


function initMainSlider(){
	if($(".main_slider").length > 0){

	  	$('.main_slider .flexslider').flexslider({
	    	animation: "slide",
	    	prevText: " ",
	    	nextText: " ",
	    	animationLoop: true,
	    	slideshow: false,
	    	controlNav: true,
	  	});

	  	$(".flex-control-nav a").html(" ");
	}
}

function validateInput(){
	/*-------------------validation-------------------*/
	$.validate({
		form : '.js_validation',
		lang : 'ru',

		onSuccess : function() {
			$(".form_success").show();
			$(".form_div").hide();
			$($form)[0].reset();
			return false;
			$("[name='cheked1[]']:eq(0)").valAttr('','validate_checkbox_group')

			$("[name='cheked[]']:eq(0)").valAttr('','validate_checkbox_group')
			$("[name='cheked2[]']:eq(0)").valAttr('','validate_checkbox_group')
			  
			},
			
		validatorFunction : function() {
			if($(".js_file_input").hasClass("error")){


			}else{

			}
		}
	});
	

	/*-------------------validation-------------------*/
};

function customSelect(){
	$(".js_select select").each(function(){

		$(this).styler({
			selectSearch:false,
			onSelectOpened: function() {
				$(this).addClass("active");
				$(".jq-selectbox__dropdown ul").addClass("scroll");
				$('.scroll').mCustomScrollbar();

			},
			onSelectClosed: function(){
				$(this).removeClass("active")
			}
		});
	})
};


function AllChooseFile(){

	$(".form_file_block").each(function(){
		var container =  $(this);
		var inputFile = $(".js_file_input" , container);
		var valueFile = $(".js_file_value" , container);
		var btnRemove = $(".js_remove_file" , container);
		var btnText = $(".file_btn_text" , container);

		inputFile.hover(function(){
			btnText.css({
				"border" : "2px solid #64bbe9",
				"color" : "#64bbe9;",
			})
		},function(){
			btnText.css({
				"border" : "2px solid #cccccc",
				"color" : "#666666;",
			})
		})

		inputFile.each(function(){
			$(this).change(function(){
				ChooseFile();

			})

		})
		function ChooseFile(){
			inputFile.each(function(){
				if($(this).val()!=""){
					valueFile.html($(this).val());
					valueFile.addClass("active");
					$(".js_file_input").removeClass("error");
					$(".form-error").hide();
					btnText.hide();
				}

			})

			if (valueFile.hasClass("active")) {
				btnRemove.show();
			}


			btnRemove.on("click",function(e){
				e.preventDefault();
				valueFile.empty();
				valueFile.val("");
				btnRemove.hide();
				btnText.show();
			})
		};
	});
};

function switcher() {
	$(".switcher_js").each(function() {
		var container = $(this);
		var link = $("a" , container);

		link.on("click",function(e) {
			e.preventDefault();

			link.removeClass("active");
			$(this).addClass("active");
		})

		link.hover(function() {
			container.addClass("hover")
			if($(this).hasClass("active")){
				container.removeClass("hover")
			}
		},function() {
			container.removeClass("hover")
			if($(this).hasClass("active")){
				container.removeClass("hover")
			}
		})

	})
}

function revealingList(){
	/*-------------Revealing list click-----------------*/
	$('.js_holder.active').find('.js_block').css('display', 'block');
	$('.js_heading').click(function(e){
		e.preventDefault();
		if($(this).parent().hasClass('active')){
			$(this).parent().removeClass('active');
			$(this).parent().find('.js_block').slideUp();
		}
		else{
			$(this).parent().addClass('active');
			$(this).parent().find('.js_block').slideDown();
		}
	});

	/*-------------end Revealing list click-----------------*/
};

function initTabs() {

	var isAnimating = false;
	$('[data-tab]').click(function(e) {
		e.preventDefault();
		if($(this).hasClass('active')){}
			else{
				if(!isAnimating) {

					var parent = $(this).closest('.js_tabs');
					var cls = $(this).attr('data-tab');
					isAnimating = true;

					$('[data-tab]', parent).removeClass('active');
					$(this, parent).addClass('active');

					if($('.hidden_content',parent).hasClass('active')){
						$('.hidden_content.active', parent).fadeOut(300, function(){
							$('.hidden_content.active', parent).removeClass('active');
							$('.hidden_content'+'#'+cls, parent).fadeIn(300, function() {
								isAnimating = false;
							});
							$('.hidden_content'+'#'+cls, parent).addClass('active');
						})
					}
					else {
						$('.hidden_content'+'#'+cls, parent).fadeIn(300, function() {
							isAnimating = false;
						});
						$('.hidden_content'+'#'+cls, parent).addClass('active');
					}
				}
			}
		});
	$('.hidden_content.active').fadeIn();
};

/*-------------------popup init-------------------*/

function InitPopup(popup){
	popup = $(popup);
	var cls = popup.attr('data-popup');
	$('.custom-popup.'+cls).fadeIn('300');
	$('.custom-popup.'+cls).prev('.custom-overlay').fadeIn('300');

	if(cls == 'js_video_popup') {
        var video_target = popup.attr('href');
        $('.custom-popup.'+cls).find('video').attr('src', video_target);

        InitPlayer();

    }
}
/*-------------------end popup init-------------------*/


/*-------------ALIGN POPUPS-------------------------*/
function AlignPopup(){
	$('.custom-popup').each(function(){
		if($(this).outerWidth() > $(window).width()-80 && $(this).outerHeight()+80 > $(window).height()) {
			$(this).css({
				"position": "absolute",
				"top": $(window).scrollTop() + 50 + "px",
				'left': '40px'
			});
		}

		else if($(this).outerHeight()+80 > $(window).height()) {
			$(this).css({
				"position": "absolute",
				"top": $(window).scrollTop() + 50 + "px",
				'left': ($(window).width()-$(this).outerWidth())/ 2 + 'px'
			});
		}

		else if($(this).outerWidth() > $(window).width()-80) {
			$(this).css({
				"position": "absolute",
				"top": $(window).scrollTop() + 50 + "px",
				'left': '40px'
			});
		}

		else {
			$(this).css('top',($(window).height()-$(this).outerHeight())/ 2 + 'px');
			$(this).css('left',($(window).width()-$(this).outerWidth())/ 2 + 'px');
			$(this).css('position', 'fixed');
		}
	});

	if(navigator.userAgent.match(/Android/i) ||
		navigator.userAgent.match(/webOS/i)||
		navigator.userAgent.match(/iPhone/i) ||
		navigator.userAgent.match(/iPod/i) ||
		navigator.userAgent.match(/iPad/i) ||
		navigator.userAgent.match(/Blackberry/i) )
	{
		$('.custom-popup').addClass('mobilepopup');

		$('.custom-popup').each(function(){
			$(this).css('top', 100 +$(window).scrollTop()+ 'px');
			$(this).css('left',(1240-$(this).outerWidth())/ 2 + 'px');
			$(this).css('position', 'absolute');
		});
	}
}
/*-------------END ALIGN POPUPS-------------------------*/

function clickPopup(){

	var flag=true;

	var startSlide;

    $('[data-popup]').on('click', function(e){
        e.preventDefault();
		AlignPopup();
		InitPopup($(this));

		/*images gallery carousel*/
		startSlide = parseInt($(this).attr('data-current'));
		if($(this).attr('data-popup')=='js_photo_gallery_popup'){
			if(flag){


			  $('#photo_slider').flexslider({
				animation : 'slide',
				controlNav: false,
				animationLoop: true,
				slideshow: false,
				startAt: startSlide,
				prevText: "",
				nextText: "",
				itemWidth: 800,
				minItems:1,
				maxItems: 1,
				//smoothHeight:true,
				animationSpeed: 300,
				start: function(slider) {
					AlignPopup();
					/*var container = $(".quantity");
					var quantity_html = '<div class="popup_gallery_quantity"><span class="js_popup_gallery_current">' + (slider.currentSlide + 1) + '</span>/' + slider.slides.length + '</div>';
					container.append(quantity_html);*/
					flexslider = slider;
				  },
				after: function(slider) {

					$('.js_popup_gallery_current').html(slider.currentSlide + 1);

					var height = $('#slider .flex-active-slide img').height();
					height = height-29;
				}
			  });
			   flag = false;
			}else{
				flexslider.flexAnimate(startSlide);
		   }
		}
		/*images gallery carousel*/
   });


    $('.custom-overlay, .custom-popup .js_close').on('click',function(e){

		e.preventDefault();
		$('.custom-overlay').delay(200).fadeOut('300');
		$('.custom-popup').fadeOut('300');

		$(this).closest('.custom-popup').find('input[type=text]').val("");
		$(this).closest('.custom-popup').find('.input').removeClass("has-error");
		$(this).closest('.custom-popup').find('.input span').remove();
		$(this).closest('.custom-popup').find('input[type=password]').val("");
		/*$(this).closest('.custom-popup').find('label').css("display","block");*/
		$(this).closest('.custom-popup').find('label').addClass("focused");
		$(this).closest('.custom-popup').find('label').removeClass("focused");
		$(this).closest('.custom-popup').find('textarea').val("");
		$(this).next('.custom-popup').find('input[type=text]').val("");
		$(this).next('.custom-popup').find('input[type=password]').val("");
		/*$(this).next('.custom-popup').find('label').css("display","block");*/
		$(this).next('.custom-popup').find('textarea').val("");
		$(this).next('.custom-popup').find('.input').removeClass("has-error");
		$(this).next('.custom-popup').find('.input span').remove();
		$(this).next('.custom-popup').find('input[type=text]').css("border-color","#d4b888!important");
		$(this).next('.custom-popup').find('label').addClass("focused");
		$(this).next('.custom-popup').find('label').removeClass("focused");

		ClearLabel();

	});
}

function ClearLabel(){
	$('.input input').each(function(){
		if($(this).val()!=""){
			$(this).parent().find('label').addClass('focused');
		}
	});
	$('.input input').focus(function(){
		$(this).parent().find('label').addClass('focused');
	});

	$('.input input').blur(function(){
		if($(this).val()!=""){
			$(this).parent().find('label').addClass('focused');
		}
		else{
			$(this).parent().find('label').removeClass('focused');
		}
	});

	$('.textarea textarea').each(function(){
		if($(this).val()!=""){
			$(this).parent().find('label').addClass('focused');
		}
	});


	$('.textarea textarea').focus(function(){
		$(this).parent().find('label').addClass('focused');

	});

	$('.textarea textarea').blur(function(){
		if($(this).val()!=""){
			$(this).parent().find('label').addClass('focused');
		}
		else{
			$(this).parent().find('label').removeClass('focused');
		}
	});

	$('input.js_time_mask').blur(function(){
		if($(this).val()!="__:__"){
			$(this).parent().find('label').addClass('focused');
		}
		else{
			$(this).parent().find('label').removeClass('focused');
		}
	});
	$('input.js_time_mask').focus(function(){
		if($(this).val()!="__:__"){
			$(this).parent().find('label').removeClass('focused');
		}
		else{
			$(this).parent().find('label').removeClass('focused');
		}
	});
}

function initGallarySlider(){
	var SliderVideo = $(".gallary_slider .swiper-container");
	SliderVideo.each(function(){
		var mySwiper = new Swiper(this , {
			effect: "slide",
			speed: 800,
			slidesPerView: 4,
			breakpoints: {
			    // when window width is <= 320px
			    600: {
			      slidesPerView: 3,
			      spaceBetween: 10
			    },
			    
			  },
			spaceBetween: 14,
			paginationClickable: true,
			paginationClickable: true,
			nextButton: $(this).parent().find('.swiper-button-next')[0],
			prevButton: $(this).parent().find('.swiper-button-prev')[0],
		})
	})

}

function InitPlayer(){
    $('.js_videoplayer').each(function() {
            var the_player_wrapper = $(this);
            var the_player = $('video', the_player_wrapper);

            the_player.mediaelementplayer({
                alwaysShowControls: true,
                startVolume: 1,
                features: ['playpause', 'volume' , 'duration', 'progress','fullscreen'],
                success: function(mediaElement, domObject , player) {
                    $('.play').on('click', function() {
                       mediaElement.play();
                    });
                    $(".js_close , .custom-overlay").on("click" , function(){

    					player.pause();
   					})
                }
            });
        });
    $('.mejs-time-current').css('width', '0px');

}


function ellipsis(){
	$(".ellipsis").each(function(){
		var text = $(this);
		var lengthText = $(".ellipsis").html().length;

		var html = $(".ellipsis").html();
		if( lengthText > 160){

			var slice = html.slice(0 , 160) + "...";
			text.html(slice);
		}
	})

}

function cardSlider(){
	if($(".product_slider").length > 0){
		$('#carousel').flexslider({
		    animation: "slide",
		    controlNav: false,
		    animationLoop: false,
		    slideshow: false,

		    itemWidth: 140,
		    itemMargin: 10,
		    asNavFor: '#slider',
		    nextText: " ",
		    prevText: " ",
		    animationLoop: true,
		    move: 1,
	  	});

	  	$('#slider').flexslider({
		    animation: "slide",
		    controlNav: false,
		    animationLoop: false,
		    slideshow: false,
		    sync: "#carousel",
		    nextText: " ",
		    prevText: " ",
	  	});
	}
}

function formatMagazine(){
	$(".format_magazine").each(function(){
		var container =  $(this);
		var title = $(".title" ,container);
		var description = $(".description" , container);

					var number = 0;
		title.on("click", function(){


			title.removeClass("active");
			$(this).addClass("active");

			var currentTitle = $(this).attr("data-current");

			description.each(function(){
				var currentDescription = $(this).attr("data-current");


				if(currentTitle == currentDescription){
					description.removeClass("active");
					$(this).addClass("active");

					//console.log(number++)

					$(this).attr("id" , number++);
					var idBlock = parseInt($(this).attr("id"));

					var test = $("#"+idBlock);

					var carousel = $("#carousel" , test);
					var slider = $("#slider" , test);

					setTimeout(function(){
						if($(".product_slider").length > 0){
							carousel.flexslider({
							    animation: "slide",
							    controlNav: false,
							    animationLoop: false,
							    slideshow: false,

							    itemWidth: 140,
							    itemMargin: 10,
							    asNavFor: slider,
							    nextText: " ",
							    prevText: " ",
							    animationLoop: true,
							    move: 1,
						  	});

						  	slider.flexslider({
							    animation: "slide",
							    controlNav: false,
							    animationLoop: false,
							    slideshow: false,
							    sync: carousel,
							    nextText: " ",
							    prevText: " ",
						  	});
						}
					},)

				}
			})
		})

	})
}
$( ".trigger-shops" ).click(function() {
			if($("#main-shops").is(':hidden')) {

				$('html,body').animate({
   					scrollTop: $(".trigger-shops").offset().top - 30
				});
			}
	$("#main-shops").slideToggle( "slow", function() {});
	return false;
});