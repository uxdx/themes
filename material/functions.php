<?php
// 전역 변수
$rootUrl = 'https://harujapan.net/';





// css 로딩
function load_stylesheets()
{
    // style.css
    wp_enqueue_style('style', get_stylesheet_uri());
    // css/materialize.css
    wp_register_style('material', get_template_directory_uri() . '/css/materialize.css', array(), 1, 'all');
    wp_enqueue_style('material');
    // dist/material-components-web.css
    wp_register_style('mdc', get_template_directory_uri() . '/dist/material-components-web.css', array(), 1, 'all');
    wp_enqueue_style('mdc');
    // css/custom.css
    wp_register_style('custom', get_template_directory_uri() . '/css/custom.css', array(), 1, 'all');
    wp_enqueue_style('custom');
}

add_action('wp_enqueue_scripts', 'load_stylesheets');


//load scripts
function addjs()
{
    wp_deregister_script('jquery');
    wp_register_script('jquery', 'https://code.jquery.com/jquery-2.1.1.min.js', array(), 1, 1, 1);
    wp_enqueue_script('jquery');

    wp_register_script('init', get_template_directory_uri() . '/js/init.js', array(), 1, 1, 1);
    wp_enqueue_script('init');

    wp_register_script('materialize', get_template_directory_uri() . '/js/materialize.js', array(), 1, 1, 1);
    wp_enqueue_script('materialize');

    wp_register_script('custom', get_template_directory_uri() . '/js/custom.js', array(), 1, 1, 1);
    wp_enqueue_script('custom');
}
add_action('wp_enqueue_scripts', 'addjs');



// 메뉴 등록
register_nav_menus(array(
    'primary' => __('Primary Menu'),
    'footer' => __('Footer Menu'),
    'category' => __('Category Menu'),
    'program-search' => __('Program Search'),
    'program-setting' => __('Program Setting'),
));
