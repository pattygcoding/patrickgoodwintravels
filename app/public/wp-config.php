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
define( 'AUTH_KEY',          'V_Tk`ed2L4T,Z5dRPV;uEH^1->1uFLb9+55TgKq+BItib//sJ}b!>.toc&Nfyr~f' );
define( 'SECURE_AUTH_KEY',   ' !{YuiFRU!*![Fp.FK@6~G9-W%|72R[su`e3!}V<B`DwN9t)XUSGuaeB+vHb7h%I' );
define( 'LOGGED_IN_KEY',     'iN#O)mJB}tmI)t HZ8(Q:$E/J[k*deD%][>gDLRr(Qd^G1(2<[5/WuPu8?l*5AhM' );
define( 'NONCE_KEY',         'j.$JIR0f&ajQ~Z04V<Lh%4K{o]c($q`0R-Tc!>H@|q@,Nz tBOU3*[s7;pPjXJC1' );
define( 'AUTH_SALT',         'M{JTy9OCkH]?r=m/UuDfq(I#e.SkwU^^L5oKbPsIeX@!;)*}>9poRr(mQ*zaj+F~' );
define( 'SECURE_AUTH_SALT',  ' -0<^p}s9*?}n j Rqr10qPms~1},!JWtx{a<=b.-ErY1S 3^eI/,AB:ZhX*RB  ' );
define( 'LOGGED_IN_SALT',    'fU=)D7?mEVodAAXw`Rt1DpELI.B7rgYvR,K=cM{6!t1VpfyTrGOA*$M[*cz!2Vkw' );
define( 'NONCE_SALT',        'BQ#3%Wlt(FZ9[|27tNA>ark-7JR+uP~3~.Pl3t7d#]6K19vz2VqGb_?9=#mfe;gN' );
define( 'WP_CACHE_KEY_SALT', 'Uqct we+L4)(1GfAm>}I6f=)#2yPHZUPL4{,c0}t,$8t$XQ/Z,q>mQ5&4P#LXfhu' );


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
