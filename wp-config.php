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
define( 'DB_NAME', 'khmerfly_db' );

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
define( 'AUTH_KEY',         'p(=~98u3cLndePh$6=I,P)DLP,G{86HZPsrv>BsaF Be0[=SQLhy@,8[le10o)~r' );
define( 'SECURE_AUTH_KEY',  ',0qmD}GIy`c1Bt>,`(gL!]G?nhyxst1(e3w`N:.Gt5|F[Do}?DsgRpVU uj 7O/r' );
define( 'LOGGED_IN_KEY',    '3y)ClpZpGHk;%}li-!9Ao*n9 f;_q/UrdE<`,lkVM]CbY`LLD|G&4ly(PM#ZiEJK' );
define( 'NONCE_KEY',        'n>~r,$LA%< 9%n[Exd+&X@/5}m%Xo6kBz1.bzrRo`hJ6g`f:~Y09<03*R^X9Dl2u' );
define( 'AUTH_SALT',        '3W19ae1Paib~#o$}!=wW+35e?f__?y!Ubm:PoE<e>&_HmG}@tzr]BJ24)CtWzjH5' );
define( 'SECURE_AUTH_SALT', ':D78YtW|;P=NE`6<v@gh~(;h`!oTV=#}m_YP|}[<NtpbPJ-H[7H<V85>iN}LeeGc' );
define( 'LOGGED_IN_SALT',   'o=l.[:l_v[A8XmS&W}e( RngW*5tFhfHe6bBt,mt6o|~}qW0dxO0uT&^ND8,3HPU' );
define( 'NONCE_SALT',       'D4WaiZNAIfFobr{IS#*EG.i.~ZeC&e2tGoNoTc4@{?V@c`r,2wiRvOpomRYKVdr8' );

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
