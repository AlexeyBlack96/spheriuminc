<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress_f5');

/** MySQL database username */
define('DB_USER', 'wordpress_d1f');

/** MySQL database password */
define('DB_PASSWORD', '9u6SyVm!5N');

/** MySQL hostname */
define('DB_HOST', '50.62.209.194:3306');

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
define('AUTH_KEY',       '#&Mz#ac4gABckUG1*GdE9UVT1bBSa(S4ZeQy9SMptt&hs4bubr9kHyd17udBXfcm');
define('SECURE_AUTH_KEY',       'kqEVAQ@Z3RRIyj#7lZkyp&S!xdxRk7OferXLeeOmtnTubbDMUwxE#6EM1r1(kmab');
define('LOGGED_IN_KEY',       ')aAyaNaJ^yVcWCK7LbE8PdJ97M%SKG7eroDjeuDkwT(#IKEZ!PCAH**Vwc)pv(rU');
define('NONCE_KEY',       'nU(g)PFWhdZd0UTCY#q9v^bk3IwQ98I!0LPLGC%asz6B!dkcofR9ABnJISvIjWJ%');
define('AUTH_SALT',       'XhXf(ueDrcoG0dzuSX(OOeDyYHl(lAASLb!8231AgRl)94d9ZXSt0HM3iWSL^0xm');
define('SECURE_AUTH_SALT',       '7B@(^sEGPCTTcM4OnEkJx^Zj@jNwC1EIbgLZl#ZISG@B&BXG@Q3%4E96yX2obx(!');
define('LOGGED_IN_SALT',       'f#JxtIQMZ)kh&2c59@j6jc9O#(OP1@tTIgoRKNXQwbYCc6EsGj%Hrl&2u7vvUj0%');
define('NONCE_SALT',       '0&@F^(RExkfjmmBGwHyZk^g*Veup)WsLKVPS(83maYM@^xNn5**XTj!gJQ8I#m!*');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

define( 'WP_ALLOW_MULTISITE', true );

define ('FS_METHOD', 'direct');
