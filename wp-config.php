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
define( 'DB_NAME', 'alpine' );

/** Database username */
define( 'DB_USER', 'alpine' );

/** Database password */
define( 'DB_PASSWORD', 'S2018cherry!!@@alpine' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         '^y3m<<vpNb#29a0.j:idkvcBEVos|io2oYbS JA=ez<5-zqE+#3tlHSB) DJ@[1j' );
define( 'SECURE_AUTH_KEY',  'zr30Z[C9_&YyMfGdw/K#izPg:>zZgI_bHD`[x!v00,Sl2psQ=ie&O@^.n% a0Uwd' );
define( 'LOGGED_IN_KEY',    'n<<h1LM|&FOS<bcQYT/Q5Rbl qXcV=19Yo*!7K}`$B^FbDZaN4Jl+ox P%y05Tdk' );
define( 'NONCE_KEY',        '02na=`]`v>cw }$1oNxU#8RMiZ7`hBs0a*Z:Vkp_6,L}eG:KbvBW5@9j;k0Ol;.A' );
define( 'AUTH_SALT',        'eros!0qGIJX8It{8o7GoYy_aDg(-`H ?0$$DEw/:U)v?*riXU^<LCldUt;[nefIm' );
define( 'SECURE_AUTH_SALT', 'V:U&&DP&Zg:7[e4erOzlmSAe1X{A=]lyHc.uwiF#u[ik~?U $&wDZN!NHM<}43~S' );
define( 'LOGGED_IN_SALT',   'R+>xF5rWb?,I}klT#qO~Oi<)hpi<f]:x{dyqnn)={4ks2q3zr[gFR35zGF6;BG*m' );
define( 'NONCE_SALT',       'B{t0$iEvQ= _|p#i+S1$|xj8{1l@yTKhKs{6qS7/`Td3rW[>/L;Td^k[0ii`,m[i' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_basen_';

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

@ini_set( 'upload_max_filesize' , '128M' );
@ini_set( 'post_max_size', '128M');
@ini_set( 'memory_limit', '256M' );
@ini_set( 'max_execution_time', '300' );
@ini_set( 'max_input_time', '300' );
