<?php
// Enqueue scripts and styles
function opsoftswoo_enqueue_scripts() {
    wp_enqueue_style('opsoftswoo-style', get_template_directory_uri() . '/dist/css/style.css', [], '1.0');
    wp_enqueue_script('opsoftswoo-vue', get_template_directory_uri() . '/dist/js/app.js', [], '1.0', true);
}
add_action('wp_enqueue_scripts', 'opsoftswoo_enqueue_scripts');

// WooCommerce support
add_action('after_setup_theme', function() {
    add_theme_support('woocommerce');
});
