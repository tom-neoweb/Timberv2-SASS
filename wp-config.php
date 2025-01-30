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
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '=s.N-5p>s1O%B7iz:Px~dJK>~TwO;WYlPf_+Tma =xiWwb))bo0F=;GOg.,_*<kp' );
define( 'SECURE_AUTH_KEY',  'o`?!;s/C?zt(q{el,5#MmKQ,.1|FZFag7l#V#hZ:jQHpHP1aogFz,=~h]bf-[Yvj' );
define( 'LOGGED_IN_KEY',    '*8F0){ 047I64JO_oOeM[+ e06UFZ4)kf74yz ;F2_gp*-p[@XOC5/@g=nBiKCCE' );
define( 'NONCE_KEY',        'Z^rF#/@Hg,>ZbuC|=;p_Q+Q1EaQ1l1+u*nv82~Res+N2;lCe`-q g1=a.yxv9y0>' );
define( 'AUTH_SALT',        'UOr`Qyc8ML.tbT1foo66Rh+}jo2/D%aQkOe8-NaH7QGU#Xyu+svQVtIWcTl`fX4f' );
define( 'SECURE_AUTH_SALT', 'jGqGu*NS*uNZQw<)n<U382FG<+y(Ti8`?.vyrk): d2d;m[FCpVw{~Kn=eCZHR*}' );
define( 'LOGGED_IN_SALT',   '8X*](aw,n_m+.1L/5dr@{#Jo1 ^4%AhoPLVI;`//%JK.|s>+pV<} [Mluqg/1QJT' );
define( 'NONCE_SALT',       'ASXKua#b50N9<XzJ0@*y6r6e)-%E`9qOJfhl0=5Y+2 I]?iE9-)F[*yNS0HERT+X' );

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
