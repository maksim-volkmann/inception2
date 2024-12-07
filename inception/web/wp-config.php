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
define( 'AUTH_KEY',          'u}nt[EtPG>7~4|XuL4; TB?^n%Ry:H2kG!8ZdDjNw?:l<I|IeQp.f.omY9rz<p+;' );
define( 'SECURE_AUTH_KEY',   '2h$W.uNEZOBdE-.xURv,uU>&/mK2p@g.6x!3^^*N230ANms-R?13UCWc.~27YZ=l' );
define( 'LOGGED_IN_KEY',     'AC=2fFO$to%@*c;DF/}j/>k-Vy|x7;KA&e$B2,& <(%9Z.;HwVjDe*e[Vcy;9A7;' );
define( 'NONCE_KEY',         '@CE9gevEEEH+a :k;C].^..PRX#&=vi-sc5+9IB;PsS;Lkd;PrhK,#S`fAZh6)xH' );
define( 'AUTH_SALT',         'mWd^4eA/%Nc}^lDugPVLd=)01T:LrdGxzvV|2A 3c<qH.0#iWy7ghabGrm/>87=)' );
define( 'SECURE_AUTH_SALT',  'vpp[P$F* }] i@xJ?(g2Kn|H8CUDj;Dfo:{mhlqdiCh&+@e0QA{jB*Fh+YB>T7RT' );
define( 'LOGGED_IN_SALT',    'lE^kt%atAVa>{cZasRx8!_#7G`7v8Ns5P:iZchQ6Al4SFvyTE.A`c9!#%7U5B)c5' );
define( 'NONCE_SALT',        'KQa5IY|U,c3Cde59a&O[CdM45s|l!/YwKgmJr?1UG%EH%ib6X47bH0>6>,g8A+;R' );
define( 'WP_CACHE_KEY_SALT', 'x,Exr:zW+lf)-WXdG;M!EN>I:g>M:mk9i>9U^w,;{Ya^k6,+[#DJB?Fs}><S*S)q' );


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
