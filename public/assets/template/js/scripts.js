// ============= PRELOADER SCRIPT ===================
window.onload = function(){
	$('#preloader').addClass('hid');
};
// ============= END PRELOADER SCRIPT ===================


/*closestchild*/

        ;(function($){
          $.fn.closestChild = function(selector) {
            var $children, $results;

            $children = this.children();

            if ($children.length === 0)
              return $();

            $results = $children.filter(selector);

            if ($results.length > 0)
              return $results;
            else
              return $children.closestChild(selector);
          };
        })(window.jQuery);

/* /. closestchild*/



$(function(){



        if (window.devicePixelRatio > 1) {
            var lowresImages = $('img[data-retinasrc]'), thiswidth, thisheight;


            lowresImages.each(function(i) {
                thiswidth = $(this).width();
                thisheight = $(this).height();

                $(this).attr( 'width', thiswidth );
                $(this).attr( 'height', thisheight );

                var lowres = $(this).attr('src');
                var highres = $(this).data('retinasrc');
                $(this).attr('src', highres);
            });

        }


        var top_show = 280; // В каком положении полосы прокрутки начинать показ кнопки "Наверх"
        var speed = 500; // Скорость прокрутки
    	var $backButton = $('#up');
    	$(window).scroll(function () { // При прокрутке попадаем в эту функцию
    		/* В зависимости от положения полосы прокрукти и значения top_show, скрываем или открываем кнопку "Наверх" */
    		if ($(this).scrollTop() > top_show) {
    			$backButton.fadeIn();
    		}
    		else {
    			$backButton.fadeOut();
    		}
    	});
    	$backButton.click(function () { // При клике по кнопке "Наверх" попадаем в эту функцию
    		/* Плавная прокрутка наверх */
    		scrollto(0, speed);
    	});

        // scrollto
    	window.scrollto = function(destination, speed) {
    		if (typeof speed == 'undefined') {
    			speed = 800;
    		}
    		jQuery("html:not(:animated),body:not(:animated)").animate({scrollTop: destination-60}, speed);
    	};
    	$("a.scrollto").click(function () {
    		var elementClick = $(this).attr("href")
    		var destination = $(elementClick).offset().top;
    		scrollto(destination);
    		return false;
    	});
    	// end scrollto

        // fancybox
        $('.fancybox').fancybox({
            padding: 0,
            openEffect  : 'none',
            closeEffect : 'none',
            nextEffect  : 'none',
            prevEffect  : 'none',
            helpers: {
            overlay: {
              locked: false
            }
            }
        });

        $('.fancyboxModal').fancybox({
            padding: 0,
            openEffect  : 'none',
            closeEffect : 'none',
            nextEffect  : 'none',
            prevEffect  : 'none',
            fitToView : false,
            maxWidth: '100%',
            scrolling : "no",
            helpers: {
                overlay: {
                  locked: false
                }
            }
        });





        $('.fancyboxVideo').fancybox({
            autoResize:true,
            padding: 0,
            openEffect  : 'fade',
            closeEffect : 'fade',
            nextEffect  : 'none',
            prevEffect  : 'none',
            fitToView   : false,
            maxWidth    : '100%',
            maxHeight   : '100%',
            scrolling   : "no",
            width       :  1200,
            height      :  700,
            helpers: {
                overlay: {
                  locked: false
                }
            }
        });

        $('.fancyboxVideo-xs').fancybox({
            autoResize:true,
            padding: 0,
            openEffect  : 'fade',
            closeEffect : 'fade',
            nextEffect  : 'none',
            prevEffect  : 'none',
            fitToView   : false,
            maxWidth    : '100%',
            maxHeight   : '50%',
            scrolling   : "no",
            helpers: {
                overlay: {
                  locked: false
                }
            }
        });
        // end fancybox



        // slick-carousel
            $('.top-slider').slick({
                infinite: true,
                slidesToShow: 1,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 6000,
                speed: 1000,
                fade: true,
                arrows: true,
                prevArrow: '<a href="#" class="slick-prev"></a>',
                nextArrow: '<a href="#" class="slick-next"></a>',
                dots: true,
                responsive: [
                    {
                      breakpoint: 992,
                      settings: {
                        arrows: false,
                      }
                    },
                    {
                      breakpoint: 768,
                      settings: {
                        arrows: false,
                        dots: false
                      }
                    }
                  ]
            });


            $('.banner-carousel').slick({
                infinite: true,
                slidesToShow: 1,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 4000,
                speed: 500,
                fade: true,
                arrows: false,
            });



            $('.products-carousel').slick({
                infinite: false,
                slidesToShow: 4,
                slidesToScroll: 1,
                autoplay: false,
                autoplaySpeed: 6000,
                speed: 500,
                dots: false,
                swipeToSlide: true,
                arrows: true,
                prevArrow: '<span class="slick-prev"></span>',
                nextArrow: '<span class="slick-next"></span>',
                responsive: [
                    {
                      breakpoint: 992,
                      settings: {
                        slidesToShow: 3
                      }
                    },
                    {
                      breakpoint: 768,
                      settings: {
                        slidesToShow: 2
                      }
                    },
                    {
                      breakpoint: 500,
                      settings: {
                        slidesToShow: 1
                      }
                    }
                ]
            });



            $('.shop-categories-carousel').slick({
                infinite: false,
                slidesToShow: 2,
                slidesToScroll: 1,
                arrows: true,
                prevArrow: '<span class="slick-prev"></span>',
                nextArrow: '<span class="slick-next"></span>',
                dots: false,
                responsive: [
                    {
                      breakpoint: 992,
                      settings: {
                        slidesToShow: 1
                      }
                    },
                    {
                      breakpoint: 768,
                      settings: {
                        slidesToShow: 1
                      }
                    }
                  ]
            });

       /*     $(".slick-slide:even", "div.shop-categories-carousel-wrapper").css( "padding-right", "20px" );
            $(".slick-slide:odd", "div.shop-categories-carousel-wrapper").css( "padding-left", "20px" ); */

            $('.recommended-carousel').slick({
                infinite: true,
                slidesToShow: 3,
                slidesToScroll: 3,
                autoplay: true,
                arrows: true,
                prevArrow: '<span class="slick-prev"></span>',
                nextArrow: '<span class="slick-next"></span>',
                dots: false,
                responsive: [
                    {
                      breakpoint: 992,
                      settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                      }
                    },
                    {
                      breakpoint: 768,
                      settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                      }
                    }
                  ]
            });




            $('.brands-carousel').slick({
                infinite: true,
                slidesToShow: 5,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 4000,
                speed: 500,
                arrows: false,
                dots: false,
                swipeToSlide: true,
                responsive: [
                    {
                      breakpoint: 1229,
                      settings: {
                        slidesToShow: 4
                      }
                    },
                    {
                      breakpoint: 991,
                      settings: {
                        slidesToShow: 3
                      }
                    },
                    {
                      breakpoint: 767,
                      settings: {
                        slidesToShow: 2
                      }
                    }
                  ]
            });

        //slick-carousels end


        // checking for placeholder
        if (Modernizr.input.placeholder) {
          $('.label').hide();
        }
        // end


        // validation

        $('.rf').each(function(){
            var item = $(this),
            btn = item.find('.btn');

            function checkInput(){
                item.find('select.required').each(function(){
                    if($(this).val() == '0'){
                        $(this).parents('.form-group').addClass('error');
                        $(this).parents('.form-group').find('.error-message').show();
                    } else {
                        $(this).parents('.form-group').removeClass('error');
                    }
                });

                item.find('input[type=text].required').each(function(){
                    if($(this).val() != ''){
                        $(this).removeClass('error');
                    } else {
                        $(this).addClass('error');
                        $(this).parent('.form-group').find('.error-message').show();
                    }
                });

                item.find('textarea.required').each(function(){
                    if($(this).val() != ''){
                        $(this).removeClass('error');
                    } else {
                        $(this).addClass('error');
                        $(this).parent('.form-group').find('.error-message').show();
                    }
                });

                item.find('input[type=email]').each(function(){
                    var regexp = /^([a-z0-9_-]+\.)*[a-z0-9_-]+@[a-z0-9_-]+(\.[a-z0-9_-]+)*\.[a-z]{2,6}$/i;
                    var $this = $(this);
                    if($this.hasClass('required')){
                        if (regexp.test($this.val())) {
                            $this.removeClass('error');
                        }else {
                            $this.addClass('error');
                            $(this).parent('.form-group').find('.error-message').show();
                        }
                    }else{
                        if($this.val() != ''){
                            if (regexp.test($this.val())) {
                                $this.removeClass('error');
                            }else {

                            $this.addClass('error');
                            $(this).parent('.form-group').find('.error-message').show();
                            }
                        }else{
                            $this.removeClass('error');
                        }
                    }
                });


                item.find('input[type=checkbox].required').each(function(){
                    if($(this).is(':checked')){
                        $(this).removeClass('error');
                    } else {
                        $(this).addClass('error');
                        $(this).parent('.form-group').find('.error-message').show();
                    }
                });
            }

            btn.click(function(){
                checkInput();
                var sizeEmpty = item.find('.error:visible').length;
                if(sizeEmpty > 0){
                    return false;
                } else {
                    item.submit();
                    $.fancybox.close();
                }
            });
        });


        $('select').change(function(){
            if($(this).val() == ''){
                $(this).parents('.form-group').removeClass('selected');
            } else {
                $(this).parents('.form-group').addClass('selected');
                $(this).parents('.form-group').removeClass('error');
            }
        });

        // end validation



        // проверка на Internet Explorer 6-11
        var isIE = /*@cc_on!@*/false || !!document.documentMode;


        if(isIE){
            $('body').addClass('ie');
        }
        // end


        $('.mob-menu-btn').click(function(){
            if($(this).hasClass('active')){
                $('.mobile-menu').slideUp(200);
                $(this).removeClass('active')
            }else{
                $('.mobile-menu').slideDown(200);
                $(this).addClass('active')
            }
        });

        $('.mobile-menu ul > li').has('ul').addClass('down');


        $('.mobile-menu .down .dropdown-button').click(function(){
            $(this).toggleClass('active');
            $(this).siblings('ul:visible').slideUp(200);
            $(this).siblings('ul:hidden').slideDown(200);
        });

        $('.top-menu ul > li').has('ul').addClass('down');


        // mobMenuHeight begin

            var windHeight;

            function mobMenuHeight(){
                windHeight = $( window ).height();
                $('.mobile-menu > ul').height(windHeight - $('.top-bar').height());
            }
            mobMenuHeight();


            window.addEventListener("resize", function() {
            	mobMenuHeight();
            }, false);


            window.addEventListener("orientationchange", function() {
                mobMenuHeight();
            }, false);


        // mobMenuHeight end



        var panel=$('.top-bar'),pos=panel.offset().top;

        $(window).scroll(function(){
            if($(this).scrollTop() > pos && !panel.hasClass('fixed')){
                panel.addClass('fixed');
            }else if($(this).scrollTop() < pos && panel.hasClass('fixed')){
                panel.removeClass('fixed');
            }
        });


        window.addEventListener("resize", function() {
            panel.removeClass('fixed');
        	panel=$('.top-bar'),pos=panel.offset().top;

            $(window).scroll(function(){
                if($(this).scrollTop() > pos && !panel.hasClass('fixed')){
                    panel.addClass('fixed');
                }else if($(this).scrollTop() < pos && panel.hasClass('fixed')){
                    panel.removeClass('fixed');
                }
            });
        }, false);


        window.addEventListener("orientationchange", function() {
            panel.removeClass('fixed');
            panel=$('.top-bar'),pos=panel.offset().top;

            $(window).scroll(function(){
                if($(this).scrollTop() > pos && !panel.hasClass('fixed')){
                    panel.addClass('fixed');
                }else if($(this).scrollTop() < pos && panel.hasClass('fixed')){
                    panel.removeClass('fixed');
                }
            });
        }, false);



        // map height begin

            var contactswrapperHeight;
            function mapHeight(){
                contactswrapperHeight = $('.contacts-wrapper').height();
                $('.map-wrapper').css({'height':contactswrapperHeight});
            }
            mapHeight();

            window.addEventListener("resize", function() {
            	mapHeight();
            }, false);


            window.addEventListener("orientationchange", function() {
                mapHeight();
            }, false);

        // map height end


        // ASIDE MENU

        // ASIDE MENU END




        /* plus minus goods counter */
        $.fn.globalNumber = function(){
        $('.btn-number').click(function(e){
            e.preventDefault();
            fieldName = $(this).attr('data-field');
            type      = $(this).attr('data-type');
            var input = $("input#"+fieldName);

            var currentVal = parseInt(input.val());
            if (!isNaN(currentVal)) {
                if(type == 'minus') {

                    if(currentVal > input.attr('data-min')) {
                        input.val(currentVal - 1).change();
                    }
                    if(parseInt(input.val()) == input.attr('data-min')) {
                        $(this).attr('disabled', true);
                    }

                } else if(type == 'plus') {

                    if(currentVal < input.attr('data-max')) {
                        input.val(currentVal + 1).change();
                    }
                    if(parseInt(input.val()) == input.attr('data-max')) {
                        $(this).attr('disabled', true);
                    }

                }
            } else {
                input.val(0);
            }
        });
        $('.input-number').focusin(function(){
           $(this).data('oldValue', $(this).val());
        });
        $('.input-number').change(function() {

            minValue =  parseInt($(this).attr('data-min'));
            maxValue =  parseInt($(this).attr('data-max'));
            valueCurrent = parseInt($(this).val());

            name = $(this).attr('id');
            if(valueCurrent >= minValue) {
                $(".btn-number[data-type='minus'][data-field='"+name+"']").removeAttr('disabled')
            } else {
                alert('К сожалению, было достигнуто минимальное значение');
                $(this).val($(this).data('oldValue'));
            }
            if(valueCurrent <= maxValue) {
                $(".btn-number[data-type='plus'][data-field='"+name+"']").removeAttr('disabled')
            } else {
                alert('К сожалению, было превышено максимальное значение');
                $(this).val($(this).data('oldValue'));
            }


        });
        $(".input-number").keydown(function (e) {
                // Allow: backspace, delete, tab, escape, enter and .
                if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||
                     // Allow: Ctrl+A
                    (e.keyCode == 65 && e.ctrlKey === true) ||
                     // Allow: home, end, left, right
                    (e.keyCode >= 35 && e.keyCode <= 39)) {
                         // let it happen, don't do anything
                         return;
                }
                // Ensure that it is a number and stop the keypress
                if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
                    e.preventDefault();
                }
            });
        };$.fn.globalNumber();
        /* /. plus minus goods counter */




        // tabs
            $('ul.tabs').on('click', 'li:not(.current)', function() {

            $(this)
              .addClass('current').siblings().removeClass('current')
              .closest('div.section').closestChild('div.box').removeClass('visible').eq($(this).index()).addClass('visible');
            });

            $('ul.tabs.mobile li').click(function(){
                $(this).parent().hide().siblings('.mobile-tab-header').html($(this).html());
                $('.mobile-tab-header').removeClass('active');
            });
            $('.mobile-tab-header').click(function(e){
                if($(this).hasClass('active')){
                    $(this).removeClass('active');
                    $(this).siblings('.tabs.mobile').stop().slideUp(0);
                }else{
                    $(this).addClass('active');
                    $(this).siblings('.tabs.mobile').stop().slideDown(0);
                }

                e.stopPropagation();
            });
        // end tabs


        $('#orderbutton').prop('disabled', true);

        $('#agreement_order').change(function () {

            if ($(this).prop('checked')==false){
                $('#orderbutton').prop('disabled', true).addClass('disabled');
            }else{
                $('#orderbutton').prop('disabled', false).removeClass('disabled');
            }
        });

        var productapplicationtheme;
        $('a[href="#productapplication"]').click(function(){
            productapplicationtheme = $(this).data('theme');
            $('#productapplicationinput').val(productapplicationtheme);
        });



        var thisHeight, windWidth = window.innerWidth;


        function dropdownScrollPane(){
            windWidth = window.innerWidth;
            if(windWidth > 992){
                $('.aside-filters-block .item-dropdown-inner').each(function(){
                    thisHeight = $(this).height();
                    if(thisHeight > 289){
                        $(this).jScrollPane({
                            verticalDragMinHeight: 30,
                            verticalDragMaxHeight: 50,
                            contentWidth: '0px'
                        });
                    }
                });
            }
        }
        dropdownScrollPane();


        $('.aside-filters-block .filter-item-title').click(function(){
            if($(this).parent().hasClass('active')){
                $(this).parent().removeClass('active');
                $(this).parent().find('.item-dropdown').slideUp(300);
            }else{
                $(this).parent().addClass('active');
                $(this).parent().find('.item-dropdown').slideDown(300);
                dropdownScrollPane();
            }
        });



        window.addEventListener("resize", function() {
        	dropdownScrollPane();
        }, false);

        window.addEventListener("orientationchange", function() {
            dropdownScrollPane();
        }, false);




        $('.filters-form-title-xs').click(function(){
            $(this).toggleClass('active');
            $('.filters-form').toggleClass('active');
        });


        $('.mse2_sort_header_title, #mse2_sort').hover(
            function(){
                $('#mse2_sort').show();
                $('.mse2_sort_header_title').addClass('hover');
            },
            function(){
                $('#mse2_sort').hide();
                $('.mse2_sort_header_title').removeClass('hover');
            }
        );

        var sortlinktext;
        if($('.mse2_sort_wrap #mse2_sort a').hasClass('active')){
            sortlinktext = $('.mse2_sort_wrap #mse2_sort a.active').text();
            $('.mse2_sort_header_title .element_text').text(sortlinktext);
        }


        $('.mse2_sort_wrap #mse2_sort a').click(function(){
            $('.mse2_sort_header_title .element_text').text($(this).text());
        });

        $('.reset-filters-btn').click(function(){
            $('.mse2_sort_header_title .element_text').text('По умолчанию');
        });




        $('.grid-view-btn').click(function(){
            $('.list-view-btn').removeClass('active');
            $(this).addClass('active');

            $('#mse2_results').removeClass('viewlist');
            document.cookie = "catalogviewlist=viewgrid; path=/";
        });

        $('.list-view-btn').click(function(){
            $('.grid-view-btn').removeClass('active');
            $(this).addClass('active');

            $('#mse2_results').addClass('viewlist');
            document.cookie = "catalogviewlist=viewlist; path=/";
        });


        $('.catalog .element .color-block-inner > .color-element').click(function(){
            var listItemIndex = $(this).index() + 1;
            $(this).parents('.element').find('.img-wrapper img').removeClass('active');
            $(this).parents('.element').find('.img-wrapper img:nth-of-type('+listItemIndex+')').addClass('active');
        });

});// end ready



















