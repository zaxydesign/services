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
define( 'DB_NAME', 'services_db' );

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
define( 'AUTH_KEY',         'VA[xgp~(s^%;HvOb vyZB8O&fG,VP=VxV1g[nW<tVgm1^}vo3h:!4XD:YB5e(gdt' );
define( 'SECURE_AUTH_KEY',  '/b(M9#tC}aCE}X$%j}N!#Mmj*ZCngln^`$D e7Gy&GNNc=>@|.t4EzjJa5<B{L.|' );
define( 'LOGGED_IN_KEY',    'yLt J$;x=(C;OVz}&%GiS4kKBEo?N7Oj Z+red<U>r@aq8V,(&$J:!(r`Ua!Exmo' );
define( 'NONCE_KEY',        'O*?`}i?ia+Jy+P(_TNNKuxs,gj>^)LDXtFrXoTep:6vyMT+$XGur1_Ok7}4bZNf{' );
define( 'AUTH_SALT',        '/F)< I:nrRfz!6eob<f>[gj[R~,3]`7dhl&Q2NyW9s~W;>wz%R&,>4Dj:_RvScb9' );
define( 'SECURE_AUTH_SALT', 'u$!T%]@#2jY=Eu_bLg>kC<v pvtk6r%iR&+H&A;**Uxp;8R55Wg31J>^bp$%qALh' );
define( 'LOGGED_IN_SALT',   '`62g#iZZ}f!]=<8xwW,QT3O`B#Z(EC-mLADaI@_F_.ade<lTw{E_}k|nK4wH.B-|' );
define( 'NONCE_SALT',       '.=?s?Yd1 bH0r69WaKu$uassFCZzI!/dW|_k]CNZ}p;/Mrcr,q-a:zuj[ #f}0ML' );

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
