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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'username' );

/** MySQL database password */
define( 'DB_PASSWORD', 'testing123##$$' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'A0>]iQXQBSV11)M~Wi_V DBkvR[ Ox(U4fvT@yRsKOx|?]]_b{87l4hZTMv}H::O' );
define( 'SECURE_AUTH_KEY',  'bzH6vlI+mP[G!:Uf{.i`)K+WU>_P2G_T4mjsWr_0rFrn3dmoF_@2!H_9(0Won13)' );
define( 'LOGGED_IN_KEY',    '#(yd;$-#NDI0iS7LQd-FnxEG}D`l!96FE<Wj9^Bq=jNY!^o1a6GDsNYDp3sVfjlR' );
define( 'NONCE_KEY',        '@.&D*&aa&T&E._#a+^70S$~I8TDu`m^4k)GeS144YY:ej0(^z]&UF,XW{(mW9UQ`' );
define( 'AUTH_SALT',        '%3I!43loh{->i-66J7mjdG=31f=!,d+%-(%y2+?n/~kr@b%(QA*`Gwdo4qCk})K@' );
define( 'SECURE_AUTH_SALT', '?clQZz}0]{BdH;z&e<goj6:MonUnk:ER7EZ>qcp,YF{r[jI%D(u)oUY,YcWI;[+E' );
define( 'LOGGED_IN_SALT',   '*DEJl8/C[8;u$4~Boxkjm44B!W6Ys42Fcc]V;.ZwQMAnFoO$W7^XQ@z1P:N-m1y>' );
define( 'NONCE_SALT',       'E;,) @*GL!kPa6|)t=W,J+tv8x@g7ZVhwu/`Z=!2A>f>Ug &/q6wARK8V{/,QB:K' );

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
