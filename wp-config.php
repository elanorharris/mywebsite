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
define('DB_NAME', 'developm_dummy');

/** MySQL database username */
define('DB_USER', 'developm_dummy');

/** MySQL database password */
define('DB_PASSWORD', 'ReliefKicksTildePapacy60');

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
define('AUTH_KEY',         'dhzkR<9<Nrf{57AaGqk.6aFO]&AJ.Kc`!+bU=XQTOMz/L&1n^,QW#~(P*.62 %N<');
define('SECURE_AUTH_KEY',  '@iH}8|=F>M;{TowdS`SR oeKI?jp/Z2(rgGseUpNDiXA>kLlz|(t{?jPaWUS2&lJ');
define('LOGGED_IN_KEY',    '46[kMkMIdKB>`]Ij,:KYqn,j(+VsJ9yX<eCZej&Vx*gSccRN#d3;dEq!m79/ nqF');
define('NONCE_KEY',        'Jn4}8*}kTF>t/%D|zEF]8pX4V ;E5HIiGc8L(Fa[jQ:[B.iM?S6wtT7?)Zcg%?Gv');
define('AUTH_SALT',        'Z& O[UNe$/&II/D#jqJ2Ev.KP)g|}iB{_#8RiBEoU$!z.x]7ErF1l#!/OhjzsFQ0');
define('SECURE_AUTH_SALT', '#+qfwWkvH~_U#zf^+|rbKe-~E]z[IpBq<3*TqP2o#hqtReMFTpfz!9~GU9}?S1zz');
define('LOGGED_IN_SALT',   'r5tA4bzq5Qg<9YR6%.UDEED,5=;P4o*=9{_ n4Xg>DPWxTKFbL5bD:KyiO] W!&j');
define('NONCE_SALT',       'e&BAT+ANqZyX7^S-rWDBK&Tdjeib=S|X)iv5$M ,lu&=5g>NIKB_e&&B(.]-*#=@');

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
