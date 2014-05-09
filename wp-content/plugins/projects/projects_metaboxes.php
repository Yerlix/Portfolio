<?php

add_action( 'admin_init', 'pro_register_meta_boxes' );
function pro_register_meta_boxes()
{
	if ( ! class_exists( 'RW_Meta_Box' ) )
		return;

	$prefix     = 'yer_';
	$meta_boxes = array();


	$args = array(
	   'name' => 'project'
	);
	$post_types = get_post_types($args);

	// 1st meta box
	$meta_boxes[] = array(
		'id'    => 'projects',
		'title' => __( 'Completed projects', 'rwmb' ),
		'pages' => $post_types,

		'fields' => array(
			array(
				'name' => __( 'Image', 'rwmb' ),
				'id'   => $prefix . 'pro_image',
				'type' => 'plupload_image',
				'max_file_uploads' => 1,
			),
			array(
                'name'  => __( 'Link', 'rwmb' ),
                'id'    => "{$prefix}pro_link",
                'type'  => 'url',
            ),
		)
	);
	// Other meta boxes go here

	foreach ( $meta_boxes as $meta_box )
	{
		new RW_Meta_Box( $meta_box );
	}
}

