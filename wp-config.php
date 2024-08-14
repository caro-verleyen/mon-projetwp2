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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',          '%N@%xTv#)KCK3L{@}@ullP& @n>,7:w,AE:S6^b)a5=8G-+FxRpwcY9MFkG5FoTO' );
define( 'SECURE_AUTH_KEY',   '23]hnfS1o=! ;vKJJXUidwzq4w`3Ppy..f@t)e;M]OMbkpSzQa[d6xzi_FhhMcpL' );
define( 'LOGGED_IN_KEY',     '|`P<BoQ<3.L-({iz%8ka^a>oDnM1:5HqlP/O,j<Lhl)j-c*=z^<s%4u:{q!%WM1[' );
define( 'NONCE_KEY',         '%2wo&}t9iIJ=5,57zb&|^9^Ad/T~djVNg3kpmQtFB/fJ*2@boo;ruxFo8SxX>6/H' );
define( 'AUTH_SALT',         'r6FZrN{;nSL6ze.WGPU|An7OLm`[TP>hF:A$~p%1[73]Qrs`h|_TBa)m1_Vt!hvh' );
define( 'SECURE_AUTH_SALT',  'CZsRpy9KI)BGDKY,{K+3qB5h3J#4mO79lH[pWpzcT7$0(Z2_u7{G(9]>cWEM`*>D' );
define( 'LOGGED_IN_SALT',    'D8pw(oP`QYT4P6w60U[)Ow.O4R+HINv^/b]&s<4QFpsr >i(_$q}{Mp3+sa#xG^1' );
define( 'NONCE_SALT',        '[n?`p$;>mW$VVR%Z]_);A:|?#Jyt)N,5wc6j0X>(0ANtd5WDK8})dOqpq, T=*o ' );
define( 'WP_CACHE_KEY_SALT', '4fM[8mo?*T!YijxHFQ:R!*/E1@$pw4?:K!kW],?uy>ItROKBm7!)|}|+_su#w%_p' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
