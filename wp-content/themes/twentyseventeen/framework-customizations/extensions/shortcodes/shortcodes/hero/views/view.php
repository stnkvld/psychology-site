<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}
?>

<div class="<?= 'hero' . (!empty($atts['hero_class']) ? ' ' . $atts['hero_class'] : '') ?>">
    <div class="hero__bg" style="background-image: url('<?= $atts['image']['url'] ?>');"></div>
    <h1 class="hero__title"><?= $atts['head_title'] ?></h1>
    <button type="button" class="btn hero__btn" style="background-color: <?= $atts['color'] ?>;"><?= $atts['button_text'] ?></button>
</div>