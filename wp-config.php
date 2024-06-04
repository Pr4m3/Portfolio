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
define( 'AUTH_KEY',         'VP>1g&b`4!>yCd8xo6t$K}|D<~xQzsgoO2f|4;fFN1ov/%?yP`*%_7Hy(Cdrc2zq' );
define( 'SECURE_AUTH_KEY',  ',k^ZC5-@#,[FS~^ut0i@b8{vYAkfJ)FY:9iVbwUSTEQsLRpBVHTb;|}/&b_-o/>a' );
define( 'LOGGED_IN_KEY',    'pht#mLX8!(doL(+d&.Jl|(l`Nbw5}vAAGI@qE@rA~pLfGt.CllFY.8j 4-~w/F!G' );
define( 'NONCE_KEY',        'BTCO8y!x*P4V0o,9M+&Zy~$j?oB7>EO~!6l@$d,q7 `b3_%Wu7V7G$Dlo61na+1e' );
define( 'AUTH_SALT',        '|G,6j{<rSyx((]sr2rZ}.tK4H7gYjv::4:pwZpA{$[6|H$@R9q0Au|_a9({)oTzK' );
define( 'SECURE_AUTH_SALT', '[2d)Y{wlVps$kn$M$~x-OuA0B^ N){%xb<&v5OF*+kv7|KRfMf@IzT:z%0jay;~B' );
define( 'LOGGED_IN_SALT',   '5GF5-}fE|0jRCsj0e<X&$hmRZ+yRd+V#u7*_3VJ~S(Dci#M vS65KC0m{`bGUJ^j' );
define( 'NONCE_SALT',       '[oH}9Xg10TX%wc:/wW5(jkOjWCjzgl1 IlZNOu~Q>fgyF~)r,RHm>&nIn vFTrw+' );

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
