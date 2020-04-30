<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta name="viewport" content="width=content-width">
    <meta charset="<?php bloginfo('charset'); ?>">
    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>

<body>
    <!-- 전체 컨테이너 -->
    <div class="row">
        <!-- 헤더 -->
        <header>
            <nav class="light-blue lighten-1" role="navigation">

                <div class="nav-wrapper container"><a id="logo-container" href="http://localhost:81/" class="brand-logo">뿌리 줄기</a>
                    <!-- 프로그램 검색 메뉴 리스트 -->
                    <?php wp_nav_menu(array(
                        'container' => '',
                        'theme_location' => 'program-search',
                        'menu_class' => 'dropdown-content',
                        'menu_id' => 'dropdown-program-search',
                    )); ?>
                    <!-- 프로그램 설정 메뉴 리스트 -->
                    <?php wp_nav_menu(array(
                        'container' => '',
                        'theme_location' => 'program-setting',
                        'menu_class' => 'dropdown-content',
                        'menu_id' => 'dropdown-program-setting',
                    )); ?>
                    <ul class="right hide-on-med-and-down">
                        <li>
                            <!-- 프로그램 검색 메뉴 -->
                            <a class="dropdown-trigger" href="#!" data-target="dropdown-program-search">프로그램 검색<i class="material-icons right">arrow_drop_down</i></a>
                        </li>
                        <li>
                            <!-- 프로그램 설정 메뉴 -->
                            <a class="dropdown-trigger" href="#!" data-target="dropdown-program-setting">프로그램 설정<i class="material-icons right">arrow_drop_down</i></a>
                        </li>
                    </ul>
                    <!-- 모바일 환경 -->
                    <?php wp_nav_menu(array(
                        'container' => '',
                        'theme_location' => 'primary',
                        'menu_class' => 'sidenav',
                        'menu_id' => 'nav-mobile',
                    )); ?>
                    <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                </div>
            </nav>
        </header>
        <!-- 헤더 끝 -->
        <!-- 메인 -->
        <main>
            <!-- 메인 컨테이너 -->
            <div class="container">