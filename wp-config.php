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
define( 'DB_NAME', 'wpdev-th' );

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
define( 'AUTH_KEY',         'K`9J|=2em5KsxIm>UuASo~~C1qu&(bxDMyFD~.UWlIqnAvAFLnB{y=Kh0Qm)V(WG' );
define( 'SECURE_AUTH_KEY',  'b7eZ>`&TlxCSqhx0)QR HH=_A#b$5Zf<nT!ERTn#V~yrt^M|Nz7=VtPSE0XR0l/S' );
define( 'LOGGED_IN_KEY',    '|VTk9Ux~6:Ttv*3<V~w[-d%{G~[?v;SA+qs+_ddQCwm]00iGaxe_kG-:e>?H(n&5' );
define( 'NONCE_KEY',        ')3F5c.Z%mhz4dA%4Dt#tp?L]9cA<<^6p*N}nuD#y9nfChR@K~r==*9u@<A>!w~Nd' );
define( 'AUTH_SALT',        'p=D(sz#/HCOoUIjTSYlFi2vj#W%dF2GFHj:En2*E@B2WQpLa+QX#+Pbj]C)i6`yW' );
define( 'SECURE_AUTH_SALT', '`:vKjT#c)Qsi=^-ySja~KOw~[_q>HmxjdECOG}M4{=lyIit/=o%p.$O3eLvL@F]^' );
define( 'LOGGED_IN_SALT',   ',f*82Ey)y`~nJ9PPCFW3{MM`pEYD6H<m.$Aq9 RB=yibJ~K%f#}#>Z>2N*+uf9jB' );
define( 'NONCE_SALT',       'AAxVTQ,7<=o=Hen}.?J%.qb]g`^E=cfY -w>Y[w~c9IT8K)4Z<!rp2lm.e+g$UOi' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'th_';

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
