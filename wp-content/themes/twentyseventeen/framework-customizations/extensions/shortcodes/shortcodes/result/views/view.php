<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}
?>

<section class="result colored blue">
    <div class="container">
        <h2 class="result__title section__title"><?= $atts['title'] ?></h2>
        <div class="result__text">
            <?= $atts['text'] ?>
        </div>
        <ul class="result__list">
            <?php foreach ($atts['list'] as $element): ?>
                <li><?= $element['option_text'] ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
</section>