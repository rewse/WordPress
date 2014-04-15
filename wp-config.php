<?php
define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', '/srv/www/wpdev/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
require_once(ABSPATH . 'wp-db-config.php');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '$IAj9|js@ck3.4>%&1k.ntvv)/T%e.PgN*m2%WUZM2.uRv~q{)oIT2C/{$;>0Yq&');
define('SECURE_AUTH_KEY',  '=m;b`[Ce-v:V+jRb*75EmmaaCC)+Xt934M1T@V{vUh*CkRZsI}rT^3r+lgI<C|Bc');
define('LOGGED_IN_KEY',    '+o7h@+:-L>-5KI:n;.5qbUxw51oy0R#>JvB>0o}GoV-1@XJ1TY|/MZ,bG36@rZ;#');
define('NONCE_KEY',        '[v|Cmx}3cq/IPF3PA->+*E@Gy2<U nP%L9)fmkf-_^-?Wt^//A3*TJ+lrT@|Ip~g');
define('AUTH_SALT',        'oFeTCHe>pZG7%D^K5]P[zo6sW_9[U$9rDvG),?bM!v2HFj^+-j+EI}~wcO7G8smy');
define('SECURE_AUTH_SALT', 'Jo-.#<z-|?<5$$$S{eoA]+qA&:dV4]=A~!fbKEa*^AOo:5^pp/M~.{itPV/ 3J?.');
define('LOGGED_IN_SALT',   ':pP%>{/c/ghm2Q*$5YFl(Bhn`xszv?*L=r.phYjyBAy2(*^Sbp%/$V$5J8qgcg8d');
define('NONCE_SALT',       '#B0lp7*.c4xqM RB=!ebU`GCy~(LAY_@+Vbdt+a%Hdqrv-QJwW?I `DAuVs6OS2|');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'dev_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', 'ja_JP');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/**
 * FS_METHOD forces the filesystem method.
 *
 * direct is not auto-detected when the file owners are not apache.
 */
define('FS_METHOD', 'direct');

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
