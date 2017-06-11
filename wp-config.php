<?php

// BEGIN iThemes Security - Do not modify or remove this line
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Disable File Editor - Security > Settings > WordPress Tweaks > File Editor
// END iThemes Security - Do not modify or remove this line

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
define('AUTH_KEY',         '.!5K=#hO qBH;26*=.!nL`H;x60E_=CO&,Se#JM2^A97+?Czmo2D=5zBK~9{Y^15');
define('SECURE_AUTH_KEY',  'biPO|?{u<v_9uKWW%0!t}JT_l%r2J<wgs7=qk7nW]`+QySJYdC cX}=unY.2-#f=');
define('LOGGED_IN_KEY',    '4W@Vh6CCC-QFvd5_YvlOcJ5j%<hlv2xEg~_q|!>xigzc5FVrr.n%$<1 Hx(syo`)');
define('NONCE_KEY',        'T)!dVYwE<[@|4NK7`1;J=*BsNIG`Z!x_jz|94R=,&h> r=2d]]W]F51gn;Sf/ApT');
define('AUTH_SALT',        'j2p;a!.qwv]n$#@t-0=I5M bWrN?Nr$Y&mm%UdDD$16;oKjB$|>uBy,1PzB(?@@H');
define('SECURE_AUTH_SALT', 'K,L)/)_TgczSh4f_P6g@HQ?~,<BwQLf@#o!O<}]3X=HT>CHJ:Mb7XdlUy2cnQIVE');
define('LOGGED_IN_SALT',   ':aiF~`a-/ZW5` TO5X^<(FR2~1&fsD[.f&Tw6,t=FIe!@srN;jhU+0Z>wBd)BX&L');
define('NONCE_SALT',       's|AS>6F6kF~)WC~hmYjH~kfW3G~]_#=c_x`^tG9T:lV?pbo=LV#UPz]nIB0*Yuu<');

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
