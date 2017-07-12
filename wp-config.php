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

 /** Database Charset to use in creating database tables. utf8mb4 */
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
 define('AUTH_KEY',         'eOH@s7Vvq&$>7zj_:<R|ngb.aeI3Nz;sAy=4+s;7^NX)E2wv=V[?6+[8NO0_>GF(');
 define('SECURE_AUTH_KEY',  '[p]qITc*KMqN%4)bGxVDDNO-eldn$^(Rw=}0kb:<WQ,|D|9+]-% ,U{zI$yH<=#U');
 define('LOGGED_IN_KEY',    'vfO9r6pFh!zNIa$y]8&rtlz)9N,@Z*$sgV_&;]NHE0+7>[hsy7!Q9,a0| ~Tx? >');
 define('NONCE_KEY',        '|+9f+2{F!SeDRd-zL%,6)dVyyZ^;ot9/-VMV[nW%3?Ej/JcwGi+,/3g~Y&z3;U,y');
 define('AUTH_SALT',        'nE,*;G8+.Hls|XU mlDho|Gcx.eK9:m1v2?L~4-56EO`6;lD!pL;g8h{p!=poEZ7');
 define('SECURE_AUTH_SALT', '>DiW913`|6cvU|;U7CPrE R3]<Sn{A>~Ea-e!#-R6O|M2?,Ug4@p>&PkWI_+dkj ');
 define('LOGGED_IN_SALT',   '<v(BD=w/xHTh;%`pu~V^YUMo4pF^;202kvp^I(_#X:J>Hf6+EetQ/|(+&@Dea0/r');
 define('NONCE_SALT',       '/#V3ukLZk1kKe%1Lsl[IDXw-?R/zzM`ugR_-V;Am:<Ex.RoY0V+8nTE:F+S_1o|f');

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
