<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}
?>

<section class="services">
    <div class="container">
        <h2 class="services__title section__title"><?= $atts['title'] ?></h2>
        <div class="services__elements <?= $atts['type'] ?>">
            <?php foreach ($atts['elements'] as $element): ?>

                <div class="services__element">
                    <div class="services__element-icon">
<!--                        <span class="icon icon-basic-smartphone"></span>-->
                        <img src="<?= $element['option_icon']['url'] ?>" alt="">
                    </div>
                    <h3 class="services__element-title"><?= $element['option_title'] ?></h3>
                    <div class="services__element-text">
	                    <?= $element['option_text'] ?>
                    </div>
                </div>

            <?php endforeach; ?>
        </div>
    </div>
</section>