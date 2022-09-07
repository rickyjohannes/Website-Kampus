<?php
define( 'WP_CACHE', true ); // Added by WP Rocket

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
define( 'DB_NAME', 'cybertec_wp161' );

/** Database username */
define( 'DB_USER', 'cybertec_wp161' );

/** Database password */
define( 'DB_PASSWORD', 'cybertech123' );

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
define( 'AUTH_KEY',         '47o4v2436qknodk2g9tmjzdggd8zggrqjlhh5eayvgix4eigxwgtgtysmfgyrtv9' );
define( 'SECURE_AUTH_KEY',  'wgcovy7gkqkbqxm67hpd0rcpqywrkyhro5ye6x2dkiijv2wbzjvrv2zw5lyvmnu1' );
define( 'LOGGED_IN_KEY',    'jlgvx6d4m6v7wmwhtonbktqixfzc1yhubvc712snghyee1bpx6ij1as6wmkyieho' );
define( 'NONCE_KEY',        'sgocy5ai68pqrd6lsrejx530k65dupfxjcnhlmtxnddkfhxflypqiypvqkfd5thv' );
define( 'AUTH_SALT',        'eqopfguiucwiguibkaj7lvtymnybtuhpl66yat1sxt1hcqbtmu1b9yoej2efyl9k' );
define( 'SECURE_AUTH_SALT', 'g8e8cvq9p1tzyy2pdqpfqo24g3dao8a3yrztwtzdvq9ejp7n5o7ovhh9vypabwx8' );
define( 'LOGGED_IN_SALT',   'kjcibbb8j3tsen7ab7l38ik9iyjzbrplqdlppnf6wi0aokzatmppwrx7p9ssoyle' );
define( 'NONCE_SALT',       '06i3qvwfglclhxzfhtv1ib9bnbcfercb2o8fyfsiejphacvdxyoxhrpfdcwbqioq' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpvj_';

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
