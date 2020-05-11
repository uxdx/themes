<?php
// 전역 변수
$rootUrl = 'https://harujapan.net/';





// css 로딩
function load_stylesheets()
{
    // style.css
    wp_enqueue_style('style', get_stylesheet_uri());
    // css/animate.css
    wp_register_style('animate', get_theme_file_uri('/css/animate.css'), array(), 1, 'all');
    wp_enqueue_style('animate');
    // dist/bootstrap.css
    wp_register_style('bootstrap', get_theme_file_uri('/css/bootstrap.min.css'), array(), 1, 'all');
    wp_enqueue_style('bootstrap');
    // css/custom.css
    wp_register_style('custom', get_theme_file_uri('/css/custom.css'), array(), 1, 'all');
    wp_enqueue_style('custom');
    // font-awesome
    wp_register_style('font-awesome', get_theme_file_uri('/css/font-awesome.min.css'), array(), 1, 'all');
    wp_enqueue_style('font-awesome');
    // owl.carousel
    wp_register_style('owl.carousel', get_theme_file_uri('/css/owl.carousel.css'), array(), 1, 'all');
    wp_enqueue_style('owl.carousel');
    // owl.theme
    wp_register_style('owl.theme', get_theme_file_uri('/css/owl.theme.default.min.css'), array(), 1, 'all');
    wp_enqueue_style('owl.theme');
    // tooplate-style
    wp_register_style('tooplate-style', get_theme_file_uri('/css/tooplate-style.css'), array(), 1, 'all');
    wp_enqueue_style('tooplate-style');
}

add_action('wp_enqueue_scripts', 'load_stylesheets');


//load scripts
function addjs()
{
    wp_register_script('bootstrap', get_theme_file_uri('/js/bootstrap.min.js'), array(), 1, 1, 1);
    wp_enqueue_script('bootstrap');

    wp_deregister_script('jquery');
    wp_register_script('jquery', get_theme_file_uri('/js/jquery.js'), array(), 1, 1, 1);
    wp_enqueue_script('jquery');

    wp_register_script('jquery.stellar', get_theme_file_uri('/js/jquery.stellar.min.js'), array(), 1, 1, 1);
    wp_enqueue_script('jquery.stellar');

    wp_register_script('jquery.sticky', get_theme_file_uri('/js/jquery.sticky.js'), array(), 1, 1, 1);
    wp_enqueue_script('jquery.sticky');

    wp_register_script('owl.carousel', get_theme_file_uri('/js/owl.carousel.min.js'), array(), 1, 1, 1);
    wp_enqueue_script('owl.carousel');

    wp_register_script('smoothscroll', get_theme_file_uri('/js/smoothscroll.js'), array(), 1, 1, 1);
    wp_enqueue_script('smoothscroll');

    wp_register_script('wow', get_theme_file_uri('/js/wow.min.js'), array(), 1, 1, 1);
    wp_enqueue_script('wow');

    wp_register_script('custom', get_theme_file_uri('/js/custom.js'), array(), 1, 1, 1);
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


// 콘솔에 로그 출력 함수
function Console_log($data)
{
    echo "<script>console.log( 'PHP_Console: " . $data . "' );</script>";
}
