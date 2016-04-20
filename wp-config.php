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
define('WP_SITEURL', 'http://hldquang.xyz/');
define('WP_HOME', 'http://hldquang.xyz/');
define('DB_NAME', 'u490847564_wp');

/** MySQL database username */
define('DB_USER', 'u490847564_huynh');

/** MySQL database password */
define('DB_PASSWORD', 'I7ZMhPARp2');

/** MySQL hostname */
define('DB_HOST', 'mysql.hostinger.in');

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
define('AUTH_KEY',         'Eo&Mpl4s?+Pjme:nL>+KWwn4#qrS>Bwoiki`4-GF$AJW!QPBM$/zqDDj}!*~[&#7');
define('SECURE_AUTH_KEY',  ']Ae*LQ%4DIT@U7)d#-+<v2MFy{~kwF#hQBLIicx44YMtj/q9@G8hQD;F@OIKSDgR');
define('LOGGED_IN_KEY',    '2HB)1)>t1r+G )x1lS@e-a42-[-.LZ4`o5l2hc 3vRs:*ukG3?KHHe$[*^kY]:P,');
define('NONCE_KEY',        't^Gy^Opj_(R%=i)q|/K@o4OZw5m,hta,EM]IZ]<5 oiGzzt_Xjh>w3-;;0b1VxHB');
define('AUTH_SALT',        '+/&XfWi6ez|-u-L`3IG5Na3fitK/z,Ex/&2 NNTV`a{5j|,:&2nVXo1:|@C3[%Mw');
define('SECURE_AUTH_SALT', '*Yr-Te[Tm+[^+>f_O{m8U9Gh>JJ4rLap[6-:|nH]m0kR~X2yU~#1%8f%B!9-ax`O');
define('LOGGED_IN_SALT',   ';l2=`,.p[xwYcvCrkUJDpdhTa+|%|;6FM(x;je/Ku?bM6];v)8YI+y0Rpghj|M(I');
define('NONCE_SALT',       ' 8i&Jpqaf(yg)%SZ@ yP.r#4GHb7[-2QfdF*HtUA^#Sf|yhz~S5Srsgw0)N%}~XX');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'user';

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
