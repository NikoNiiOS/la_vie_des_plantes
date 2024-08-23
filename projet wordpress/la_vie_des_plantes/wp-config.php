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
define( 'DB_NAME', 'vie_des_plantes' );

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
define( 'AUTH_KEY',         'S=4t6Uh 7_<ME<W-XPBjC&D2q;EO~iS+/yQv<p.I2&w/:AV^N+&wazp9~Zt<.i`^' );
define( 'SECURE_AUTH_KEY',  'CEjgc8hb.~@]`HB0;Lxm{/;uG2/)Kxf(.nj5{3e8D]_**.mUx/P@.d+ }hD|r3<7' );
define( 'LOGGED_IN_KEY',    ':tnYC@l9`9PD1%*#&^XM{9.w`YL%#.x~zKHhfa=WU;lKg,_y:<mvMo#nsG/v,vGO' );
define( 'NONCE_KEY',        'MOiI:cB2a|y60XZ-I[yMCJ6h0y+2CSFVSg5kZcKxN:B^Kokl}_z &0*/T|)lg2yJ' );
define( 'AUTH_SALT',        'Da:U1s^e~Vb0JFd:edM4ig/Vwh?YS&4|vD`/S>/0RG=:^UQy5VMTu 7`C](*0N~~' );
define( 'SECURE_AUTH_SALT', 'g*5vHMJe.Qppw,}B()B|F@>T{j5Smf#WcN#1PK7SVlj],3Gc&ss8R&C^Uf{ge%%~' );
define( 'LOGGED_IN_SALT',   '`5du)*5B8-0D^0N<9`>VbNIg&AZb#qF>Vz>(rqp-&vW$@&fs;(]tSoE^X{4%w7bo' );
define( 'NONCE_SALT',       '.tH7l*]<BPmQ)eSml.vrpef++dN;G^-MA=aL5|K>!@2[{g,NMu+$C*mD2X>6S!cm' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'vdp_';

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
