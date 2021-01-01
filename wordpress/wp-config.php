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
define( 'DB_NAME', 'litani_wp_db' );

/** MySQL database username */
define( 'DB_USER', 'litani_wp' );

/** MySQL database password */
define( 'DB_PASSWORD', '123456' );

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
define( 'AUTH_KEY',         'kEX*/dU[m(*9S2}^b)UK8<esZBcbp48?yvU)k3:S3O(3%iW;y0,tj#W/C~]!F&tM' );
define( 'SECURE_AUTH_KEY',  '<28_P60+Wo74kkPlb0YpPh^59Cs&2inMC&,|A9v}G:JT4<~1au3|Z>,+=mUk`fe(' );
define( 'LOGGED_IN_KEY',    ',2nrcXd55@2_w0QZ9V4gq.pLym-^V.HrCW8BP}?WyZ9!tp4=l^/1UnRu!0[1[9T^' );
define( 'NONCE_KEY',        'lLx*1@)IKKD~zrFB|DS@~.c<3K@Q_)%#z!PgtYP/a#]%Q=&H#nU2E<(~SCylaa7=' );
define( 'AUTH_SALT',        '>QWr;:^iw6EM.G.XBS%.7D8:6>{:}RGYn$q x~h$+[z,]BvfO|=Rf1!XC[E- t3@' );
define( 'SECURE_AUTH_SALT', '!mDt_8EH@J!yQgkkk_dCf?M3GH)R5<}Ky7t?bif+)TL7rJ0al$Mo-)Em WA8Y)T1' );
define( 'LOGGED_IN_SALT',   'SW}R^m9-sO+HWkNp6LzAb.~=5!+Tn*dC6>|=pij= |<NO?QpKZ=::gd=k[SBqZ3%' );
define( 'NONCE_SALT',       '_94G_G`ar&4n)9[|G~8DpG{kezTz_yA9Iy)}|0hD.9qsqP?pY!XU4~C{D-7;}M2=' );

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
