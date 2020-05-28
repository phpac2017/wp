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
define( 'DB_NAME', 'bamboogarden' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/** Install Plugins without FTP */
define( 'FS_METHOD', 'direct' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'L*]J_@:vuLll,q;@=2r6]?,ZKg13Z/^d; W >T&EJHb9b#0(_T*KQU;822wY)IF-' );
define( 'SECURE_AUTH_KEY',  'D2#;8{&{<A+=_(6g7tUB8j91me~FA5bwys0gBy*^qgTa0{[h7-9{Z{%pC|vX!x!/' );
define( 'LOGGED_IN_KEY',    'M#FJT ,`le$1Cr_rogBpG$IT(z~Mv$%P4[&MtZh9&1~_  $%6//AR.lBpNfihwu8' );
define( 'NONCE_KEY',        '2^6c<Fm}pTQ3i3GN7:,R[[`GT%9*KYKZ+0tGuFVp Lv.]uK(=/w-/Zpg6s1[$s15' );
define( 'AUTH_SALT',        '#z1?uOyy9RwHMvN(UxJj*+w I|2yn9gjbc @eL_ziue|RS5j2M@1>`6tr&1/P5Oy' );
define( 'SECURE_AUTH_SALT', '%fckwn`BHS^.VDbmy#UWhXW3_;c!+Y&<h[OEUK3!FozpHk/ 2k3=~U,t?[?O~abg' );
define( 'LOGGED_IN_SALT',   ']7M}?59Sx^Xd,R~p5,`&WseTJ@FT0oBlrD93As/^o0FQ[;|-nrRuD1g`K2tDX2-c' );
define( 'NONCE_SALT',       'l+e9(5Q]T(yWg6B)yMv, JP@.FKDdg4@kob!E,lIyuZS,8KNoFd|bODi#tG!vEpF' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
