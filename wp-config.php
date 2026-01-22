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
define( 'DB_NAME', 'pratice' );

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
define( 'AUTH_KEY',         '_/6o,b>6]`{CV>xV`qDi6uXABhh!,(/Oqk:bD~66S!#gl~+);.UbmZYaD~qWjH`z' );
define( 'SECURE_AUTH_KEY',  '237PN/PY_Rw)HbNRU^]X^g*-1*ra8{ZZ4H:fw_yn_:^;9.|u`%w4A/TW<IpT5f*C' );
define( 'LOGGED_IN_KEY',    '~vC}Yo2AT62a>UT7JBBSlN:N_0mjYMZh.vj%Lx(7B=*:}89p?J]jwj+(rBYt/B>?' );
define( 'NONCE_KEY',        'lMfF-iK8Wy%H6#^.<V2/tUC%p,aOU$sVQjc^x?q&`ZKkwe`$YpzEb`V=^h1w]^N5' );
define( 'AUTH_SALT',        'Z{uj,:Rk(-(v^|NxGKV^p0V:tfRd nvqj[apU=>s@-:MC}z4OZI:h[a1{Dx1Nmh2' );
define( 'SECURE_AUTH_SALT', '|va?5}Q(Ny)k^9k@p- 6ABpJ<c*EKIo6;v^]=8yPA{2cW&QSSs5DkN,&P6uu#}AB' );
define( 'LOGGED_IN_SALT',   ';yAI6*>oj#Qe)~nPe1Kt|%1)Z,,mw|+H{X%[yWCCy~+G&JVyV;d4]Yr^v{n&vhf|' );
define( 'NONCE_SALT',       'u|}XFQyCkejg-/l=h%IfkaHue&diyRJ>L0Sq{P^od7IL2%58$ZRhG7E~ e;~*UYT' );

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
