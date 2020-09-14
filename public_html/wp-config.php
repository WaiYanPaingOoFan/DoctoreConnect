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
define( 'DB_NAME', 'wordpress-one' );

/** MySQL database username */
define( 'DB_USER', 'wp' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wp' );

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
define( 'AUTH_KEY',          '@@pe^W&C;G.=1A)S4<x:]gviWI(5E0h^I=?h4ylEz9Q,(.eVyLFQ|*DR(0( J%/1' );
define( 'SECURE_AUTH_KEY',   'JMk)R8:i_;Kr[[4?1&2X/qQYN:G1bS]%DEe= *1`Wok9:kgA]F|1(E7CeP}$4`cf' );
define( 'LOGGED_IN_KEY',     '4#Zo#JaEnR`68~d|$9r!X}r|1cg`PRDKKHLZuP/mAw|]S@IX1i~U+lfN ~D=87p[' );
define( 'NONCE_KEY',         'ku9%QvX]/?g}/Lc)Yfb.s^%0_t*^Q]1N( w`#n >4xj* gx,D/qfJ)m+E4r9kuAi' );
define( 'AUTH_SALT',         '$[5&j@W#dSxt*Q04Aez$^6#a}wo9*`X?3U11vSj,q3v_@c ECfVHJd b$=.P8Wk)' );
define( 'SECURE_AUTH_SALT',  'a!H#@Sgx?6zgpd)42yd*84*@H9Oxi31lOe@yDh66@o5Rl{Us6Wz0~U?{6f;nj>=I' );
define( 'LOGGED_IN_SALT',    'RXl6B}aQ/1oX7T+MXz<b6/^xc^US;`!XCB`Fd|F*r_S&Wy-|CjFT~;l0aNq6G!d0' );
define( 'NONCE_SALT',        'yNfUTdZ(CZ#aT<27bsWO1ki<9ENn*@sa?E%9(4?R?__vVgR;Bp@bAc}Fk*Pz_:&l' );
define( 'WP_CACHE_KEY_SALT', 'AHRU+p?C_F)_k.T:v/H_>jTvyo4=gp#KG<jAI-r/hf-+`k}/@OHq)A;X1Cds]zVP' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'lsh_';


define( 'WP_DEBUG', True );
define( 'SCRIPT_DEBUG', true );


define( 'WP_DEBUG_LOG', True );
define( 'WP_DISABLE_FATAL_ERROR_HANDLER', True );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
