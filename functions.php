<?php
define("THEME_DIR", get_template_directory_uri());
/*--- REMOVE GENERATOR META TAG ---*/
remove_action('wp_head', 'wp_generator');
//
// SCRIPTS IN DIRECTORY ALREADY
// Adding custom scripts.
function enqueue_scripts() {
  //Modernizr
  wp_register_script( 'modernizr.js', THEME_DIR . '/javascripts/modernizr.js' );
  //Pace Preloader
  //wp_register_script( 'pace.js', THEME_DIR . '/javascripts/pace.js', null, true );
  //Smooth Scroll 
  wp_register_script( 'smoothscroll.js', THEME_DIR . '/javascripts/smoothscroll.js', null, true );
}
add_action( 'wp_enqueue_scripts', 'enqueue_scripts' );

//
// CUSTOM STYLES
//
function enqueue_styles() {
  
    wp_register_style( 'style', THEME_DIR . '/style.css', array(), '3', 'all' );
    wp_enqueue_style( 'style' );

	wp_register_style( 'animate', THEME_DIR . '/stylesheets/animate.min.css', array(), '1', 'all' );
    wp_enqueue_style( 'animate' );
  
  	//wp_register_style( 'preloader', THEME_DIR . '/stylesheets/preloader.css', array(), '2', 'all' );
    //wp_enqueue_style( 'preloader' );
  
    wp_register_style( 'slider.css', THEME_DIR . '/stylesheets/slider.css', array(), '2', 'all' );
    wp_enqueue_style( 'slider' );

}
add_action( 'wp_enqueue_scripts', 'enqueue_styles' );

    // Set up the WordPress core custom background feature.
    add_theme_support( 'custom-background', apply_filters( 'base_wp_custom_background_args', array(
        'default-color' => '13181A',
        'default-image' => '',
    ) ) );

    // Custom logo support.
    add_theme_support( 'custom-logo' );

?>