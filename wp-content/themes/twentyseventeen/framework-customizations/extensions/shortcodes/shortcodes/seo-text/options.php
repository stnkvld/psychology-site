<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'seo-text' => array(
		'label' => __('Текст', 'fw'),
		'desc'  => __('Напишите текст и самостоятельно опишите нужные HTML-теги', 'fw'),
		'type' => 'wp-editor'
	)
);