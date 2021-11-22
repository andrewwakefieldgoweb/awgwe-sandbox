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
define('AUTH_KEY',         'xuAqKuhDY91gdCf7ylLAtPm6uI4lLobDTq+cH2a7dV/nXbdli1F/F+xby/VShCmg3fRtmU55WggKofQKttSywA==');
define('SECURE_AUTH_KEY',  'TVMgMw2cRmXwyJUmMeXChH0hnlq9+wztsrIL6kMHGI4TdZp6wrWKSc8Lyf5m+RkpXDYDmxicSwYEbCWDQFifSQ==');
define('LOGGED_IN_KEY',    'P+r85Lvu4Yw2U+a16GXUNcD+Eg7q8OjCkeaTN17TsziTaBDJXu9PezqKvxY5acebtm04xQNLAU9qsGkJhJ8RCw==');
define('NONCE_KEY',        'QdiScNBEZHhwBH3oIyC4isKIWv6U+P9/ujlaY2r1cosaBVh13wlNbIxoMSpVOFhZsTUesLnxZYqlDLv5J+j7tg==');
define('AUTH_SALT',        'ni7zInRB3z7pFgBgSj+xAgsPfNaFY5H9hpnR6BHnWxiLNkJEQkXMIUOVskNkHzFZpXxE+iAQHtviNVCLcA0Ecg==');
define('SECURE_AUTH_SALT', 'iNfWeowjRpsm8fWbeBaQn0RPatkNT1Dxo7ZL/2/SY5cCdCmv332Ls6Rnri8dtoybV/vbl3PtgQ6liXzsSxmTtw==');
define('LOGGED_IN_SALT',   '3pu8KWc+1d3JYLgXb65qd3NNGepGkW+dqW8Pp01mfTPMvJjnlGsQKap1XdyPoKrN2dnMxm3YXEqjZl+/oqcUNw==');
define('NONCE_SALT',       'JNxpaBiGxvHYsZqoo0MWa3zmXCRlJ+Ver4yaHaY/ARcnnZ+Xr4tKvgvvrHyWFkfiw/yyX0ORW1SYYvwdtcQPNQ==');

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
