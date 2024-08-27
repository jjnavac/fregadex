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
define( 'DB_NAME', 'fregadex' );

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
define( 'AUTH_KEY',         'h++&u|@.qX)3(YRyow^~CUtz+jor^[IU{pH6bQz(B}+bwmNRXbulC)B#q-ILn,zF' );
define( 'SECURE_AUTH_KEY',  'l#<ewS[`+p/R6;Ul]~)50Yz 1jd?;eO/)n-GPJ~r>/1uk[G*-ny8MkQI+d:7UviB' );
define( 'LOGGED_IN_KEY',    'J1OM)-v0P3yJ4(mJ*V,:!JGf}7#e9K-jU1nda%F``~wo|)RZg/<) n6?x6DhFfn?' );
define( 'NONCE_KEY',        'wlzZ`uh$h}3^]#`o,n#Cmq](rQJ<FHYQ7vE~_v,i)/[JsFa<O<w|eVqPz#ZV)Db$' );
define( 'AUTH_SALT',        ')uwur~M%X@{uWWvA/t5yF.&6,tM]&wj9{/<Ej*o:)  o^}7 GF2jn<BS?rkz~Uy`' );
define( 'SECURE_AUTH_SALT', '<g1Bj8SZ(`@&V,Ri>kGM#|;o: eq_6z8m}du+U]{<nk.!aR:Kdd%xf<f&}q[8wto' );
define( 'LOGGED_IN_SALT',   'pjX`3e@lKvU35wa2%XKAp3XeSqZASj#ipkk@64Yh)FaU`Qj8|Dn;aoR{Fw;c+uBG' );
define( 'NONCE_SALT',       'lMtr5-u#M9xRBZG}<+)SN}adJQ5Yiy7AYP*rYF=wB,?`L=FnXAQ_upRZp-|jqp*k' );

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
