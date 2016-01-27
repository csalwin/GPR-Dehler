<?php
/**
 * Created by PhpStorm.
 * User: Chris
 * Date: 10/11/15
 * Time: 11:16
 */
add_theme_support( 'html5', array( 'search-form' ) );

//Enqueing JS Scripts
if (!is_admin()) add_action("wp_enqueue_scripts", "enqueue", 11);
function enqueue() {
    wp_deregister_script('jquery');
    wp_register_script('jquery', "https://code.jquery.com/jquery-1.11.3.min.js", false, null);
    wp_enqueue_script('jquery');

    wp_register_script('Cycle2', get_template_directory_uri(). "/js/cycle2.js", "jquery", "1", true );
    wp_register_script('Cycle2-captions', get_template_directory_uri(). "/js/cycle2-caption.js", "Cycle2", "1", true );
    wp_enqueue_script('Cycle2');
    wp_enqueue_script('Cycle2-captions');

    wp_register_script('slick', get_template_directory_uri(). "/js/slickSlider/slick.min.js", "jquery", "1", true );
    wp_enqueue_script('slick');



}




//Adding Menus
function register_my_menus() {
    register_nav_menus(
        array(
            'header-menu' => __( 'Header Menu' ),
            'footer-menu' => __( 'Footer Menu')
        )
    );
}
add_action( 'init', 'register_my_menus' );



//Add theme customisation
function theme_customizer( $wp_customize ) {

    // Logo upload
    $wp_customize->add_section( 'logo_section' , array(
        'title'       => __( 'Logo', 'debut' ),
        'priority'    => 30,
        'description' => 'Upload a logo to replace the default site name and description in the header',
    ) );
    $wp_customize->add_setting( 'logo', array(
        'sanitize_callback' => 'esc_url_raw',
    ) );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'logo', array(
        'label'    => __( 'Logo', 'debut' ),
        'section'  => 'logo_section',
        'settings' => 'logo',
    ) ) );

    // Set site name and description to be previewed in real-time
    $wp_customize->get_setting('blogname')->transport='postMessage';
    $wp_customize->get_setting('blogdescription')->transport='postMessage';
    // Enqueue scripts for real-time preview
    wp_enqueue_script( 'customizer', get_template_directory_uri() . '/js/customizer.js', array( 'jquery' ) );

}
add_action('customize_register', 'theme_customizer');

//Add Search Form
function my_search_form( $form ) {
    $form = '<form role="search" method="get" id="searchform" class="searchform" action="' . home_url( '/' ) . '" >

	<input type="text" placeholder="Search..." value="' . get_search_query() . '" name="s" id="s" />
	<i class="glyphicon glyphicon-search" type="submit" id="searchsubmit"></i>

	</form>';

    return $form;
}

add_filter( 'get_search_form', 'my_search_form' );
