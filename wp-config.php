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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'm6:Z:3}]#D%MtBzB`m3<w-:a}4t WU?Qb#%inn/1[gVs)Y+h|oX1<rE84>2c~1/Q' );
define( 'SECURE_AUTH_KEY',  'i)VA]fN{asE9}Ym%^n~+I 0eGY>(L67nW=]iKV]hePw-!v]/R9s:JJ<kL+)6E.[~' );
define( 'LOGGED_IN_KEY',    'qitesEqt_0*wExj$ig@S1On#!tRut1ET7UXGZ~7Xt,;5iq*tt8$]#)f302|F*I.D' );
define( 'NONCE_KEY',        'Qv9%(|ob}F]{Y[V#qwg4OG1j((Z^Qs:`6g!9eZ%k){,|&UN!}L~R[tBRU4bxS,?q' );
define( 'AUTH_SALT',        'K,KY;=2cX%8tG( l1!Jt;B5A!-AVr.H{PR%#g|?M{*R_,L]AwtLV<:.9SVZ!h#F3' );
define( 'SECURE_AUTH_SALT', '8lEXkbgAaTwHz*AvE.]cY$Ywa5jU]fMB5PPL2FWlZmBOR$-_%3AgBj-N<X-JopAH' );
define( 'LOGGED_IN_SALT',   'o>?!fAEK K{+m-O+E40}6h8qFXN(V+95sAzx]}xU[-2i2 QP{w(;RzPKTNl;/~8S' );
define( 'NONCE_SALT',       '&d]?K1v6x~km@7=D5vf#2F:8yGq|9Qs% mYrwaZ>cL StZjU&HC~O{Nq>^>XJJ!q' );

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
