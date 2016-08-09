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
define('DB_NAME', 'charles');

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

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         's`9j-|WC~yhGjeN_$PG~BXk]HgEb|&1i-jhrD)x=XPf_;1O>9Tt}6Y;!r`::/`N{');
define('SECURE_AUTH_KEY',  'oSH.3!}ykhS&ad;:HE%l8J1ZBN7602b2fAg,x[LUm4!;0P2{@k.JydTSvn`MiKU=');
define('LOGGED_IN_KEY',    'GDR7#AsGN/8Ug=4P_+])n}K%a@s~/e7,e(v)znK7e}&KKvkRq3lG+KdpDc<ny82~');
define('NONCE_KEY',        'hr)X._E_RGafV|{z,E?|s+#~6A(%aG:!UXW2r3/Yn5#T8*Oe()$Gga@;4Q6(Xp:#');
define('AUTH_SALT',        'I;L~n:orXi1a]F~|=0?Y}}-|xNun~4h]ShVPPod$,%hme`N>NUoihxkI[.s=Fq>N');
define('SECURE_AUTH_SALT', ' hnnQXt8G]yclI)^P:nL)g2C2lwgV0#[:w1C1r&-qI[y=_!q<>7ahEmWxG;?K?m_');
define('LOGGED_IN_SALT',   'EMf$zx$}{ 3JWl I_*N/fV!t)< BU$^`A&(@^$a?V<(g];s]JaUa.+~=;!$tB&kA');
define('NONCE_SALT',       'j/;M~]ZPg7WK4+02Rf>Oj4=W-{zE:KsS#HXFt;ylhJfW]U6E6tj!6y>ph34bRZ0/');

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
