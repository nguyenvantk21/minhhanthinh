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
define('DB_NAME', 'minhhanthinh');

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
define('AUTH_KEY',         ':l8@wsOpVE:zWcI.5/Z_@i;pL~:-A~y|jcH7NG/u@2xt=P^S~u@`yHgYc2J<|>Z(');
define('SECURE_AUTH_KEY',  '&-yiv(Xki!s_a&@}Qf+.hX<l?/S1byaS]M:s/y8FXb1*YEx)#805v<]0_k| VSoC');
define('LOGGED_IN_KEY',    'CxHa.[{10(rRZI#_A/K[9lZ/XSuK$Sv,yz9EOFRye7=2pBKv;`dPzSoR)z^3NDk7');
define('NONCE_KEY',        ']zMb7*Cq`r{HH,[6V5D%{Gl0=xJ0A)WfY?;Shz%<Vv?Jg:n3v`QL_9~~_-dx53:d');
define('AUTH_SALT',        '%Dp*AAc!t/ f~7IRWWd*8`Lwx69c<l3e2^ 4V0|bqGB-fB/[H*,tF2+gB@1:^V`*');
define('SECURE_AUTH_SALT', 'T}Gn_gH g**/FsGY^_.Wa6rJfb@ :F*f(^{vXl{F>f0C?:nA:{X$1x)LE7xtrb=]');
define('LOGGED_IN_SALT',   'OD-ck+LflAeAU19X]5Y;(g7^biZOokehssu89;8nz@$+dKm~`iGizwNM*a6;IYNZ');
define('NONCE_SALT',       'Gv7fH#CN|q<p:9JN3+:AQ;zJ|<k}[ZlRv(H8DXf[0hsZ@LD1W7N~c?R8ZDM~iQ||');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
