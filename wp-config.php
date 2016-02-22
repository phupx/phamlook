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
define('DB_NAME', 'phamlookDb');

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
define('AUTH_KEY',         '_gw70K8ZY$9lP(ss}IY0Y+PXhZCd]!2YH&dLW8sle>@[WHhhUAI_[ro2;sGan8l6');
define('SECURE_AUTH_KEY',  'VW|/f_$co2[Jb2(FaP_x1lf |EG>BEUD#PF|xxchpe!UI_{<-{lCY4g1[]{C5]5V');
define('LOGGED_IN_KEY',    '+-/]o%uSb?VIC(y0)T|,+bvPv;At3t##FcB3Y5/yq{%({eA6gH{{St[P$sH}q~;S');
define('NONCE_KEY',        'pWt%`zP6n1^0Gg2H6SrZ:.(=F)%r%}yzIECP+A|t|f~Ph)g0| z1|Ppi?7cG16$[');
define('AUTH_SALT',        'GHHoS0&^}>hU2@-t0}&=@0rus+,X{dE&as(R!L_oZn&8G{RBI5u3y53R5Ur;*cnP');
define('SECURE_AUTH_SALT', 'E+~A3H$g~= )|X7eVT/TKpGSE;;%BWxtd$&RK+9+q/D%KKiN|N5#5Xy6 mRIn3tV');
define('LOGGED_IN_SALT',   'R*sN;z/#hW=7F2-^/&-H]i[<Q3V#JIu@]vRx_$Sy7S*=/3g9?@KB1j%K]5=6=ZAz');
define('NONCE_SALT',       '}5O hnh0u5b  !0:%z|U+nf:]?:&bkAjdEw 8Yg=.%BEy2vB![8E4scG);~n +2v');

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
