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
	'unique-class' => array(
		'label' => __('Уникальный класс', 'fw'),
		'type' => 'text'
	),
	'elements' => array(
		'type'  => 'addable-box',
		'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
		'label' => __('Элементы', '{domain}'),
		'box-options' => array(
			'option_title' => array( 'label' => 'Заголовок', 'type' => 'text' ),
			'option_link' => array( 'label' => 'Ссылка', 'type' => 'text' ),
			'option_text' => array( 'label' => 'Текст', 'type' => 'wp-editor' ),
			'option_icon' => array( 'label' => 'Иконка', 'type' => 'upload' ),
		),
		'template' => 'Элемент', // box title
		'limit' => 0, // limit the number of boxes that can be added
		'add-button-text' => __('Добавить', '{domain}'),
		'sortable' => true,
	)
);