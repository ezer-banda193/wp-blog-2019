<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp-blog-2019' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'manuelito1234' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '#CJH{8W[]WV7S{/e EQMQ>4[Eje!wAcMqu0ml6IWotpx!B_JzY~[!nFPstBzKg{7' );
define( 'SECURE_AUTH_KEY',  'OLlPA|jSu8YXB9HqH=F@MZa75D@8&50T+Mw.Nj%CD5.e+etYv25!f=o<zQ;%THio' );
define( 'LOGGED_IN_KEY',    ']D,e!~-]?Ig#Z7A.zJTk+p@~>0@G@3t qT7&@Hk6+@BsX&*+frp+g8v*8fP(8>tH' );
define( 'NONCE_KEY',        'I#S@xpkSJmLH$NwO1o/1-LT~vAl5SVc@5-yYe@bF&RUC#R{#obNq~^0i{^Zx`P%`' );
define( 'AUTH_SALT',        '=X4P;s-ldo|?mGRE89d9yyg(XWZKR!<X-pBJjRDrY$NZ,1]UJ9.`kvGlqTy<<[3(' );
define( 'SECURE_AUTH_SALT', 'xnA`yuT5vR|M^&=zq,2?C^QPI+EN6j0P3zi8<9$y}#McX&,JuvLamcWbjeD%ZVxw' );
define( 'LOGGED_IN_SALT',   'a`_|lA3m0uwP>WK0_j#M|)6?$0pa1(f`q80=4W)s@tsJw$e&HZr-Rw(/N%N?uL<X' );
define( 'NONCE_SALT',       '3g#w;?4Y3N6T^ay1~#CeuPMcDm~XaS62JB~Pz_-Zrg0PPS9of,}pOM*OEZB?% n2' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
