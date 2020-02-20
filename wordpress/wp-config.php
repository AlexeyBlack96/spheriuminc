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
define('DB_NAME', 'wordpress_81b');

/** MySQL database username */
define('DB_USER', 'wordpress_45d');

/** MySQL database password */
define('DB_PASSWORD', '70xQ_FC8cl');

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
define('AUTH_KEY',       'H2SAyhbzFJ%6ca#Jl)OOo1#4tVUpIQmu*sSe!!wokX^p(bc%yTU&p%s3fq*FxF!y');
define('SECURE_AUTH_KEY',       'jcMB99s1KL1%Ok40xBGr@qS7MB92u8QxEHiWn%t5DXq1Tj&Q!LstuR@GcDLSf%Va');
define('LOGGED_IN_KEY',       'NQG!eXBQqOX#@OtD60@LxS(D!aXvNfjv8ebtiMhyqMn3oq@OWqLU7ScJW^vtKiRJ');
define('NONCE_KEY',       'EEa!CPTTWjK1cYs*2TN@&gwFinrK!QFeQ4Syg7F*0cx0dt(*sL^ZajXPw17W2GkY');
define('AUTH_SALT',       '1nxjUtTIX3W3bDlGcc&T7l#Xc*b7!4lnkYfWDfv4a0Gx9^m*iZBY^hHWgP0W3EVp');
define('SECURE_AUTH_SALT',       'ATHTs0QMP)@MiF&O(&8F099v*rE4r1RqAK&fZE5yIG^eC5D0x4AdSGTCH&H3t9d&');
define('LOGGED_IN_SALT',       '89HUeBJ@8l9ZZrIjZ(3O%#2aaVeqeyQzjG!&6IrPVervqh8RI5NFCCplYmL5R&l@');
define('NONCE_SALT',       'ljp2AOOKz#GJXp2yJyYy^ad@HxrkU)kArO)l)dlIG)zM3@CT6Ia)n#)o^F^0e66%');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'R575iW1Bp_';

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
