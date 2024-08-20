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
define( 'DB_NAME', 'azar_steel' );

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
define( 'AUTH_KEY',         'c?,-Fr{4giax]M;]7!9L<LAJr7`a4cfq`^F&.b8OphvoDkdrsv<fzD/]4._n11??' );
define( 'SECURE_AUTH_KEY',  '$H06V8$=%o1sZJGoE+W7#NULmVvpzq6r~@#-;Kvw2!C*O KC9}PW?N.cevpN~dWo' );
define( 'LOGGED_IN_KEY',    'FObb/Tf-pE~I)#PwyFnLodu@N,gRgH}>)CJ;G;AfMvGdgU`}e^I~Bi4,`:W5/`u;' );
define( 'NONCE_KEY',        'tyQ0_34S0/X-bp$bCDH8S^AR/Xhlbmy-SlhH$6X4: PN(#r_!{rfBHn/a&}4qD1,' );
define( 'AUTH_SALT',        'x5mv;XHWje=snWI]a~ztdULP>ak|Iy+N#?7)]#C3o7G$eCb$hT]`?tn1lV>t1v;M' );
define( 'SECURE_AUTH_SALT', '-<DUguQ76(ZiTY2DRkoYi!T6DWDIdt=MwpG]y~)T^e`QhE_G!sZF@fP@y>7!Q)5v' );
define( 'LOGGED_IN_SALT',   '-G%3>;1#$[Xt/_Ti6XY!mL^u.H6jA9yR?OS!oI?%#fQx3@X]<+ T?BdV)!h`H7>S' );
define( 'NONCE_SALT',       'g1WJ8<81sdfC$dff}J_#cK 8Xo8>mrNedr;M)@Ck]6b]NA&K*il;#Q&.`OBhH5VX' );

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
