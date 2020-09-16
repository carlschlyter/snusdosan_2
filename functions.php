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

        'top-menu' => 'Top Menu Location',
        'footer-menu' => 'Footer Location'
    )

);

//Custom image sizes
add_image_size('hero-image', 2400, 1600, false);
add_image_size('hero-image-shallow', 1920, 800, true);
add_image_size('hero-image-shallow-plus', 1920, 1000, true);
add_image_size('icons', 50, 50, true);
add_image_size('offer-plates', 200, 200, true);


//Woocommerce
function mytheme_add_woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );


//Contact Form

add_action('wp_ajax_contact', 'contact_form');
add_action('wp_ajax_nopriv_contact', 'contact_form');

function contact_form(){


    $formdata = [];

    wp_parse_str($_POST['contact'], $formdata);

    //Sender of form email i.e. admin
    $admin_email = get_option('admin_email');

    //Email headers
    $headers[] = 'Content-type: text/html; charset=UTF-8';
    $headers[] = 'Från: ' . $admin_email;
    $headers[] = 'Svar till: ' . $formdata['email'];

    //Recipient of email
    $send_to = $admin_email;

    //Subject
    $subject = "Fråga från " . $formdata['Förnamn'] . ' ' . $formdata['Efternamn'];

    //Message
    $message = '';

    foreach($formdata as $index => $field) {

        $message .= '<strong>' . $index . '</strong>: ' . $field . '<br />';
    }

    try {

        if(wp_mail($send_to, $subject, $message, $headers)){

            wp_send_json_success('E-post skickat');

        } else {

            wp_send_json_error('Fel när epost skickades');
        }
    } catch (exception $e) {

            wp_send_json_error($e->getMessage());
    
    }

    wp_send_json_success( $formdata['Förnamn'] );

}