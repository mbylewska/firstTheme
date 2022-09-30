<?php


//Load stylesheets
function load_stylesheets()
{
    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css', array(), 1, 'all');
    wp_enqueue_style('bootstrap');

    wp_register_style('style', get_template_directory_uri() . '/css/style.css', array(), 1, 'all');
    wp_enqueue_style('style');

    wp_register_style('responsive', get_template_directory_uri() . 'css/responsive.css', array(), 1, 'all');
    wp_enqueue_style('responsive');

    wp_register_style('custom', get_template_directory_uri() . 'custom.css', array(), 1, 'all');
    wp_enqueue_style('custom');
};
add_action('wp_enqueue_scripts', 'load_stylesheets');



//Load scripts

function addjs()
{

    wp_deregister_script('jquery');
    wp_register_script('jquery', get_template_directory_uri() . '/js/jquery-3.4.1.min.js', array(), 1, 1, 1);
    wp_enqueue_script('jquery');

    wp_register_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.js', array(), 1, 1, 1);
    wp_enqueue_script('bootstrap');

    wp_register_script('custom', get_template_directory_uri() . 'js/custom.js', array(), 1, 1, 1);
    wp_enqueue_script('custom');
};
add_action('wp_enqueue_scripts', 'addjs');



//menu support
add_theme_support('menus');
add_theme_support('post-thumbnails');


//Register menus
register_nav_menus(

    array(
        'top-menu' => __('Top Menu', 'theme')
    )
);
