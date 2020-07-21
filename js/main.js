jQuery(document).ready(function($) {

    $('a[href^="#"], *[data-href^="#"]').on('click', function(e){
        e.preventDefault();
    });


    //Меню(скользящие линии)

    $('.menu li').mouseenter(function() {
        var left = $(this).offset().left - $('.menu').offset().left,
            width = $(this).width();

        $('hr').css({
            'margin-left': left,
            'width': width
        });
    });

    $('.menu').mouseleave(function() {
        $('hr').attr('style', null);
    });

    //Мобильное меню
    $(".bar__nav").click(function(e){
        $(this).toggleClass('is-active');
        $(".navigation nav").slideToggle("slow");
    });

    /* Модальное окно */
    var overlay = $('#overlay');
    var open_modal = $('.open_modal');
    var close = $('.close, #overlay');
    var modal = $('.modal');

    open_modal.click( function(event){
        event.preventDefault();
        var div = $(this).attr('href');
        overlay.fadeIn(400,
            function(){
                $(div)
                    .css('display', 'block')
                    .animate({opacity: 1, top: '50%'}, 200);
            });
    });

    close.click( function(){
        modal
            .animate({opacity: 0, top: '45%'}, 200,
                function(){
                    $(this).css('display', 'none');
                    overlay.fadeOut(400);
                }
            );
    });


    //Стилизация select
    $('select').on('click', function(){
        $(this).toggleClass("select-active");
    });

 /* Выпадающий список в about */

$('.maps-link__area li p:first-child').on('click', function(){
    $(this).next().slideToggle();
    $('.maps-link__area li p:first-child').not(this).next().slideUp();
    $('.maps-link__settlement-item-city p').parent().next().hide();
    $('.maps-link__settlement-item-city i').attr('class', 'fas fa-angle-right');
});

$('.maps-link__settlement-item-city p').on('click', function(){
    $(this).parent().next().slideToggle();
    $(this).prev().toggleClass('fa-angle-right').toggleClass('fa-angle-down');
    $('.maps-link__settlement-item-city p').not(this).parent().next().slideUp();
    $('.maps-link__settlement-item-city p').not(this).prev().attr('class', 'fas fa-angle-right');
});

/* Выпадающий список в information */
$('.information__name-cat').on('click', function(){
    $(this).next().slideToggle();
});

$('.information__name-post').on('click', function(){
    $(this).parent().next().slideToggle();
    $(this).prev().toggleClass('fa-angle-right').toggleClass('fa-angle-down');
});

// Подсказки

    $('.form-help').on('click', function(){
        $(this).toggleClass('checked');
        $('.form-help__block1').slideToggle();
    });
    $('.form-help2').on('click', function(){
        $(this).toggleClass('checked');
        $('.form-help__block2').slideToggle();
        $('.form-help__block3').slideUp();
        $('.form-help3').removeClass('checked');
    });
    $('.form-help3').on('click', function(){
        $(this).toggleClass('checked');
        $('.form-help__block3').slideToggle();
        $('.form-help__block2').slideUp();
        $('.form-help2').removeClass('checked');
    });
    $('.form-help4').on('click', function(){
        $(this).toggleClass('checked');
        $('.form-help__block4').slideToggle();
    });
    $('.form-help5').on('click', function(){
        $(this).toggleClass('checked');
        $('.form-help__block5').slideToggle();
    });
    $('.form-help6').on('click', function(){
        $(this).toggleClass('checked');
        $('.form-help__block6').slideToggle();
        $('.form-help__block10').slideUp();
        $('.form-help10').removeClass('checked');
    });
    $('.form-help7').on('click', function(){
        $(this).toggleClass('checked');
        $('.form-help__block7').slideToggle();
    });
    $('.form-help8').on('click', function(){
        $(this).toggleClass('checked');
        $('.form-help__block8').slideToggle();
    });
    $('.form-help9').on('click', function(){
        $(this).toggleClass('checked');
        $('.form-help__block9').slideToggle();
    });
    $('.form-help10').on('click', function(){
        $(this).toggleClass('checked');
        $('.form-help__block10').slideToggle();
        $('.form-help__block6').slideUp();
        $('.form-help6').removeClass('checked');
    });


// анимация кнопок

[].map.call(document.querySelectorAll('[anim="ripple"]'), function (el) {
    el.addEventListener('click', function (e) {
        e = e.touches ? e.touches[0] : e;
        var r = el.getBoundingClientRect(), d = Math.sqrt(Math.pow(r.width, 2) + Math.pow(r.height, 2)) * 2;
        el.style.cssText = "--s: 0; --o: 1;";
        el.offsetTop;
        el.style.cssText = "--t: 1; --o: 0; --d: " + d + "; --x:" + (e.clientX - r.left) + "; --y:" + (e.clientY - r.top) + ";";
    });
});

// раскрытая информация при клике на кнопку
if (window.location.href == 'http://www.ckenergo.ru/information-disclosure/?click=on') {
    var arr = $('.information__name-cat');
    $.each(arr, function(index,value){
        if($(this).text() == "Технологическое присоединение") {
            $(this).next().show();
        }    
    });   
}   
    

//Модификация tipe=file

    $(".fl_inp").change(function(){
        var filename = $(this).val().replace(/.*\\/, "");
        $(this).parent().next().text(filename);
    });

// ОБРАБОТКА ФОРМЫ ПОДАЧИ ЗАЯВКИ
//обработка в зависимости от заявителя

	$('.physical').hide();
	$('.juridical').hide();
	$('.block2, .block3, .block4').hide();

	$('.select-applicant').change(function() {
		if($(this).val() === "physical") {
		    $('.juridical').hide();
		    $('.physical').show();
		    $('.block2').slideDown();
		} else if ($(this).val() === "juridical" || $(this).val() === "individual") {
	   		$('.physical').hide();
	   		$('.juridical').show();
	   		$('.block2').slideDown();
		} else {
	   		$('.block2, .block3, .block4').slideUp();
		}
	 });

	$('.type-application').change(function() {
		if($(this).val() === "tech_connection" || $(this).val() === "owner_object") {
			$('.information_rest_documents').hide();
		    $('.information_tech_connection').show();
			$('.block3, .block4').slideDown();    
		} else if($(this).val() === "redist_power" || $(this).val() === "rest_documents"){
			$('.information_tech_connection').hide();
	   		$('.information_rest_documents').show();
			$('.block3, .block4').slideDown(); 
		} else {
	   		$('.block3, .block4').slideUp();
		}
	});

//Валидация и отправка формы

    $('input[type="submit"]').on('click', function(e) {
        e.preventDefault();
        $(this).parents('form').submit();
    })
    $.validator.addMethod(
        "regex",
        function(value, element, regexp) {
            var re = new RegExp(regexp);
            return this.optional(element) || re.test(value);
        },
        "Please check your input."
    );

    // Функция валидации и вывода сообщений
    function valEl(el) {

        el.validate({
            rules: {
                telephon: {
                    required: true,
                    regex: '^([\+]+)*[0-9\x20\x28\x29\-]{5,20}$'
                },
                author: {
                    required: true
                },
                full_author: {
                    required: true
                },
                short_author: {
                    required: true
                },
                email: {
                    required: true,
                    email: true
                },
                inn: {
                    required: true
                },
                kpp: {
                    required: true
                },
                register: {
                    required: true
                },
                date: {
                    required: true
                },
                address: {
                    required: true
                },
                power: {
                    required: true
                }
            },

            // Начинаем проверку id="" формы
            submitHandler: function(form) {
               
                var $form = $(form);
                var $formId = $(form).attr('id');
                switch ($formId) {
                    // Если у формы id="popupResult" - делаем:
                    case 'recuest_form':
                    	var f_data = new FormData();
                    	var inputs = $form.find("input, select, textarea");
             			for(var i = 0; i < inputs.length; i++){
             				var o = $(inputs[i]);
             				var el = inputs[i];
             				if(o.attr("type") == "file"){

             					f_data.append(o.attr("name"), el.files[0]);
             				}	
             				else{
             					f_data.append(o.attr("name"), o.val());
             				}
             			}
                        $.ajax({
                                type: 'POST',
                                url: $form.attr('action'),
                                data: f_data,
                                cache: false,
		    					contentType: false,
		    					processData: false,
                            })
                            .always(function(response) {
                                setTimeout(function() {
                                    $('.overlay').fadeIn();
                                    $form.trigger('reset');
                                    $('*').removeClass('valid');
                                    //строки для остлеживания целей в Я.Метрике и Google Analytics
                                }, 1100);
                                $('.overlay').on('click', function(e) {
                                    $(this).fadeOut();
                                });

                            });
                        break;
                }
                return false;
            }
        })
    }

    // Запускаем механизм валидации форм, если у них есть класс .js-form
    $('.js-form').each(function() {
        valEl($(this));
    });


});
