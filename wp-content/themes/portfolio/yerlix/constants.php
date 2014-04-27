<?php
/****************************************************************
 * System Functions
 ****************************************************************/
/**
 * Debug function
 * @param mixed $var
 * @param string $label
 * @param boolean $die 
 */
function varDump($var, $label = '', $die = true) {
    echo $label . ': <pre>';
    print_r($var);
    echo '</pre>';
    if ($die) {
        die();
    }
}

/**
 * Load Theme Variable Data
 * @param string $var
 * @return string 
 */
function theme_data_variable($var) {
	if (!is_file(STYLESHEETPATH . '/style.css')) {
		return '';
	}

	$theme_data = wp_get_theme();
	return $theme_data->{$var};
}

/**
 * Returns WordPress subdirectory if applicable
 * @return string 
 */
function wp_base_dir() {
	preg_match('!(https?://[^/|"]+)([^"]+)?!', site_url(), $matches);
	if (count($matches) === 3) {
		return end($matches);
	} else {
		return '';
	}
}

/**
 * Opposite of built in WP functions for trailing slashes
 * @param string $string
 * @return string
 */
function leadingslashit($string) {
	return '/' . unleadingslashit($string);
}

/**
 * Remove trailing slash
 * @param string $string
 * @return string
 */
function unleadingslashit($string) {
	return ltrim($string, '/');
}

/**
 * Add filters wrapper
 * @param array $tags
 * @param string $function 
 */
function add_filters($tags, $function) {
	foreach ($tags as $tag) {
		add_filter($tag, $function);
	}
}

/****************************************************************
 * System Constants
 ****************************************************************/
if (!defined('__DIR__')) { define('__DIR__', dirname(__FILE__)); }

// Define helper constants
$get_theme_name = explode('/themes/', get_template_directory());

define('WP_BASE', wp_base_dir());
define('THEME_NAME', next($get_theme_name));
define('RELATIVE_PLUGIN_PATH', str_replace(site_url() . '/', '', plugins_url()));
define('FULL_RELATIVE_PLUGIN_PATH', WP_BASE . '/' . RELATIVE_PLUGIN_PATH);
define('RELATIVE_CONTENT_PATH', str_replace(site_url() . '/', '', content_url()));
define('THEME_PATH', RELATIVE_CONTENT_PATH . '/themes/' . THEME_NAME);
define("THEME_URL", get_template_directory_uri());

/****************************************************************
 * Define Framework Constants
 ****************************************************************/
define('YERLIX_MODE', 'test');
define('YERLIX_CUSTOMIZED', true); // set to TRUE if you changed something in the source code.
define('YERLIX_THEME_VERSION', theme_data_variable('Version'));
define('YERLIX_PREFIX',			'yer_');
define('YERLIX_THEME_PREFIX',		YERLIX_PREFIX . get_template().'_');
define('YERLIX_META_PREFIX',		'_' . YERLIX_PREFIX);
define('YERLIX_HELP_URL', 'http://yerlixs.com/help');

/****************************************************************
 * Google Fonts Constants
 ****************************************************************/
define('YERLIX_GOOGLE_FONTS_URL', 'http://fonts.googleapis.com/css?family=');

/****************************************************************
 * Find The Configuration File
 ****************************************************************/
require_once YERLIX_PATH . '/config.php';

/****************************************************************
 * Options Framework Set Up
 ****************************************************************/
require_once YERLIX_PATH . '/options/options.php';
require_once YERLIX_PATH . '/options/admin/options-framework.php';

/****************************************************************
 * Require Needed Files & Libraries
 ****************************************************************/

foreach(array('etc', 'functions', 'widgets', 'metaboxes', 'help', 'sliders', 'shortcodes') as $folder) {
    $dir = (array)glob(YERLIX_PATH . '/' .  $folder . '/*.php');

    foreach ($dir as $filename) {
        if(!empty($filename))
            require_once $filename;
    }
}