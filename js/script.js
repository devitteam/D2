jQuery(document).ready(function ($) {
    //высота блока с текстом новости в зависимости от заголовка, news
    $(function (){
    	var newsone=$(".news-one");
        newsone.each(function(i,elem) {
            if ($(this).children("a").children(".head-news").height()==72) {
                $(this).children("a").children(".text-news").css('height','105px');
                //console.log($(".news-one .head-news"))
            }
            if($(this).children("a").children(".head-news").height()>72) {
                $(this).children("a").children(".text-news").css('height','85px');
            }
            if($(this).children("a").children(".head-news").height()<72) {
                $(this).children("a").children(".text-news").css('height','165px');
            }
        });
        // var h2=$(".news-one .head-news").height();//text-news=95 if head-news=72
        // console.log(h2)

	});
    //высота блока с текстом статьи блога в зависимости от заголовка, news
    $(function (){
        var blogone=$(".blog-one-one");
        blogone.each(function(i,elem) {
            if ($(this).children(".head-blog-one").height()==72) {
                $(this).children("a").children(".text-blog").css('height','120px');
                //console.log($(".news-one .head-news"))
            }
            if($(this).children(".head-blog-one").height()>72) {
                $(this).children("a").children(".text-blog").css('height','78px');
            }
            if($(this).children(".head-blog-one").height()<72) {
                $(this).children("a").children(".text-blog").css('height','150px');
            }
        });
         // var h2=$(".blog-one-one .head-blog-one").height();//text-news=95 if head-news=72
         // console.log(h2)
    });
    //просмотр фото по клику, one-news
    $(document).on('click', '[data-toggle="lightbox"]', function(event) {
        event.preventDefault();
        $(this).ekkoLightbox({
            alwaysShowClose: true,
        });
    });
    //левое меню
    $('.product-categories > .cat-parent > a').click(function (event) {
        event.preventDefault();
        var children = $(this).parent().find('.children');
        $('.product-categories .cat-parent .children').not(this).hide();
        children.toggle();
        // console.log(children);
    });
    // $(document).ready(function() {
    //     $('.nav-link-collapse').on('click', function() {
    //         $('.nav-link-collapse').not(this).removeClass('nav-link-show');
    //         $(this).toggleClass('nav-link-show');
    //     });
    // });
//карусель товаров и карусель на главной 1
    $(document).ready(function() {
        var carousel = $("#news-slider");
        $(".news-slider").owlCarousel({
            items:4,
            itemsDesktop:[1199,4],
            itemsDesktopSmall:[1000,3],
            itemsMobile:[650,1],
            pagination:false,
            navigationText:false,
            stopOnHover:true,
            smartSpeed:1000,
            autoPlay:true
        });


        $('#js-prev').click(function () {

            // Запускаем перемотку влево
            carousel.trigger('owl.prev', [500]);

            return false;
        });

// Вперед
// При клике на "Вперед"
        $('#js-next').click(function () {

            // Запускаем перемотку вправо
            carousel.trigger('owl.next', [500]);

            return false;
        });
 //
        var carouselreviews = $("#news-slider1");

        $('#js-prev-reviews').click(function () {

            // Запускаем перемотку влево
            carouselreviews.trigger('owl.prev');

            return false;
        });
        $('#js-next-reviews').click(function () {

            // Запускаем перемотку вправо
            carouselreviews.trigger('owl.next');

            return false;
        });

 // карусель по стилям на главной tab-1
        var carouselstyle1 = $("#index-slider-tabs-1");
        $("#index-slider-tabs-1").owlCarousel({
            items:1,
            itemsDesktop:[1199,1],
            itemsDesktopSmall:[1000,1],
            itemsMobile:[650,1],
            pagination:false,
            navigationText:false,
            stopOnHover:true,
            autoPlay:true,
        });
        $('#js-prev-style-tabs-1').click(function () {

            // Запускаем перемотку влево
            carouselstyle1.trigger('owl.prev');

            return false;
        });
        $('#js-next-style-tabs-1').click(function () {

            // Запускаем перемотку вправо
            carouselstyle1.trigger('owl.next');

            return false;
        });
        // tabs-2
        var carouselstyle2 = $("#index-slider-tabs-2");
        $("#index-slider-tabs-2").owlCarousel({
            items:1,
            itemsDesktop:[1199,1],
            itemsDesktopSmall:[1000,1],
            itemsMobile:[650,1],
            pagination:false,
            navigationText:false,
            stopOnHover:true,
            autoPlay:true
        });
        $('#js-prev-style-tabs-2').click(function () {

            // Запускаем перемотку влево
            carouselstyle2.trigger('owl.prev');

            return false;
        });
        $('#js-next-style-tabs-2').click(function () {

            // Запускаем перемотку вправо
            carouselstyle2.trigger('owl.next');

            return false;
        });
        // tabs-3
        var carouselstyle3 = $("#index-slider-tabs-3");
        $("#index-slider-tabs-3").owlCarousel({
            items:1,
            itemsDesktop:[1199,1],
            itemsDesktopSmall:[1000,1],
            itemsMobile:[650,1],
            pagination:false,
            navigationText:false,
            stopOnHover:true,
            autoPlay:true
        });
        $('#js-prev-style-tabs-3').click(function () {

            // Запускаем перемотку влево
            carouselstyle3.trigger('owl.prev');

            return false;
        });
        $('#js-next-style-tabs-3').click(function () {

            // Запускаем перемотку вправо
            carouselstyle3.trigger('owl.next');

            return false;
        });
        // tabs-4
        var carouselstyle4 = $("#index-slider-tabs-4");
        $("#index-slider-tabs-4").owlCarousel({
            items:1,
            itemsDesktop:[1199,1],
            itemsDesktopSmall:[1000,1],
            itemsMobile:[650,1],
            pagination:false,
            navigationText:false,
            stopOnHover:true,
            autoPlay:true
        });
        $('#js-prev-style-tabs-4').click(function () {

            // Запускаем перемотку влево
            carouselstyle4.trigger('owl.prev');

            return false;
        });
        $('#js-next-style-tabs-4').click(function () {

            // Запускаем перемотку вправо
            carouselstyle4.trigger('owl.next');

            return false;
        });





   // карусель по цветовой стилистики на главной tab-1
        var carouselstylecolor = $("#stylecolor-slider-tabs-1");
        $(".stylecolor-slider").owlCarousel({
            items:1,
            itemsDesktop:[1199,1],
            itemsDesktopSmall:[1000,1],
            itemsMobile:[650,1],
            pagination:false,
            navigationText:false,
            stopOnHover:true,
            autoPlay:true
        });
        $('#js-prev-stylecolor-tabs-1').click(function () {

            // Запускаем перемотку влево
            carouselstylecolor.trigger('owl.prev');

            return false;
        });
        $('#js-next-stylecolor-tabs-1').click(function () {

            // Запускаем перемотку вправо
            carouselstylecolor.trigger('owl.next');

            return false;
        });
        // tabs-2
        var carouselstyletabs2 = $("#stylecolor-slider-tabs-2");

        $('#js-prev-stylecolor-tabs-2').click(function () {

            // Запускаем перемотку влево
            carouselstyletabs2.trigger('owl.prev');

            return false;
        });
        $('#js-next-stylecolor-tabs-2').click(function () {

            // Запускаем перемотку вправо
            carouselstyletabs2.trigger('owl.next');

            return false;
        });
        // tabs-3
        var carouselstyletabs3 = $("#stylecolor-slider-tabs-3");

        $('#js-prev-stylecolor-tabs-3').click(function () {

            // Запускаем перемотку влево
            carouselstyletabs3.trigger('owl.prev');

            return false;
        });
        $('#js-next-stylecolor-tabs-3').click(function () {

            // Запускаем перемотку вправо
            carouselstyletabs3.trigger('owl.next');

            return false;
        });

        // tabs-4
        var carouselstyletabs4 = $("#stylecolor-slider-tabs-4");

        $('#js-prev-stylecolor-tabs-4').click(function () {

            // Запускаем перемотку влево
            carouselstyletabs4.trigger('owl.prev');

            return false;
        });
        $('#js-next-stylecolor-tabs-4').click(function () {

            // Запускаем перемотку вправо
            carouselstyletabs4.trigger('owl.next');

            return false;
        });
        // tabs-5
        var carouselstyletabs5 = $("#stylecolor-slider-tabs-5");

        $('#js-prev-stylecolor-tabs-5').click(function () {

            // Запускаем перемотку влево
            carouselstyletabs5.trigger('owl.prev');

            return false;
        });
        $('#js-next-stylecolor-tabs-5').click(function () {

            // Запускаем перемотку вправо
            carouselstyletabs5.trigger('owl.next');

            return false;
        });
        // tabs-6
        var carouselstyletabs6 = $("#stylecolor-slider-tabs-6");

        $('#js-prev-stylecolor-tabs-6').click(function () {

            // Запускаем перемотку влево
            carouselstyletabs6.trigger('owl.prev');

            return false;
        });
        $('#js-next-stylecolor-tabs-6').click(function () {

            // Запускаем перемотку вправо
            carouselstyletabs6.trigger('owl.next');

            return false;
        });
        // tabs-7
        var carouselstyletabs7 = $("#stylecolor-slider-tabs-7");

        $('#js-prev-stylecolor-tabs-7').click(function () {

            // Запускаем перемотку влево
            carouselstyletabs7.trigger('owl.prev');

            return false;
        });
        $('#js-next-stylecolor-tabs-7').click(function () {

            // Запускаем перемотку вправо
            carouselstyletabs7.trigger('owl.next');

            return false;
        });
        //tabs-4-7



        //карусель в каталоге товаров
            var catalogslidernew = $("#catalog-slider-new");
            $(".catalog-slider").owlCarousel({
                items:3,
                itemsDesktop:[1199,2],
                itemsDesktopSmall:[1000,2],
                itemsMobile:[650,1],
                pagination:false,
                navigationText:false,
                stopOnHover:true,
                autoPlay:true
            });


            $('#js-prev-catalog-new').click(function () {

                // Запускаем перемотку влево
                catalogslidernew.trigger('owl.prev');

                return false;
            });

// Вперед
// При клике на "Вперед"
            $('#js-next-catalog-new').click(function () {

                // Запускаем перемотку вправо
                catalogslidernew.trigger('owl.next');

                return false;
            });

        var catalogsliderselection = $("#catalog-slider-selection");

        $('#js-prev-catalog-selection').click(function () {

            // Запускаем перемотку влево
            catalogsliderselection.trigger('owl.prev');

            return false;
        });

        $('#js-next-catalog-selection').click(function () {

            // Запускаем перемотку вправо
            catalogsliderselection.trigger('owl.next');

            return false;
        });

        //карточка товара карусель выбор покупателей
        var productslider = $("#product-slider");
        $("#product-slider").owlCarousel({
            items:4,
            itemsDesktop:[1199,4],
            itemsDesktopSmall:[1000,3],
            itemsMobile:[650,1],
            pagination:false,
            navigationText:false,
            stopOnHover:true,
            autoPlay:true
        });


        $('#js-prev-product').click(function () {

            // Запускаем перемотку влево
            productslider.trigger('owl.prev');

            return false;
        });

// Вперед
// При клике на "Вперед"
        $('#js-next-product').click(function () {

            // Запускаем перемотку вправо
            productslider.trigger('owl.next');

            return false;
        });



        $("#rubrics-slider").owlCarousel({
            items:3,
            itemsDesktop:[1199,3],
            itemsDesktopSmall:[1000,2],
            itemsMobile:[650,1],
            pagination:true,
            navigationText:false,
            stopOnHover:true,
            autoPlay:true
        });
    });


// табы
    $( function() {
        //tab на главной примеры стилей
        $( "#tabs" ).tabs({
            event: "mouseover"
        });
        $( "#tabs-color" ).tabs({
            //event: "mouseover"
        });
        //для клиентов
        // $( "#tabs-for-them" ).tabs({
        //     event: "mouseover"
        // });
        //карточка товара доставка
        $( "#tabs-delivery" ).tabs({
        });
    } );

    // изменение цвета картинки
    var sourceSwap = function () {
        var $this = $(this).children('.aboutas-img').children('.js-hover');
        var newSource = $this.data('alt-src');
        $this.data('alt-src', $this.attr('src'));
        $this.attr('src', newSource);

    }
    $(function () {
        $('.aboutas ').hover(sourceSwap, sourceSwap);
        $('.work ').hover(sourceSwap, sourceSwap);
    });

//.animate({height: "hide"}, 1000);
//остановить карусель
    $( function() {
        $('.product-container #carousel.carousel.slide').carousel({
            interval: false
        });
        $('.product-container #thumbcarousel.carousel.slide').carousel({
            interval: false
        });

    });
//в модальном окне не активна кнопка подписаться пока не активен чекбокс
    $('#switch3 input').change(function(){
        if ($(this).prop('checked')==true)  {
            $('.modal-footer-selection .selection').removeClass('disabled');
        }
        else{
            $('.modal-footer-selection .selection').addClass('disabled');
        }
    });
//появление модального окна через 2 сек
    $(document).ready(function() {
        setTimeout(function() {
            $("#myModalBox").modal('show');
        }, 5000);
        // if ($('#tabs-for-them .ui-tabs-active .ui-tabs-anchor')){
        //
        //     var $this = $('#tabs-for-them .ui-tabs-active .ui-tabs-anchor').children('.js-hover');
        //     console.log($this);
        //     var newSource = $this.data('alt-src');
        //     $this.data('alt-src', $this.attr('src'));
        //     $this.attr('src', newSource);
        // }
        // else{
        //     var $this = $('#tabs-for-them .ui-state-default .ui-tabs-anchor').children('.js-hover');
        //     console.log($this);
        //     var newSource = $this.data('src');
        //     $this.data('src', $this.attr('alt-src'));
        //     $this.attr('alt-src', newSource);
        // }

    });

    //серый фон активных кнопок меню
    $(".dropdown-menu").on("mouseover", function () {
        $(this).parent().css('background', '#f4f4f4');
    });
    $(".dropdown-menu").on("mouseout", function () {
        $(this).parent().css('background', 'none');
    });


    //убираем класс матовое стекло с поиска по нажатию
    $(".overlay-1").click(function() {
        if ("#search .input.glass "){
            $("#search .input").removeClass('glass');
        }
    });
    //добавляем класс матовое стекло
    $(document).mouseup(function (e){ // событие клика по веб-документу
        var div = $(".overlay-1"); // тут указываем ID элемента
        if (!div.is(e.target) // если клик был не по нашему блоку
            && div.has(e.target).length === 0) { // и не по его дочерним элементам
            if (! $("#search .input").hasClass("glass") ){
                $("#search .input").addClass('glass');
            }
        }
    });

    //акардион в каталоге мобильная версия
    $( function() {
        $( "#accordion" ).accordion({
            collapsible: true,
            heightStyle: "content"
        });
    } );




    //наверх кнопка
    $(function() {

        $(window).scroll(function() {

            if($(this).scrollTop() != 0) {

                $('#toTop').fadeIn();

            } else {

                $('#toTop').fadeOut();

            }

        });

        $('#toTop').click(function() {

            $('body,html').animate({scrollTop:0},800);

        });

    });

        //читать далее в стилях
    $(function () {
        $(".content-style").hide();

        $(".toggle-style").on("click", function (e) {

            var $this = $(this).prev('.content-style');
            var $text = $(this);
            $this.slideToggle('fast', function () {
                if ($(this).is(':visible')) {
                    $text.text('Cкрыть.');
                } else {
                    $text.text('Читать далее...');
                }
            });

        });
    });

    var doc_width = $(document).width();
    if (doc_width < 992) {
        $("#primary-menu .menu-item-has-children .nav-link").click(function(e) {
            e.preventDefault();
            var li_parent = $(this).parent();
            var this_sub_menu = li_parent.children(".sub-menu");
            $("#primary-menu .menu-item-has-children .sub-menu").not(this_sub_menu).css("display", "none");
            console.log('клац');
            this_sub_menu.slideToggle();
        });
    }

});