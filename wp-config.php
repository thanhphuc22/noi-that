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
define( 'DB_NAME', 'phuctg' );

/** Database username */
define( 'DB_USER', 'phuctg' );

/** Database password */
define( 'DB_PASSWORD', '10112002' );

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
define( 'AUTH_KEY',         '?LD~z=9_DT:9}x>@Vm2(mcHgv3vkvF6`QmD}Vn>sogGL T^]^Kz[C]l 5I4J.4dj' );
define( 'SECURE_AUTH_KEY',  ':j<=+qdQagF=;C<@~(m})HjYuSEZZLxEq$-c9uwD(~>mg?qae)FrH&PZ5{DlRn5(' );
define( 'LOGGED_IN_KEY',    'UlPtQ:xp1n?f2lXjiDA1I98#W%}P*Z,}G%/mb8CBRepe )59@.[I9gpn688@~j]/' );
define( 'NONCE_KEY',        '?DYmGt<22|4]GCbV&B_-G>B<.3ph&+5n_5>])m8Y_H_FbFic{k V6wtZ~b<Y.b(!' );
define( 'AUTH_SALT',        'RDtt_V)30/r;!_TC6wb`ph|j@O+Cq{j?H9rea:^1ZZIA}mYOIp}zXL-qB$Hbm:Jj' );
define( 'SECURE_AUTH_SALT', 'rvVm!T-|B~CoB/7 E,3jNOT{;J-_2A_fPS`LQgGw|;9E2V8:.S|CYezq<V!0>TY@' );
define( 'LOGGED_IN_SALT',   'e[_=,4u?b/^I32,h1a{hE88nS91forFK8w6gglh3nPel-P~s%HK]uAPz?p@iAN$:' );
define( 'NONCE_SALT',       'INAbp-sd`Y-:&SSp@06*{%$^UuzsK|dT2:{dj.~s==(KZ# &FqZYt}.u(-MIYYc|' );

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
