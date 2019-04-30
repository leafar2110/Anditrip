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
define('DB_NAME', 'anditrip_w');

/** MySQL database username */
define('DB_USER', 'anditrip_slice');

/** MySQL database password */
define('DB_PASSWORD', '+18andi18+');

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
define('AUTH_KEY',         'OmbOHS)N+ewd-F_GW?zxJf_`/r5^=l}np=3L0Y;<|t7<@_ Z?p`-|n|Po4*8**m`');
define('SECURE_AUTH_KEY',  'Ud#>hxXf7g0%$w%B8ftLu7jxQ;KmjxF3QT27c0JjFn$-S(!ygJflpIre?gXaXr.7');
define('LOGGED_IN_KEY',    'z#<vw/r*=7FVguc&km`5^P6(l76ysJumD6ZoE.D$nfPVvv3toR}d<5w]a2QG4&8Y');
define('NONCE_KEY',        'q{Z/E84SkJ.#OJ.44=d;*aOy|{fm<KSNjC?r{/d Ypwz_x.m??@)+6/<bzm[%2]B');
define('AUTH_SALT',        '>apJ-qMGw6R(/#O0b1f>Un,9]tEs(2?0U0]H>RiBndYZ1+Pp+:j,sIbO.b+J#;N{');
define('SECURE_AUTH_SALT', 'o:4%I#PsD`JK=Nug4/oa(R^R&N&zQi,/;diHX&k4]m7;Z0la9A52cNscrO1ei3|8');
define('LOGGED_IN_SALT',   '/xak0%_sYQSlS7%u5Q~qHB^+^.J{5ZaJRvg$}wHw75cx6}@q)*p>j<1@F(Ap6]^;');
define('NONCE_SALT',       'M)R 2E/Rju&:L.5=#x9GDP>Z<]~zgHL Z8mbM>}&7kIAs~e3c^<%0oY(8NzEE/N:');

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
