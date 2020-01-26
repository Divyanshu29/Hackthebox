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
define('DB_NAME', 'ib01c03');

/** MySQL database username */
define('DB_USER', 'ib01c03');

/** MySQL database password */
define('DB_PASSWORD', 'Thi$sh1tIsN0tGut');

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
define('AUTH_KEY',         '$sbh#6|kZ,DAg?NH&ed~jPHmK)}6$7juL=K(xg2%{$ac+nPy(:EST9*|-2G[z|I7');
define('SECURE_AUTH_KEY',  'WzpRn?RYH+2C(Q~,Ub<g|]EBHXV|L5-a44u%5XAi<5{_PXg_N~LPU9r%vt76Cxwl');
define('LOGGED_IN_KEY',    'tj,NV <[}g6E8).Pn&/nT?kXRVnndTGpV~cUXUh`B`^Ql_,5Y1*H7A7@n<7-m@3@');
define('NONCE_KEY',        'G-<16dJXM:|!(;$/1X_iaOld&Wdr2&6*l@>?]Akt>W7{MHz8rq5I_Fj3SJRrx!{_');
define('AUTH_SALT',        '$X$7:sr|~+GzRSonj3a9<o`$<=bt,TEEANIUnK^f$OT%vc{=3lPe@@J!CPB&:AL1');
define('SECURE_AUTH_SALT', 'z61N+-Qz:r`_y`qc9 L3F--s&Ij]9I*C=M`rvFq:.5A]!dCTIeSF+{;xLyS9,$,c');
define('LOGGED_IN_SALT',   '-|Bs#Y?DM=K#[`;a$`t*}C[q2$r/wf4L!m:O1@nxi3@Fh|uo:&;,|=dt9PtCbqn/');
define('NONCE_SALT',       '=nTG^pH?/$53{LI_z5aV986X&2qwjaE)Ln[D+$73-l.qDi8hcQ<,&dWv5b7|cxB]');

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

