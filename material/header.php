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
    <div class="row white">
        <!-- 헤더 -->
        <header>
            <?php
            // 머터리얼 디자인 적용하기 위한 인수 조정
            $args = array(
                'container'       => 'div',
                'container_class' => '',
                'theme_location' => 'footer',
                'menu_class'      => 'sidenav sidenav-fixed black',
                'menu_id' => 'nav-mobile',
                ''
            );
            ?>
            <?php wp_nav_menu($args); ?>
            <div class="topbar">
                <span class="topbar--icon--container">
                    <i class="material-icons">menu</i>
                </span>
            </div>
        </header>
        <!-- 헤더 끝 -->

        <!-- 메인 컨테이너 -->
        <main id="main-side">
            <div class="container white s12 m12 xl12 z-depth-1">