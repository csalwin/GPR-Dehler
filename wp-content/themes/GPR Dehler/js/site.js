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
        $('form.jobform').hide();
        $(this).next().slideToggle();
        $('button.applyonline').show();
        $(this).hide();


    })










});
