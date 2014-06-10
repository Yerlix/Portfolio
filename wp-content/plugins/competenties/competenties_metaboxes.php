<?php

add_action( 'admin_init', 'com_register_meta_boxes' );
function com_register_meta_boxes()
{
	if ( ! class_exists( 'RW_Meta_Box' ) )
		return;

	$prefix     = 'yer_';
	$meta_boxes = array();


	$args = array(
	   'name' => 'competentie'
	);
	$post_types = get_post_types($args);

	// 1st meta box
	for(int $i = 0; $i<5; $i++){
		$meta_boxes[] = array(
		'id'    => 'bewijs' . $i,
		'title' => __( 'Bewijs' . $i, 'rwmb' ),
		'pages' => $post_types,

		'fields' => array(
			array(
				'name' => __( 'Bewijs ' . $i, 'rwmb' ),
				'id'   => $prefix . 'bewijs' . $i,
				'type' => 'file_advanced',
				'max_file_uploads' => 8,
			),
			array(
				'name' => __( 'Uitleg ' . $i, 'rwmb' ),
				'id'   => $prefix . 'uitleg' . $i,
				'type' => 'textarea',
				),
			)
		);
	}

	// Other meta boxes go here
	$meta_boxes[] = array(
		'id'    => 'skills',
		'title' => __( 'Skills', 'rwmb' ),
		'pages' => $post_types,

		'fields' => array(
			// CHECKBOX LIST
			array(
				'name' => __( 'Soft or hard skill', 'rwmb' ),
				'id'   => "{$prefix}soft_hard",
				'type' => 'radio',
				// Options of checkboxes, in format 'value' => 'Label'
				'options' => array(
					'soft' => __( 'Soft skill', 'rwmb' ),
					'hard' => __( 'Hard skill', 'rwmb' ),
				),
			),
		)
	);

	foreach ( $meta_boxes as $meta_box )
	{
		new RW_Meta_Box( $meta_box );
	}
}

