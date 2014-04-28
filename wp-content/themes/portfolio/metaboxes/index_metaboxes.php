<?php
/**
 * Register meta boxes
 *
 * @return void
 */
function rw_register_meta_boxes()
{
	$meta_boxes = create_home_metaboxes();

	// Make sure there's no errors when the plugin is deactivated or during upgrade
	if ( ! class_exists( 'RW_Meta_Box' ) )
		return;

	// Register meta boxes only for some posts/pages
	if ( ! rw_maybe_include() )
		return;

	foreach ( $meta_boxes as $meta_box )
	{
		new RW_Meta_Box( $meta_box );
	}
}

add_action( 'admin_init', 'rw_register_meta_boxes' );

/**
 * Check if meta boxes is included
 *
 * @return bool
 */
function rw_maybe_include()
{
	// Include in back-end only
	if ( ! defined( 'WP_ADMIN' ) || ! WP_ADMIN )
		return false;

	// Always include for ajax
	if ( defined( 'DOING_AJAX' ) && DOING_AJAX )
		return true;

	// Check for post IDs

	if ( isset( $_GET['post'] ) )
		$post_id = $_GET['post'];
	elseif ( isset( $_POST['post_ID'] ) )
		$post_id = $_POST['post_ID'];
	else
		$post_id = false;

	$post_id = (int) $post_id;

	// Check for page template
	$checked_templates = array( 'page-home.php', 'default' );

	$template = get_post_meta( $post_id, '_wp_page_template', true );
	if ( in_array( $template, $checked_templates ) )
		return true;

	// If no condition matched
	return false;
}

function create_home_metaboxes(){
	$prefix = 'yer_';
	$meta_boxes   = array();
	$meta_boxes[] = array(
		'id' => 'main',
	    'title' => __( 'Main Fields', 'rwmb' ),
	    'pages' => array( 'post', 'page' ),
	    'context' => 'normal',
	    'priority' => 'high',
	    'autosave' => true,
		'fields' => array(
			array(
				'id'		=> "{$prefix}hometitle",
				'name'	=> __( "Title", 'rwmb' ),
				'type'	=> "text",
				),
			// IMAGE UPLOAD
			array(
				'name'             => __( 'Slide images', 'rwmb' ),
				'id'               => "{$prefix}slideimgs",
				'type'             => 'plupload_image',
				'max_file_uploads' => 10,
				'desc' => 'Dimensions: 986 × 339',
			),
		),
	);
	$meta_boxes[] = array(
		'id' => 'about',
	    'title' => __( 'About Fields', 'rwmb' ),
	    'pages' => array( 'post', 'page' ),
	    'context' => 'normal',
	    'priority' => 'high',
	    'autosave' => true,
		'fields' => array(
			array(
				'id'		=> "{$prefix}abouttitle",
				'name'	=> __( "Title", 'rwmb' ),
				'type'	=> "text",
				),
			// IMAGE UPLOAD
			array(
				'name'             => __( 'Images (max 2)', 'rwmb' ),
				'id'               => "{$prefix}aboutimgs",
				'type'             => 'plupload_image',
				'max_file_uploads' => 2,
				'desc' => '',
			),
			array(
				'id'		=> "{$prefix}aboutcontent",
				'name'	=> __( "Content", 'rwmb' ),
				'type'	=> "textarea",
			),
		),
	);
	$meta_boxes[] = array(
		'id' => 'links',
	    'title' => __( 'Useful links Fields', 'rwmb' ),
	    'pages' => array( 'post', 'page' ),
	    'context' => 'normal',
	    'priority' => 'high',
	    'autosave' => true,
		'fields' => array(
			array(
				'id'		=> "{$prefix}linktitle",
				'name'	=> __( "Title", 'rwmb' ),
				'type'	=> "text",
				),
			// IMAGE UPLOAD
			array(
				'name'             => __( 'Link images (max 2)', 'rwmb' ),
				'id'               => "{$prefix}linkimgs",
				'type'             => 'plupload_image',
				'max_file_uploads' => 2,
				'desc' => 'Dimensions: similar to each other',
			),
			array(
				'id'		=> "{$prefix}linkcontact",
				'name'	=> __( "Contact content", 'rwmb' ),
				'type'	=> "textarea",
			),
			array(
				'id'		=> "{$prefix}linkprojects",
				'name'	=> __( "Project content", 'rwmb' ),
				'type'	=> "textarea",
			),
		),
	);

	return $meta_boxes;
}