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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordperss' );

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
define( 'AUTH_KEY',         '^I%8zV&Md4ys.34&.O^g(Z8&CMY31{D.uBY|@Cr:/)F=*3>t:}%b`tW6F UT&<1K' );
define( 'SECURE_AUTH_KEY',  'Zd^r`tit5M*5x{JpCg:g#b=-3x9HNuW5-7/Y-Hj?dZoWGM8y}W`;XrZu{9;]@0qM' );
define( 'LOGGED_IN_KEY',    '_H!1<[(h4!i[1rp2c9O<J&&ZEcrw8781(3Y}#0&v!jzfq$Ag*_I9d&delC)r#&&m' );
define( 'NONCE_KEY',        'BZK3Lf.DO7p<M>f9a)pO<90B*+M,L-N&1j_j[m,ox*#nIU$u@t(Woyjl(2kA`Usb' );
define( 'AUTH_SALT',        'yAVq4L$XZb+(z->G5M.1l1Al-@#5:(3_DDa!8)z6^ Y*}TXOp`3Pqw7eq~L>z=}.' );
define( 'SECURE_AUTH_SALT', 'fKsJw-.V7MLK){NurXB3d(Hw:-~iF,Lq;v<! bo)XPK^myZKe_ C~5]%o0aQ:(jR' );
define( 'LOGGED_IN_SALT',   '3%)7DE}lSUQf36CJPlo)Eol5Re.4@m]CI}PjmA`>*sUk)K/mautdbrIUw*:Xr%*!' );
define( 'NONCE_SALT',       'nB4v+}Cux8~SD4(w>DidAc7TKZ=N~&31pz-(eXVJOHJ]=zsI3SP3u=0-UwVmkkka' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
