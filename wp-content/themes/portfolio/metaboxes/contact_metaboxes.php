<?php
/**
 * Register meta boxes
 *
 * @return void
 */
function contact_register_meta_boxes()
{
	$meta_boxes = create_contact_metaboxes();

	// Make sure there's no errors when the plugin is deactivated or during upgrade
	if ( ! class_exists( 'RW_Meta_Box' ) )
		return;

	// Register meta boxes only for some posts/pages
	if ( ! contact_maybe_include() )
		return;

	foreach ( $meta_boxes as $meta_box )
	{
		new RW_Meta_Box( $meta_box );
	}
}

add_action( 'admin_init', 'contact_register_meta_boxes' );

/**
 * Check if meta boxes is included
 *
 * @return bool
 */
function contact_maybe_include()
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
	$checked_templates = array( 'page-contact.php' );

	$template = get_post_meta( $post_id, '_wp_page_template', true );
	if ( in_array( $template, $checked_templates ) )
		return true;

	// If no condition matched
	return false;
}

function create_contact_metaboxes(){
	$prefix = 'yer_';
	$meta_boxes   = array();
	$meta_boxes[] = array(
		'id' => 'contact',
	    'title' => __( 'Contact Fields', 'rwmb' ),
	    'pages' => array( 'post', 'page' ),
	    'context' => 'normal',
	    'priority' => 'high',
	    'autosave' => true,
		'fields' => array(
			array(
				'id'		=> "{$prefix}contacttitle",
				'name'	=> __( "Title", 'rwmb' ),
				'type'	=> "text",
				),
			array(
				'id'		=> "{$prefix}contactsub",
				'name'	=> __( "Subttitle", 'rwmb' ),
				'type'	=> "text",
				),
		),
	);

	return $meta_boxes;
}