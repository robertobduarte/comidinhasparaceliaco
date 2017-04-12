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
define('DB_NAME', 'comidinhaspara');

/** MySQL database username */
define('DB_USER', 'comidinhas_add1');

/** MySQL database password */
define('DB_PASSWORD', 'M3rd41980');

/** MySQL hostname */
define('DB_HOST', 'mysql.comidinhasparaceliaco.com.br');

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
define('AUTH_KEY',         'anKMj]2:4JhNedi@|MY%O@hNYVHp+tw+:jx[L<Sa/)ba8+@r3Xh>Ib+8x2N[E[?K');
define('SECURE_AUTH_KEY',  'fJT6QiCC,HOj`H,LTPD[m@a+d%~b(@0RyAxgFj@F QKNY/-f%/?A sF4g)a7~%f*');
define('LOGGED_IN_KEY',    '7{{-8!Pk@ g-6~_tp7TX azEs [w)Cjt<ap=RW_i>hBuII!~*;_#@wS6w,!s~;w^');
define('NONCE_KEY',        'n4O pfTXR^%i_4ctfd!wUTPUZg]@>sw4ro|n|LuoOhN$6`.+~.+G1GCDc%-,m`s2');
define('AUTH_SALT',        'M9Z2E@*PON>i_{jp@&xr>fJT4 hwMbA/?bT+jgQ0fX#hcn,-$Yz7~:7y=_|>NdYC');
define('SECURE_AUTH_SALT', '-f0v8i*+!;.wgSVWzMb}8aq(,SY<b:|etM]a!B#LwI)Q{e5p+e+:m8KbwvMP-]v2');
define('LOGGED_IN_SALT',   ':;|+@^+nskZJ+~)sZr_,Hw=(KuAcuFI)=n77n08FWDglKWXd]vRS](e~m`Pia1`h');
define('NONCE_SALT',       'tU=5|lZ~>|}rDr$;ZWH+K#fS+$uA0,^aOCy,xzZu`l SU2Cy<ab0=I0q *F ^z2f');

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

define ('WP_ALLOW_MULTISITE', true);