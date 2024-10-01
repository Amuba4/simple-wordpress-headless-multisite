<?php
function my_custom_theme_setup() {
    // Add support for menus
    add_theme_support('menus');

    // Register a primary menu
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'my-custom-theme')
    ));
}
add_action('after_setup_theme', 'my_custom_theme_setup');

// Enqueue styles and scripts
function my_custom_theme_scripts() {
    wp_enqueue_style('main-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'my_custom_theme_scripts');


add_action('template_redirect', 'restrict_all_frontend_access');

function restrict_all_frontend_access() {
    // Redirect all requests to the frontend to the admin login page
    wp_redirect(wp_login_url());
    exit;
}
