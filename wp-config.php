<?php
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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
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
define('AUTH_KEY',         '/jVTjuGf9HijfmS8IqhZyhFWl7w+lexsC4pM+ufjn7CdUPaR8Lt9Wj0Mtu+Wg5n9G3hfdRgPszhiu67cHjAeSA==');
define('SECURE_AUTH_KEY',  'DCX6F9RjIwQHI9VL/n0hKPzeUEJTaLEzjjqIMwbvYSAJI3W3lbBE/IF+YQQlw1GGGFvKqqIouhfL21SXgpiaqw==');
define('LOGGED_IN_KEY',    'ReBt7BwI/n3va4uaEzyPDGHc48NmOQBpb2u7aGPgmqR9pejYL1jG1QUyQiN98VzPNrbPeiLmu8wNC5/h9iVWwA==');
define('NONCE_KEY',        'c8y/NIFQB5n+j6hrGb6jeFlVjjPq/NW9/9oanErxzRZDmn8k8hduAqyX5DyJooRrkcGoUQccTxz4TENodayRyw==');
define('AUTH_SALT',        'ySI/lVW+8Jlh8H4kfC1/UVvNg2xpuKWUkJ/rvjaGe7TUI5L/ekGpApXRsjLsLQL6GHj34epsirYqBdfJv4SUyw==');
define('SECURE_AUTH_SALT', 'tVfQZukmprO06HiMQ3FGO1/DbjKWd/XKcGYpBbsJhyV5/5H4HM+jNK6eE37cGxOd25jgrKHdX6zWVMFnSc2ILg==');
define('LOGGED_IN_SALT',   'wYQnY2hlRTAmf/pL0tXqbc7DIbHjg0ricTRjN5ZugOrJQEjIu27+w3Nfz/qj4GgayMOMFPuNSh7BJR1UBF68hw==');
define('NONCE_SALT',       '+BroRg8TJT4q9iT+SDfseaVqg58ru60YognszZ61OIajYJN/u/e6RjwzVTGlgePaJZGA/e0TP3Po2084bZOM8Q==');

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
