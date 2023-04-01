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
define( 'DB_NAME', 'pub' );

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
define( 'AUTH_KEY',         '_=c#4y<` $aidc2~~tLm&$ZcsT9qzhd1Vf=944*LHrbn^_-zx929Vr;F+ko+Y(m,' );
define( 'SECURE_AUTH_KEY',  'lPPS],=W@@rG=7d;%I/8VGQlxcuK0l;SFZ0W7x3+plL~N!%?24^!lu ) Aw4)?#Q' );
define( 'LOGGED_IN_KEY',    'vj*_ocr|0m<_%zD:cU)^t0K6d@f&-h9O$N#pB9)gD;Szj|=](+tjh8teNqW0yQ[@' );
define( 'NONCE_KEY',        ',Nvr;<xVFtisTHJ]rYU(q<XV~4# Z`V.w9/]) {7N,Du-6Sx0=LIdUiw>cRNjL;m' );
define( 'AUTH_SALT',        '@?W 7PkHKwKdmFeZM/JGP~NtF8p;G3t:Ft QrVwgPRxDw3l!3O)axMtKQp]jf*:E' );
define( 'SECURE_AUTH_SALT', '{t~~!cj5?NtFT*0m)rBB4dXO1{ssv?cXOzj}YS`Jd+b>3XgEV3=:le|-*x&s8Hba' );
define( 'LOGGED_IN_SALT',   '=J(tK?BprZ!z*99V=~ZLQSvkSsOQ@9Kf8lqd+w,4~MR{e MJe^[Gw1F5zQ^MWmhW' );
define( 'NONCE_SALT',       'CnRTC%TS?Y]Qc4~-Vg^cJ4!28Oe7*z+}W[Rq=*B[2-FFdA!K&d6 /,|/(e9 BA1)' );

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
