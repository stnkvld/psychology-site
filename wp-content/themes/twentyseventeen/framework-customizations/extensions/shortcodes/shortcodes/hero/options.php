<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'hero-class' => array(
		'label' => __('Класс элемента', 'fw'),
		'desc'  => __('', 'fw'),
		'type' => 'text'
	),
	'head-title' => array(
		'label' => __('Заголовок', 'fw'),
		'desc'  => __('Заголовок виджета', 'fw'),
		'type' => 'text'
	),
	'image' => array(
		'type'  => 'upload',
		'label' => __( 'Выберите изображение', 'fw' ),
		'desc'  => __( 'Either upload a new, or choose an existing image from your media library', 'fw' )
	),
	'button-text' => array(
		'label' => __('Текст для кнопки', 'fw'),
		'desc'  => __('', 'fw'),
		'type' => 'text'
	),
	'url-text' => array(
		'label' => __('Ссылка для кнопки', 'fw'),
		'desc'  => __('', 'fw'),
		'type' => 'text'
	),
	'btn-shortcode' => array(
		'label' => __('Шорткод кнопки для FormCraft', 'fw'),
		'desc'  => __('', 'fw'),
		'type' => 'text'
	),
);