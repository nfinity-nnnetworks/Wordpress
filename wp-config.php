<?php
/**
 * Configuration for WordPress by Nfinity-NNNetworks.
 * @link https://nfinity-nnnetworks.nl.
 */

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', '_' );
/** MySQL database username */
define( 'DB_USER', '_' );
/** MySQL database password */
define( 'DB_PASSWORD', '_' );
/** MySQL hostname */
define( 'DB_HOST', 'localhost' );
/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );
/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 */
define('AUTH_KEY',         '');
define('SECURE_AUTH_KEY',  '');
define('LOGGED_IN_KEY',    '');
define('NONCE_KEY',        '');
define('AUTH_SALT',        '');
define('SECURE_AUTH_SALT', '');
define('LOGGED_IN_SALT',   '');
define('NONCE_SALT',       '');

/**#@-*/

/**
 * WordPress Database Table prefix.
 */
$table_prefix = 'wp_';

/** WordPress debugging mode */
define( 'WP_DEBUG', false );

/** Trash Settings */
define( 'EMPTY_TRASH_DAYS', 7 ); // 7 days

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
