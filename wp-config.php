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
define('DB_NAME', 'wp_custom');
/** MySQL database username */
define('DB_USER', 'root');
/** MySQL database password */
define('DB_PASSWORD', '');
define('WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST']);
define('WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST']);
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
define('AUTH_KEY',         'd3hOoClBIJP3gYyr4F6Ip98E4tA6bDiglRs7ITo47bqaUjGiKkfuuvYiSXOf0XCP');
define('SECURE_AUTH_KEY',  'hNOsIjZuf3Km7pYCNvB86OY95u7i71l8BUUaOT92gLNSpMwcCo4QFrqF5uHpsF8i');
define('LOGGED_IN_KEY',    'eeZOqrgxyJ7iRZsjJJU4aZtdpXvcdzJ6d1xak87vpU7ifcQDL4gibV8Dii7o2u5f');
define('NONCE_KEY',        'hOY9DB1qapkdSd4LhdZAKFf2hVbqddbPHakfZmbXOrXgklUVINGMZiYGNUQCxThp');
define('AUTH_SALT',        'LTTXTqAM7gWlnwZ2imoC1FA3N6QGxIgkx4WxSDBm57MGAfadN6Fvbyp23UCkJ9b0');
define('SECURE_AUTH_SALT', 'SuLFBM5SFefgZbDQuCsoPc2oZe9uUjZUczA7nzxsf3FXvuRfCZ8khQyKuS9hIz5f');
define('LOGGED_IN_SALT',   '1UZrIMpcjRXMn5wg9h6xNC4BkweRJ6ndhArcgrFFpl6NQuronLdDhvnQahg1oJlX');
define('NONCE_SALT',       'kigEdFNLgr2RngNrun2TDiCWGCZHh7LSQvwowWWBAMD5G6hgKCcNKkk5kh7ubeWs');
/**#@-*/
/**
* WordPress Database Table prefix.
*
* You can have multiple installations in one database if you give each
* a unique prefix. Only numbers, letters, and underscores please!
*/
$table_prefix  = 'custom_';
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
define('WP_DEBUG', true);
/* That's all, stop editing! Happy blogging. */
/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
define('ABSPATH', dirname(__FILE__) . '/');
/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
