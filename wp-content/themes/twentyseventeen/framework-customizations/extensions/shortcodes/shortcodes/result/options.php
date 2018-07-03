<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'title' => array(
		'label' => __('Заголовок', 'fw'),
		'type' => 'text'
	),
	'text' => array(
		'label' => __('Текст под заголовком', 'fw'),
		'desc'  => __('', 'fw'),
		'type' => 'wp-editor'
	),
	'list' => array(
		'type'  => 'addable-box',
		'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
		'label' => __('Список', '{domain}'),
		'box-options' => array(
			'option_text' => array( 'type' => 'wp-editor' ),
		),
		'template' => 'Элемент списка', // box title
		'limit' => 0, // limit the number of boxes that can be added
		'add-button-text' => __('Добавить', '{domain}'),
		'sortable' => true,
	)
);