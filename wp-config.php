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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'doctor' );

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
define( 'AUTH_KEY',         'X,B[TnPP)%r+3%i_)5+`$4xC_Ae*SxN|9rCb~dJb!g&;^(?JA8[`w?+<5wF%%KhK' );
define( 'SECURE_AUTH_KEY',  'I};sP|-+lIS9|g){:ym03YbjMFOy$s2Ow<K(!jlLFWI]WE8#8/NWOd52jch!%dyO' );
define( 'LOGGED_IN_KEY',    'c.?|R.&P`S* |-xLTd#m lwKxB:VL^664z]yzIS$V/<(xN =O&j2>G (`!M?FA1o' );
define( 'NONCE_KEY',        '_p=5#K@&n4%2i*9qwd!7_J[6%Q3;mNABBKW %% F%WIu @YVO]<0y$B^ncW^Kz.h' );
define( 'AUTH_SALT',        'Zw-13]m$gdo7WCFH#MK(QY7seROFKZ<pGO4>8#(,:Ip8huk4 .diauS `UFLn#`$' );
define( 'SECURE_AUTH_SALT', 'K?*`9jx(NP*[b8IpgXN?ZN.mJ$~Rgg:AP:Y3iOv*A&l<Uxk2>?k aZm6dC2j2*,t' );
define( 'LOGGED_IN_SALT',   'MBh>T+H+en2iS3psTl =]|pLWTl%>Bv!veOO~qoq_P9LdEpEUkF*W>d=F&4D _Ug' );
define( 'NONCE_SALT',       'VQ]&42/85y|tZI.X16xfgNnjjJ$@jK.hAEP6ie&/O!{T4a+nIbld0s:)*r/,3SSR' );

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
