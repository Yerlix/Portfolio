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
 * Using a menu
 *
 */
function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );

/**
 * Using metaboxes
 */
include "metaboxes/index_metaboxes.php";