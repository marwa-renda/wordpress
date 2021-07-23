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
define( 'DB_NAME', 'simpleapxyz_wp778' );

/** MySQL database username */
define( 'DB_USER', 'simpleapxyz_wp778' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Sbpn]1u-34' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'mekg0yzhxdlegtu8wkyixo4dwy0abclea7zqo6nisrvgjqb5m9uvkm8w5jyb6lhl' );
define( 'SECURE_AUTH_KEY',  'alwzfxf5d3yaavcgiuz5ljgbvqbs19anhksbjep58p5you6kzqsvxnvqntmcdnd1' );
define( 'LOGGED_IN_KEY',    '5sce8bulb5vp11me3gkpsnel1qm78lzz8ikiebwjczmtbcek1tbtkcjcisripits' );
define( 'NONCE_KEY',        'xupdgvnu7fs6gy71qqjdfifr4wdlqsfjmypyzzel9dwtxdaxqfur1dwjhlqcpdbf' );
define( 'AUTH_SALT',        'ggpbeny3m1xemvpxe6dbfqfpbxnuvr8vyi7w34jxc2klryohd8g23rkpenzauyx6' );
define( 'SECURE_AUTH_SALT', 'fl53u1ttvtus2jv34x7bvcamjkxhifzamatod59sz8f2boxtjw7gijfimyaujgr6' );
define( 'LOGGED_IN_SALT',   'lwtia67obvipqhyqy1byorzcw6xu8w3bk49o0jd0ctv7wjkfw65dcpihgfbeghgt' );
define( 'NONCE_SALT',       '50eu5yiwxiifmeywkdpf02w9ksxxnroh6xcyptjjeycxbqf1kz4g7b9hma0rhqcr' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpan_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
