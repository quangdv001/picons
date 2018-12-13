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
define('DB_NAME', 'picons');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');
define('WP_MEMORY_LIMIT', '256M');
define('FS_METHOD', 'direct');
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '2CT/>1c}@>tF]%Zr^@o!{_tmP)s07/##Gx7zN~F!=898XqT9m02vw<]:a$O6KoX>');
define('SECURE_AUTH_KEY',  'Rmw!LL@a-oHT1M+49XMe0sq49.Sq}hlIXU>tbrq2h0owP.fmJdcVZkZUMK0.^[-0');
define('LOGGED_IN_KEY',    'bri+Lq+RIL5IC%N#|ZTL7J-qI.dI+`OxgZX7rA9lu,D+*iK+D${?;,Rup?K$boHo');
define('NONCE_KEY',        'oBjf:>fi/g(d[=FBW<[vG^fn-R?Q*eF-YS{gT5h61.])lL`608?EDw3I~0.cJXAU');
define('AUTH_SALT',        'Mlq*30m9-g,iMiG]Tv5s!VoI0k={W}}#`Z[CP2aqN(b>7qX:ZJ PfKt*B;Pl4AHL');
define('SECURE_AUTH_SALT', '|_{D=i$F9b;j{,{vRX9A[Fz&@l{zJpL:sj,a.x6VS?3xJ~y(y7]%z|SzA ?v~R(/');
define('LOGGED_IN_SALT',   'D<S{wznw6*jK$S{6F4&TJxuSE~_z:b9mS+4CHKTH{{.g=wT}e[wLX:+5>d<pq^y1');
define('NONCE_SALT',       'xU:Dm?44jSs$vw-pt6JbZ7s)pH<l|XA?sM>)rJ?bpn.4E-W}vEsptQF[bB:i2<TQ');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
