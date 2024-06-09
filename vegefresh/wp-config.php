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
define( 'DB_NAME', 'vegefresh' );

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
define( 'AUTH_KEY',         '=^U<<yN@1G5(1.i0hcrs#9w+Xy({*d:=BRG,eE,yn(i?A8g2niwLiIfa^F WGn6D' );
define( 'SECURE_AUTH_KEY',  '!0[V`0=!B|cR?s<sizQFg5+zfM _xM<GW,w>(gNC)Q^4K M:|8|>+?QB@v245: z' );
define( 'LOGGED_IN_KEY',    '5FK{q<d=BhVH04|>w{a4{m fK{T-ah(fUpry;7*P3I0T0,qbkHzgt6EJNhXENiB$' );
define( 'NONCE_KEY',        '{RFmSVMj[St$]GCW{t4+,gwd.?Yr/3{iTA`g8Sg(n.7dtZ^zRS8~xk0es[^+yw7#' );
define( 'AUTH_SALT',        '?q&vnKCr3D*TE?Vx4S2@O[>(WM/MTHgpG*IB^M9In`F6xGMX]@^#o7h3{=R_<gj2' );
define( 'SECURE_AUTH_SALT', 'KtqKSn9Z(Fy5#_psZ25Vt5L.e|r^%GmH[KqzHYmj#]mOj{onUWTPU}2@PT~$|cG8' );
define( 'LOGGED_IN_SALT',   'z`[T-S|[?f2@rkv[gVxSVrUh*cPYu7`br;qzTpc{9R<C2+n.+Q6:@pcpw/(=.DM&' );
define( 'NONCE_SALT',       '/j#*j_F UhPp:uB1j~>URUqR$?DD78fAv&H8O_#ALZ-wAv (}J2PTy[{0|tr@RkC' );

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
