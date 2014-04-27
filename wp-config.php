<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'portfolio');

/** MySQL database username */
define('DB_USER', 'portfolio');

/** MySQL database password */
define('DB_PASSWORD', 'SU4PT3[m8]');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'gpssamhsqkdwdhkugzz6bqfpwcdg71oepsnzryf6inbogn7rdpkpkwo0xicnro3e');
define('SECURE_AUTH_KEY',  'ocupu0anc79uqcjkpzv0pxvzsomgxqllw0u2hwnfcjzpa3brjehsdk0tiwetn5kj');
define('LOGGED_IN_KEY',    'gpjwvvdoeqvy1npkgjf8usofuw7ejlzhycextcj0vhdmqnawjmxiverxfbneg8he');
define('NONCE_KEY',        'ggkrawqb553jtycvy3v6v0eamvo8pw3b7ce9znfzi4diobeimdpxqk9e9w1bfzwg');
define('AUTH_SALT',        'oygypysdmjsuqpyvjmkwu6nndvosdtm6qjcpszuxzfwjzznbxrch9gs5m9wwia0q');
define('SECURE_AUTH_SALT', 'nnslxyudfl3aikd7akxjz68z4ycnomyvqpevs2rcy2e869rubv2llazxnynsivtj');
define('LOGGED_IN_SALT',   'fg4gy9gw2trnfzcbcrlhdtvpqhle5hvmza5m3shkftvfiztpdssvm8bd45v8vxq9');
define('NONCE_SALT',       'kqsh3srghw2dupaw0alqtolzfgy5kdzirrovph8b4rz20emnaseea6p8wdqox2fs');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'po_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
