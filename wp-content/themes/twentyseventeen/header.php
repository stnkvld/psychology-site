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

        <div class="main-bar header__main-bar">
            <div class="container">
                <?php if ( is_front_page() ): ?>
                    <a class="logo header__logo" href="/">
                        <img src="<?= get_template_directory_uri(); ?>/assets/images/logo.jpg">
                    </a>
                <?php else: ?>
                    <div class="logo header__logo">
                        <img src="<?= get_template_directory_uri(); ?>/assets/images/logo.jpg">
                    </div>
                <?php endif; ?>
                <?php
                    wp_nav_menu_extended( array(
                        'menu'            => 'Основное меню',
                        'fallback_cb'     => '__return_empty_string',
                        'items_wrap'      => '<ul class="menu header__menu">%3$s</ul>',
                        'depth'           => 0
                    ) );
                ?>
            </div>
        </div>
<!--        <div class="mobile-menu header__mobile-menu dark-blue">-->
<!--            <div class="container">-->
<!--                <div class="logo header__logo">-->
<!--                    <img src="--><?//= get_template_directory_uri(); ?><!--/assets/images/logo.jpg">-->
<!--                </div>-->
<!--                <div class="mobile-menu__caller">-->
<!--                    <span class="icon icon-hamburger"></span>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->

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
