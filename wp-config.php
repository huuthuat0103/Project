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
define('WP_CACHE', true);
define( 'WPCACHEHOME', 'C:\xampp\htdocs\wp-cosmetics\wp-content\plugins\wp-super-cache/' );
define('DB_NAME', 'wp-cosmetics');

/** MySQL database username */
define('DB_USER', 'wp-cosmetics');

/** MySQL database password */
define('DB_PASSWORD', 'huuthuat.0103');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '/g4F42zHFK}]{Tp=VT6axM_ll}1_wzTRSqYTu>9a@sk9)Id(kuTCP<a/yjn^*b/)');
define('SECURE_AUTH_KEY',  '~9ws]dSlg;d YF=yudCt[; q>/c_TIQ;bBKM7*zF{l-&5#Y7Q!!%pwNo@Z}u#aY}');
define('LOGGED_IN_KEY',    '?De,|~*1_dS_M%Aex5SRi#<TFzoI1x9F%`,^;yg=<=uUyof 0?-%JG#KB+W)55@q');
define('NONCE_KEY',        ']I3qQSAbUV{;8R177-yK^84ZrISky9*wS_QhMT=C=S:re/BRMHf=ED<#g1j&6ZzT');
define('AUTH_SALT',        ',8!8[k|cqx2F]sxDMY;XcZ&V^! s]e0o/nyz(lDAxK}_^d5~R;3agu6GW<|F7(Cp');
define('SECURE_AUTH_SALT', '@#3j7<K~C5#?FgWvbHzOo-oW47Lp$qzrg,%/PCTw$RcV&&u] ;5ibh*<$K;]N>,@');
define('LOGGED_IN_SALT',   'phI*jo2.d_YpH[;K}{.#6/QX-]HBck^p<)2rC>x6BTJ_.zGJ-2&o&Rns$`yDoAm|');
define('NONCE_SALT',       'JgsP?`|Wq6G0Rn1E[a&&W<+5yX)_4RqIR ,Fk43}2&Do)mP$x5>3,+({[K{RIKJR');

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
