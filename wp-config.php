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
define('DB_NAME', 'mrrr_db');

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
define('AUTH_KEY',         'H)i>HRVv`Yi{fmX0+D7eL@-fS*<hJ_|fy0V:KCKUu|42Ac>(<D5hz8.])4}>{,OY');
define('SECURE_AUTH_KEY',  'mq@_Y>-)jV$xPn3WY88Kog-bT%7HiVRw5C4v^R.7Fyy?n<P({Jt%58M~{m/Mt ~9');
define('LOGGED_IN_KEY',    'i_B}DWx}y`]YX~k/nz8)o?avkY.jm!e=g$aTbj(dV.xfc=VQeK7#S[VZ1Ui?%7B?');
define('NONCE_KEY',        'a@le|K/>#Roy[y)`z)y7s_rp?PaH+}}MlE:XIuvR~%0;jo:Y.e0Xf-~IsuKtu}%A');
define('AUTH_SALT',        ':$4h-c2U,797AusDT}3<)miqtc26wUka/dsAGdeE8sv-GMS1UUT@IGRQIa_YrPzA');
define('SECURE_AUTH_SALT', 'Clbv*@IS=eK)GP*})FUupcGh.R/u`|.=HDRAZEa :.&/UUI(t98kvcx5=o%sT{)C');
define('LOGGED_IN_SALT',   '6f#{u5 2Zg5les8GzI>~?$X6T.8;K] 3;DXzjti>r+_ z@^QoB!-98|K}sEyr.CQ');
define('NONCE_SALT',       'Z74dFZ0VIWEKv:UI519dE(VsY>MX1}&OJpjP<K0Oh2CsY;O7wtt WhVb3=h/lHZW');

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
