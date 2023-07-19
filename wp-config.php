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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '`PvJ3|]BFk!h4MG!VZ~b4Tw4-=dohy|n@&luKmRFSB;$9&Z?,jsSUhP$=?yJ~F.=' );
define( 'SECURE_AUTH_KEY',  'dI0~:.T6Lf3i_]#>1<aQ9O[H|pG&:V_:OfgUeGAB*e[!}!Boxzrxt!6:{as}tUQ*' );
define( 'LOGGED_IN_KEY',    '`/6PH5`Wh*yK?@5-O;->-4*  :mU)2!DqT*e2|{u!tE7dYZkWE|%J68x>K}-W]_a' );
define( 'NONCE_KEY',        '/:4>M|C$mxUR!s~%Eez+#b?4#MU[!h]pqs+GP* JO-.SN6.d8=,.b|B i=|XMR9Y' );
define( 'AUTH_SALT',        '/5[(6gH@1h,u,bX{i?>im3TfiHP(O1rO6xS#;>T ;u:[M}UR69`[:-0}iR#.TIxa' );
define( 'SECURE_AUTH_SALT', 'ruU<!t0GwcdJB)<2R3y{w?^9WQ/uo_MXtkQob_v~mB|RG{<<;aWVWzvJM +m(<E/' );
define( 'LOGGED_IN_SALT',   '69q@8xpW{#c2#bKPrxGGmQ0b$-=7Sj~[hj9YNx&}<(6sWeSH71k66@^KhhskhY6r' );
define( 'NONCE_SALT',       'H_h0(IHzW^x7nWGBWi;N-gk}^^9D&&s{esY|f{2;Un=bXEHe=<2NGGw_vPMSyfde' );

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
