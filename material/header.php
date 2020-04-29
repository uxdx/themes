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
                    <ul class="right hide-on-med-and-down">
                        <li>
                            <a href="#">내 정보</a>
                        </li>
                        <li>
                            <a href="#">보고서</a>
                        </li>
                    </ul>

                    <ul id="nav-mobile" class="sidenav">
                        <li><a href="#">내 정보</a></li>
                        <li><a href="#">보고서</a></li>
                    </ul>
                    <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                </div>
            </nav>
        </header>
        <!-- 헤더 끝 -->
        <!-- 메인 -->
        <main>
            <!-- 메인 컨테이너 -->
            <div class="container">