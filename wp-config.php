<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'psychiatristinnepal' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'P@ssw0rd' );

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
define( 'AUTH_KEY',         '`GqllE+bFJ#13tGt(FM,{s~A[{DR?IdVLC8a4>?Q3@@J/UDl]}$UqL=K(4m&{&Q9' );
define( 'SECURE_AUTH_KEY',  'N.je&W1gk<ybh#?/vLE2dmMrP?=C>!lHo(:C&F%#!/)1KG5s?5+RQk%%LslvX*A`' );
define( 'LOGGED_IN_KEY',    'z]yY_6)1=py bsxI&|s<2yEgS&4IGKv|+.>b?j|dk}Hpr24FFf>00yH8gdq~AwPj' );
define( 'NONCE_KEY',        't>kf4/Z!FwfIBK;E;HPQ@}MH~T_<R ^*<Kh6X0Ma2[ncVr-Fn]/nNG~wRb) sbVz' );
define( 'AUTH_SALT',        'Js^lUTZF`AeNz1L0V;Y9i4mY0@jC4c$Mg2j]3%K.>:}+8~M%G]IQE4zF#PV-x8(C' );
define( 'SECURE_AUTH_SALT', '#}9n>*F|n+IDa >DYVQrvKe>W7l#!O+h9ibPLY2}$ nP<=h]IKysL:FG]M5e9hGB' );
define( 'LOGGED_IN_SALT',   'P&n0d1?qs|CV&L!aKh+Tt=HLB;Fa*ZsAV>YI3J]di~G-XFd/A10^{; M$GyOc(+U' );
define( 'NONCE_SALT',       'n`V:t@9rU6dSQ85$KEBKNhV=71}rScK]CUw:eXSvM4(WcHSr@$0B>aSnQkq-uiU2' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
