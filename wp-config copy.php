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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'epiz_32187748_danilo_martire' );

/** Database username */
define( 'DB_USER', 'epiz_32187748' );

/** Database password */
define( 'DB_PASSWORD', 'Sqm91NrreHL' );

/** Database hostname */
define( 'DB_HOST', 'sql203.epizy.com' );

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
define( 'AUTH_KEY',         '{/g0 RDaN*$}+s= 8^]+}8R=$hJYOz854yj Tv,Hy>B}?NM)Y6 UC^d:GpAXEm9q' );
define( 'SECURE_AUTH_KEY',  'f4VGcy_bX2;`ud9Vgid1AAS{7r0Q%D4I3wBHTxh/jx20)eOG$%N2.}&BbZwyVt!j' );
define( 'LOGGED_IN_KEY',    'W$.d1B?#)NLWN]M`htj~L0G__)uGYxn<j^N]<(mi{@k.D)n)1hG A%-VGhT`NKJ2' );
define( 'NONCE_KEY',        '~Z/GAS^ju]3)Xu+(hLIkVymH5ktE=aTu%Y]%5)p2Wx%@cW|x*Q[(Fa`2wmXBu,<K' );
define( 'AUTH_SALT',        ', [$V8|V7Pfl)56`?b$:?lNx.#d>eiuCI$3bJ0_ 8B9w^q#m--AzxK{(lR)F=}qu' );
define( 'SECURE_AUTH_SALT', 'xU~L#w0Zj.2VYMcZ1glU];Y>1%E}L1^;6*oKAQqV>{B0XDV#qT@aC%%e&Prie5R$' );
define( 'LOGGED_IN_SALT',   'ow+C*e9t-~v?rM0Mj?yi]$(raHzaty,l#g;-Bkn,w7P.}ER_,st6 77-)-d,Vqeo' );
define( 'NONCE_SALT',       'Sw[.l_ [B}{J)6`=hlzeqDdxb@:$BMASKG9dtE])ir&)Gy%d<8^6X_Sjq97f`uf:' );

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