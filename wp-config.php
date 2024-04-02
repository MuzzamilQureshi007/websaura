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
define( 'DB_NAME', 'websaura' );

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
define( 'AUTH_KEY',         'd1{1u;8/q,Fpl 51Ux|U9[iO*4p^s &WcLc1>nT[p1t|v<J`2jyS#%u,(Rl||Co=' );
define( 'SECURE_AUTH_KEY',  'l,c=7+8(g@!~H}VS(pH~%H>Am6v.[7?!ht@gWfm M?iF;O;,L(cQqC:CH>8m2nsI' );
define( 'LOGGED_IN_KEY',    '&@)@i6x^6Hkg[>L[M^^}uYuvZ!n?WBBsNAEJ8`?VFCNnVB|>t~Iy,Q`du3YKv|cf' );
define( 'NONCE_KEY',        'Rq*NKjaq.V3;CHLdKTLbqF7@~o=-uz=E;7F@6 JDU&irn8MFr)gU~WF 7~#:~_-q' );
define( 'AUTH_SALT',        '}QeO8qQ4,*K(Vt9,6Y FZ25|zO|]szw*;4- U_9Olf !(rXM;)yEGoh%M-VHX;}.' );
define( 'SECURE_AUTH_SALT', 'H |CxW8J?[dRAZ)-{9dK2!=E$)|z+^aXn]#,@t/,s`Y-Ky{* Z5RivRr^<)r>78H' );
define( 'LOGGED_IN_SALT',   '`&M,?h$^)5pq0W;,b80^$1Ba5w`8.raX2?Z+ksYPMPbHz|:gXaGx7sx29[}~x{W!' );
define( 'NONCE_SALT',       'gzEYqPj~MVR*:x,b251$MF?}^;Xf=%<&X!K!!c4c>WgS4dmFv]-F$yd^/;~VICQ{' );

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
