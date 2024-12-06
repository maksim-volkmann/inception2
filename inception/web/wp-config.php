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
define( 'AUTH_KEY',          '8zVl;2f-^xCKd5qcGtgCFS_/qm:8f:h0az;Xaa6!;ziuvXQa}5%$TCXhFGIapjWw' );
define( 'SECURE_AUTH_KEY',   'ymjEjJg`c}M,!EZch-^!,f/jR?K k oTN050Nz1QiI&tYyMlTz.fBGi3tQJa&|Rz' );
define( 'LOGGED_IN_KEY',     'ArvVJ.N^2;&5D6u1-c.?j=)j+j#%^&Jsu|>^*d/[-X(b||0I$y_ QpZ&VK0qICxQ' );
define( 'NONCE_KEY',         'P|3$NUH1ynDLb<cgGv`6lEm:,l8orV^wk~/=hk]`85exvV.}*<K5(mgvaK1H@{E]' );
define( 'AUTH_SALT',         '!Xpxo}ohfuZ:~e!]N=sBJVFp@]HJ pZY+lD4`plgf/+e?U3W766Dj,d[4w@Y_l?f' );
define( 'SECURE_AUTH_SALT',  '#/!%$t1lPq4}- I9r]i9Hm@qZQr%RThPkfB-OD(Sd8&n?T[pVEUu_[tj~l0Hz<zN' );
define( 'LOGGED_IN_SALT',    'cF~*Bf_;Jb1[wD*hZ6*QGxSOI9FY<.dB EAUL=/IW^dT!6ST 0R;_49Q]R<BE`h!' );
define( 'NONCE_SALT',        '4*/Vy8h88WWob:L+sR xFQ?J6w3^P^DhC#j*T%Nv5x?AF%X^k|1{{2S3fv!%c$N0' );
define( 'WP_CACHE_KEY_SALT', '*Vjuw`n^mP@FWqbgxGc<#96@#-AHt$2,lvdac:|23%I|Q6,o.cUIXLqpC-QZ$uR ' );


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
