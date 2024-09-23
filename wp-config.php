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
define( 'DB_NAME', 'prod' );

/** Database username */
define( 'DB_USER', 'prodadmin' );

/** Database password */
define( 'DB_PASSWORD', 'prodadmin123' );

/** Database hostname */
define( 'DB_HOST', 'prod.c18ge048k09d.us-west-2.rds.amazonaws.com:3306' );

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
define( 'AUTH_KEY',         'x/5svV}bOjRur]%rle)i];>Ai3[Z0nk,gby:T48_Xvx?tyD}5_P4F}PGYsrdys%i' );
define( 'SECURE_AUTH_KEY',  'z;.lX0*D=PRDI=!%?yHe5~fX`$p,(/5I+Lw1{tWK(MCfO`M<DHH#0)-V&gV-xuV|' );
define( 'LOGGED_IN_KEY',    '?N%Cscr_a~68ZZe-]?3C,M<C$<`N{&$<sh&i7PYfl_.^t$.}6Tl]x$:Oe%d#Pr,U' );
define( 'NONCE_KEY',        'xf2%+RxKaZ>.D-Uz=]SFA%=paw{X>d,/#][N,2KS?L[9DlwFESjtaoKrGv/cux~K' );
define( 'AUTH_SALT',        '0lSm4w2.sd4.+kjUTJ4f:R_~j&d2=lz^/!xj(AIwoL?C>x]&b>-SVu6sfHyq!{|9' );
define( 'SECURE_AUTH_SALT', 'AJCE<I;H{5YK:MK]R?_?!Y6{-_|tN$0y?LNi1u(DZl&5=f=ltnnDGX)y$dU9$2qG' );
define( 'LOGGED_IN_SALT',   'txvDqGgRtCVf_XZ:IBlmMeyi.+L1Fgwb!Xut:iD:<PTTe~J/{Eq~x4<8=Y`T$;Uz' );
define( 'NONCE_SALT',       '%Khsu7dX0,4w*ksduQxt?J!3d *Dzf8;Hrozv3f0dB-e3y3*&T[k%xN:!WoN8/[i' );

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

