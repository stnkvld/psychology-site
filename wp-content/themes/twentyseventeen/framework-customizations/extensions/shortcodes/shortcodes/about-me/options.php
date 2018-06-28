<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'title' => array(
		'label' => __('Заголовок', 'fw'),
		'type' => 'text'
	),
	'photo' => array(
		'label' => __('Фотография', 'fw'),
		'desc'  => __('', 'fw'),
		'type' => 'upload'
	),
	'text' => array(
		'label' => __('Текст "Обо мне"', 'fw'),
		'desc'  => __('Напишите текст и самостоятельно опишите нужные HTML-теги', 'fw'),
		'type' => 'wp-editor'
	)
);