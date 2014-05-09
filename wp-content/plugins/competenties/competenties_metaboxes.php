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
	$meta_boxes[] = array(
		'id'    => 'logo',
		'title' => __( 'Front image', 'rwmb' ),
		'pages' => $post_types,

		'fields' => array(
			array(
				'name' => __( 'Bewijzen', 'rwmb' ),
				'id'   => $prefix . 'bewijzen',
				'type' => 'file_advanced',
				'max_file_uploads' => 4,
			),
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
	// Other meta boxes go here

	foreach ( $meta_boxes as $meta_box )
	{
		new RW_Meta_Box( $meta_box );
	}
}

