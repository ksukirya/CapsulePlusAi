<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'capstxmv_wp38' );

/** Database username */
define( 'DB_USER', 'capstxmv_wp38' );

/** Database password */
define( 'DB_PASSWORD', '(.n6]S2a7.H@BpC9' );

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
define( 'AUTH_KEY',         'jeeegvikbpntbw0cyka1bplvdx5pn0trkdrwuoiwg3edwjw7mh8usskm4vg93gpp' );
define( 'SECURE_AUTH_KEY',  'bqjjghkcph3onplhc6lhwfjdf3okyt4buagla6i9kynzf6efhizoq5ypr4suanuc' );
define( 'LOGGED_IN_KEY',    'jqcmufnaxpx9llpxfv9s2i8vundwnyluydadxhupobsl6t2eslahaanjtw3doyec' );
define( 'NONCE_KEY',        'focwtsgv7musygowbophqazz6bcxpssjna2zeadxjwiompkw14qjiztr4jhhxkga' );
define( 'AUTH_SALT',        'zscjjfo6vxy6owq5flzvhud3edew0gsml2wsibwyjo3h8xrp1qaz3w5bwqomg0a4' );
define( 'SECURE_AUTH_SALT', 'jmhocdxuiyer8dqkxesqllhtu1ausql2qgfzsvpsde1d74ftjuvqnnyeeqxcfvwn' );
define( 'LOGGED_IN_SALT',   't2mfuptgo1ngyvigu7redlhessxv73rz9niazuxjbl1sq9hmukd7rfwnprd0kidx' );
define( 'NONCE_SALT',       'rg3sripr3ymrtwhm4xwgreiuz6d6ubtx93qncwjmvawg8e4rjkqprak4rzryxqgo' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wphl_';

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
