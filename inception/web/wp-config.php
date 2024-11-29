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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wpuser' );

/** Database password */
define( 'DB_PASSWORD', 'password' );

/** Database hostname */
define( 'DB_HOST', 'mariadb' );

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
define( 'AUTH_KEY',          'hRF!nuy-1fmNQjdA?^xh; mPWH9BGFO?IG=K]47H7jeYAb`?LETz_>z%=rksQ[U7' );
define( 'SECURE_AUTH_KEY',   '~rEeZyy>KQRETz[/^`BKZ-^g}o-R0/9XRtLj%3?nC7H|an2B<])#D;onX{By)0fo' );
define( 'LOGGED_IN_KEY',     'oPJte?|p#IO-8tH^Qf!s6X/=`L{1qcD6*_UCXC=2.p56Xd==ce7d4b+yxCMW^|`r' );
define( 'NONCE_KEY',         'cjghk5mZjU#hDU_Ds n}NXi><xI!^bu -A~K)4LCi<Dkf:MT(wK_XMz&jxPhT&Mi' );
define( 'AUTH_SALT',         'dyG]0U{&RD+wK[z/ gHY1#BeTja=y]z28j([(9WKx{l[;F#gH7,)Pv$D=;`QEe7l' );
define( 'SECURE_AUTH_SALT',  'n?Ag#b (i131r:[F?XpO-E~R:p+23LWz#,1FP/TCu#=O} WsG6NmKkkUk0Ut.`-E' );
define( 'LOGGED_IN_SALT',    'WZyAF{%K{l?dX!3Wv?pKBhJZm?Io&u7P<f#ryx._B9[ELhP7I`,+lEkdf`CZ#R3S' );
define( 'NONCE_SALT',        ' .uoKW#+4b%rZ!F)J-rey~&CJ.R~K.v5zf#:]apI{/[/AtK`QXf.mv`2Xgu1UiQU' );
define( 'WP_CACHE_KEY_SALT', 'w~*C@s+Sn8OmU!nRDaa04hDpt45$@_7wWUJ!}O1*RpGLp?:B8!H J&*~ERS?h/A#' );


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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
