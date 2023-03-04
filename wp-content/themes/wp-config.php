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
define( 'DB_NAME', 'franziskahApp' );

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
define( 'AUTH_KEY',         '%M Z7Wm=_x>b[>cf^K$]6]wxS+~=eNt3=>BG)cdC/ZTNI{zIh)2C2_LJ5WCSm4b8' );
define( 'SECURE_AUTH_KEY',  'FN.c_5#G1m<fDdyj[9!^C.j5WsJ-3bYlQm>0||y$+}s<nnHCt(cdAnwW7@^nMn3`' );
define( 'LOGGED_IN_KEY',    'tZ(TcPc8$ek?^Xe-AP,Jqc#V_:U(Ew7KSufe`%QeXapCC:cm[xFY)U.y/iY^8~Ly' );
define( 'NONCE_KEY',        'cA#W?cK`Ml0zD}ufa&1*2k]O44{LINdy$c#CCSNf/fYGN_+nx@o>0_@3:I;I79gh' );
define( 'AUTH_SALT',        'Ef4>f<x[<-sXTVM9vi(M1C2S&D(9MgL9#Pl^Iq~`:Q!;^V6-&.tbJB7va2%)`^/1' );
define( 'SECURE_AUTH_SALT', 'LwUR6)? kB0e`)YSEba2i_tRpyM]@h vE#3H~>3}?v] m6:+sGPe{E_*8`$yk#xa' );
define( 'LOGGED_IN_SALT',   '!zef9*I~.H6TR~pfh&9gbUVIy4C;kla0p`Ge}paZTMb^!]u91fj6/Iyn7c[T08q,' );
define( 'NONCE_SALT',       ' Z+[3-S&wrG^S/#l=p14]uH2$*CO<JvRo=tU*HY1azHhX?O iGgk45bJ-&|%V7^I' );

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
