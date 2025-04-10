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
define( 'DB_NAME', 'flegrowth_local' );

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
define( 'AUTH_KEY',         'Mfolck)|S.1mg~Z7m(Zt%VI@S&pPDf?LnHF.1nwLI<~pGe6jbdJ#k{/ZM.K~giJx' );
define( 'SECURE_AUTH_KEY',  '&N/rwP1^hGdpsb/@%8<I<*+x^Y[JTN>dWU2Tk4^`x+}DH+Q%_CAIF!_L/9N~kS/W' );
define( 'LOGGED_IN_KEY',    '1d3es=/)P>)/?2Q64XBvM<b|ffnz; Cf l6nj+J[3SBC{;Fk1]7RhO}6#PXli}G?' );
define( 'NONCE_KEY',        ',f$uJy^;M^Pqi)3bo~@HoJKg&KlG/.:/m@LV5C,e(}|$2jU[-31[Xd6=IKr*2z#v' );
define( 'AUTH_SALT',        '-aDIZA6#[o6(^>ALkax)H F0<[SJA+`^~H~%7RT7cN/X?oxf6M(?=rbT}L]p+jX6' );
define( 'SECURE_AUTH_SALT', 'q^f.6_UOsD%O>[4xNSv.)Lr]y_,Fpqs-&1zzO4]6_n*UHH,Ss!t1clv`N`OxFamw' );
define( 'LOGGED_IN_SALT',   'G3Ym$c/Eq]E~(F78]+7zT,#nE&5}qF82%F+g)_*wU%t_y-3NS&*S-m$3E0csnMg$' );
define( 'NONCE_SALT',       '~gCjn8)!)k/^~+>U1@XJi0$IZAUnPD3W{GT_4+]#}+G*HWp]xDi: 7)JkgBI2Bla' );

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
