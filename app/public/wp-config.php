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
define('AUTH_KEY',         'GfGoeY67D7vpFUoYRojDULRK6fH5+iLJLMpQRvvYTpcavN72G2J1vJGfWZ+arpEZraodsJoRK8lbSApd3RCWPg==');
define('SECURE_AUTH_KEY',  'MBpM5NiHe+dfSczoPVvqq7TNzC0xSgshFGOTwkUKuqCFVFetYeOIHNYySSrTcs5SPpri7zE+CLI6RHYjq6UMXA==');
define('LOGGED_IN_KEY',    'bDzQ4WCsfkeoLF5fl8OvuB3h88nsLWxE4Q+mR39NjICzz9A3D0zKfZSMsVN7spqc3M3W2dxc+6TdF07wyDZtlQ==');
define('NONCE_KEY',        'LATERlWnQ+HMZrJkk+qNipciWitRF4zbX69eF2mWn6IMbscIwVRrCia7XMTOhrDUWhTT1svBqaiM4yigz/Ol1g==');
define('AUTH_SALT',        'H5/r3kLQ2P+fGPhO3K0vID7PKay+U/4ThSe/vrii/KvieHl8AWtrY8Q8a0zTbAAzNF5072oikIepduH+GBzloA==');
define('SECURE_AUTH_SALT', '7IWOoX609rjGWD61Gm7BjFi4Azry1UIYO78wBYPfeYG/a0IUU+UN5kkI5dqHGzOCzHlt1vjgxhBH5WGq+v2aag==');
define('LOGGED_IN_SALT',   '1DlvxKkxfT/u38WvGB0ElUKoxv9u5wowJTDmoIwn1NA78LZ80hhRyHK6xqHgqfHXQ84MlgZurQeFHbYq87xKDw==');
define('NONCE_SALT',       'Ht8zMddi9DiLwGA5SgIFPINpgntWx0jcqnVGdiT0BUNGiEWoqLjv2aFO1faH6MOsisDEKf/aVa7MIOc9oF9f/g==');

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
