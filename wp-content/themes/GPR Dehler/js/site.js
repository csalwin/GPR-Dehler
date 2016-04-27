/**
 * Created by Chris on 11/11/15.
 */
$( document ).ready(function() {

    //Header JS

    $('.glyphicon-menu-hamburger').click(function () {
        $('.searchForm').slideUp();
        $('#navigation-menu').slideToggle();

    });
    $('.headerButtons .glyphicon-search').click(function () {
        $('#navigation-menu').slideUp();
        $('.searchForm').slideToggle();

    });

    $(".searchForm input").focus(function () {
        if ( $(".searchForm").css('width') <= '150px'){
            $(".searchForm").css('width', '300px');
            $(".searchForm form").css('padding-left', '40px');
        }
    });
    $(".searchForm input").focusout(function () {
        console.log("Focus Fire");
        if ( $(".searchForm").css('width') == '300px'){
            $(".searchForm").css('width', '130px');
            $(".searchForm form").css('padding-left', '0');
        }
    });


//    Job Form

    $('button.applyonline').click(function (){
        $('.jobForm').hide();
        $(this).next().slideToggle();
        $('button.applyonline').show();
        $(this).hide();


    });



//    SLIDERS
    $('.resultslider').slick({
        centerMode: true,
        slidesToShow: 1,
        autoplay: true,
        arrows: true,
        responsive: [
            {
                breakpoint: 1200,
                settings: {
                    arrows: false,
                    centerMode: true,
                    slidesToShow: 1
                }
            }
        ]
    });
    $('.overview').slick({
        responsive: [
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    autoplay: true,
                    autoplaySpeed: 0,
                    speed: 4500,
                    cssEase:'linear'
                }
            }
        ],
        slidesToShow: 6,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 0,
        speed: 4500,
        cssEase:'linear'
    });
    $('.achivslider').slick({
        centerMode: true,
//                centerPadding: '60px',
        slidesToShow: 1,
        autoplay: true,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    arrows: true,
                    centerMode: true,
//                            centerPadding: '800px',
                    slidesToShow: 1
                }
            },
            {
                breakpoint: 600,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '0px',
                    slidesToShow: 1
                }
            }
        ]
    });

//Home Page Sliders
    var slider_array;
    var slider_arraysecond;
        // launch bxslider
        $('.homeSlider').each(function(i){
            slider_array = $(this).bxSlider({
                controls: false,
                pager: false,
                infiniteLoop: true,
                auto: true,
                speed: 1800,
                pause: 5000,
                autoDelay: 1000,
                onSlideNext: doThis
            });
        });
        //So the slider are Synced
        function doThis(){
            slider_array.goToNextSlide();
        }

        $('.testSlider').each(function(i){
            slider_arraysecond = $(this).bxSlider({
                controls: false,
                pager: false,
                infiniteLoop: true,
                auto: true,
                speed: 1800,
                pause: 5000,
                onSlideNext: doThistoo
            });
        });
        function doThistoo(){
            slider_arraysecond.goToNextSlide();
        }
    
    
    


    $('#filterdropdown').change(function () {
        window.location.href = $(this).val();
    })










});
