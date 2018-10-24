<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

/** Enable W3 Total Cache */


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
define('DB_NAME', 'oah-16oct');
define('WP_MEMORY_LIMIT', '3000M');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '0cKBYFyfEw4DqnB6snbdi8u2X3epwLofH30EBQJBPrrzI3Ht3Q1xx7eAkrGsf2T5');
define('SECURE_AUTH_KEY',  'I7u1RqYh2LeZ5JqXplhUGXiWT19c3U4KA4059OdO3r4wz8IGgAgxU0j8BeOPcWNN');
define('LOGGED_IN_KEY',    'iaCR4Zk2Oi6LdKjRn4ppLRCX427SNb5oXB0dxk5jXqnVJG6l84mu9Sfjh6drClb2');
define('NONCE_KEY',        '4UHvChoUbUgw2Q5SWMy41ifTWjfpglxaUO3DfLFoTthmSfear2eGdA8VdkRtMsNO');
define('AUTH_SALT',        'T0cv8TlydwTnpV6HlMmHJi4zkFt386jfbtp5lS9EnLUs0hXIM7zWAk6QtoKfFIKw');
define('SECURE_AUTH_SALT', 'BikIIGVKFa4tBiJrOgijzzaETTvnEyLkIVvhWSx0k0X0Viuenwb4LJKfyAFOcxWN');
define('LOGGED_IN_SALT',   'I3jbcibdT0KaZ6wsmGaPzAnUhwZ4tthTbK2dnKxt30iUI30x7eLOtUawlAL3BaGP');
define('NONCE_SALT',       'hD2WcSSLEFw2ioYCQwIX8RDv7UAZ8quzqb07E6cOEzILiKKINOG9Vtvt4N7sqwg7');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed upstream.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);
define( 'WPCF7_LOAD_JS', 'header' );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
