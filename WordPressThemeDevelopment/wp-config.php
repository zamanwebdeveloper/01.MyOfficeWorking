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
define( 'DB_NAME', 'wordpressthemedevelopment' );

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
define( 'AUTH_KEY',         'J8m-Y%D5qhBi5Wj/Z^mNB%LV}a@bC2O.?FJ!nPy xDSt!58X?/Nzc!:H!z#AMIG4' );
define( 'SECURE_AUTH_KEY',  '{@)WwTfw&@PCC,16i=azw=@9 5wSPT%,mM-.a[uKlk.C<,nI+lPPYLJ-w.pjX%F%' );
define( 'LOGGED_IN_KEY',    '|ktz$qcb]K*4U&!$y&q!Z ] )0*hIZ07zNyL6DaG4,NNL@uI).4aM)66 {D 9Rvv' );
define( 'NONCE_KEY',        'WEvqR(Sou^31z?VD$4C+}yaw$Ur&.Pt|p7 [/NMTp<E3QFP/OsB8/1TK8{D@g}V|' );
define( 'AUTH_SALT',        'BmY2DW6V-y1TPOonkCe-DwrEVnh/jl]Tg1y<tkEBt4)Zpv3LKyUzzhwI:Cvj3?q%' );
define( 'SECURE_AUTH_SALT', '-DA7m4Xw_LmGl|#c+ Ss~rSf}Ik_U0i(_ VBY{Hrf/)c@rL|u4T^a?t(?qfy?;4-' );
define( 'LOGGED_IN_SALT',   '= 2#.hiXK;3jp:%0sC<fUQUz4lI-x[BEv$5l*IU-Ozg/ DySR~8}gB}likUqKJ.Q' );
define( 'NONCE_SALT',       'FQW3N+t6N+zK#Y;lcm4g5DKr7Wej4Jm_B]EnAmsaX!D=JjB1izoC#$kX$*E+pGe+' );

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
