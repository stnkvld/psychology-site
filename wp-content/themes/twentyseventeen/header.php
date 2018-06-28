<?php

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/assets/css/reset.css">
<link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/assets/css/linea.css">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <header class="header" role="banner">

        <div class="top-bar header__top-bar top-bar_dark-blue">
            <div class="container">
                <div class="info top-bar__info">
                    <a href="#" class="info__elem info__phone">
                        <span class="icon icon-basic-smartphone"></span>
                        +7 (999) 215-47-76
                    </a>
                    <a href="#" class="info__elem info__email">
                        <span class="icon icon-basic-mail"></span>
                        stnkvld@gmail.com
                    </a>
                </div>
            </div>
        </div>
        <div class="main-bar header__main-bar">
            <div class="container">
                <div class="logo header__logo">
                    <img src="<?= get_template_directory_uri(); ?>/assets/images/logo.jpg">
                </div>
                <nav class="menu header__menu">
                    <a href="#">Главная</a>
                    <a href="#">Образование</a>
                    <a href="#">Блог</a>
                    <a href="#">Услуги</a>
                    <a href="#">Контакты</a>
                    <a href="#">Цены</a>
                    <a href="#">Отзывы</a>
                </nav>
            </div>
        </div>

    </header>

    <?php

    /*
     * If a regular post or page, and not the front page, show the featured image.
     * Using get_queried_object_id() here since the $post global may not be set before a call to the_post().
     */
    if ( ( is_single() || ( is_page() && ! twentyseventeen_is_frontpage() ) ) && has_post_thumbnail( get_queried_object_id() ) ) :
        echo '<div class="single-featured-image-header">';
        echo get_the_post_thumbnail( get_queried_object_id(), 'twentyseventeen-featured-image' );
        echo '</div><!-- .single-featured-image-header -->';
    endif;
    ?>

    <div class="site-content-contain">
        <div id="content" class="site-content">
