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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         ']#[AL8Do7rL498|= Pv!v(a9  }Y.S 4}35OhEA1[Fk{J~pR2}=67w}>Aw4RJ3!8' );
define( 'SECURE_AUTH_KEY',  'V2rFtI]5QkYeEMw8b_?w^j2O[W3h%&}N04BazLW3)PJAy01sL`E`^vlF-)aqLO:|' );
define( 'LOGGED_IN_KEY',    'E=ea)@-,jI$Qc{,G*3q?@%<gJG]Qti^tIgj.J g+6Eans]Q./u,Y}!HT/FzLXwN4' );
define( 'NONCE_KEY',        'gOeN (lVb*?=)]&md^89fNwTuL7 F&.+c4KG/uil:yi(lBd)WFp`IA-KLytUo%>u' );
define( 'AUTH_SALT',        'h-#j_*W8NNA;<TxLXrW,2:uJJ9bmyNH^Gy-9x<I9fBQznW5?_{YWS&m$XNu,BI.I' );
define( 'SECURE_AUTH_SALT', '^VO-3V.^rZFRpWw{Vt71/d1D$>>+UA}Lperm!;:[/ft/un{~/wRRUeqF:T{r.!tN' );
define( 'LOGGED_IN_SALT',   'JN-<58XnW:NW1Z}AO5PvjbvdZOT0&wY|/@+bz_eRHV#vt2sw3:@W7GkU7^L1dfHy' );
define( 'NONCE_SALT',       'vSx2k(a(y#f}F6Qysu9!Rg=OO8uCa6GWM-IkdT+f71G[;4!>W~+,l1SC>7l!N8J!' );

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
