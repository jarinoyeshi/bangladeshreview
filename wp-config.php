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
define( 'DB_NAME', 'bangladesh_review' );

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
define( 'AUTH_KEY',         '2a+p;LQ-6V[5I?t6HD315Aj[-VO.i7Ozfj-e*=2fo;bkm?HEi1fh+1/ZzmP<J3eH' );
define( 'SECURE_AUTH_KEY',  '-{wtOg^*3Z!QJv<jFr6dP|s:Lus:P=8ANK?y_^ITv`C+R5I=pjtL:y,mP2ag,+gb' );
define( 'LOGGED_IN_KEY',    'i=u#HgJu`.r:Dxxbl$Zc?[. C6jas3*#G3s$lx_]|ZIJ^-!jXDOA/`A;X6L9P)nE' );
define( 'NONCE_KEY',        'N?7m*+Nyg&BjnOWf*$_ozb]h%e2~n+YzuvegzAskNc<j9>6FK^g%5Hw91eNmDHLe' );
define( 'AUTH_SALT',        '2^`[+xaDnN;<FT?ZV]@?<L@$JYLTF9u9BKk*d[b#fse,zo<!x]pyBULs#c!XZ`ix' );
define( 'SECURE_AUTH_SALT', '<M!M`[ydcaZ|aLWQUGU,kyb<x %92^x<AB=d[r6/to  w8Ux/[YkyWWmDy_0Nwj|' );
define( 'LOGGED_IN_SALT',   ')?OWUN;F,~%78Yia8LqcN-qV:MoO8>6C/U+H#,cg&eH~$fW.N[7 7b#,jAqO{]EC' );
define( 'NONCE_SALT',       '5zo|`4q!l`B}I40?YL$@opbdO%MuqrRQ#-zzeBW$J|<mnz?5V?9Hm?q-&Cixy3}t' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'bdr_';

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
