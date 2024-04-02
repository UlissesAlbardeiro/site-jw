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
define( 'DB_NAME', 'u885806498_C8q08' );

/** Database username */
define( 'DB_USER', 'u885806498_cf4Sn' );

/** Database password */
define( 'DB_PASSWORD', '7o9wKXVCgp' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',          'C<(6@lq93IW9FI|^+t,vL`Y|lh2}hn(DN@okq<Paj+ csgal84twoqYN|Sm8^)oa' );
define( 'SECURE_AUTH_KEY',   '1epN0N-/qBj{P#CdSVjl}u8{q:+87|TvM2Qy!vZH>tg,NGbj1NGmt]hltKE vPD ' );
define( 'LOGGED_IN_KEY',     'Qo!;ZByVkfy4x.bbnU|m$+`.zmwV}/W#8z/q!Q |aDlDOO9G[00s6P@#`q)#iTEH' );
define( 'NONCE_KEY',         '&*nZi03r^9j,iN%JjG]|UYM__Pho3J>;JN63_b4w,7g,mCYiNVxHH;N:e~+Tu,&t' );
define( 'AUTH_SALT',         '=~{V.8?naNG=M{gU$0n4(E4vh5$$kbrED:W{8xvyXny8f;u2+JrOT~jFmzWu=0?V' );
define( 'SECURE_AUTH_SALT',  '[ni>^]nYrF4KTEkI,$py1]eLtlEmmWZsM9St=N-Sm+aT/;G9})h6BafQBB`a$(?V' );
define( 'LOGGED_IN_SALT',    'bE.J>pK8ZnaO~S9RF+y?h*7MzpRvIQ0kB a(%tbMKBV]_ff .v341Q>&k@V;-Ylt' );
define( 'NONCE_SALT',        '8RG2Eob]p8K~xTW)6{glk<_?!UWUG[}2#dnLBOcAVheqgZ+]!JIu5r3:X(9z,bUM' );
define( 'WP_CACHE_KEY_SALT', 'FrqY_YqnzKE9klQ:fUYk(X/j5Auo3y7buyEo&7gVnJYa|Zg?]3sf*NlE.]NwHTr;' );


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



define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', false );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
