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
define( 'DB_NAME', 'tempat' );

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
define( 'AUTH_KEY',         'y%|j+Wp(u|ukh!I4N 68>.O|;cv7= zcKE8RzsjZ?(0W?A JJtdX$TY/|UZ.B)e7' );
define( 'SECURE_AUTH_KEY',  '9NH,*exg5Pcn/fB<{@i#f3g!M;{*%YLh/tE)PbD,hEVO9eb1Yu&>iWh_9k7=Pmb|' );
define( 'LOGGED_IN_KEY',    '7:.1~aLLa@J +kt$S+Pj9]v2RW!n2+xL^Xz5qHv63_H6gjY6v+bZ%48kb[vWAsTu' );
define( 'NONCE_KEY',        'EXV%fb|!0Gp_U-j+[BgPb;}) WLNAAKq%Ut0%FtEV?ZXeV1)1%4Tplfuf;pX(Ny!' );
define( 'AUTH_SALT',        '.&EKiakq:x|ijW0e*g]!Yg8iUci&Emz_edaSJtTVw@Pyxi]Ag?ZNST@.oq>Whw)W' );
define( 'SECURE_AUTH_SALT', 'Ky0m5niMno-bb$j&5]h5Aa}vx =+]!i3-+0SFnv..o]-4DTS=`upWQ $SR{2VAe!' );
define( 'LOGGED_IN_SALT',   ' 7E8<LPTw]|e|?o14jtj+,&_!D$SX~pb}hh^Jumy-`nxb&n+k ?`?bMc(8KYRIbt' );
define( 'NONCE_SALT',       '`DqopYqwV$ky8Ev^@ukBAm;)OWMd2/a;tC%w<u7*>mV9%jjk#K5:$IPMO*,D7R2:' );

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
