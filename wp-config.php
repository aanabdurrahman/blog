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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '<IJ5QVc:9,dfzM|z|5xQ6@eYqqgki&MF3=$_tO90;lyZ,D-3h:vt$Fi|lS.ji~.y' );
define( 'SECURE_AUTH_KEY',  '[a! K^ym>Zx[TAUtO)IEwJ9],m|FW$WARSP8!<5_k<Xx;0$<Hm5<6Y%uuWB11evb' );
define( 'LOGGED_IN_KEY',    'FwBPa|Nz5:dd#] O4L5Rh S><u/=V!>*OSyh?!vj7LY:/&P +V<kQA| @~I_cp8i' );
define( 'NONCE_KEY',        'cXaxTB(;A(2]UE.)IqJ@vQTEh!K!&p9vWd?f |zG$vPe>362e(pvD*<sAB]hq%!~' );
define( 'AUTH_SALT',        'r25[}:?u vw)cV>F4]f$ZA1#[,m.H-q$Ks%2$TBDUF9>ZhZfG9rrU;*ggxX1xQg?' );
define( 'SECURE_AUTH_SALT', 'kl)G?gxf^*~G3J@e0R(3xn7)+N;%{4(UTmp8<W!E6,G8,JQHxBrwXQJKO=>go>K3' );
define( 'LOGGED_IN_SALT',   '}bPudk$IK>+DR%=&G`h0&SNoj)Ce J{yi(?iwLPNENBHu#|>~}Je@7*hiShRQENe' );
define( 'NONCE_SALT',       'ClBq0-<n4ywzPRSsf9zDV)]hXAV`YWuZE=.<LR~S}wwaCh5qbCV0|6u>2h(*,3z*' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
