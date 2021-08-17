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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'choco' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3307' );

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
define( 'AUTH_KEY',         'jXsOk:`v?%8&pRgt@7-*.PYX3__/Hu@z(JT!nK cAn:1zg2@M3?5=)KYwTFE,WM4' );
define( 'SECURE_AUTH_KEY',  'ECqg`],!l&V2385jIt%&ha8{y#Rafl|(}Mg;Vv*^#vCwpt)YhGbVVpD2@J$9I=| ' );
define( 'LOGGED_IN_KEY',    'n-L59 k%^nn7@jXX3F~fGmYB^X>tvu3Cm:^u5}CWm^-P1+VPS#&9Y0nnxbF{dTUy' );
define( 'NONCE_KEY',        '`1D8jFV5c&T<GYjs<>==*,uAGD!cF.NdkaGbp,%gJ.ZD;y[lwDrHBunc;QPDwmik' );
define( 'AUTH_SALT',        'HPL9P@W^2S4AQ(,B:[#@rySa*cE{.B]f1!Zmfx_z%Kf?xa[PE(:c`e4g>wb+^o<!' );
define( 'SECURE_AUTH_SALT', '5:6d`twMhmV$9),]/RQ% Up>JLDbiaUn^3_m`#5q=O`aR1S@ES^,9a72+4v6~b6;' );
define( 'LOGGED_IN_SALT',   't^<rOPAFL00za+JQ/4Nz)#RO6A[n4B_+,`Ce40e%M>x&MqH*XaP-H;S*Z-o&%<wD' );
define( 'NONCE_SALT',       '[Jp5~l`9^r?Az(dxsoU@R@vRRA,J9Eg9ab8 {d$y0U9w0AxLKBwO*S%-b-qUs3I,' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
