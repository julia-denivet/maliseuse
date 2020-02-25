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
define( 'DB_NAME', 'maliseuse' );

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
define( 'AUTH_KEY',         'lnxoGj}xr@gs`,,i94!@eM^ufnjW3%`}TsK.J+4vSqBR6H=F;wr?]{>#2t78]xM^' );
define( 'SECURE_AUTH_KEY',  'mzO`;KM5+mM,r~izXbi_Fzg!quD@}_&Vec|O~+Ko]!i_DT,hvO`#&LW.Xyip&D.n' );
define( 'LOGGED_IN_KEY',    'h+sQ!adB<{l/$+VH8]3LJNHs,5lQl&ELu<a#(6Hg,f:f? ?dbHE],O`rY?%)zZfb' );
define( 'NONCE_KEY',        '=F|@3T`z8l4OKY>Ij>?3=u@qHk?0.mKNP{U<:i+Xb: g,w^r$f!qWddsTCbl7_ZV' );
define( 'AUTH_SALT',        'XCZ)b=DkGl2:n1FHT?`MphUelOI@sMofSLpBFxQdZ5kvT5SXzC#@rV57STGVbX%5' );
define( 'SECURE_AUTH_SALT', ']wmU`qP:(W^~c(*O7(,_ll<33PZs,QcE5@:A0Q[/nAu5tf`hVE%Gw`P@aqs>< y=' );
define( 'LOGGED_IN_SALT',   'pP8eV;MD3bE/wvOQ0,dU,^~eV{NgtIA`H4VmBc33^SV?R59#lE(!40nI{akotIG6' );
define( 'NONCE_SALT',       '%X5F40?][|i}6E0DGh/)z9|HRj_l/Z,41x()B`$8|kMRjvp#_>ekD_.Oe9.uxiCC' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
