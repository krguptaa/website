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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

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
define('AUTH_KEY',         '=4t#I(m*Xp3wA;8sb1AZSQAg}C{r-e_%$rrHUcw>bQpT=-2wADRcQb3MC_Bm{IY?');
define('SECURE_AUTH_KEY',  '&i?h8{JOW;y(?k#${_okgMF;mF+i0Bofdi9oGdtN_W49jo,zk[ZG@JQ~yPf(BD$%');
define('LOGGED_IN_KEY',    'dyEewrlq?i#C:-51>;!^m7TX{4-y/7L?T({,D>$`wBX$TJB)NU:Pv(W3w;K;&VgW');
define('NONCE_KEY',        'f>9-64*#/jVM%k9L>{b}%*Vp36dRRH7p=.pqaEc$2zpJ[P%F]=R)PL.t#+m7iG<Z');
define('AUTH_SALT',        '/u4)Gnu+;AypcdhbRvRB<q33AsK]LZ?67S~tbwgDcTc6)nM eg+Qx.mlYX,4q>)>');
define('SECURE_AUTH_SALT', 'Y*VM4]%;*s/#%^m~5DNJy~V>VHLOTgA$8u?DBM?-lET/ujbfKyYPBS_$?=-`A[}U');
define('LOGGED_IN_SALT',   'U;RJ;1OsOVc}I{r[82+ x^t3Y7PGy_FW#?-}g/% (y<LG/_m#AcVtOq[`kVM$a*f');
define('NONCE_SALT',       'I{(8u9z7$Q|dGaz=Y8SBimns}MRVT9t7Mj p?<xjKTt0M}k=M[iP?hsiARIzl`3.');

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
