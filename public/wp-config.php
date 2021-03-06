<?php
/** Support for Composer and Dotenv */
require_once(__DIR__ . '/../vendor/autoload.php');
//(new \Dotenv\Dotenv(__DIR__.'/../'))->load();
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__.'/../');
$dotenv->load();

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
define( 'DB_NAME', getenv('DB_NAME') );

/** MySQL database username */
define( 'DB_USER', getenv('DB_USER') );

/** MySQL database password */
define( 'DB_PASSWORD', getenv('DB_PASSWORD') );

/** MySQL hostname */
define( 'DB_HOST', getenv('DB_HOST') );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'wmJ2yH7vxuWstMtyAMV3r7NjWkgw8H1kQCnk9jKXgJMK8tvbzEILvy5P5ISiaUkq' );
define( 'SECURE_AUTH_KEY',  'FSOjb7ohA9M70FiV5tXQMrvjYljXXs83mHgrkjeTATx08ra1lMjtRpYAtMEBMkkm' );
define( 'LOGGED_IN_KEY',    'EfbfPht1nuFLYsXai9eOnqg2aGsuxcS9Ol9ZxBKeTgGH3zrdpEGNEtqADHlXX0p0' );
define( 'NONCE_KEY',        'OABBRkB1uMU1qz2aeeOZRDyRmQhvPaDAJVeC9xqidNYGtiY08CVYUH1IhcJ4fjNI' );
define( 'AUTH_SALT',        '06KjSCW3Rl7dIMghpma16dMZoG1po0KEIUlQHa4Xy7QvYQSHvQqxKJ2C9Se7Y58q' );
define( 'SECURE_AUTH_SALT', 'BTeivvFVrySO7RqSo8IwTinx65RCLVwCmQg8Qys7UPOD0riIEswZddOVZgcjsJZD' );
define( 'LOGGED_IN_SALT',   '4HJh8noO3KEquWBuoSh2GnX6MsHQ0IiAZMcoZWSffzMKk4IJN5BsGIAeQFbwVoRQ' );
define( 'NONCE_SALT',       'JkCLxN1aZxbbfyoswuI8wAFDDN28HVJDw8xiUTDfCOnRp1gAuDeexKc3p7ufc8rs' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = getenv('DB_PREFIX');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', getenv('WP_DEBUG') );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
