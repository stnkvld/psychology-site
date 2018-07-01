<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'title' => array(
		'label' => __('Заголовок', 'fw'),
		'type' => 'text'
	),
	'type' => array(
		'label' => __('Тип сетки', 'fw'),
		'type' => 'select',
		'choices' => array(
			'horizontal' => __('Горизонтальный', '{domain}'),
			'vertical' => __('Вертикальный', '{domain}')
		)
	),
	'elements' => array(
		'type'  => 'addable-box',
		'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
		'label' => __('Элементы', '{domain}'),
		'box-options' => array(
			'option_title' => array( 'type' => 'text' ),
			'option_text' => array( 'type' => 'wp-editor' ),
			'option_icon' => array( 'type' => 'upload' ),
		),
		'template' => 'Элемент', // box title
		'limit' => 0, // limit the number of boxes that can be added
		'add-button-text' => __('Добавить', '{domain}'),
		'sortable' => true,
	)
);