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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u126970050_atad' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'hJn%<A>*0s`-M?8^p^FtM`MDYg<v}r5R;f6z*QtZVlQ|[Vf$e+8xJe:eJ~4Gz3[ ' );
define( 'SECURE_AUTH_KEY',  'Q[w8U9p q+*yuJi`@&z>Ps{AN?&w*ASwg^W28<{eGcy%FL*8?*v#qw!veByvPYk<' );
define( 'LOGGED_IN_KEY',    'dRaxOB0_WOxwa9@KY?1hEYoHAa3=BHmfrvx?3hGf]YbC^f#CCCdbqk7#[~DWX0pB' );
define( 'NONCE_KEY',        '%p^:w|Til>JP|-1]/6~SA^ktMw><F9o@}D.T4<wd3B<~Jm._^fpm.!XVP`^)1Mdf' );
define( 'AUTH_SALT',        '|XUBVBX4%KL5kUwcU8!</A%_679>*Pk:4WiYtu$.u{ 015= X-gDCAM#2D8cBS<q' );
define( 'SECURE_AUTH_SALT', 'eEfW 7T5%lKQo>y.6B(&_XBA~p;^O;$9Rzc.fhrK~PESY`[Y-5/ `kRf>}5C,<Hz' );
define( 'LOGGED_IN_SALT',   'l?Rf!#r+ArZddu2zI)0e_wsJX@l`:bu@FkV-1|Zz,WF^l6 .wtyD_:~u V v6rRz' );
define( 'NONCE_SALT',       '|9(cM,MMCCxaLUKAUnPy6LOj;]9&%Mc.o5mU1XZ..zn$`|G(-zcCTryp??q1uwyc' );

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



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
