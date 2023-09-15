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
define( 'DB_NAME', 'joshua_wordpress' );

/** Database username */
define( 'DB_USER', 'joshua' );

/** Database password */
define( 'DB_PASSWORD', '1234' );

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
define( 'AUTH_KEY',         'P*ck*.%cKsPyQ8kt& g>5u2W_~0$1/?wTnP.w9bsNmEHfUJ(@9Z(=wV_s4AC/<uk' );
define( 'SECURE_AUTH_KEY',  '.Pj4$P-@|S(SsdmI5NJkYb%ADPd6BTS6q6ekF2wZEf_$+V`S]?3gY23Qix]Fre76' );
define( 'LOGGED_IN_KEY',    'lWkeyN#^$hs+9/q5Jnc2nJY_@B~:97#19k4,&xJ0=kTypo3z,Rc.x~]w24?e5+SL' );
define( 'NONCE_KEY',        '*.1 U=v:7t@&P`6xm.=UFg3Cy/e>BoO.dY;+uXjO(xIqJX g3l?-`N}q7@8<@]6r' );
define( 'AUTH_SALT',        '7Qo7vhMM6EuK Q;(D(b}a7ha1Ly`2!4;a(l[a?zq!D+`6~t,UtbFo7l4}SG5OLW:' );
define( 'SECURE_AUTH_SALT', '9Ydofe6pY(5%uK]]~a(q=R@ViH?6NY9K4NxknPQu5Z6f/K:G9=L9Glr-=m!;^nXt' );
define( 'LOGGED_IN_SALT',   ',QMGYRV8ohnqx>QQ+99tW:Nl,Owi.,{};tScUA8Io3[.77$Bge>hx>n9%x6SCw=O' );
define( 'NONCE_SALT',       'htAq;_Z<AI6 Nc7EbE _k/<mg$isK2d?o=q1wry3ijd]W?(O{v]s$6TX!lFC-D 6' );

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
