<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp1' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'c]S5>B=ft^Ww|^[pV`X&h0ko9U;jZC>?*mXc h=UyxfsL(vk{>Ej`BEC5PT,tA0$' );
define( 'SECURE_AUTH_KEY',  's+e]>={C%c{9_e|A4%A$OiY~o5P&up6jkP4`_nAEB^;^JTv@Ut<fMgob81>GtvF$' );
define( 'LOGGED_IN_KEY',    '0a){YWC%Dny4:G_!lNu-Bi[Ve7,.pb#S<U37gU$rK&oCvfIV26}~FE64i>mn9ULb' );
define( 'NONCE_KEY',        '.=<uYnbBch=+17MXs;84Y?R7/}5mYJTp9qU1-_Jjxp>WPG]@NH]G#0.wHK}-xat1' );
define( 'AUTH_SALT',        'NLJ&)]a|nHKj6g}84J>jr7w1aYqbQjDJK9mI,#8BD`(MmfHihB&UlDfq`K&:>+MX' );
define( 'SECURE_AUTH_SALT', ']]1Kc*OTyaw>:T>0Z+S*:L%)r,dm8f@-(Z_=-j(3tY<cSXZSV6fQ.Ou(osMK%5ee' );
define( 'LOGGED_IN_SALT',   '.,Uj=#$?Nw)%8S3I$JrbC;=7dj#4.)BG<cbs2?Dp=5{$V6>v2mU`5X!;nw]BV7w!' );
define( 'NONCE_SALT',       'oXV_Bq#2H;A<^>-5//dwoO|Oah-iM$BOht9w)!7/Qx2zPQlWho5?`8m+DmJ?fk9@' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
