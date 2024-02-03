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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'two' );

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
define( 'AUTH_KEY',         ',zrON?TSs,cgS&|?-9u8x2DK*|jrV}XPVVUt`)8<Q_n&L<G3LR|c59l]dJ<SKXPv' );
define( 'SECURE_AUTH_KEY',  'Ki@2GE~ iQR(>u6g-ff5:2z72h3 J*0B/t%-D;=[5B{PHQ./o-,E*pR5K(z_-o4G' );
define( 'LOGGED_IN_KEY',    '5*M/yiZ1=4;5OIOH-R_wfQn!|vLl7`mKQ^d?I$]#4,!J-S1grv[:t]--s7Ji`;5b' );
define( 'NONCE_KEY',        ' ^KOk*s)2Z?KFOl{AaFt<M+FC:@ubo+7#r (DdCG]rznD^QS;ip5ggt6wBG<xM{-' );
define( 'AUTH_SALT',        '{!J ;/C 5!IyYI$[y>o<BCb0i }deHAd+LPM;bxnTi_>Lb-=a4gBWW4~}p9tfTNS' );
define( 'SECURE_AUTH_SALT', '$2G2BB})9 mrmyZZ>70]]n-Be[=2it[ZHhFcydFYtS,FzbV*Ke|ZZtk=[vE k]c$' );
define( 'LOGGED_IN_SALT',   'I`}XG$XmH@7QT|!d$^X1ZV`2kGD~q>*JxC}REqx/3pzxK{S/MguvpZJ*Zyd:XBA]' );
define( 'NONCE_SALT',       'xd{pgC|-g0 $4lI-Bi!)H(&kkG=;?X#2iL!*aBM_3+O8)`+J Z*NmqB_?w`_5&=U' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
