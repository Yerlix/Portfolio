<?php
/**
 * Register meta boxes
 *
 * @return void
 */
function cv_register_meta_boxes()
{
	$meta_boxes = create_cv_metaboxes();

	// Make sure there's no errors when the plugin is deactivated or during upgrade
	if ( ! class_exists( 'RW_Meta_Box' ) )
		return;

	// Register meta boxes only for some posts/pages
	if ( ! cv_maybe_include() )
		return;

	foreach ( $meta_boxes as $meta_box )
	{
		new RW_Meta_Box( $meta_box );
	}
}

add_action( 'admin_init', 'cv_register_meta_boxes' );

/**
 * Check if meta boxes is included
 *
 * @return bool
 */
function cv_maybe_include()
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
	$checked_templates = array( 'page-cv.php' );

	$template = get_post_meta( $post_id, '_wp_page_template', true );
	if ( in_array( $template, $checked_templates ) )
		return true;

	// If no condition matched
	return false;
}

function create_cv_metaboxes(){
	$prefix = 'yer_';
	$meta_boxes   = array();
	$meta_boxes[] = array(
		'id' => 'cv',
	    'title' => __( 'CV Fields', 'rwmb' ),
	    'pages' => array( 'post', 'page' ),
	    'context' => 'normal',
	    'priority' => 'high',
	    'autosave' => true,
		'fields' => array(
			array(
				'id'	=> "{$prefix}cvtitle",
				'name'	=> __( "Title", 'rwmb' ),
				'type'	=> "text",
				),
			// persoonlijke gegevens
			array(
				'id'	=> "{$prefix}headingpers",
				'type'	=> "heading",
				'name'	=> 'Persoonlijke gegevens'
				),
			array(
				'id'	=> "{$prefix}perstitle",
				'name'	=> __( "Title", 'rwmb' ),
				'type'	=> "text",
				),
			array(
				"id"	=> "{$prefix}headinglabel",
				"type"	=> "heading",
				"name"	=> "Persoonlijke labels"
				),
			array(
				"id"	=> "{$prefix}perslabels",
				"name"	=> "Labels",
				"type"	=> "text",
				"clone"	=> true,
				),
			array(
				"id"	=> "{$prefix}headinginfo",
				"type"	=> "heading",
				"name"	=> "Persoonlijke gegevens"
				),
			array(
				"id"	=> "{$prefix}perscontent",
				"name"	=> "Content",
				"type"	=> "text",
				"clone"	=> true,
				),
			// vrije tijd
			array(
				'id'	=> "{$prefix}headinghobby",
				'type'	=> "heading",
				'name'	=> "Hobby's"
				),
			array(
				'id'	=> "{$prefix}hobbystitle",
				'name'	=> __( "Title", 'rwmb' ),
				'type'	=> "text",
				),
			array(
				"id"	=> "{$prefix}hobbys",
				"name"	=> "Hobby's",
				"type"	=> "text",
				"clone"	=> true,
				),
		),
	);

	return $meta_boxes;
}