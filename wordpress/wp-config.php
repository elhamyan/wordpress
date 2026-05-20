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
define( 'DB_NAME', 'wordpress_test' );

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
define( 'AUTH_KEY',         'FNmLd<6..<#[6nE<468<t(%7|un&9%RmghUi1>?d<#3AzCZ$/{QS]HD59t06WJ9r' );
define( 'SECURE_AUTH_KEY',  'dY6+ZBH:]F#:<IB-rPJoZ@KyF0t&#wsG; &8<M_v,jQ4r+Vhs5hu1yzWi$b/+i:T' );
define( 'LOGGED_IN_KEY',    '~`KSWC31G:1UwlD:)8z02o>~kvPYGY{) =t_VAHH9YF-*^:!w,mZI>|&9`cr>5|A' );
define( 'NONCE_KEY',        'c.j!%1NJ<Mg-v-=dfBtMPi]X(@47s|W$bpyP/mRtY-Jz#=d(;SHx`5iRzYcdVty)' );
define( 'AUTH_SALT',        '^28faTs w*kC6CohjD}< [0OKl>`[(3)|%3g r{, q@?mE;am5se2Ge`9k1vAo<U' );
define( 'SECURE_AUTH_SALT', 'Us5nK~Q6&<dF:*+<N;`Lqt|(NL}v([p6^l>Q.]HdA@=L/-a;}gyK14#?EAM+AYU:' );
define( 'LOGGED_IN_SALT',   '49 ^r9D6-fKBj%>SwORS#<A^Ll%3#oC U6_-p~;]I!M)-]#ddWIPW%z0}UAW]?qN' );
define( 'NONCE_SALT',       'MT>w RYF#KBR9^.e%M)Icws&|#q2`w`_FL&dExZ.TWLvHCa^^]>E$Ti9k<KCTK>a' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
