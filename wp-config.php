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
define('DB_USER', 'user');

/** MySQL database password */
define('DB_PASSWORD', 'it610password');

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
define('AUTH_KEY',         'N<L--{Df@tr,-IRf9Ax1O$F#-7[h%/HMX@C0ShQhyXPjh|f]r-+E~Ln4q)W)@|@x');
define('SECURE_AUTH_KEY',  'eyJ?L}c|G0I_vS?K0o|@{Q$N2EI+9(uqds0T1 qwM,BK#T|ZL677*jo(k0i/c]{r');
define('LOGGED_IN_KEY',    'hVJ/fsJ -j|]]k~hA%H*B@C:-=DdF7=/K5Wlsl1x-]> Wtiu2*@l2 44VK%;v9<C');
define('NONCE_KEY',        '>N?xs.(lK-*:L8:R[7H!-|$-K}To/:4N#i9[9I!(QR>&g Q1)~QLgw$DJ[}x>3=7');
define('AUTH_SALT',        '28vZ*U+W^2*x+ ~V>@0)rmb.vE^9-{vplMN-QKe~|ZV&@)QlGARAOOR340Ci6rp-');
define('SECURE_AUTH_SALT', 'iQgJ%s69?S>=nZYG!*^|@EF}P,^{xTP*>2YPUE}92pQ/.+fL5cC7$pcnJ46O5=P]');
define('LOGGED_IN_SALT',   'mf+;lJr>c*TW]m|n-05!xFNOGMO RsP3137Wz3A.QOBC.|)>G484WdYQ/:=D9]Aa');
define('NONCE_SALT',       '3,~@).k 5kf)N)d?u;XD9;.NR?|R+/?Ciq=Nr)f,w%kw)hvlhr`4di)|u:*ozm@-');

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
