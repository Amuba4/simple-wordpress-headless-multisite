<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_project' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'URH6wpC%0*vg!SHQm0l1,rWo[T.yB75cYD3~JmmB}N(|)?x@<G/|g)66NJ.N#TWN' );
define( 'SECURE_AUTH_KEY',  '.v/ $FO.}ch%OU-.xtZani,CSnx?DrFERt$,5$%0)C&>$5x_@*0;<T9X^F:X!+qP' );
define( 'LOGGED_IN_KEY',    'M}`n$x4~zVh)YGp#icAKSQn4mo$0r!IfM&M~d/}Mh C+mD.ShU*zil_L8/|/*nB-' );
define( 'NONCE_KEY',        'zB!utKaKz M<-9s@RJw<X)4q%_cGf0EnN&.$ Mkz-?wR3)l)#JSLpQruHr8|5rI|' );
define( 'AUTH_SALT',        'LBUo;Q^1tXtmHfGHU{I@Dy-eY#fXYd@vZMhx{`mOFPR,&YJ0.>Mc_yf1!) V{Xn#' );
define( 'SECURE_AUTH_SALT', 'ANWu9:HR_d}U$!wO)S%N`!,E{8EUdXFSqWD|b|VZfhSSuzbv1G/7n!{It_sMKJ!a' );
define( 'LOGGED_IN_SALT',   'FfA)XJx8c1.z7bes<o^SxZv([ya2t7`J`}u,[m%b]%].`/Nj@bzpDt#FSG)$D)I ' );
define( 'NONCE_SALT',       'AAjb*G6t&phBUqD{1e|?J.T)kEL!x$j-F_k~,)+C ZOtJl^EvLKk-OdMJ$1(1`&f' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', false);


/* Add any custom values between this line and the "stop editing" line. */

define('WP_ALLOW_MULTISITE', true);
define( 'MULTISITE', true );
define( 'SUBDOMAIN_INSTALL', false );
define( 'DOMAIN_CURRENT_SITE', 'localhost' );
define( 'PATH_CURRENT_SITE', '/wordpress-multi/' );
define( 'SITE_ID_CURRENT_SITE', 1 );
define( 'BLOG_ID_CURRENT_SITE', 1 );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
