<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}
?>

<section class="<?= 'hero' . (!empty($atts['hero_class']) ? ' ' . $atts['hero_class'] : '') ?>">
    <div class="hero__bg" style="background-image: url('<?= $atts['image']['url'] ?>');"></div>
    <h1 class="hero__title"><?= $atts['head_title'] ?></h1>
    <?php if ( !empty($atts['btn_shortcode']) ): ?>
        <div class="hero__btn-wrapper">
	        <?= do_shortcode($atts['btn_shortcode']); ?>
        </div>
    <?php endif; ?>
</section>