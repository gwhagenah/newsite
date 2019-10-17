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
define('AUTH_KEY',         'akibgjwvqA5AFrTAErQqi/rDOcxYaJN5wklwtKZFk2LyldN1INeZgjvGTSht7fiADSeskRckzS6jSUxUHXmMpA==');
define('SECURE_AUTH_KEY',  'p3CSeHbdJbq2eIKFiOtKuMoyC9gXiH8jYSsMFWuX4BS8KEereO5Oxso14SILU+7+aFQhw6eWHUGuN+T9kQ8Ngw==');
define('LOGGED_IN_KEY',    'wIVnDm/TjzqxINGssZV619S6pKOnLW/tCowmQIrf0XRrvqUvsy1k4f9vGjBs/LuQZHghiO1RhTtTeujgDnV7LQ==');
define('NONCE_KEY',        'Ele+zmIh5NhWaIqXnwlNDXJpuvK7wcXH319bNg3WPXpzm00ChUgPywvBPsTXxx57FlvOjpvoCJDifpoxNUjbqg==');
define('AUTH_SALT',        '1BRPJ84lvCs/4h/zXB+QA7x6ore5UmetxJK8iAW1basN0KRf6QjzGImdoQC90bF4Lc6iJdOy98xaUOrRRnefOw==');
define('SECURE_AUTH_SALT', '6lDFjGM4ZoWxhBIASjBDCG4nHebQraiar0Qk53idbkOLhgU44tjnJC9VEUiNKCvCsIm0KNDmdd2eLs5gNApvOQ==');
define('LOGGED_IN_SALT',   'AbP6gSM9kdqcqorhcC+VvLdoVBe1ZRJ2mOOh7iKtlLrWbPdQEu61Z3o9evW/kr4P3rfHitqkSkYHO6V/g8zIbg==');
define('NONCE_SALT',       'TSyIzSjxj/IOUml2Yh8QcAt9akQRAoOA+fCM2YLWMRk6lIk++H4rlfZE8J7b5OVWeomyN98hecaCUTMNccpgXw==');

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
