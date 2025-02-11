<?php
define( 'WP_CACHE', true );



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
define( 'DB_NAME', "wp_brenocarvalho" );

/** MySQL database username */
define( 'DB_USER', "breno.miranda" );

/** MySQL database password */
define( 'DB_PASSWORD', "Bb110996" );

/** MySQL hostname */
define( 'DB_HOST', "localhost" );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'f=Po}.89!r:E?E;C3 VJ!@iGQ0R&o LR-RBIE58/dqB&XkPa+]5.hPs(>s:b.UZY' );
define( 'SECURE_AUTH_KEY',   'A>o>z<ty e5z+WkHXg D=>l1L8EFam5V&9IT,l6y0tzDnH6Z_Ax*HMo5Fs3YOOfn' );
define( 'LOGGED_IN_KEY',     'dSJbq5$1T3Z`3C}4SWq+`1 =90$9}c$|J%1/c(#G?Aw^?[Rb6pj,MFwxs.V^GP;n' );
define( 'NONCE_KEY',         'J-5:Bo4;hp=$J?&<D{5~K=A1zlBgP,oip#*tyLqei+oUlJIpG}g.`PE0rg#Xw[/.' );
define( 'AUTH_SALT',         'tyf,>CbzbT[8RXUl4?N;8[*`;@Od.YF<u~z;8&o29Uv)$17T7v[{_`8&L$4XdF:i' );
define( 'SECURE_AUTH_SALT',  'cFbT;!+ddZlS1dx-*l{_lwX{.br;79-*>^L8:_qT-<IZ2imI3+I.#cyf*+w<tjfi' );
define( 'LOGGED_IN_SALT',    'r]dKBtQ1u^r0Fi*T)o-q?0kff-dto_/X1?Q3%05GgCR!kL.r*/-e&PPw&nSgY qq' );
define( 'NONCE_SALT',        'jIl; Bsg-9*1|mI?H| as HEaoI:t-{xn]*_1Ag4eZP?8]<l%4]Urefj$}yFLr%T' );
define( 'WP_CACHE_KEY_SALT', '/t2{Y~dw7J#tcgB0dUtt(fV6Pe[bYEj%Lj%#nw4FAb2*Y,?}lp/z{:%[m:aWL*z1' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


// Habilita modo de debug
//define('WP_DEBUG', true);

// Guarda os logs em /wp-content/debug.log
define( 'WP_DEBUG_LOG', true );


define( 'WP_AUTO_UPDATE_CORE', 'minor' );
define( 'WP_SITEURL', 'http://localhost/brenocarvalho' );
define( 'FS_METHOD', 'direct' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname(__FILE__) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
