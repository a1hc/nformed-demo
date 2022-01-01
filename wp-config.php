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
define( 'DB_NAME', 'nformeddemo' );

/** MySQL database username */
define( 'DB_USER', 'nformed' );

/** MySQL database password */
define( 'DB_PASSWORD', '!Nformed2021!' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'T.-ug1@hJ8IrU!1=2VfrdN$^Kbfq?wW%Z%54ULjB0TlR2J#KM ~K5|]]nW4/.%21' );
define( 'SECURE_AUTH_KEY',  'v&?r;_qBz1cQTolm<w$UUIc)^%:>[?eIEN.]Qo+i?X/Ut< i([-}3c6DMHRdkz8 ' );
define( 'LOGGED_IN_KEY',    '42=g]$a$V4>{Pe1O,1-|FD9`$u1MLS/#}/8o6A;WMtunp.6/`WOWx16xZ>;R73f#' );
define( 'NONCE_KEY',        'f}v=`cE:D]B*WVl5d+$SZKQKA=3nop^B~{,o=g*bIm^z-h!?2+T-AIGo){S)<:Si' );
define( 'AUTH_SALT',        ')#+<y2@t3O5jD#cY8Ew4|<PsH_]f#bLO`?ftsR}ACCRyofUgipKz1El_0fHz@pcJ' );
define( 'SECURE_AUTH_SALT', 'E&SY1j:rY4B6G`ENy?/NZCI_~F4uVELV95?$9A%yzGY8Y%IzrL$N+_5y-sB]lq/l' );
define( 'LOGGED_IN_SALT',   '/s&-noPMiQU5]K%)>q(zMQG0+Lxp@gOY!$qLR;OIw:gbxX)$}IJt<,Fq~]BbRN1X' );
define( 'NONCE_SALT',       'qjr??Is_=(C^+y*!~N>i.ov!>6~x6~G/Q}Zw2>+{2^xgaPhXmC}~S-,12h5AnjOH' );

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
