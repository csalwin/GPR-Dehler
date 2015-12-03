/**
 * Created by Chris on 11/11/15.
 */
$( document ).ready(function() {

    //Header JS

    $('.glyphicon-menu-hamburger').click(function () {
        $('#search-mobile').slideUp();
        $('#nav-menu-mobile').slideToggle();

    });
    $('.headerButtons .glyphicon-search').click(function () {
        $('#nav-menu-mobile').slideUp();
        $('#search-mobile').slideToggle();

    });







});
