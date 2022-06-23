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
define( 'DB_NAME', 'digital_bd' );

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
define( 'AUTH_KEY',         '.M`xYyK0p`(u|Ao^_0hT2f_:>Xt!R(Al^&i>z45bsk]HEm)y8RvDuqo,RF#[u1i1' );
define( 'SECURE_AUTH_KEY',  '[g ,Ax|1]1}@%~U4*=5Y/K( H5.$R$).~.HmH-+uU+>^;uE@3tbq{4Yi&N_(NM@o' );
define( 'LOGGED_IN_KEY',    'E(xRq6`$;+3FK~_n~LAjpZm;Lq$OPl1m1,~,TVKA^5[kWiKrH%Y?:51l3m.)%#*0' );
define( 'NONCE_KEY',        '1-1=DGexQdl. -[alC&[`!)x)[`:D>Z,dO{Nfzj3q%fpHvD]~i<r#)Q]7 -M{u6g' );
define( 'AUTH_SALT',        'L7/!O_(5TMO/2_j 9!J]+kJg65>S~yT!u<QWYn{3O?X>O%GDEZYwrJ&C@#lyX}t(' );
define( 'SECURE_AUTH_SALT', '-b_p/hOa{>yo+IKmcdxBM%opt~m9vGy(5nVy19x*Lgj4P<v;?D I<EZ[X*:]R_Tc' );
define( 'LOGGED_IN_SALT',   'MO`ZFCZ&%Wd/GuvBN^:HMxGkWl16jtv4$%J7(*fufCy+VWa9t52^N<(~Kqgz[Ew(' );
define( 'NONCE_SALT',       ',p7JEt$c-Q16!_SThpu(NdRI{_{6N=3udoJ5gvFg]h}PCNLq](=3Cw7oW}5;e:Y=' );

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
