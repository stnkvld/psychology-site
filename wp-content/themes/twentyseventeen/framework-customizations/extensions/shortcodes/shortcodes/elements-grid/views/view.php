<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}
?>

<section class="about-me">
    <div class="container">
        <h2 class="about-me__title section__title"><?= $atts['title'] ?></h2>
        <div class="about-me__content">
		    <div class="photo photo-with-text" style="background-image: url(<?= $atts['photo']['url'] ?>)"></div>
            <div class="text">
                <?= $atts['text'] ?>
            </div>
        </div>
    </div>
</section>