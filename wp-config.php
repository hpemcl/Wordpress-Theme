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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'Lm#>QQK?PfgQu{R &[u>$_;E[lz lET.nj/7$0A6;,WWsv?4-c?Zn3p.[y0]pMFt' );
define( 'SECURE_AUTH_KEY',  'CsI?2Xr>uv#rTW/J&|%HX4Yxx=?.yDzNf;L3w~z<nL>@EcM21xB<oBu}@zPyVhbM' );
define( 'LOGGED_IN_KEY',    'k+,&xatT[=wj;8.t1UE~<3M:Y*iiSQD{caZ_oS-I/Ky0j>o!dQ(uo d;rRV?J9/.' );
define( 'NONCE_KEY',        'Q5;3yy{ZP4wq).6(H>cB8iIQXmyWn17HVO8v7hnd%czlj&<TyE%iXqLt-m9f1h=%' );
define( 'AUTH_SALT',        'wl|Q 5:[?7>Fy NMscIsqg:G$/DYNX%fF:L([5G)<mozd@6u?D~`/C_>!k#k/nP%' );
define( 'SECURE_AUTH_SALT', '(|[,oNHV&~+a-~EBZot0By)/x,bI@S=MkV(~7x7Z:/@k5q-SV*E4L>y]iL1q5{Qg' );
define( 'LOGGED_IN_SALT',   'QA<frH3r7%feI*$g_Ziu`Htux8v;Oh[3d*d:1kw%nlQR][[/jFW3$L7Bq2biSfhK' );
define( 'NONCE_SALT',       '<+5tPmtE%3tr`}CPMzz P[(tfY9vD.BD[aM#R!p5Nyn `r0+w_+Dd/P4>3-yXaAL' );

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
