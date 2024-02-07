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
define( 'DB_NAME', 'portfolio' );

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
define( 'AUTH_KEY',         '@s?a<2@-e/&n?bkMM[<VjIuKUFD#Qt~W0FB79$V%_FqSiwOiPxRztxG^=&66{KoY' );
define( 'SECURE_AUTH_KEY',  'U/p9ujOsdV#`bATmFm{kHTtqK,2qOjO]{$7v,fF=nTNu&6V~WqrC*~uTZ?i#m`1x' );
define( 'LOGGED_IN_KEY',    'iX+MLP*,3+!|_o_If{Cux8OgT<Zf1G_:hVGR9XN,-mbt#[a!}Ciwm8Y*,dJf9x2k' );
define( 'NONCE_KEY',        'ecT?dh-{|.+Y|D!i#6n#/m`Gq$X+n0]iN0,|k~Z]WXU}~-BxVxQ3 5Rvr<%g/h-U' );
define( 'AUTH_SALT',        '+xp]4lJBbt<*:W1]#x%~aO^IF@Xy:NY909ODPH@:Y*VPq-{xA2#p(o]TDVGcF2}c' );
define( 'SECURE_AUTH_SALT', ';K4Hfa kcq%n~jQ5~S9o,{&[hZ>AT&~eJBGBxv:3)oN/O8(p=YZ,>cTScM}=Je]e' );
define( 'LOGGED_IN_SALT',   'x<eb-GXz3fVtO;{Z9W@v^m-/RpCs.i(vlsytaLy8W8]z~OrIEX;R0s->.NiCZvED' );
define( 'NONCE_SALT',       'U^Mri`OJv.y[n,);a9u%hTI&+_![%<j@uX><R;PB2>-N%v>`+!1gL,bQJT,3RROO' );

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
