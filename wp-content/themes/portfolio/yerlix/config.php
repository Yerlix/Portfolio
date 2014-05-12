<?php
/**
 * Get current theme options
 * 
 * @return array
 */
function yerlix_get_options() {
    $imagepath =  YERLIX_URL . '/assets/images/';

    $options = array();

    $options[] = array(
        "name" => "Theme",
        "type" => "heading");

    $options[] = array( 
        "name" => "Site Logo",
        "desc" => "Text to use as the logo",
        "id" => "yer_sitelogo",
        "std" => "",
        "type" => "text");

    $options[] = array( 
        "name" => "Upload a favicon icon",
        "desc" => "Upload or put the link of your favicon icon",
        "id" => "yer_favicon",
        "std" => "",
        "type" => "upload");

    $options[] = array( 
        "name" => "Upload a contact image",
        "desc" => "Upload or put the link of your contact image",
        "id" => "yer_contactimg",
        "std" => "",
        "type" => "upload");

    $options[] = array( 
        "name" => "Upload a project image",
        "desc" => "Upload or put the link of your project image",
        "id" => "yer_projectimg",
        "std" => "",
        "type" => "upload");

    $options[] = array( 
        "name" => "Upload a competences image",
        "desc" => "Upload or put the link of your competences image",
        "id" => "yer_compimg",
        "std" => "",
        "type" => "upload");

    $options[] = array( 
        "name" => "Copyrights",
        "desc" => "Your copyright message.",
        "id" => "yer_copyrights",
        "std" => "",
        "type" => "editor");

// Social tab
    $options[] = array( 
        "name" => "Social",
        "type" => "heading");

    $options[] = array(
        "name" => "Twitter",
        "desc" => "Your twitter username.",
        "id" => "yer_twi",
        "std" => "",
        "type" => "text");

    $options[] = array(
        "name" => "Facebook",
        "desc" => "Your facebook profile URL.",
        "id" => "yer_fb",
        "std" => "",
	"type" => "text");

   
    $options[] = array(
        "name" => "Linked in",
        "desc" => "Your linked in profile URL.",
        "id" => "yer_link",
        "std" => "",
        "type" => "text");

    $options[] = array(
        "name" => "Skype",
        "desc" => "Your skype login",
        "id" => "yer_skype",
        "std" => "",
        "type" => "text");

    return $options;
}

/**
 * Add custom scripts to Options Page
 */
function yerlix_options_custom_scripts() {
 ?>

<script type="text/javascript">
jQuery(document).ready(function() {
    jQuery('#yer_commentongallery').click(function() {
        jQuery('#section-yer_gallerycomments_style').fadeToggle(400);
    });
    if (jQuery('#yer_commentongallery:checked').val() !== undefined) {
        jQuery('#section-yer_gallerycomments_style').show();
    }
});
</script>

<?php
}

/**
 * Get image sizes for images
 * 
 * @return array
 */
function yerlix_get_images_sizes() {
	return array(

        'gallery' => array(
            array(
                'name'      => 'gallery-patrat',
                'width'     => 330,
                'height'    => 330,
                'crop'      => true,
            ),
            array(
                'name'      => 'gallery-slider',
                'width'     => 9999,
                'height'    => 600,
                'crop'      => false,
            ),
        ),

        'post' => array(
            array(
                'name'      => 'post-blog',
                'width'     => 350,
                'height'    => 230,
                'crop'      => true,
            ),

        ),
    );
}

/**
 * Add post types that are used in the theme 
 * 
 * @return array
 */
function yerlix_get_post_types() {
	return array(
        'gallery' => array(
            'config' => array(
                'public' => true,
                'menu_position' => 20,
                'has_archive'   => true,
                'supports'=> array(
                    'title',
                    'comments',
                    'editor',
                    'thumbnail',
                    'page-attributes',
                ),
                'show_in_nav_menus'=> true,
            ),
            'singular' => 'Gallery',
            'multiple' => 'Galleries',
            'columns'    => array(
                'first_image',
            )
        ),
    );
}

/**
 * Add taxonomies that are used in theme
 * 
 * @return array
 */
function yerlix_get_taxonomies() {
	return array(

        'gallery-category'    => array(
            'for'        => array('gallery'),
            'config'    => array(
                'sort'        => true,
                'args'        => array('orderby' => 'term_order'),
                'hierarchical' => true,
            ),
            'singular'    => 'Gallery Category',
            'multiple'    => 'Gallery Categories',
        ),
    );
}

/**
 * Add post formats that are used in theme
 * 
 * @return array
 */
function yerlix_get_post_formats() {
	return array(
        'gallery','video'
    );
}

/**
 * Get sidebars list
 * 
 * @return array
 */
function yerlix_get_sidebars() {
	$sidebars = array();
	return $sidebars;
}

/**
 * Predefine custom sliders
 * @return array
 */
function yerlix_get_sliders() {
	return array(
		'sneak-peek' => array(
			'title'		=> 'Sneak Peek',
		),
	);
}

/**
 * Post types where metaboxes should show
 * 
 * @return array
 */
function yerlix_get_post_types_with_gallery() {
	return array('post','gallery');
}

/**
 * Add custom fields for media attachments
 * @return array
 */
function yerlix_media_custom_fields() {
	return array();
}