<?php
/****************************************************************
 * DO NOT DELETE
 ****************************************************************/
if ( get_stylesheet_directory() == get_template_directory() ) {
	define('YERLIX_PATH', get_template_directory() . '/yerlix');
	define('YERLIX_URL', get_template_directory_uri() . '/yerlix');
} else {
    define('YERLIX_PATH', get_theme_root() . '/orquidea/yerlix');
    define('YERLIX_URL', get_theme_root_uri() . '/orquidea/yerlix');
}

require_once YERLIX_PATH . '/init.php';

load_theme_textdomain( 'yerlix', get_template_directory() . '/lang' );
$locale = get_locale();
$locale_file = get_template_directory() . "/lang/$locale.php";
if ( is_readable($locale_file) )
    require_once($locale_file);

/****************************************************************
 * You can add your functions here.
 * 
 * BE CAREFULL! Functions will dissapear after update.
 * If you want to add custom functions you should do manual
 * updates only.
 ****************************************************************/
/**
 * Define constants
 */
define("THEME_URL", get_template_directory_uri());

/**
 * Using metaboxes
 */
include "metaboxes/index_metaboxes.php";
include "metaboxes/contact_metaboxes.php";

/**
 * Adding scripts to WP
 */
function custom_scripts() {
	var_dump(get_template_directory_uri());
	wp_enqueue_script( 'contact_validation', get_template_directory_uri() . '/js/contact_validation.js' );
}
add_action( 'wp_enqueue_scripts', 'custom_scripts' );

/**
 * Page ID by slug
 */
function get_ID_by_slug($page_slug) {
    $page = get_page_by_path($page_slug);
    if ($page) {
        return $page->ID;
    } else {
        return null;
    }
}