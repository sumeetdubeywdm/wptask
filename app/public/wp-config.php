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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define('AUTH_KEY',         'vXHObyZtl5nLE1etSrQTS5UPO1veDt08cjbQ8D/qsH2ysUpP13vIRI1FWSjXEmr1ALnGAuXbMCwLkIXtmBU+vA==');
define('SECURE_AUTH_KEY',  'vNfqt4Hcz+RAuSWe0mLYkD5YxIWQhchj443M/OIPj2PebeIyGsO24Ns42K2bdM4aiCRl97Tgnna+CQLahMfnhA==');
define('LOGGED_IN_KEY',    'l29AR27+8ajE1T7AI03sy37tYk+4qRT8j/QlS5hosRQuCoSKSDuvPd/1XicoRdp0LhJr15BZCSLl9NhUiD4qZw==');
define('NONCE_KEY',        'wQj+EQ5eWe2/2te9e2odvIbXctpO0Glhqus+QG3gZsYIAcO0hskp5ubzOefCYUkfTt8OSmDkvCG8uBCSvXWFFg==');
define('AUTH_SALT',        'L5Bva2AZ/l5tod1tUZ4Ij4QcPTN96lgpAczm/BEDbaEseRYUZHLH5MjM9pQuJhWWTGzFx7ZWkWD4wakyNQQWmw==');
define('SECURE_AUTH_SALT', 'RjlaOk/1uuWJRvr58yXd9iUYSgDeG3DwulBDQsjrbYP8t6+P7XG7EZKWZvDq7Epy3Uma5gc/KAwTqEbJ83vYEA==');
define('LOGGED_IN_SALT',   '5iAv2UyLJ5v9/mv+vA8Z9qqIegEcN+nsFiBcFaRgoQP9BQp9i5BpmQD25tJVGswu70ysyYhcl4aIduZh931anA==');
define('NONCE_SALT',       '6+Ow1xfMHyrUju0d2WiWLfgCw4GK8FUK+0Z+MAX0IRkrXt1auiC45TGttiUlk5Dis02YY0KgBXypO+hLD6gF+Q==');


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
