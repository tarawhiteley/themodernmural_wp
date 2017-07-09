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
define('DB_NAME', 'modernmural_wp');

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
define('AUTH_KEY',         '52OV6ja%m^=%ZtXT?ZLVC](<HYT9S^: t4otxK~,/hZw-(fWE 46r; ^Rv!M*f*M');
define('SECURE_AUTH_KEY',  '8fB$SY=nEZO4+fM[q<u/_0K|@>*`{Jrx]R[Lb H2QBL1J}Z^N9hq9bYarxwS>^tK');
define('LOGGED_IN_KEY',    'T2U-p}c6^R;p)zk_l68q$?v?0J`9rhFh:(U%EJluILR5<S#Zq7uKf&5T}q(6,T* ');
define('NONCE_KEY',        'vDt7oay#R)9lO>;OjjfnSR[G]aC8RDgK%18+dwx>^;~Eub d/j?6FmrL:_K>:s&&');
define('AUTH_SALT',        'k;qB Nx9W2[Q4CD,N/N 5LjA&Q(]; luBQ9x]9g;BM(DNI?:!E|Z}e3@F_~3p&X:');
define('SECURE_AUTH_SALT', 'Gf=@ 64N;=d?CTqFC,QRl$ QLhK7cS?-1^:t!}8Y,J9@k=TKy[v{or@n}f}01A?T');
define('LOGGED_IN_SALT',   '#%}DYPU`V5m3J7Z(a^,EkD4v}+&ahmjlm%89u8aIfAbV-i,ED?Tq-:mRJ:#n_iL3');
define('NONCE_SALT',       '%uQ|9Twi&7,))ge5g;rd_kO4#xucwjgOSYt9*]}2+dNTn%zX0eAcUr~Q&;%FVdo!');

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
