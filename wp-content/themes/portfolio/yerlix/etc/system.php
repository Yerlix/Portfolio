<?php
/**
 * Add Needed Post Types 
 */
function yer_init_post_types() {
	if (function_exists('yerlix_get_post_types')) {
		foreach (yerlix_get_post_types() as $type => $options) {
			yer_add_post_type($type, $options['config'], $options['singular'], $options['multiple']);
		}
	}
}
add_action('init', 'yer_init_post_types');

/**
 * Add Needed Taxonomies
 */
function yer_init_taxonomies() {
	if (function_exists('yerlix_get_taxonomies')) {
		foreach (yerlix_get_taxonomies() as $type => $options) {
			yer_add_taxonomy($type, $options['for'], $options['config'], $options['singular'], $options['multiple']);
		}
	}
}
add_action('init', 'yer_init_taxonomies');

/**
 * Initialize Theme Support Features 
 */
function yer_init_theme_support() {
	if (function_exists('yerlix_get_images_sizes')) {
		foreach (yerlix_get_images_sizes() as $post_type => $sizes) {
			foreach ($sizes as $config) {
				yer_add_image_size($post_type, $config);
			}
		}
	}
}
add_action('init', 'yer_init_theme_support');

function yer_after_setup_theme() {
	// add editor style for admin editor
	add_editor_style();

	// add post thumbnails support
	add_theme_support('post-thumbnails');
	
	// Set the theme's text domain using the unique identifier from above 
	load_theme_textdomain('yerlix', THEME_PATH . '/lang');	
	
	// add needed post formats to theme
	if (function_exists('yerlix_get_post_formats')) {
		add_theme_support('post-formats', yerlix_get_post_formats());
	}
}
add_action('after_setup_theme', 'yer_after_setup_theme');

/**
 * Initialize Theme Navigation 
 */
function yer_init_navigation() {
	if (function_exists('register_nav_menus')) {
		register_nav_menus(array(
			'header_menu'	=> __('Header Menu', 'yerlix'),
		));
	}
}
add_action('init', 'yer_init_navigation');


/**
 * Register Post Type Wrapper
 * @param string $name
 * @param array $config
 * @param string $singular
 * @param string $multiple
 */
function yer_add_post_type($name, $config, $singular = 'Entry', $multiple = 'Entries') {
	if (!isset($config['labels'])) {
		$config['labels'] = array(
			'name' => $multiple,
			'singular_name' => $singular,
			'not_found'=> 'No ' . $multiple . ' Found',
			'not_found_in_trash'=> 'No ' . $multiple . ' found in Trash',
			'edit_item' => 'Edit ', $singular,
			'search_items' => 'Search ' . $multiple,
			'view_item' => 'View ', $singular,
			'new_item' => 'New ' . $singular,
			'add_new' => 'Add New',
			'add_new_item' => 'Add New ' . $singular,
		);
	}

	register_post_type($name, $config);
}

/**
 * Add custom image size wrapper
 * @param string $post_type
 * @param array $config 
 */
function yer_add_image_size($post_type, $config) {
	add_image_size($config['name'], $config['width'], $config['height'], $config['crop']);
}

/**
 * Register taxonomy wrapper
 * @param string $name
 * @param mixed $object_type
 * @param array $config
 * @param string $singular
 * @param string $multiple
 */
function yer_add_taxonomy($name, $object_type, $config, $singular = 'Entry', $multiple = 'Entries') {
	
	if (!isset($config['labels'])) {
		$config['labels'] = array(
			'name' => $multiple,
			'singular_name' => $singular,
			'search_items' =>  'Search ' . $multiple,
			'all_items' => 'All ' . $multiple,
			'parent_item' => 'Parent ' . $singular,
			'parent_item_colon' => 'Parent ' . $singular . ':',
			'edit_item' => 'Edit ' . $singular,
			'update_item' => 'Update ' . $singular,
			'add_new_item' => 'Add New ' . $singular,
			'new_item_name' => 'New ' . $singular . ' Name',
			'menu_name' => $singular,
		);
	}
	
	register_taxonomy($name, $object_type, $config);
}

/**
 * Add specific image sizes for custom post types.
 * @global object $post 
 */
function yer_alter_image(){
	global $post;
	
	switch ($post->post_type) {
		case 'press':

			break;
		case 'gallery':

			break;
		default: break;
	}
}
add_action('edit','yer_alter_image');


/**
 * Remove unused image sizes for custom post types
 * 
 * @param type $available_sizes
 * @return type 
 */
function yer_init_custom_image_sizes($available_sizes) {
	if (!@$_REQUEST['post_id'] || !($_post = get_post($_REQUEST['post_id']))) {
		return $available_sizes;
	}
	
	$default_sizes = array('thumbnail', 'medium', 'large');
	$sizes = array();
	foreach ($available_sizes as $name => $data) {
		if (preg_match('~^' . $_post->post_type . '\-~si', $name) || in_array($name, $default_sizes)) {
			$sizes[$name] = $data;
		}
	}
	
	return $sizes;
}
add_action('intermediate_image_sizes_advanced', 'yer_init_custom_image_sizes');

function yer_change_toolbar() {
    global $wp_admin_bar;
	
    $wp_admin_bar->add_menu(array(
        'id' => 'yerlix',
        'title' => '<span class="ab-icon"></span>',
        'href' => admin_url('themes.php?page=yerlix'),
	));
	
	$wp_admin_bar->remove_node('wp-logo');  
}
add_action('admin_bar_menu', 'yer_change_toolbar', 40);


// move admin bar to bottom
function fb_change_toolbar_css() { 
	
	global $wp_admin_bar;
	
	if (!$wp_admin_bar) {
		return;
	}
	
	?>
	<style type="text/css">
		#wp-admin-bar-yerlix .ab-icon {
			background-image: url("<?php echo YERLIX_URL?>/assets/images/yerlix_icon_16_light.png");
		}
	</style> <?php 
}
// on backend area
add_action( 'admin_head', 'fb_change_toolbar_css' );
// on frontend area
add_action( 'wp_head', 'fb_change_toolbar_css' );



// THIS INCLUDES THE THUMBNAIL IN OUR RSS FEED
function yer_insert_feed_image($content) {
global $post;

if ( has_post_thumbnail( $post->ID ) ){
	$content = ' ' . get_the_post_thumbnail( $post->ID, 'medium' ) . " " . $content;
}
return $content;
}

add_filter('the_excerpt_rss', 'yer_insert_feed_image');
add_filter('the_content_rss', 'yer_insert_feed_image');