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
define( 'DB_NAME', 'talent_db' );

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
define( 'AUTH_KEY',         'r10wC,5w< YQ5NBp(Ai_o$sh27{%O1/tSi5c[O{|k/?QT_ n_QjoWQ3wW/5r?6EJ' );
define( 'SECURE_AUTH_KEY',  'gT+,4(.3wI=-64Spc/?#U:RTrDgO9;0E6714lz<nr,*L2.mu`[%?AW&t^03UDp6+' );
define( 'LOGGED_IN_KEY',    '].tDtr$PB##K~`4{GCE}3lsN[G`>xS^4m1/pV@z<rq~f=Md`9yw6#}]l>onCo4jH' );
define( 'NONCE_KEY',        '%>x,&4w#HbL.&[,R;r,NI>|=[EO){/:d=Xkem boqqSZ[U9J5liQ.R5B>[ %-@rm' );
define( 'AUTH_SALT',        '74BJ+hlgOo|#R9]52XTPQu@!7YV<GSpkmH;Wl.wl%C<rd=76MD<Lh$[U_4GP9{mG' );
define( 'SECURE_AUTH_SALT', 'es2B{{foFHyAduY:l$g#>:GJPMgC.#*fSLX]ZU|~xu3Y3k(Ya *}5KI9,UUfF}t!' );
define( 'LOGGED_IN_SALT',   ':cL?^neZE)CFSFATzdH]K2fc0_7j+Yi}N>K6drt8F584&, v8C/z7EB*=VT<^P7u' );
define( 'NONCE_SALT',       '8``w>Wo4R(2+W:L*|DZhLfoUFD<EI$Cm.)g[7Kh< YRyWQ;8U[04DeC:$`B#Ib^&' );

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
