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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'basededatos' );

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
define( 'AUTH_KEY',         'e;{j!MuV[xBF$/)Mz7)]Fq&yOAYvq^JIvC,.);7GHh(]| >M99`wVPBFczZ#VU_o' );
define( 'SECURE_AUTH_KEY',  'EN@l/Tc=XiUEm=RlfDhu~TjDqfV!1gk>?5[U*}ZxF5@yB,biqUDesH?z9@Iar/-8' );
define( 'LOGGED_IN_KEY',    'lHbweYt]CuwEf>5K*%I8;#tq4]qE;$Ia`;=vV(_DvKf]2@>=R%:q[euEBmH-MHb8' );
define( 'NONCE_KEY',        '8[Z@HwGYrFM{Tyvt*W vQ9p9P]MV{aoB56!H}WTUcy]4wNRv>-In`.l?h*G2fJ-W' );
define( 'AUTH_SALT',        'ru$(-/Y/~NsJ>AdYV:6]V>Afw{*%J7an:*!({3U}ZQv9>gJ@X^cwM5PlHs$..,+9' );
define( 'SECURE_AUTH_SALT', 'UOy+BC;,z]&SoO#<L$#4|)Ee_aL#VMxq*j=/nde2Ja7C4R21I)f9/$1Nj4;K$,17' );
define( 'LOGGED_IN_SALT',   'ujv+oE[fzUh{_R|tZd}Nn5.3~H>Lo@Go~^awhUtFN%^ VSI;d;c~10/wO/:xvga=' );
define( 'NONCE_SALT',       'vV}]:hN$M-HV!}w{j}Y  *~-@#}M*8~lgP@*9r{HG3C`#YJr1Ga,Mc6cmXiQK&[H' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'a_';

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
