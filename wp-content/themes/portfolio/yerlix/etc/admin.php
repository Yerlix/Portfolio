<?php
/**
 * Add admin scripts and styles
 */
function yer_add_scripts($hook) {
	
	// Add general scripts & styles
	wp_enqueue_style('yerlix_admin_css', YERLIX_URL . '/assets/css/admin.css', array(), YERLIX_THEME_VERSION);
	wp_enqueue_script('yerlix_colorpicker', YERLIX_URL.'/assets/js/colorpicker.js', array('jquery'));
	wp_enqueue_script('yerlix_admin_js', YERLIX_URL . '/assets/js/admin.js', array('jquery', 'yerlix_colorpicker'), YERLIX_THEME_VERSION);
    wp_enqueue_script( 'yerlix_metaboxes', YERLIX_URL . '/assets/js/metaboxes.js', array( 'jquery', 'jquery-ui-core', 'jquery-ui-datepicker', 'media-upload', 'thickbox') );

	// Add scripts for metaboxes
  	if ( $hook == 'post.php' || $hook == 'post-new.php' || $hook == 'page-new.php' || $hook == 'page.php' ) {
		wp_enqueue_script( 'yerlix_metaboxes', YERLIX_URL . '/assets/js/metaboxes.js', array( 'jquery', 'jquery-ui-core', 'jquery-ui-datepicker', 'media-upload', 'thickbox') );
		wp_enqueue_script( 'yerlix_shortcodes', YERLIX_URL . '/assets/js/shortcodes.js', array( 'jquery', 'thickbox') );
  	}
	
	// Add scripts for Theme Options page
    if (in_array($hook, array('appearance_page_yerlix'))) {
		wp_enqueue_script('jquery-ui-core');
		wp_enqueue_script('options-custom', YERLIX_URL.'/assets/js/options-custom.js', array('jquery'));

		// Add inline scripts for Theme Options page
		if (function_exists('yerlix_options_custom_scripts')) {
			add_action('admin_head', 'yerlix_options_custom_scripts');
		}
    }
}
add_action( 'admin_enqueue_scripts', 'yer_add_scripts', 10 );

/**
 * Add Aletheme Options to Admin Navigation 
 */
function yer_add_admin_menu() {
    add_theme_page( __('Theme Options', 'yerlix'), __('Theme Options', 'yerlix'), 'edit_theme_options', 'yerlix','optionsframework_page');
    // add_theme_page(__('Sliders Options', 'yerlix'), __('Sliders Options', 'yerlix'), 'edit_theme_options', 'yerlix_sliders','yerlix_sliders_page');
    // add_theme_page(__('Theme Info', 'yerlix'), __('Theme Information', 'yerlix'), 'edit_theme_options', 'yerlix_info','yerlix_information_page');
}
add_action('admin_menu', 'yer_add_admin_menu', 1);

/**
 * Add custom post types to navigation 
 */
function yer_admin_custom_to_navigation() {
	$post_types = get_post_types(array(
		'show_in_nav_menus' => true
	), 'object' );
	
	foreach ( $post_types as $post_type ) {
		if ( $post_type->has_archive ) {
			add_filter( 'nav_menu_items_' . $post_type->name, 'yer_admin_custom_to_navigation_checkbox', null, 3 );
		}
	}
}
add_action( 'admin_head-nav-menus.php', 'yer_admin_custom_to_navigation');

/**
 * Add custom post type to navigation
 * @global int $_nav_menu_placeholder
 * @global object $wp_rewrite
 * @param array $posts
 * @param array $args
 * @param string $post_type
 * @return array 
 */
function yer_admin_custom_to_navigation_checkbox($posts, $args, $post_type) {
	global $_nav_menu_placeholder, $wp_rewrite;
	$_nav_menu_placeholder = ( 0 > $_nav_menu_placeholder ) ? intval($_nav_menu_placeholder) - 1 : -1;

	$archive_slug = $post_type['args']->has_archive === true ? $post_type['args']->rewrite['slug'] : $post_type['args']->has_archive;
	if ( $post_type['args']->rewrite['with_front'] )
		$archive_slug = substr( $wp_rewrite->front, 1 ) . $archive_slug;
	else
		$archive_slug = $wp_rewrite->root . $archive_slug;

	array_unshift( $posts, (object) array(
		'ID' => 0,
		'object_id' => $_nav_menu_placeholder,
		'post_content' => '',
		'post_excerpt' => '',
		'post_title' => $post_type['args']->labels->all_items,
		'post_type' => 'nav_menu_item',
		'type' => 'custom',
		'url' => site_url( $archive_slug ),
	) );
	
	return $posts;
}

/**
 * Show alert message if default blog description is not changed
 * @global object $current_user 
 */
function yer_admin_notice_tagline() {
	if ((get_option('blogdescription') === 'Just another WordPress site')) {
		global $current_user;
		$user_id = $current_user->ID;

		if (!get_user_meta($user_id, 'ignore_tagline_notice')) {
		echo '<style>#blogdescription {border-color:red;}</style>';
		echo '<div class="error">';
			echo '<p><strong>', sprintf(__('Please update your <a href="%s">site tagline</a>', 'yerlix'), admin_url('options-general.php'), '?tagline_notice_ignore=0'), '</strong></p>';
		echo '</div>';
		}
	}
}
add_action('admin_notices', 'yer_admin_notice_tagline');

/**
 * Add custom columns to admin data tables 
 */
function yer_admin_table_columns() {
	if (function_exists('yerlix_get_post_types')) {
		foreach (yerlix_get_post_types() as $type => $config) {
			if (isset($config['columns']) && count($config['columns'])) {
				foreach ($config['columns'] as $column) {
					if (function_exists('yer_admin_posts_' . $column . '_column_head') && function_exists('yer_admin_posts_' . $column . '_column_content')) {
						add_filter('manage_' . $type . '_posts_columns', 'yer_admin_posts_' . $column . '_column_head', 10); 
						add_action('manage_' . $type . '_posts_custom_column', 'yer_admin_posts_' . $column . '_column_content', 10, 2);						
					}
				}
			}
		}
	}
}
add_action('admin_init', 'yer_admin_table_columns', 100);

/**
 * Change footer
 */
function yer_admin_remove_footer_admin() {
	echo '<span id="footer-thankyou">Developed by <a href="'.'http://www.yerlix.be'.'" target="_blank">Yoeri Stessens</a></span>';
}
add_filter('admin_footer_text', 'yer_admin_remove_footer_admin');

/**
 * Add custom icons for post types 
 */
function yer_post_type_icons() {
	?>
		<style type="text/css">
		<?php
		if (function_exists('yerlix_get_post_types')) {
			foreach (yerlix_get_post_types() as $type => $config) {
				global $wp_version;
				if($wp_version > '3.7.9') {
                    if($type =='gallery') {?>
                        #menu-posts-<?php echo $type ?> .wp-menu-image:before {
                            content: "\f161"!important;
                        }
                        <?php }  else { ?>
                        #menu-posts-<?php echo $type ?> .wp-menu-image:before {
                            content: "\f348"!important;
                        }
                <?php }
          }
      }
  }
  ?>
		</style>
	<?php
}
add_action( 'admin_head', 'yer_post_type_icons');

/**
 * Add featured image header column to admin data-table
 * 
 * @param array $defaults
 * @return array 
 */
function yer_admin_posts_featured_column_head($defaults) {
	array_put_to_position($defaults, 'Image', 1, 'featured-image');
	return $defaults;  
}

/**
 * Add featured image data column to admin data-table
 *
 * @param string $column_name
 * @param int $post_id 
 */
function yer_admin_posts_featured_column_content($column_name, $post_id) {
	if ($column_name == 'featured-image') {  
		$post_featured_image = yer_get_featured_image_src($post_id);  
		if ($post_featured_image) {  
			echo '<img src="' . $post_featured_image . '" alt="" width="60" />'; 
		}  
	}
}


/**
 * Add featured image header column to admin data-table
 * 
 * @param array $defaults
 * @return array 
 */
function yer_admin_posts_first_image_column_head($defaults) {  
	array_put_to_position($defaults, 'Image', 1, 'first-image');
	return $defaults;  
}

/**
 * Add featured image data column to admin data-table
 *
 * @param string $column_name
 * @param int $post_id 
 */
function yer_admin_posts_first_image_column_content($column_name, $post_id) {
	if ($column_name == 'first-image') {  
		if (has_post_thumbnail($post_id)) :
			$image = yer_get_featured_image_src($post_id);
		else :
			$image = yer_get_first_attached_image_src($post_id);
		endif;	

		if ($image) {  
			echo '<img src="' . $image . '" alt="" width="60" />'; 
		}  
	}
}
