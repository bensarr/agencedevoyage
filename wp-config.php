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
define( 'DB_NAME', 'mediapex_agencedevoyage' );

/** MySQL database username */
define( 'DB_USER', 'hady' );

/** MySQL database password */
define( 'DB_PASSWORD', 'hady' );

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
define( 'AUTH_KEY',         'tvpl.43Id@7|&-vU(OIurp&p2Gwa[3&#mn3,GEj$LchfvJBX_&OUA#FnZ3KbO[JT' );
define( 'SECURE_AUTH_KEY',  'u&m)Y$|6EVkl*0dW82ly9CSrC{>>0~lc4|)o6:u-<g&uRGwdPzlLtuOH4SDgT<-8' );
define( 'LOGGED_IN_KEY',    '[yZ1:4VG0@^WPYcs062&sn9@-S$rq3&g_#!Z[`tKLVJoK`?I1}4)y1~<A;VN0D9(' );
define( 'NONCE_KEY',        'sDarK,XrJ)D_808HkQfNoCvV&5Tq>RhlA*.*dyv5c<uRhHN5dG=(Y$3v]8T.xm?$' );
define( 'AUTH_SALT',        'n61g._4vNdyb(v{)S:Td{*RXaa2lql-OXDPOHPCtMfj}9P)}KYebL!*z;-4===Ew' );
define( 'SECURE_AUTH_SALT', '2129R$twG! -nIfl^<4*q+Q^|P&wJn^%P<5!=u4?L!@Z^0i;n%S@KFGXnt3(~R_2' );
define( 'LOGGED_IN_SALT',   'q82%6tH18TW+LY/MvgS{y?S(:)u<lvmEe|[@OVzUvIBu+QP<Xt[vqf!}F}[X)a V' );
define( 'NONCE_SALT',       'ED%W;|r]@1yw2h4B#cpLOdC~aePWl:XC>pl-QBtlPlyc+l<txONMn(%D4@MI_Grn' );

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
