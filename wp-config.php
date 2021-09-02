<?php
define( 'WP_CACHE', false ); // Added by WP Rocket

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '25zj8IXhVzCmWihQbgZ9IfsAkhYLNjMFI/XoikziP/ORs2xdsZ5F4BzZehDAU3nv17lXVqa2fnE05RjecKgdzQ==');
define('SECURE_AUTH_KEY',  '7WWXueoNRHM+J96AluqsGEZvrdCjW0lTB27A6l+lMzbBRjNhiOyWRrYyrXCkAfQ8/7Pu3Sg+lH1x9WkzJTbZQg==');
define('LOGGED_IN_KEY',    'ALW1PfEBQIsCyujvWNT+J4rhojEGVuKDSi013qm2N1GTBLuyc9ZjkjnxKSKahXv0vVwdImIebvu0pAmg8v4czw==');
define('NONCE_KEY',        '1PfHQFvuxNna6FttOZejDeW9dIYj1L2Ch9ZfBtx0fwRhC2JNn3OtWiKoxiz29I/TllK0OlTWfsYOySGULuQ6bA==');
define('AUTH_SALT',        'cN5Fg/SQ6+ZyP4DNQygMo/oDth05lelSdf3bnECPvqvfCHRLhd9a/VagvMP6bPw7+RvhmaYAJaxDOF98E7bNOw==');
define('SECURE_AUTH_SALT', 'TTvP4lGJvlQYud3M0jlSQPSg8J5r3/uMofEOgxEZWZomadUj5oUXu3EOQSlRXL7jXTo7jSTX/QSY/63XkgR2zQ==');
define('LOGGED_IN_SALT',   'BitBJjxqb7Sd1XUNGtzp48Om35THYqEtH27yMR2zkQE9hHlWhct9O1Wu2ADKPhhSNhcXfnK8Y+w7kesQa+66Ew==');
define('NONCE_SALT',       'SJ1ku+FdR32JCgtFouYGie1V8uxetLSzhBdEp7nJ2cnRyIXXRI/7p8/gPcJBpZHZYcUE0k8BmbAGvY+tZcX98g==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
