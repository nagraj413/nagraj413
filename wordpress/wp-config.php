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
define( 'DB_NAME', 'linuxscriptshub' );

/** Database username */
define( 'DB_USER', 'linuxuser' );

/** Database password */
define( 'DB_PASSWORD', 'mnrkps@26' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'l?G.uV*u0~bn-uH7p10+z~-U#x)PTH_u)GD| KIa[+C0BBJmH5Od%]t^4$MOhY[s');
define('SECURE_AUTH_KEY',  '|y#4-M0||{g}s`1,_[BX NMD05333AAi/CJ(BcQb:lIT$U8i`(b-4]YP^jCGT-b0');
define('LOGGED_IN_KEY',    'mnxN!>Z+UNF-GL`-;Z;hF-WRV0qt0 WAz6<=MkRWi;LRH{h*DzzxyqvCMeiUgS^ ');
define('NONCE_KEY',        'u9)|^^OL$e<wVBcAQU3WK)c=B+Y7!XJ,uvbQYB@6zTH4|B(G{Ju&*]RtsXC.,m@v');
define('AUTH_SALT',        '#m4_`nU4S-zJ_)mN|gT,uzqd[fOfn?6ebbMSUF5vG-Lpd8qq$32!_0HXWM|mV| /');
define('SECURE_AUTH_SALT', 'Qvjl4cpsfZ>A1sPi*gmWy%#H2||Qr{qFvlb!8NGi&T>dB3O~9o)cM#!!o[N.?W.Z');
define('LOGGED_IN_SALT',   'bG*xg|v}N*VFs^; ~b@F)AGzGlY*jP~LUuww ,m.!|Wm,EBhj$|ic+49+8Z;zt:J');
define('NONCE_SALT',       'jMIYY,&BKG$ARoZxbtD^[k|]Z-v)t(|NU)uKYH3dJQ_5@EmA4klEPnIV=%;DfOjq');

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
