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
define( 'DB_NAME', 'secure.sbam.org' );

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
define( 'AUTH_KEY',         'P-Dr}tHHD$^sP}P;!~fa3JPaHKYVB;(O[dAl&9^$||r.O(<gRgembH>;vg*Yk{#X' );
define( 'SECURE_AUTH_KEY',  'gz0$@-P&m*4Q&Q.Od2Qqp(MWb7x;0)gW}b)`@N~NAx^p-[6o.yj+(Jq8<l2JbGC>' );
define( 'LOGGED_IN_KEY',    'x~fRwB2%:Es.Kmx]oC1F#MwXdR^SFYms$_G;2(|k{[jU$P4{}IZcl(dm)P[9id=I' );
define( 'NONCE_KEY',        '7{E|9]B%!`Agx2D+5I_P$:?m!2FR1<m~hRYFr*JiD&;qBbu$$[:N|L.}Be4gBsGK' );
define( 'AUTH_SALT',        'SbZ::r=PRLK]dt71ol@}TJdpcCjEdU@t/bGUt8<:+$Y/LSb5SqC1L_5MA?@~9rmd' );
define( 'SECURE_AUTH_SALT', 'y! >_z00%%N}n02`nz|g(08UuauTU.YjdBS<ep2A$!%,<Z^^ZA(Mf]+,oBx$c?Bu' );
define( 'LOGGED_IN_SALT',   '^F>0`X$V%We?CL6w_yLv~uHSr;s>/W8vLRf__F)dQksX_M-xeU7 h+In1ejH.`Yg' );
define( 'NONCE_SALT',       'GkT(sAl,sj}+J[J$|SdD~[7QB1=hu(i20wB)?9e0w2lRwp 0X6p[,!2~im_598z6' );

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
