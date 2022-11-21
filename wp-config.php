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
define( 'DB_NAME', 'bd_hotel' );

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
define('AUTH_KEY',         '7VLWr+y=A?<9K G{c<c(=gEu#z[9ds[pxpg*k8ty2b-rIy`:qU|Nd4JH+gU Q8)c');
	define('SECURE_AUTH_KEY',  'g#wybBa<B**f&e8Ui9Jd6WvuRP+iZEQm4]-vs/6~p)QuNp.H@Yn_1iXs+fy)Z0Z{');
	define('LOGGED_IN_KEY',    '-+HCdP<G1HQd*KLskH#m#w;g5a89[53q3%-/6TotSlU?f2#lFk->lj:Ny]S [<PP');
	define('NONCE_KEY',        '&>}7YE}O]zD|+fre*^CC|Y+uPaj0zw0aofkJ;;Qx0TFb91qvn#YM7mYZ8KR|F/{5');
	define('AUTH_SALT',        'B0+^1mdylx.O~pt)@+-k}niN8+f>i5a*~maE((9Ww2K~^D|DimV zFZ+47nU(_qJ');
	define('SECURE_AUTH_SALT', 'q.q.&A+inz:U,dx2|jJ/<eH>F aH83}_-LhFUD7FQwzSxrYf,*bSK/>E|O>-eL#.');
	define('LOGGED_IN_SALT',   'N#~>yn_85?P `5gu{v-K$~HbislZHqw&l2.+2ROWG=hu+KtD.]#zfsL8;(z+|:?&');
	define('NONCE_SALT',       '2 hk}&=grkc&<czC.3@9n.FX)(y7_Dx[MX&;!wH-Qie4o8P}r+Li+xRKv,ti@|32');

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
