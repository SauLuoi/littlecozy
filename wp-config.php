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
define( 'DB_NAME', 'qwgscqrb_littlecozy' );

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
define( 'AUTH_KEY',         '2!{qZWa&/)la`iJ@*efoU68TiQcF4b5<RC^T%eU+-^HL8_a~xkrgVDdDm|;hQ ;%' );
define( 'SECURE_AUTH_KEY',  '=hkk5SM{Z_S3:OyCcS_8k>m)N`-4H8|Qi1ktyzLT2K,u,wK[vSfBFJ*NZPPd#oQZ' );
define( 'LOGGED_IN_KEY',    '/=}6 *D/38Iio*|}w[jWz@`s?,XcZW^5Ad(vDU3yphf)(}G%m{WC2,cCqHbh}7X%' );
define( 'NONCE_KEY',        'A)+O}fhNV/g|AJF%ff!*ilvyI;<5:ns(V~f9sL#meL`kWI@*)`E(~XuStaWWXf}*' );
define( 'AUTH_SALT',        '<kg1<l.d%CU,#xlfN(ipd@ase/{TX=9ts8?U&x>!A/+!{MX<`S&Sc<,zd<<AR^#%' );
define( 'SECURE_AUTH_SALT', '-*P1ZtC?[S;6}44a>`u,.&S_pX5Uz8q!3.2x*Y5@fDqa4)G&[uG6G(13}9=:0Ffw' );
define( 'LOGGED_IN_SALT',   'p~i0v/0e7c4@<n9<~<)ZfD@&ALIs`y} yF:APX4P*AA.#Z$pJFk<:kW]^{;&VPmf' );
define( 'NONCE_SALT',       'V-@$w|DS{J*yipG%UM[]guH4Sn`W.n}s+41}=!*26~[Db*N8g#Ch{%us*xJkcYe2' );

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
