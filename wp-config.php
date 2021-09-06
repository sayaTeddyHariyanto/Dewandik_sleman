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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'db_dpkssleman' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'YOdC:jnhI1h|J+Yq<FH{P~yD*4kGWo!E(QjHtr.O[/l!rye@!dy@^^V+XRTo]0/s' );
define( 'SECURE_AUTH_KEY',  'sfZUVW_{6<zXgu3Zswg}!;Z.$^8Ji^bV{SFx.Go2.0=4xMHX)bSi8s:6: QndYA;' );
define( 'LOGGED_IN_KEY',    '85UF!&F:~ED$&&V]tnvebG6hc~J,eJ>_2x!{=N@.)C{BbcpwGGM[&]:g#&.T@NIQ' );
define( 'NONCE_KEY',        '4SV,^).dx_9sKCWHC#-o/o9>f3G1r{F&Vw61fD}YE|8Ei}Ovr&NdoD?GpWc?,A+~' );
define( 'AUTH_SALT',        'T_!|ZcZhIr?tAul![(m#iHT{OgvS9*L2c`yGQ6Np8l$q;MnSlm-7,],hrrI8V:#N' );
define( 'SECURE_AUTH_SALT', ';F<6kbf#*hX;a~^H/zFW+|`TZH<Z+;|df7SS_&N&PWKflW8*lyw4o+%Kyd):of%|' );
define( 'LOGGED_IN_SALT',   '|!07cAn8Y^,bTrg+`>BxVPM53|gc-MpoD`|_V} =yJe98<ZXlW%@F2Vli; /tkqV' );
define( 'NONCE_SALT',       'XjM-lT&]$_@p;D<?=`k~[9@Cg?oBGyTH~B]rTKfOVWLeoU<Cp4}N? tqxPN>fPln' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_dpks';

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
