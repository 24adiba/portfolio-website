<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'portfolio-website' );

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
define( 'AUTH_KEY',         'acp[m43Qw;?R#KY-BkgB8F5wpqovC(t[E:/d}.Y{x0qs4L>Wb#hWR:#jQuQ SU0b' );
define( 'SECURE_AUTH_KEY',  ')T%B;?(}z}-<kQ%/E>K.`tE7`R;N+; rBbq{QG0[:?U+2Y`zvDl<UK?RF[}GvOXA' );
define( 'LOGGED_IN_KEY',    '&sh;OIZ=}kPQcxLRktoi8480=,YT{I7yLDHGl%luY}~9}D[E9It8e5k}+M}uY%Qw' );
define( 'NONCE_KEY',        'uRvRyCUi4$%JB?eGSE1<IJ85CE8%ZNztg<HIrh;}|1afRAu(xV$=.l7hLtd}AiCl' );
define( 'AUTH_SALT',        '^IWPx[mVW0nl%jqNW*03*GE4(NWJ<5B_~eA%8;/u67b#M?5Bsld*1G;ka,~kzfpZ' );
define( 'SECURE_AUTH_SALT', 'zj0C<A; -bL5*ark+NzRc3GBB/j1jk6/Q!_W}A7}O:P8.b*fnsSI~5 L6zB/7 oe' );
define( 'LOGGED_IN_SALT',   '&Mqzb146|XEXWAWD7=UkXxAgxq;flk`RNVEE_on16FK*o&#,dP8%0q,T>%0MWm*P' );
define( 'NONCE_SALT',       '3(6^5A]v`FCwrb<9u0dT(C&^Q/ex,ps@qsNQufO-0sv0>hTrl^+o$9Lp;5A2g5Rn' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
