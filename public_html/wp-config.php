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
define('DB_NAME', 'webvisax_wp2');

/** MySQL database username */
define('DB_USER', 'webvisax_wp2');

/** MySQL database password */
define('DB_PASSWORD', 'n3uxofOuy');

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
define('AUTH_KEY',         'oeCor06fg6{WZkn1fKJnMhY79d!QI~*jz9}yCH{tGLFMOU!Xji%X:R?,7.Jf%+;=');
define('SECURE_AUTH_KEY',  'Fn-j!kyD#TRbq?V8T|-VQ<m.G~J$w{MJ$W,ottSCB~>k>r*&DPKWTikzj(R`tYQE');
define('LOGGED_IN_KEY',    '1wu2}~iY6Ni5fwc)K3j+y@8E>8dyB]wPvY/$.q] Ud`7gTjji=Ct`G4#6Jzxm=<H');
define('NONCE_KEY',        'j{E]ssL)xm-nx{R!Ou)zjnYB-tXSES[Kr!dHj0JZCThQ{ArSGzkbZ?)UZg.zFFRr');
define('AUTH_SALT',        'WKrQ4kHGc/t=}~|FpHx9IJ7S(Y`|(;n|0x>{MsT;A>SHN9G.*R}M|f0o@]00,_:m');
define('SECURE_AUTH_SALT', '@A^.JEd2x*IKoc>vQrRVX2G,x[vfbtHQ9o!#DhPlOr]py8$ NhIb cree8B%mxja');
define('LOGGED_IN_SALT',   'K9h>P)D@A^LSq7=l0DO@av|`{2mfk:EJK)mY?d/v:.sF;*x.`+VQY nATHHQ ^19');
define('NONCE_SALT',       '#iC8OnzQ53-:6s=d%Z9&==OxuI6z@d3(Y#CuMoBV-r>CW6q,yY)E#],8#eDk|E>q');

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