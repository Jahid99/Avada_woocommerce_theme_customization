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
define('DB_NAME', 'jahid_woo');

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

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '7G=;@HHP:ZG2hO&t8d)g1Hj.nta/*%<~lM)#.IV96i}l!sA#T9}VTw~^~{t5vDX2');
define('SECURE_AUTH_KEY',  'CsllDi^p_;R;yx7?G6j[PA:BhyN^@u8q!y7Ql s9<QF,PS[fZ;wz9*1f%-iI~POQ');
define('LOGGED_IN_KEY',    'CJ<8ZktdTBZjp$j,o0AdV]A4uCu,a9`VOjHY~}=dWv!`uGPu<oTgOpm}&+2Foxw:');
define('NONCE_KEY',        'K.xpOpUeF!|TDtEKrA7oVx!x(5j6e0O;d`4FVI[5q;IhF!,Ic`?x]kEoWMNV9WFu');
define('AUTH_SALT',        ']!3];k1__s%B.Q{nw 2#nt7?)[24}VUKX)-BnxE-[[~_jK*Xsf02az:ycFZK*KK7');
define('SECURE_AUTH_SALT', '%_YtVD&q.5AtN*:Q.gxHeA_:3n|:aa>yQ4kgBx&BS}14]!*6CmI)7N^B&#Y= }IH');
define('LOGGED_IN_SALT',   '{a4Y&c2H(0._SgKx4xLL<kMMJi+XA.kCTdM-`R`UPU/b&*V#X!q2BT<SkbA]}IW$');
define('NONCE_SALT',       '4>Wup3Weg^9}BmY0T<pvtkU+xU(Z,09 umXntQ{xTj@A9& zLBgF?NspaSI*tQ-,');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'jw_';

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
