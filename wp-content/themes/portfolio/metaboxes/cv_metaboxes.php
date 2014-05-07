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
		'id' => 'details',
	    'title' => __( 'Details', 'rwmb' ),
	    'pages' => array( 'post', 'page' ),
	    'context' => 'normal',
	    'priority' => 'high',
	    'autosave' => true,
		'fields' => array(
			array(
				'id'	=> "{$prefix}detailstitle",
				'name'	=> __( "Title", 'rwmb' ),
				'type'	=> "text",
				),
			//// persoonlijke gegevens
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
			//// vrije tijd
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

	$meta_boxes[] = array(
		'id' => 'kennis',
	    'title' => __( 'Kennis', 'rwmb' ),
	    'pages' => array( 'post', 'page' ),
	    'context' => 'normal',
	    'priority' => 'high',
	    'autosave' => true,
		'fields' => array(
			array(
				'id'	=> "{$prefix}kennistitle",
				'name'	=> __( "Title", 'rwmb' ),
				'type'	=> "text",
				),
			//// Knowledge and skills
			array(
				'id'	=> "{$prefix}headingkennis",
				'type'	=> "heading",
				'name'	=> 'Kennis en vaardigheden'
				),
			array(
				'id'	=> "{$prefix}spectitle",
				'name'	=> __( "Title", 'rwmb' ),
				'type'	=> "text",
				),
			array(
				"id"	=> "{$prefix}headinglabel",
				"type"	=> "heading",
				"name"	=> "Kennis labels"
				),
			array(
				"id"	=> "{$prefix}kennislabels",
				"name"	=> "Labels",
				"type"	=> "text",
				"clone"	=> true,
				),
			array(
				"id"	=> "{$prefix}headinginfo",
				"type"	=> "heading",
				"name"	=> "Kennis gegevens"
				),
			array(
				"id"	=> "{$prefix}kenniscontent",
				"name"	=> "Content",
				"type"	=> "text",
				"clone"	=> true,
				),

			//// languages
			array(
				'id'	=> "{$prefix}headinglang",
				'type'	=> "heading",
				'name'	=> 'Talen'
				),
			array(
				'id'	=> "{$prefix}langtitle",
				'name'	=> __( "Title", 'rwmb' ),
				'type'	=> "text",
				),
			// Nederlands
			array(
				'id'	=> "{$prefix}nedtitle",
				'name'	=> __( "Nederlands Title", 'rwmb' ),
				'type'	=> "text",
				),
			array(
				'id'	=> "{$prefix}nedcontent",
				'name'	=> __( "Content", 'rwmb' ),
				'type'	=> "text",
				'clone'	=> true,
				),
			// Engels
			array(
				'id'	=> "{$prefix}engtitle",
				'name'	=> __( "Engels Title", 'rwmb' ),
				'type'	=> "text",
				),
			array(
				'id'	=> "{$prefix}engcontent",
				'name'	=> __( "Content", 'rwmb' ),
				'type'	=> "text",
				'clone'	=> true,
				),
			// Frans
			array(
				'id'	=> "{$prefix}franstitle",
				'name'	=> __( "Frans Title", 'rwmb' ),
				'type'	=> "text",
				),
			array(
				'id'	=> "{$prefix}franscontent",
				'name'	=> __( "Content", 'rwmb' ),
				'type'	=> "text",
				'clone'	=> true,
				),
		),
	);

	$meta_boxes[] = array(
		'id' => 'experience',
	    'title' => __( 'Ervaring', 'rwmb' ),
	    'pages' => array( 'post', 'page' ),
	    'context' => 'normal',
	    'priority' => 'high',
	    'autosave' => true,
		'fields' => array(
			array(
				'id'	=> "{$prefix}exptitle",
				'name'	=> __( "Title", 'rwmb' ),
				'type'	=> "text",
				),
			//// Opleiding
			array(
				'id'	=> "{$prefix}headingopleiding",
				'type'	=> "heading",
				'name'	=> 'Opleiding'
				),
			array(
				'id'	=> "{$prefix}opltitle",
				'name'	=> __( "Title", 'rwmb' ),
				'type'	=> "text",
				),
			// Middelbaar
			array(
				'id'	=> "{$prefix}midtitle",
				'name'	=> __( "Middelbaar Title", 'rwmb' ),
				'type'	=> "text",
				),
			array(
				'id'	=> "{$prefix}midcontent",
				'name'	=> __( "Content", 'rwmb' ),
				'type'	=> "text",
				'clone'	=> true,
				),
			// Hoger
			array(
				'id'	=> "{$prefix}hogertitle",
				'name'	=> __( "Hoger Title", 'rwmb' ),
				'type'	=> "text",
				),
			array(
				'id'	=> "{$prefix}hogercontent",
				'name'	=> __( "Content", 'rwmb' ),
				'type'	=> "text",
				'clone'	=> true,
				),
			//// Werkervaring
			array(
				'id'	=> "{$prefix}headingervaring",
				'type'	=> "heading",
				'name'	=> 'Werkervaring'
				),
			array(
				'id'	=> "{$prefix}ervtitle",
				'name'	=> __( "Title", 'rwmb' ),
				'type'	=> "text",
				),
			// Vakantiejob
			array(
				'id'	=> "{$prefix}vaktitle",
				'name'	=> __( "Vakantie Title", 'rwmb' ),
				'type'	=> "text",
				),
			array(
				'id'	=> "{$prefix}vakcontent",
				'name'	=> __( "Content", 'rwmb' ),
				'type'	=> "text",
				'clone'	=> true,
				),
			// Stage
			array(
				'id'	=> "{$prefix}stagetitle",
				'name'	=> __( "Stage Title", 'rwmb' ),
				'type'	=> "text",
				),
			array(
				'id'	=> "{$prefix}stagecontent",
				'name'	=> __( "Content", 'rwmb' ),
				'type'	=> "text",
				'clone'	=> true,
				),
		),
	);
	
	$meta_boxes[] = array(
		'id' => 'varia',
	    'title' => __( 'Varia', 'rwmb' ),
	    'pages' => array( 'post', 'page' ),
	    'context' => 'normal',
	    'priority' => 'high',
	    'autosave' => true,
		'fields' => array(
			array(
				'id'	=> "{$prefix}variatitle",
				'name'	=> __( "Title", 'rwmb' ),
				'type'	=> "text",
				),
			//// Opmerkingen
			array(
				'id'	=> "{$prefix}headingopmerkingen",
				'type'	=> "heading",
				'name'	=> 'Opmerkingen'
				),
			array(
				'id'	=> "{$prefix}opmtitle",
				'name'	=> __( "Title", 'rwmb' ),
				'type'	=> "text",
				),
			// Rijbewijs
			array(
				'id'	=> "{$prefix}rijtitle",
				'name'	=> __( "Rijbewijs Title", 'rwmb' ),
				'type'	=> "text",
				),
			array(
				'id'	=> "{$prefix}rijcontent",
				'name'	=> __( "Content", 'rwmb' ),
				'type'	=> "text",
				'clone'	=>	true,
				),
			// SIN
			array(
				'id'	=> "{$prefix}sintitle",
				'name'	=> __( "SIN Title", 'rwmb' ),
				'type'	=> "text",
				),
			array(
				'id'	=> "{$prefix}sincontent",
				'name'	=> __( "Content", 'rwmb' ),
				'type'	=> "text",
				'clone'	=>	true,
				),
			//// Referenties
			array(
				'id'	=> "{$prefix}headingreferenties",
				'type'	=> "heading",
				'name'	=> 'Referenties'
				),
			array(
				'id'	=> "{$prefix}reftitle",
				'name'	=> __( "Title", 'rwmb' ),
				'type'	=> "text",
				),
			// Refs
			array(
				'id'	=> "{$prefix}reflabels",
				'name'	=> __( "Referenties labels", 'rwmb' ),
				'type'	=> "text",
				'clone'	=>	true
				),
			array(
				'id'	=> "{$prefix}refcontent",
				'name'	=> __( "Content", 'rwmb' ),
				'type'	=> "text",
				'clone'	=>	true,
				),

		),
	);
	return $meta_boxes;
}