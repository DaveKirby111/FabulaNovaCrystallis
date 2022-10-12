<?php 

add_theme_support('title-tag');
add_theme_support('custom-logo');
add_theme_support('post_thumbnails');
add_theme_support('custom-background');

function fnc_styles() {
    wp_enqueue_style('theme-style', get_template_directory_uri() . "/style.css", array(), '1.4');
}

add_action('wp_enqueue_scripts', 'fnc_styles');


function register_menus() {
    register_nav_menus(
        array(
            'header-menu' => 'Header Menu',
            'side-menu' => 'Side Menu',
            'footer-menu' => 'Footer Menu'
        )
    );
}

add_action('init', 'register_menus');

?>