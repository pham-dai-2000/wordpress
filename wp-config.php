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
define( 'AUTH_KEY',         'z=Kly)%su~@fSNn9=z,Q$OT}O]m7kE)5SgInrlA(e)|D6.Rnl,t]k2k1Yn2XSlg?' );
define( 'SECURE_AUTH_KEY',  'L)/_n;M]f|kxIumy2&^^jF`|4,Z%.DhqOjP.m+,UB|dd!F$PLGv-x~dL}J}F|^JJ' );
define( 'LOGGED_IN_KEY',    '|evf-2Szo|2gHWn:1HCQq2EBU%Ou$|CuF#T*(ksgT.i]:y9#!Y[4Bq?VxecDci#Z' );
define( 'NONCE_KEY',        'G},SU p%,Z61Z@@/ sm.(LT&emjn]@bALX_!yhg~N90%X:Lsd48MEn~a<>k~6}pD' );
define( 'AUTH_SALT',        'oBZtU/l2+m3%-(6-DP2P,sTy.9E6<(c229jP7J4POG<7Hmd%6C8`%0I14)m2BLh>' );
define( 'SECURE_AUTH_SALT', ',w#b?qtVW9I6IL.|T$F|vzj!Xfa2LqkffXs.F>9:`[#Q=]5yailL0ijit3>N%qNd' );
define( 'LOGGED_IN_SALT',   ' .QaoHwVoH:f[@#QXaVRtG}gwm1[;L3KVv-ja]q7EwJp9prKqtW&HRxmwmN%we6l' );
define( 'NONCE_SALT',       'j5saM`3T_.+~h@zPG<L,c3CmU)~=lT%QJP;9Q$tG=c,E3/Pf>0T lf1Vm.8AuUwA' );

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
