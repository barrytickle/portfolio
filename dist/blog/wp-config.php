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
define('DB_NAME', 'blog');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'webdev');

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
define('AUTH_KEY',         'XP2jyv]L|ucW4Jw4/y/DP/*KBkICHs]zwt&x^vliUV#BAN9v4*#?{B2ngVsblA&R');
define('SECURE_AUTH_KEY',  'ihUnjTY@3oEhHfx!2VB9GM7$i+ki0^<_5M=g@T`B[MX)R@X5..3+(4E-iW0OowpB');
define('LOGGED_IN_KEY',    ']n!0.X-_B8@?ixH/5ko,RO^q:{[![p-%`t.feAc>D?6-}fM#vx^vi5Cp,^&T0!pT');
define('NONCE_KEY',        ']tzmLotc)}+M77p3[oBI@J-Yk!>_sRjKPxtaCr`id4F0>{#fn}{LYh5 Ou~F3Dw+');
define('AUTH_SALT',        'UCpx5[zR1sG7eS_3{g^oyb}T;B+t>&=_q+sI><R4g)EC Q/bSBGJ>Ktj0x3#RXko');
define('SECURE_AUTH_SALT', 't6($k^>Ssm*$,;Pcj(;pEO#G_]!OJPcewFB1h.=@$91fKEU70k~`[FN_eEUk99)]');
define('LOGGED_IN_SALT',   '6MC;yp }{{6O(]`4/ofo8m=*nj:qU_N=[(^ywon&k:Vy]}WPkPJ}aRvzf+OmK>bG');
define('NONCE_SALT',       '^:86.q :`YC#t_s^`-`K[09_=L`+Qv2s[1]gqKpB8<gdB,p{/W_*npU^/RPKdj-C');

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
