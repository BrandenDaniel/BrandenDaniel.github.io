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
define( 'DB_NAME', 'kampung-story' );

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
define( 'AUTH_KEY',         'jecFOc_,Oq9)>(({RuCng#lhz.n=_iphn|!.A1j`^Z1O{YG4]DVzrAC;hnZC<E,N' );
define( 'SECURE_AUTH_KEY',  '8eo|M&:5Yw([R^K~WY7fl3h@P|:!ZO(8!ejR?XwjEq4nk&93^n0#)>+w:5twhO/H' );
define( 'LOGGED_IN_KEY',    ',6yNJD3Bm%8P&3q{n(Y+En,aStp6[: !;pX4dghLNn*TC0vo bE-vO[CDVE5|ghp' );
define( 'NONCE_KEY',        'j9`<GeWc2YET)?0F|!TIz03,3E+3)flc*`0A?XN]{^7B[Y@~D;!1my|y>]dmq~My' );
define( 'AUTH_SALT',        '^B*bt.I8akzB+L;T#}> yA`F>~Qi`.n&41jte!V&DY:va,1Q7FOI-6B!Y:=/R_aK' );
define( 'SECURE_AUTH_SALT', '!Hs?7(Ky~tS;A9Hl:tRO&1#bX?!7&YgSkq@FBvi$(Zo~k|~nHJzQ$,AL#g !giH/' );
define( 'LOGGED_IN_SALT',   '&0v&,K?yf;Uk9rfwOD2WA{tzzw90yv2dR#aJA9Sg$YJ-uG)9FZ5?0n_m;3>2c9Z9' );
define( 'NONCE_SALT',       'kCT}2/jZ28hgr 9OMx.J$}#BRI$9^Jek4]EH80Zq!;KQ6pMN{@GM|z(1eM|F;UQk' );

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
