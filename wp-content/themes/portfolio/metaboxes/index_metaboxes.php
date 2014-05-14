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
	$checked_templates = array( 'page-home.php' );

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
		'id' => 'home',
	    'title' => __( 'Home Fields', 'rwmb' ),
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
				'max_file_uploads' => 4,
				'desc' => 'Dimensions: 986 × 339',
			),
			array(
				'id'	=> "{$prefix}imgurls",
				'name'	=> __( "Afbeeldings urls", 'rwmb' ),
				'desc'	=> "In zelfde volgorde als de afbeeldingen",
				'type'	=> "text",
				'clone' => true
				),
			// HEADING
            array(
                'type' => 'heading',
                'name' => __( 'Hobby\'s', 'rwmb' ),
                'id'   => 'heading_hobby', // Not used but needed for plugin
            ),
			array(
				'id'		=> "{$prefix}hobbytitle",
				'name'	=> __( "Hobby Title", 'rwmb' ),
				'type'	=> "text",
				),
			// IMAGE UPLOAD
            array(
                'name' => __( 'Image', 'rwmb' ),
                'id'   => "{$prefix}hobbyimg",
                'type' => 'plupload_image',
                'max_file_uploads' => 1,
            ),
			// WYSIWYG/RICH TEXT EDITOR
            array(
                'name' => __( 'Hobby content', 'rwmb' ),
                'id'   => "{$prefix}hobbycontent",
                'type' => 'wysiwyg',
                // Set the 'raw' parameter to TRUE to prevent data being passed through wpautop() on save
                'raw'  => false,
                'std'  => __( '', 'rwmb' ),

                // Editor settings, see wp_editor() function: look4wp.com/wp_editor
                'options' => array(
                    'textarea_rows' => 20,
                    'teeny'         => false,
                    'media_buttons' => false,
                ),
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
			array(
				'id'		=> "{$prefix}aboutsub",
				'name'	=> __( "Subttitle", 'rwmb' ),
				'type'	=> "text",
				),
			// WYSIWYG/RICH TEXT EDITOR
            array(
                'name' => __( 'WYSIWYG / Rich Text Editor', 'rwmb' ),
                'id'   => "{$prefix}aboutcontent",
                'type' => 'wysiwyg',
                // Set the 'raw' parameter to TRUE to prevent data being passed through wpautop() on save
                'raw'  => false,
                'std'  => __( 'WYSIWYG default value', 'rwmb' ),

                // Editor settings, see wp_editor() function: look4wp.com/wp_editor
                'options' => array(
                    'textarea_rows' => 20,
                    'teeny'         => false,
                    'media_buttons' => false,
                ),
            ),
			// IMAGE UPLOAD
			array(
				'name'             => __( 'About images', 'rwmb' ),
				'id'               => "{$prefix}aboutimgs",
				'type'             => 'plupload_image',
				'max_file_uploads' => 1,
				'desc' => 'Images for the about tab',
			),
			array(
				'id'		=> "{$prefix}imgsub",
				'name'	=> __( "Image text", 'rwmb' ),
				'type'	=> "text",
				'desc'	=> 'Text under the image'
				),
		),
	);

	return $meta_boxes;
}