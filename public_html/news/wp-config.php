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
define( 'DB_NAME', 'xb008160_fleprod' );

/** Database username */
define( 'DB_USER', 'xb008160_fleprod' );

/** Database password */
define( 'DB_PASSWORD', 'fleprod.01' );

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
define( 'AUTH_KEY',         '[d?}p=Ude9KSc}XV/wwDCrtS:h(js+1Dn,Ib>yN@W$d7h8mwD <zC_sWC>8=ln$w' );
define( 'SECURE_AUTH_KEY',  'FOXGw7F0<~0YY?`vWeAc0Vu<#Jmc,Qq|Mz}*N5zjK3#`.rDMDG?N.pt~S/ctBvO@' );
define( 'LOGGED_IN_KEY',    ' _Y SQZ6O5gDZL&5tlD7,s|h91Lb_NM990(i0]ijJt$b/jaWRQ1`N~kbp`vEe<sR' );
define( 'NONCE_KEY',        't ;3+).WqoB_E)?(Z~gpd?/UW):UUtYp;HAMD<}ZVN07ISi`zmiQ/Z<$rf6BUk(%' );
define( 'AUTH_SALT',        'JKhdsN=WgD)05vJ(5$uS$_LaR$$I@_He#XI~mse4dc6MUqr<z|U`A)*op2169xWD' );
define( 'SECURE_AUTH_SALT', '`q8xY]R|3-!5QP?V4f$fD__<UW0f7Kg P|C7}e=kg7Z(=x,7TN)stvxe(VkK,7rr' );
define( 'LOGGED_IN_SALT',   'gj_,(LqU>rx2<b;,6UpK]:CpU:~5a$Jq{;_[1@OLs[noE_6WkBT2,S8du0Kc<-mx' );
define( 'NONCE_SALT',       'Z8qj`m;:X-z+RN`,5NSGL%Tq6!Vld*$KCWt4y0Ym97$Umio3ADzjZ/}_;}JvV8YF' );

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
