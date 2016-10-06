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
define('DB_NAME', 'ultimate');

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
define('AUTH_KEY',         '?<X_SvI5*+2h?*{gB]CwyVAl^wT{d!c=Soqsd/?|4<H,y0J;9`WpjwS_(g]m%O%p');
define('SECURE_AUTH_KEY',  'LK6mnb)y|bQyU=V3*)8W3K|YG1~z-m|Gs5j}Oz|dFYNX+I{w_2_dBku44ZSnZF+L');
define('LOGGED_IN_KEY',    '^/w-Dur.<v@3t P]*m+Ar56|bAN<:.+nv^>57_`VVr>|d08@K6:,P0sh:Q%8.Qm6');
define('NONCE_KEY',        'i|Tz W}*{-Xs%_ZF2Y#v[v?j3g]h_-1J5R0s&&:nMct`xK{qlw1vI6Kw_>8X,rbU');
define('AUTH_SALT',        '=#{+)et|5D1ZR YaREx[cdV!cfzW+D-b?hJK0!03|jC2`Svm VG(*ju$g-{xwdU,');
define('SECURE_AUTH_SALT', '(kDHqEda9)F53,;sAhKYvwDrc.cE+th-d@o@l!hIZb]5Bf?Lw.yMJ3RC06r]c-%^');
define('LOGGED_IN_SALT',   'SNr++Qs%$H+bES<8[C=^g&WbIW}JRjpv@oszY@kSn$;6m~1%Hq:X$J<$->=!]4%Q');
define('NONCE_SALT',       'nt#&+pnL3:W8/wb9LAn+&]#g.*@kr)PuIXF:4~n_7g59A+V}lov;oOH|6m>d3SAT');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_ul_';

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
