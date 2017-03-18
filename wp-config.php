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
define('DB_NAME', 'penabdul3');

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
define('AUTH_KEY',         '/P16_coVqZ*cRz|(=f;(Zu%~q>57=9Wj:3vtT0ht0.`GkqC-ls [FI}S<yB5t}<!');
define('SECURE_AUTH_KEY',  '2h|54-uv($OUo-JvSx<%/NH3P=Q-k0F8;j7yFktyG}qk|T9C2Zh82CqwP7|*!!0}');
define('LOGGED_IN_KEY',    'p/VEdsDHTson=+chm;bi$(N~6L3 )wO_Z]=x9vrxoKF8gNAtkhEZ$hj Qc>A;.( ');
define('NONCE_KEY',        ')EI/AHyl)OBJ=}WuI+f%Jr@sY_UyeqzafYp!--Xq}F&:]wwLf4zYog8a2gWi[QOL');
define('AUTH_SALT',        'ha40R5nq$z5l.g#7`0^>O|2~;B>@~ND~nX:}F}5&tksRAV|t}743}nD+08haQT6C');
define('SECURE_AUTH_SALT', ']5-tv>9zH8)8~m3go&~OXko5 #z =Mlxbk4Q0|qC;eMksi-)O1iC$Iy3%KfWCqs2');
define('LOGGED_IN_SALT',   '?Py/*yZ]DgPvY$[C7|%(&it,!yLMLh/[mhG^80~|@H.K=d.!F-AG_|B$_7%m)+9H');
define('NONCE_SALT',       'X:}XQw&:3~62[@Pjyy(oNC-cZpOmc{L< ,iRW<SaJFy{|TfJm:qk!.Zca~)1xl-+');

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
