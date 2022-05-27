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
define( 'DB_NAME', 'lelangcu_didik' );

/** Database username */
define( 'DB_USER', 'lelangcu_wp481' );

/** Database password */
define( 'DB_PASSWORD', '8L3.pS4-YE' );

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
define( 'AUTH_KEY',         'hhxzme5qlgxvsbbpr3e89d4ezctecrms9xh6zdy7ipyaziiz6edmn8vbb4oa3z6m' );
define( 'SECURE_AUTH_KEY',  'ctmpph1e9isqdbsjhgktejsxwkraz8mqxf182ptakd0ygtqamdfe7p4sslqrv19c' );
define( 'LOGGED_IN_KEY',    '5o2moljfibmm5f4d9ersrrv2yykbjoqldrvn0vnw7gtxmkszh3zklcf522tw3ycw' );
define( 'NONCE_KEY',        'addudscam9gjohdpwnzp3ou970qm7kxjfr3uvxfbgwtvhs9rovqyqnf2plhvu3us' );
define( 'AUTH_SALT',        'mfe54ttb7b4abpfvujp9ygeri9h2ixhmau8zvp4ydmet6zsw0lm10nhdrkxym5qh' );
define( 'SECURE_AUTH_SALT', 'zk2bsd7jllj0kjerc8ckyvlqtxtwtbfphvy08dcsaqcjzzkwqye7fwko9srnjpgm' );
define( 'LOGGED_IN_SALT',   'i7nysy6krgu42gdhhqhzvfxsmjorr0nmwlhw16d30entccmapr82xp5b3d5edv25' );
define( 'NONCE_SALT',       'rk6r8dk8pgnh2fiihlr5yavcc7ffmij2npqjzosjtzyla9we9iydt9p2buqgirdv' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpgj_';

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
