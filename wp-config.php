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
define( 'DB_NAME', 'acp_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ',u}{r!}0tWJ@SA09+!5I3{qaC[ZlE)_@$k:2>3<$LE@YsZW(/`hp{K,u^U_YbX9$' );
define( 'SECURE_AUTH_KEY',  '5O1>[B {nG76w5QoI>W..UePW6qki6%wj hTqMWh3&riw,8JtX:<^dLk9bL>I:qF' );
define( 'LOGGED_IN_KEY',    '=_&OP@m ~/DsmLnrpk[awqjC}+BKZ@4d=fUJrACrK.==M&vx[YV|X8}2)7`T,6f%' );
define( 'NONCE_KEY',        'd0bR=fQi.Z5MED/-e$~q1O`<oL@J&c50n<ieS%,3NdBxPT;4497**yG8oCc~6Tyh' );
define( 'AUTH_SALT',        'Q*;zj3@$t4 #=A&og+a&tC0Jzr;f1y%qpkhzfb7Ti5KguPEl}c^symo?iE!.fEF7' );
define( 'SECURE_AUTH_SALT', 'fC|j=IbcK*}nA<6~6L^2$An8`n/KZ [?biw)1<8Vgdo/>1:^N+eH.|kc|v Gi`q#' );
define( 'LOGGED_IN_SALT',   '[]kD[9DAL(,)0Z)raXe0JiY~.lW+pYZ5M@jATJW+yZIsBE.=.@<ZeqncORbu~ukh' );
define( 'NONCE_SALT',       ')o5E(e/jW[3$T8x2d?-pKb+&q`1UQn4{V5i/x9+lVqbJ_FSk?#h0iRMj5vcaef2:' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'acp_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

// // Rename the wp-content file
// define( 'WP_CONTENT_FOLDERNAME', '/app' );

// //Define new directory path
// define ('WP_CONTENT_DIR', ABSPATH . WP_CONTENT_FOLDERNAME);

// //Define new directory URL
// define('WP_SITEURL', 'http://localhost:8888/artcortijo/');
// define('WP_CONTENT_URL', WP_SITEURL . WP_CONTENT_FOLDERNAME);

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
require_once(ABSPATH . 'wp-config-project.php');
