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
define( 'DB_NAME', 'demo-aptum' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '&9xGoTsu,l!e~<{GW!)R=vauZ3wVw=.+mOV`l$mEqIT5)|m#lQcl|rux=-W9V]8&' );
define( 'SECURE_AUTH_KEY',  '=_#nR!,LzCf!CZ=RQ@vsgPVgcOk`Bn6.k4F0!dBVCENV.;N&od]@~!CzKG|(T)oX' );
define( 'LOGGED_IN_KEY',    'J /sYkS4M2R1:Scgs)89Qf&[i1>^NR-L:C s%B8f~-oKU?~]eWq`xsb;[(p>rJF8' );
define( 'NONCE_KEY',        '71*ZLF.:qE-}]~P&L-NdDjBDU~+%9}=A`;2~[= wd-0j#&fjL?~Lo02ClI~TiY:n' );
define( 'AUTH_SALT',        '0PDet~Muv>2cj- PS5B{Tj|>S4C%r6~.zDb%.In>UiwXzdLpjRtlsa7i5|:`uNeV' );
define( 'SECURE_AUTH_SALT', '{6%vDH4}Kk~}%HyJ5aIu4z$)*S6Ln.r=Tw7#a(uh&U_Wb?q 1g[$/WzX}*Y{H5hs' );
define( 'LOGGED_IN_SALT',   'Ec!EK8>Au#Q[kcB+ .b ;ku5s(E#yM2dHX0YaBzDefIW:S_V~0 s_Hv7qP>hjC7$' );
define( 'NONCE_SALT',       'xXHx`*e.OIjWDE2-QsjF@/y%|,sYP:3O3)&z^d3J~9dX$v{|>xp.?OXo4TgAU<7e' );

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
