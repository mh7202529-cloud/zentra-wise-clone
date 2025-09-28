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
define( 'DB_NAME', 'arohi' );

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
define( 'AUTH_KEY',         'BxfRV%OBffd%t}u.<H:>Y/~z0%%(II2m^9{D?m;adE{#GkIKIGD<CKohX4`.C06g' );
define( 'SECURE_AUTH_KEY',  'epm/9XT$b~f1v*wz{OO+rGd<-LDBL0!]IP<dI6fmYBIwkF.S&Y.hXUP%9+-{{4w%' );
define( 'LOGGED_IN_KEY',    '$$T9BWZh`+k%jf.!W)ZMyXpJr)2L<ZdOlV*I{La6f2) oq2>Bj8!,Rx&Iw4&>^eI' );
define( 'NONCE_KEY',        'cbSKIdu>y@}`;}ebOwU 9(EH)Z%@oL;Vt_!3gWHlTSQO=e`hNk3`-=R:W;Tf<Y0r' );
define( 'AUTH_SALT',        'vMJ7-)ReCUBy.X2GBkE2NFJ@SggccJP;<nakZC2S^b^]&FcWvdfpOCNXXo,6KEC6' );
define( 'SECURE_AUTH_SALT', 'QOy} da_Y%gog#VC)`Tfg|]q.IqUQQms?nMjzX},=K HHeL6088w_k7cTpVv{n4B' );
define( 'LOGGED_IN_SALT',   ',( +HL7(/g3QBRL_TEdtx{im-Y-ra%6#Uco=/>6h|=jr,v%r@jR+.Bvo T[vJ|Kw' );
define( 'NONCE_SALT',       'h7]4Oj,+?un+#yE1w{08|S[XME}PATYa7n5bAKKQwC4ZhzXD ,+g F?,PSn:H4c+' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
