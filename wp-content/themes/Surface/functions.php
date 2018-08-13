<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

define( 'THEME_URI', get_template_directory_uri() );
define( 'THEME_PATH', get_template_directory() );
define( 'THEME_IMAGE_URL', THEME_URI . '/images' );
define( 'THEME_JS', THEME_URI . '/js' );
define( 'THEME_CSS', THEME_URI . '/css' );
define( 'THEME_LOGO', $clogo[0] );

function wp_bootstrap_4_scripts() {
    wp_enqueue_style( 'open-iconic-bootstrap', get_stylesheet_directory_uri() . '/assets/css/open-iconic-bootstrap.css', array(), 'v4.0.0', 'all' );
    wp_enqueue_style( 'bootstrap-4', get_stylesheet_directory_uri() . '/assets/css/bootstrap.css', array(), 'v4.0.0', 'all' );
    wp_enqueue_style( 'wp-bootstrap-4-style', get_stylesheet_uri(), array(), '1.0.2', 'all' );

    wp_enqueue_style( 'google-font-css', 'https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400i,600,600i,700,700i,900,900i|Open+Sans+Condensed:300,700' );
    wp_enqueue_style( 'theme-css', get_stylesheet_directory_uri() . '/assets/css/theme.css', array(), 'v4.0.0', 'all' );
    wp_enqueue_style( 'animate-css', get_stylesheet_directory_uri() . '/assets/css/animate.min.css', array(), 'v1.0.0', 'all' );


    wp_enqueue_script( 'bootstrap-4-js', get_stylesheet_directory_uri() . '/assets/js/bootstrap.js', array('jquery'), 'v4.0.0', true );
    wp_enqueue_script( 'aos-js', get_stylesheet_directory_uri() . '/assets/js/aos.js', array('jquery'), 'v2.0.0', true );
    wp_enqueue_script( 'theme-js', get_stylesheet_directory_uri() . '/assets/js/theme.js', array('jquery'), 'v2.0.0', true );


    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'wp_bootstrap_4_scripts' );


?>