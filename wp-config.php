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
define( 'DB_NAME', 'zdgui_com' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '15e3139a5c28cbdcf8cc2740082bfb24' );

/** MySQL hostname */
define( 'DB_HOST', '172.17.0.1' );

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
define( 'AUTH_KEY',         '@kcf<w|%~TgA3BY{k^o2q/4pKB}><1ae)9AY;Uou.%i|#*}W0=uotJp)cYxY>msR' );
define( 'SECURE_AUTH_KEY',  '*RAU`,dg3+P8rxQ(&_!RK TD>=Sl@r1r*%)&U.zc)EnPuqjnH]322-4s$[*&E5@n' );
define( 'LOGGED_IN_KEY',    'V~]8&Y:]u{WmgvK 3&M.r<1No^-o-gx95Gnq|z)%Ea$bl0Ki|Z/cS*G>%lFW9< D' );
define( 'NONCE_KEY',        '}d9Ypd8@SzwYZH@|xUOg&YUz3N9Y<t|0k{e?az[(_jF;rMm`p#m9FJJt^X);hc*G' );
define( 'AUTH_SALT',        '9hok)|g8y|PgrjvL^;/*RQiNg{INlaDN$zd.1ce+mJ@G-=x4IVpXVgRWvkTiEHBZ' );
define( 'SECURE_AUTH_SALT', 'G@Z{!;Rz(=tu^_Rb-dl$m,gM8pmULTA}fFO>% ,i6s;,(8XWGYR3}#  Nb`uBTkt' );
define( 'LOGGED_IN_SALT',   '<3Rbe9_K[gxivg`8Ulq<NY3D}4P^O,9cd[e349/`ex= QWiV6a:49lRxBf.!v2OY' );
define( 'NONCE_SALT',       '$Ep>qRN3YDsJ _+e_IE-G~LUj%SOZhJVVWy<$w;Y4GQ0=x0`uF,ta-[qb^),.0!F' );

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
