<?php

// Insert Custom Logo Image
add_theme_support('custom-logo', array(
    'flex-height' => true,
    'flex-width'  => true,
));

function opsofts_enqueue_nav_script() {
    wp_enqueue_script('opsofts-nav', get_template_directory_uri() . '/dist/js/nav.js', [], false, true);
}
add_action('wp_enqueue_scripts', 'opsofts_enqueue_nav_script');


function opsoftswoo_enqueue_scripts() {
    wp_enqueue_style('opsoftswoo-style', get_template_directory_uri() . '/dist/css/style.css', [], '1.0');
    wp_enqueue_script('opsoftswoo-script', get_template_directory_uri() . '/dist/js/app.js', [], '1.0', true);
}
add_action('wp_enqueue_scripts', 'opsoftswoo_enqueue_scripts');

add_action('after_setup_theme', function () {
    add_theme_support('woocommerce');
});

function woowp_tailwind() {
	wp_enqueue_style( 'output', get_template_directory_uri() . '/dist/output.css', array() );
}
add_action( 'wp_enqueue_scripts', 'woowp_tailwind' );