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
define( 'DB_NAME', 'sports' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'u-L%0PyIJz6eYidKT/>=V7z1<uo@M*Zc7*tC,Fwgik/SL&Jd~bOnGP$)G~.kl@!2' );
define( 'SECURE_AUTH_KEY',  'fBCVfR!p;GthC ;Ici-lvJZjK#9I*Apj<79wyl5_7z~d5,LPt=vTrX#5D-%P==S?' );
define( 'LOGGED_IN_KEY',    'hQaN9YTUy>=WZ.N A,mh)*XCchMn[SNmgEbxWcNq=/ZUqxmiu`5S}pzDZXAQg2RB' );
define( 'NONCE_KEY',        'Q6r;FL^X:HsmkcS%O!6>yp1rr@4]%ORp<7YeIN@rwLWx2Ec-8{x<:!8oswIZApMv' );
define( 'AUTH_SALT',        '$RlVi<Pv_L}!Q&2loOa6KlmBP+&p|I#|Qdc_{@,iR*-|fM9kV<Ayb?TS,T%A}A 2' );
define( 'SECURE_AUTH_SALT', '#o{4RI_+g5Tj@Sx%@vP,SJy,rD-U+S?@}m8V`YocLTjAa?sejm1v:[Xwi+^~/,~@' );
define( 'LOGGED_IN_SALT',   'p^!F8Spp..5p$u[V0>q5DA0J$QE=_%XOG0;1]L<z4[ae3HpRPRZ+rYal]1x?el)[' );
define( 'NONCE_SALT',       'M 9MsMk+-i8 &H)9q1a=M/n[4fqiPKU(Wqr_{avq<(NC}U O26DJlE,.6Ud%#5_?' );

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
