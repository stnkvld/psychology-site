<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}
?>

<section class="services">
    <div class="container">
        <h2 class="services__title section__title"><?= $atts['title'] ?></h2>
        <div class="services__elements <?= $atts['type'] ?> <?= $atts['unique_class'] ?>">
            <?php foreach ($atts['elements'] as $element): ?>

                    <div class="services__element">
	                    <?php if ( !empty($element['option_link']) ): ?>
                        <a href="<?= $element['option_link'] ?>">
                        <?php endif; ?>
                            <div class="services__element-icon">
                                <img src="<?= $element['option_icon']['url'] ?>" alt="">
                            </div>
                            <h3 class="services__element-title"><?= $element['option_title'] ?></h3>
                            <div class="services__element-text">
                                <?= $element['option_text'] ?>
                            </div>
                        <?php if ( !empty($element['option_link']) ): ?>
                            </a>
                        <?php endif; ?>
                    </div>

            <?php endforeach; ?>
        </div>
    </div>
</section>