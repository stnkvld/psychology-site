<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
    
	/*'footer_text' => array(
		'type'  => 'wp-editor',
		'teeny' => true,
		'reinit' => true,
		'label' => __('Footer Text', 'fw'),
		'desc'  => __('Enter some content for this textblock', 'fw'),
	),
	'bg-color' => array(
		'type'  => 'color-picker',
		'value' => '#FF0000',
		'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
		// palette colors array
		'palettes' => array( '#ba4e4e', '#0ce9ed', '#941940' ),
		'label' => __('Label', '{domain}'),
		'desc'  => __('Description', '{domain}'),
		'help'  => __('Help tip', '{domain}'),
	)*/

	'logo' => array(
		'type'  => 'upload',
		'label' => __( 'Логотип', '{domain}' ),
		'desc'  => __( 'Either upload a new, or choose an existing image from your media library', '{domain}' )
	),
	'name_site' => array(
		'type'  => 'text',
		'value' => 'My site',
		'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
		'label' => __('Название', '{domain}'),
		'desc'  => __('Description', '{domain}'),
		'help'  => __('Help tip', '{domain}'),
	),
	'address' => array(
		'type'  => 'text',
		'value' => 'My site',
		'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
		'label' => __('Адрес компании', '{domain}'),
		'desc'  => __('Description', '{domain}'),
		'help'  => __('Help tip', '{domain}'),
	),
	'phone' => array(
		'type'  => 'text',
		'value' => 'My site',
		'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
		'label' => __('Телефон', '{domain}'),
		'desc'  => __('Description', '{domain}'),
		'help'  => __('Help tip', '{domain}'),
	),
	'phone2' => array(
		'type'  => 'text',
		'value' => '',
		'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
		'label' => __('Второй телефон', '{domain}'),
		'desc'  => __('Description', '{domain}'),
		'help'  => __('Help tip', '{domain}'),
	),
	'email' => array(
		'type'  => 'text',
		'value' => '',
		'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
		'label' => __('E-mail', '{domain}'),
		'desc'  => __('Description', '{domain}'),
		'help'  => __('Help tip', '{domain}'),
	),
	'skype' => array(
		'type'  => 'text',
		'value' => '',
		'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
		'label' => __('Skype', '{domain}'),
		'desc'  => __('Description', '{domain}'),
		'help'  => __('Help tip', '{domain}'),
	),
	'facebook' => array(
		'type'  => 'text',
		'value' => '',
		'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
		'label' => __('Facebook', '{domain}'),
		'desc'  => __('Description', '{domain}'),
		'help'  => __('Help tip', '{domain}'),
	),
	'twitter' => array(
		'type'  => 'text',
		'value' => '',
		'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
		'label' => __('Twitter', '{domain}'),
		'desc'  => __('Description', '{domain}'),
		'help'  => __('Help tip', '{domain}'),
	),
	'instagram' => array(
		'type'  => 'text',
		'value' => '',
		'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
		'label' => __('Instagram', '{domain}'),
		'desc'  => __('Description', '{domain}'),
		'help'  => __('Help tip', '{domain}'),
	),
	'youtube' => array(
		'type'  => 'text',
		'value' => '',
		'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
		'label' => __('YouTube', '{domain}'),
		'desc'  => __('Description', '{domain}'),
		'help'  => __('Help tip', '{domain}'),
	),
	'googleplus' => array(
		'type'  => 'text',
		'value' => '',
		'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
		'label' => __('Google+', '{domain}'),
		'desc'  => __('Description', '{domain}'),
		'help'  => __('Help tip', '{domain}'),
	)
);