/**
 * Created by Chris on 11/11/15.
 */
$( document ).ready(function() {

    //Header JS

    $('.glyphicon-menu-hamburger').click(function () {
        $('#nav-bar form').slideUp();
        $('#navigation-menu').slideToggle();

    });
    $('.glyphicon-search').click(function () {
        $('#navigation-menu').slideUp();
        $('#nav-bar form').slideToggle();

    });


});
