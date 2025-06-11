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
define( 'AUTH_KEY',          '+,${a?sW]%lqZCJf:8Z0<P6OBY`AT!k@X:@?YGYwHepH`S00fE.HDkxa2m:mjSjg' );
define( 'SECURE_AUTH_KEY',   'YTK9;wQJ@i S*NvQ_y,mMl|JDQ xSH-66>?;V[:!-wM}V_`W|%:%l#n+$&xI|@aV' );
define( 'LOGGED_IN_KEY',     '5OdD<_$W5ZZL4IBTD?6FY9?eEW_[#79F*x!~-32y#i62aNF5KKgH]`uq#Bo|x#u ' );
define( 'NONCE_KEY',         'Y?rcV8-yP=QDz_(A2fvXgKDJaH<p`.|g9.u*Cu,k6sc!s2OhRnlY.:U }~T,B]VM' );
define( 'AUTH_SALT',         'q4/ 9Es}hk~#N_VG|kP|sB=I#mUE9b7Iz~JeSZ3c&I39.qm+#<.p6s*N4(#aY^+K' );
define( 'SECURE_AUTH_SALT',  '#sT$sJi/dhd:qqA(.YL9s!&m}togFR QS<pyzD|4jR xo}MRi~rFO=[T5R@%Z5wA' );
define( 'LOGGED_IN_SALT',    '0&FQ~$-<C(z/qH<V{Vn>bds,@/qO&/s $E3NPvJ9v33J?ZAAo/_k<9SZ>jP<FeZs' );
define( 'NONCE_SALT',        '~H/J}l 6L.O:!-{`id}@4ErSWP:Xj|szZT%gdv)Txxn|+~Trpn{zLYq5lQ,/NnQ3' );
define( 'WP_CACHE_KEY_SALT', 'J{bxF$QA#/WN<w}8FOIo-NVM[q)Llrosck~X.R&vV(EX7Wh0mjaUgS0f9ii]5#g(' );


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
