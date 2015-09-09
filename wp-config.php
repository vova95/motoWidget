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
define('DB_NAME', 'motoWidget');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'i?mHf3|:Xabn;Kr<aW6Gk|C?OM}Z]7xQHQL7P[6[tX<jKa?1U3:hG`: k34UPYkg');
define('SECURE_AUTH_KEY',  '-r,+k>jVmM8bNuhK4 :0V5BWZ*onYDj~}T@MJf4${6SzD@G@fVJ]vtNss|A1H*(x');
define('LOGGED_IN_KEY',    'G9dP+#*j&#Go?0#kE{=$U@N,SBGYTG1PU@!7<M]r,R5Mv4Jc^Oaa&@tSZiy<()I$');
define('NONCE_KEY',        'z/&xuq#FY#PT:TFA:H6tNbh(|!?oMi@D-k4cM^8x|}!>1b{RB3pn:%6Aa^<*B`V*');
define('AUTH_SALT',        'B<-A<Xg$%>mXq4}oeD7h>eHST4-@Y@<3!8[7eu1sn_TO2yi{Sm_9LRy.4r%gqNMe');
define('SECURE_AUTH_SALT', '-VS~o^n5p,1<p*WKkc#V#lVP*6p/hZTScI$j4;Ex.~]Vz// 8:tJWf#/a,TJyx2`');
define('LOGGED_IN_SALT',   'Yh&Cx3WQ:8veBtFr31`L`h7O%yut `Da<CV &k8,9ppepfBwIV dR5!LgKU7NsO{');
define('NONCE_SALT',       '@,SFcT?cEPT$Ien$:&O#UrbsMiuTXfxvhpMuz7Y@M2+}-;PZw<cZ.afjo*k8x(> ');
define('WP_PROXY_HOST', '192.168.5.111');
define('WP_PROXY_PORT', '3128');

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
