<?php

function load_stylesheets()
{
    wp_register_style('styles', get_template_directory_uri() . '/assets/css/main.css', array(), 1, 'all');
    wp_enqueue_style('styles');

    wp_register_style('custom', get_template_directory_uri() . '/assets/css/custom.css', array(), 1, 'all');
    wp_enqueue_style('custom');
}

add_action('wp_enqueue_scripts', 'load_stylesheets');



//load scripts
function addjs()
{
    wp_deregister_script('jquery');
    wp_register_script('jquery', get_template_directory_uri() . '/assets/js/jquery.min.js', array(), 1, 1, 1);
    wp_enqueue_script('jquery');

    wp_register_script('browser', get_template_directory_uri() . '/assets/js/browser.min.js', array(), 1, 1, 1);
    wp_enqueue_script('browser');

    wp_register_script('breakpoints', get_template_directory_uri() . '/assets/js/breakpoints.min.js', array(), 1, 1, 1);
    wp_enqueue_script('breakpoints');

    wp_register_script('util', get_template_directory_uri() . '/assets/js/util.js', array(), 1, 1, 1);
    wp_enqueue_script('util');

    wp_register_script('main', get_template_directory_uri() . '/assets/js/main.js', array(), 1, 1, 1);
    wp_enqueue_script('main');

    wp_register_script('custom', get_template_directory_uri() . '/assets/js/custom.js', array(), 1, 1, 1);
    wp_enqueue_script('custom');
}
add_action('wp_enqueue_scripts', 'addjs');



//Menu Support
add_theme_support('menus');


//Regiser menus
register_nav_menus(
    array(
        'top-menu' =>  __('Top Menu', 'theme'),
    )
);
