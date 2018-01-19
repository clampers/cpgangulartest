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
define('AUTH_KEY',         'T/sgI7k}Ma^@=n]@FX0@8R3d=F$(^~LHzzgQu<~+vAso*gwe8zETH:D/~HCkPWA5');
define('SECURE_AUTH_KEY',  'A 6iIjr*|myhn4dm3=%u+J -`r=dc.)vN.r*ed1`j)Qk?y2H|x*.z:i&T;9i,/Qt');
define('LOGGED_IN_KEY',    'Qyyyh7RIeT7f>IvKghw2D/YS4<kG`tQc<CeB2HWn1pQhPW4BQJ|8-2=7.Z7{yEx]');
define('NONCE_KEY',        '}o|B`LbX}P52yXX)QSt4cDG&u~iPvdojx;>Kk<Ad[`4P&=Pdl_NvhEv1y&#/B|7z');
define('AUTH_SALT',        'sC/6[[<*R%7Rx4^j)<5#6q neU~6_i,KSN7Z:/`8Yd4]r]6RB:?xr(F#URHo=FXe');
define('SECURE_AUTH_SALT', 'E,{$UT7;Q/-e&4{QkKr! &R=wrPvf%VMX%ty@ttmmiG&d%LF-EXw6Q9e5yn;y[x@');
define('LOGGED_IN_SALT',   'V^E0hf]i{r Mi5{K}9bQuQVz U|G@[Dl9Q`^?tJ9qQ4HtuW(<{47I5#L}v$5c#[T');
define('NONCE_SALT',       '=%uDT+ooA[ZI9RW:ypRC#g;6JvcgYYX|j3x=1ui:Sr[Vca=;,j1M|S?n4&dr<Ps)');

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
