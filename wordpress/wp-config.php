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
define( 'AUTH_KEY',         'rX1O :vB+?5vy}f#di;ruj<_?Gm!>j{Un)$;+1is6~^-AZ}l_QwM9._&v:Kg=Jlm' );
define( 'SECURE_AUTH_KEY',  '+DvD-[=s4OTEcgm5Oy0{x0%<7C@&)ZwZ{KD_&]*H=7LiH~tf?mo-kduf_#(k_5#I' );
define( 'LOGGED_IN_KEY',    'tN/XK`I6X8[ 88%I=&3vK{4m92-?/yNmyOMiYBh=Jajne,I%l[h:J7=e0LQ{akA|' );
define( 'NONCE_KEY',        'LU4P9<kjgupnD$?fg`T`:>&!Rlbwgm^bl*L$JWw4TA@jv#Nuv/R:{57JGEqtn|6$' );
define( 'AUTH_SALT',        '0Mp*iRtv6~e!$W=-P+5vYKh)BGbS^rp7}X<SJG5D>u/.%wVrXi`BOUZe}n>LAp0O' );
define( 'SECURE_AUTH_SALT', '+(`BZkP3v!Mw{e9[4<Q&%}u,)!6DlIWN5oC1M{6Q`yZa!2Y/@V[>*LB-<VqDJohw' );
define( 'LOGGED_IN_SALT',   'faD>Bk_~W2U1)j/00Cb|DA1 Z1,Isq*,j-JB]oT(WdS]06?^I~mjF[<Tc1Jqy,pE' );
define( 'NONCE_SALT',       'Oh;`<!h&j48~7(Ml|W.4&U2C7]Ob#T]w6>)4PPE$l[>8 W0lpF(=JeK=Bi(Q/wZ+' );

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
