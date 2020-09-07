<?php

// Load style sheets
function load_css() {

    wp_register_style('bootstrap',get_template_directory_uri() . '/css/bootstrap.min.css' , array() , false , 'all');
    wp_enqueue_style('bootstrap');

    wp_register_style('main',get_template_directory_uri() . '/css/main.css' , array() , false , 'all');
    wp_enqueue_style('main');

}
add_action('wp_enqueue_scripts', 'load_css');


//Load js
function load_js() {

    wp_enqueue_script('jquery');

    wp_register_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', 'jquery', false, true);
    wp_enqueue_script('bootstrap');

}
add_action('wp_enqueue_scripts', 'load_js');

//Theme options
add_theme_support('menus');
add_theme_support('post-thumbnails');
add_theme_support('widgets');
add_theme_support('custom-background');

//Custom Background

// $args = array(
//     'default-color' => '0000ff',
//     'default-image' => get_template_directory_uri() . '/images/StockSnap_QCCEZ16Q6Y.jpg',
// );
// add_theme_support( 'custom-background', $args );

//Menus
register_nav_menus(

    array(

        'top-menu' => 'Top Menu Location'
    )

);

//Custom image sizes
add_image_size('hero-image', 2400, 1600, false);
add_image_size('hero-image-shallow', 1920, 800, true);
add_image_size('icons', 50, 50, true);
add_image_size('offer-plates', 200, 200, true);
