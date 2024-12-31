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
define( 'DB_NAME', 'wp_q8m6b' );

/** Database username */
define( 'DB_USER', 'wp_cv8hi' );

/** Database password */
define( 'DB_PASSWORD', 'Gpk*0MnDGa$k04~g' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3306' );

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
define('AUTH_KEY', 'i%h50&c0d82K|_;#]gJp+*/@dT!sW6-@Hp1:%(U97~LNM0(o[Nawau*(0|1x)[yL');
define('SECURE_AUTH_KEY', 'FE)CyZs6M!whk536*CliM25Zw&8h6318R0vOi-r(oex:n0&-+!#(9/X4G_0qz43G');
define('LOGGED_IN_KEY', '6_Z2au6J79QyU@/F;o3:2~H]4s([PG3L5b9B32*1m85#[8H2lPxGDNOn6ljd~JDs');
define('NONCE_KEY', '3Y0_ncT9NV%l)%Y2*)S-9RIm4[xCnc|hEFo0[7QCm67g5SQ5w1v35~8YOz66R2eZ');
define('AUTH_SALT', 'v|*4~uhf19zvfS00sw1DWR3Ip4K;W4Df%43y2W(ZOj~5+Db3s#eX]PC2[iK93%i~');
define('SECURE_AUTH_SALT', '*Hz02Z-/;%%!S[U0sf5i_V:rN0Vg71700H8d_@2|D:zRg9M30Wk6+t[k1Hah578Q');
define('LOGGED_IN_SALT', 'Q_x7rG:bt7p70er7WVBse9&@;#Ou@-eux22YTl6v2o@m3P&Z85/Cw2:S/sgO8#a2');
define('NONCE_SALT', 'E5v[A&;nG;l809MFwM_:pPYM1sO[F6H1~#]M*qJ8#9~3gF7-8(FTEBE-CczJ4wwE');


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'w2uV3t_';


/* Add any custom values between this line and the "stop editing" line. */

define('WP_ALLOW_MULTISITE', true);
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

define( 'DISALLOW_FILE_EDIT', true );
define( 'CONCATENATE_SCRIPTS', false );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
