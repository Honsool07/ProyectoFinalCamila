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
define( 'AUTH_KEY',         'cEWYRhw#U2vNO8Ky_>XgFO<D?b;+nC2qk}2_YF>h[p~MHkeGF^0[y/X|>Es!JdwH' );
define( 'SECURE_AUTH_KEY',  'enu%P#A{]25UldHujvb1iDz`OFwt[#2`a7;6 vy@:tO#>n5/=yivZX)4axg^Au4I' );
define( 'LOGGED_IN_KEY',    'g},Sw>vFwzZJ5%9A7vePrTesBG% <$&=?q83=lT]_g(<-E=6DyM3j+5PZ2]YG+CO' );
define( 'NONCE_KEY',        'W,Y.]h%u!=Z#.tz!ZMM1$7G}<rFhm`F00YqRm#.j#dRMG|M0Wf|fd`.5)Sq(ZS3W' );
define( 'AUTH_SALT',        'e5>z8>7w}dESbNhNhG_<w=[!KTC@Cp@]4].|_gD:krr6W0qscZ^J`?yL:vZNH55;' );
define( 'SECURE_AUTH_SALT', 'c+4:nCQ^.?yzm:WSJF~q>/ydHTlepv}3l49><Sv9>Q/6oS5j5!-+(4}4trBqLI>6' );
define( 'LOGGED_IN_SALT',   ';TLGyKH[Ly93JZ.EEko2ft@qIP^/>FFf$pn k^+?y_W&7q/$;JLbL.$F{qUhl6My' );
define( 'NONCE_SALT',       'da!:B/OvPEaokFolV`Vb]^;~YNlzJEM1{4QhFy;/_*_7B5S_j1w,$io=M52JDw[=' );

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
