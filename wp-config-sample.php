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
define( 'DB_NAME', 'ecothemes' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         '4-ubajU1_.iTAi=e^>!^RlY7TU,?}/QD3A`T*dZ_D?.w!L3v)F[zyXi]}aG]z2KP');
define('SECURE_AUTH_KEY',  '--Q]zQ:?TLhS[ji%i9+K8HNWQx0/|#p8h0z?#YkZ4d[t`e`m5wxH5:L#|T H5Y|U');
define('LOGGED_IN_KEY',    '?c$9BH;{!L=YO+j<!Nt0m47k.Q0o;S)lz)7]~/?2=1xX?:E(ZRBFM18[I)+!z3J#');
define('NONCE_KEY',        'm~?B>yL-YnJ4$Qt2(1^1TU8u&uuP`,Vp|P3:sUKEE#K5AMh>GQ#ekIX~C-pzj:{:');
define('AUTH_SALT',        'o:bg7g6pF/j0c`=-J-u1ivut=0P?1 >yxq[^-PwyL-n~ueq<}4ns(BbvV/KP-=c*');
define('SECURE_AUTH_SALT', '+a[q/?4z=6``Zf%c}S~B+dV6Oh@|6cJ(ay$tk(bHOFLhkGW0^)}k}@XWrC+dx~.>');
define('LOGGED_IN_SALT',   'QxTJ#$ny6;g-:vgO)1[-}M0W+yqs.:rOT5_|5cC)jj|vYLW)6*yv^|y-^#,YDz#:');
define('NONCE_SALT',       '=7vjQob @Dc>7/+3e)H+I 1J-ZT(8*G-3|aOw-G~}KZw8VwV6^Q|<%/+F[>:5n6(');

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
$table_prefix = 'eco_';

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
