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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'G;auxNJVuA_LV5Z^?@q/T(_FF3944^mb-z^~GEmE#w`:=i0I/sV4@wz}McAi6r7?' );
define( 'SECURE_AUTH_KEY',  '`CJ/P&Q!>2IO^#MJjjg yZul=_heR8rE~ja8]~hs<)V[ZS~kt<85UD?8ikE]3G~H' );
define( 'LOGGED_IN_KEY',    '<YqcWLVbJCoNuJxC)-4{CZ47ZNu[]t]Q<]sDjbS}IZ7Ijf[I}Puw*^N3Yw?_qwFB' );
define( 'NONCE_KEY',        '}vsshrB|xE*ap/yTmm]?bc.*ogT 1v6{=&vJudek[KvFSMO~+|z~V5Q`xfX{k&4a' );
define( 'AUTH_SALT',        '/:>Id(+ KDc&j7cX-@XHxS_$fjYE~P~($VRFT_uJ2 0cSK{k=({T`LH#]B8|t6f?' );
define( 'SECURE_AUTH_SALT', '2}7UcA&W3ec1w40sybZ{*Fe{L^qei$npB0_j-gOMdN-?Pq:{ct-4!.6tf%v?{8.f' );
define( 'LOGGED_IN_SALT',   'S-2oUU*!!DX>N^X-[rbsAPl(<3Y>D#x#j~ZVg[kkhMZg7[6=k7Fxr;^s!Z@WsZE<' );
define( 'NONCE_SALT',       'MQ]IdyN4&+ry|uIB3rbGHdlhOsC/f`f_}Gx1bG{5-eRlREiqc>#Pqc:9s`OD+yw_' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
