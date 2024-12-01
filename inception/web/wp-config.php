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
define( 'AUTH_KEY',          '>x8^rS?:UtiIS ?%]Efd{hG]E{5iFy{WTc`q<!@&gN/hsXJ}6+h;[e]4p]lT^ug2' );
define( 'SECURE_AUTH_KEY',   '!:(clK>%0&b9~d>$_k{b4.y*j96)>dar)2~YKb&3~lwRN6Z)lwO*T4XJaq|Jgys*' );
define( 'LOGGED_IN_KEY',     ':_!@/YP@+AMFCJkD|Lo=?;ok$F2i|qfO)_Eo[f.)88WgkX/HNRlq;*y o9O$bBQ?' );
define( 'NONCE_KEY',         'p9j)-gZVe-p*YqO`q-ENv)g5k qn@J1,{8T=)X*w!kOwG9W-H9$gz) @)/:S~&UI' );
define( 'AUTH_SALT',         '$LyVI*P*pB;YrX()/l,@lv{5XU8/cLKgoTH,~wLW/=-!g8)PR0x1OGqVTYb|]E+2' );
define( 'SECURE_AUTH_SALT',  'mE.;;d]*~$iX[<ig8yQcOM5xg)B.Fzv=yr_TW9Howvt?} ~C#qSDr{9X11 (].oo' );
define( 'LOGGED_IN_SALT',    'Hc0@0_NDB:]9-0er_16)hl;Bt{t5Psz9>Ik9D^(6],/4h%+;^GR@n(54-x17LyUs' );
define( 'NONCE_SALT',        'Od0lq}>g/ D!E/x.:_X5@R[BK|n&kwj:zx@P^T-Wys#.&Kc)-b:O4Q)OrEYw1<#_' );
define( 'WP_CACHE_KEY_SALT', 'KF]E;;gtlqkKvDz--)WKz@]m<wJI(2UrJiM*7y~GrhJkeU%cwg(JFa4exZtmk>5*' );


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
