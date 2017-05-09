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
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'h6o9!UZ3)J)xaZ?:-+!XY!^V9taHxI@U-Cj=Gxla~?yG`LFY[@{R}y7`GUF s+m~');
define('SECURE_AUTH_KEY',  'q.OPl!_A1*D.G.aUc5J0[v&l)->e-+q2WH8NCU $h>#. 028d?S!Yk2@1KhFmcpm');
define('LOGGED_IN_KEY',    'O.=Eu0a,yhRRoQ:ny(8e*7I8wixU-E=>I%/s@0R`r:pPpybO@1; 1[!w ds&0b*L');
define('NONCE_KEY',        '^qGj%[tlr7kZKdHxzfnbbP[j$=@HNNk7|AiMx<<W[oE;qb8vG/PW&=e`^}TUyeQM');
define('AUTH_SALT',        'BEH}cP>bjq=Fo=B+yIN@Hpda2nlmo;#dON<k>VXRUb}:%w$XjJ]BBl#^[?6G_F((');
define('SECURE_AUTH_SALT', '?OXKX/n>Kb@#UZug3xF%[q)={TiKF94m r@(;KvN&KZ!|uZ-2T;7cj|&&c5ZRIZ~');
define('LOGGED_IN_SALT',   'osdej>=K b-=QbX&FhbmZx9+[0aYCCMr{,Crr?K3j`A.y/y5#&gf!!s;w8ef+gpA');
define('NONCE_SALT',       'hm=<Y9P6Ewk`--}&=]f_1gF,@4DG@[C7S5)Uq_@V2],w/Lt/B*0X]@b~UWdb/wv~');

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
