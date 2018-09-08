<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>

		</div><!-- #content -->

		<footer class="footer">
            <div class="container">
                <div class="footer__menu-wrapper">
	                <?php
                        wp_nav_menu_extended( array(
                            'menu'            => 'Основное меню',
                            'fallback_cb'     => '__return_empty_string',
                            'items_wrap'      => '<ul class="menu footer__menu">%3$s</ul>',
                            'depth'           => 0
                        ) );
	                ?>
                </div>
                <div class="footer__contacts">
                    <p>Санкт-Петербург (812) 335-98-84</p>
                    <p>ул. Магнитогорская, 30, БЦ «Dominat Modern», офис 404</p>
                    <p>Москва (495) 221-05-68</p>
                    <a href="">Вся контактная информация</a>
                </div>
                <div class="footer__socials">
                    <div class="footer__socials-wrapper">
                        <div class="footer__social"></div>
                        <div class="footer__social"></div>
                    </div>
                    <div class="footer__copyright">
                        &copy; 2018 Инна Сотникова
                    </div>
                </div>
            </div>
		</footer><!-- #colophon -->
	</div><!-- .site-content-contain -->
</div><!-- #page -->
<?php wp_footer(); ?>

</body>
</html>
