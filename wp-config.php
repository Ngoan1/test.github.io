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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'myproject' );

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
define( 'AUTH_KEY',         'X93+y{h<K>wpe&B]N(C_YU0g;r79pn)/I1Hq:+%7ELMk,oj,8c#]pU$xZXsF_elL' );
define( 'SECURE_AUTH_KEY',  'U^n9I.xT9|B&I-^~JF:b=rI.(((7aW[.;IIsO>(HH[P*orFRju8iWF_h&@fMa%LL' );
define( 'LOGGED_IN_KEY',    '1i Y5IE3QXR0-+BI$I,cwanKC`L#5RE}*OeS,I+!LyNN=D?;IV?.KKKkuh8XG=!2' );
define( 'NONCE_KEY',        ')CcU*:b[#hw~Rc4}m:7bY?^`Z?0b64xpFEAq+Q#~0auE_nr}H>VS`Pm-sWh.Hjjy' );
define( 'AUTH_SALT',        'jU3qCRVGwZQZ*,(H2Kg&]-(|[X_xr8aexG%Q,x!ImMvi~<C7jCb7HxKXGzUevN<|' );
define( 'SECURE_AUTH_SALT', '));n#=;`f<Y4Zy1dCV^q@KN]h;vH?L$7[0.XH2|:bTs T/F2rF@FFs| 8%Rdv!KA' );
define( 'LOGGED_IN_SALT',   'T/9)J!AhdOQ+^{E>XRoeVSgRvp}k >cdyeY1I..<`Rh |&JN)Nle--u9wT/ZKZyl' );
define( 'NONCE_SALT',       'FsHY:Vf*md7TA/DAZTyEo?aj?GJ~MKRa|aB/h#u:;uwC[Ece;I}n>GU0TC#lQ6HQ' );

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
