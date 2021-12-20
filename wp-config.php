<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'u513972761_6kO7m' );

/** MySQL database username */
define( 'DB_USER', 'u513972761_BVWZ8' );

/** MySQL database password */
define( 'DB_PASSWORD', 'vWL8Vlv2yK' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'S2>>Xk2dAs{hHTIX:8$((q^onN^iU6BM8GkZ9ND*v1fw4?^9FRiM*y(`uF%6)(fe' );
define( 'SECURE_AUTH_KEY',   '%]hqIA?XwHDOA~DQm7RHz4HC]5fAhTxg:V-:<Ud#lPC~@P0[duA^l+$Ic~:0`B:[' );
define( 'LOGGED_IN_KEY',     '@P`6,rp{~YM$&e=s~o#t$J#]N5QQ,QgH{qRsC+.C]R75*3PN5T5,+XwQF^y=r?22' );
define( 'NONCE_KEY',         'sq&Duj<14,}gv#*O+[((k%#e5^<8;]{4nX]3H~*krC((!y_X!ZDiH4nf4H4zXP g' );
define( 'AUTH_SALT',         'uS0^;]/?odU,1Re-KycT.RTF/wKtj7+?(a6&RJqfHpx;K=q3J@b))PZgs^&SV6To' );
define( 'SECURE_AUTH_SALT',  '0kdz5K3GEa1S% $tAoG^1 ^8{L*B~BkHd<nJMbtv]%ut[;~s[f m4(9YX-5i,#Pl' );
define( 'LOGGED_IN_SALT',    '+1X!zg,&%B/IZj&jf.ei(f5x^vE7-!j,i9p>dhA-/x!/+1~QHxFuh#>V<+& l)rK' );
define( 'NONCE_SALT',        'i!%t`_QIztBaL0OU+R|l2d-|c^t]y6S;&(QK;:`(#Nre~*fw_pWVf1Vi!_h6haB]' );
define( 'WP_CACHE_KEY_SALT', 'LpyLicl5Y8[%+RGf6qGyHjp4mF13|6HG$IAWFi`TFL_6NG#Jhp4: d0XmU+qMP)?' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
