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
define( 'DB_NAME', 'first-realtor_db' );

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
define( 'AUTH_KEY',         'r=o)sJs9[aM^2L? VCpZKdFSh?oO0[^;yIHAV=Ndu3`g,jyi@XQDGH,N$;c=C&z5' );
define( 'SECURE_AUTH_KEY',  '<yG;*:!#XlJ[xP%)1OCRAMSa:SR2_?TnpKkz A#Y{j5xYJk,NhaVn*-E?d/~#A8z' );
define( 'LOGGED_IN_KEY',    ';h.y;qOES1#lCh?8@nKhs)Mc$Dsw]+Xj)Jf=`6KY7Jf74K=eJ .Rxsx.<MEy}MMd' );
define( 'NONCE_KEY',        'M7&.np3$m5=]67c~Rps?WoEAu]xBi9&dja)*AwS_N4uNP?STvdp5X~C|gpO)OO09' );
define( 'AUTH_SALT',        '3f1|nInx{XN]jxiBcE_x&vCGx3`G)BopLq?]FoO>OyD47&M^^9| U:nAn~wAs4Qr' );
define( 'SECURE_AUTH_SALT', 'jkwThS@/xBAt>C3Ily[2{A^34#C98~{1 !Rh^LO,N<mX+HFWX, iD|6*2parWmY9' );
define( 'LOGGED_IN_SALT',   '&R?qXwkw[B o1|%-:@c2Jv@$C?VA P;pt!Vco~sUMMrfSOxY&oA(YuoYP{xAC`uY' );
define( 'NONCE_SALT',       'X),Eby0vs|&<%xbZ8qpb WaC0@Fjt>,JY#lP>h%_GNvUM(S{8^&Dd8=[(]q@oU<5' );

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
