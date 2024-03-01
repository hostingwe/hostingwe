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
define( 'DB_NAME', 'wphostingwe' );

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
define( 'AUTH_KEY',         'l9z8&Ti]#)=c^.#-v&@f{(diDV%Qez9j0$8?{ X9;jT:Mhk{*y.v1R7;OmabT!H3' );
define( 'SECURE_AUTH_KEY',  'v-NDM@F%ixuH I%F-hZfL]*F-:6>& 3eBJ:@DFgkONzd-EhAiE:V[G_[_;VLN7,S' );
define( 'LOGGED_IN_KEY',    'oBD%*QWz4g+DU/@#wN{XFX|#~H?#+O29,{9A9B`7Ug{bW5aArDiu#TO6v]W:1*cc' );
define( 'NONCE_KEY',        'lZ?lHIjYM9|OnI1O#o.LLw)1FN2%6I71E;)_+_I-fN$L[vwEl{@G*x%|@;(]]s01' );
define( 'AUTH_SALT',        '28NGYt~*>$JEj_H0nP$Zf0bqr7b2jk7A>ij0bNk6x^lQB C@8A9i9R/]r5>5wmzb' );
define( 'SECURE_AUTH_SALT', 'w,<qm=Ls 3crV|boyl&)/qkVXf7k2uV<x7)a^zGbJ~Nzv[aU&IBWk%XNYS~2GLoc' );
define( 'LOGGED_IN_SALT',   'vnib{>X6@8w13Zy(y@Yxb0;<{PpL:-1bHqWDZ)4{by7BL+%Hs##BoE46wkj J6[|' );
define( 'NONCE_SALT',       'cJkEk7vY!o lmHoaSiP_8*Inh80DU|}e[iFZBM*pVmiOm-@w]V]V`CY|c(3(5IPw' );

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
