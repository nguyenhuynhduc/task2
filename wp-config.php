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
define( 'DB_NAME', 'task2' );

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
define( 'AUTH_KEY',         '2lW_~tQGTC7J>g$2 j*V9{;8QF0#d_@P^@=1LB{)~2e<.UNE_UR{6jcUOl<ag:b`' );
define( 'SECURE_AUTH_KEY',  'uG}eu(&t.A>0uV?i#0V+W`oUaGuB5z1,hI%X5TCd466ah-YzFE)kF=eC_:B=.$=2' );
define( 'LOGGED_IN_KEY',    'Rn3hQ,ten,5ty$tGtaPP1*(4g~0qzDp% Owqf/G>[>R4JT63$xd;=~|#Z#_B&o|$' );
define( 'NONCE_KEY',        'u[^Sp+*us?;U{)GOd`u&Y~#kWocqwOls~x]UyBrq!m@9OrkZ0nnBchcnj%EQ6&]6' );
define( 'AUTH_SALT',        'T9#O5bZ{;<*,szd.u< dt%,02&:G56-&4JAPV8$#Lgv<sOBmdA`Ya46:nr~QEv8w' );
define( 'SECURE_AUTH_SALT', '!auX^F2quLb+y{)FOhO0=B.hSOA.+Yq;lH%L~&^Q>jLTxGX0$SwAR>N;a3{kSLZe' );
define( 'LOGGED_IN_SALT',   'l12M-GvJ 19v,hX=2D:MgD8hgGND t^ZFUIPw-AC{_N+1?yW|_.Tj9H+u;u}C=cy' );
define( 'NONCE_SALT',       '<2~wUg~;H2Fg I .,P+na)d2L&tSoP`y#UsGNr6AFKg0ra^#L:cCcjN/Bph)Q.H{' );

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
