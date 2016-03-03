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
        console.log("Focus Fire");
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
        $('.wpcf7').hide();
        $(this).next().slideToggle();
        $('button.applyonline').show();
        $(this).hide();


    });



//    SLIDERS
    $('.resultslider').slick({
        centerMode: true,
//                centerPadding: '60px',
        slidesToShow: 3,
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


    //Parallax Setup
    $.stellar();










});
