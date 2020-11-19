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
define( 'AUTH_KEY',         'zv:d?_J8N|&M L V[$y}p?*m/_^=7=M7]un<+!/)O[8`!.51g$VLSlm723o0P>j&' );
define( 'SECURE_AUTH_KEY',  '&ouQfk4>rV15o_MHUK2?+@0-z/]k):[}mV[rF/RA->%;`|7CWdAuh*K 23!{aiGg' );
define( 'LOGGED_IN_KEY',    'T$He/m5l8F9SwBO<Xm>5*iU9#2w0gZ4s.Hr v9iW<w|G6:KuJ|%GXP!-HL%q)^wj' );
define( 'NONCE_KEY',        ':x>,VO%R)EK,o]f(2uVhn@99NTPQKMLZM_,4oxr/hJlFfN*_%%%]V 8n,kBbQq;a' );
define( 'AUTH_SALT',        '^X7unk 53TlY _JJhNLU<3rDD5Pri1QtAj:kLv7dBj=)rqOc|ul=<8C{LPvUR<jj' );
define( 'SECURE_AUTH_SALT', 'UY-2e{=?On[~nqN&$wKN^tO$<9Phxwn`c9%0,@!5z>u*oT..$PRPc6F5/I8%rY;M' );
define( 'LOGGED_IN_SALT',   '1(tWzGdXp)}6L{b>.Nq#mk4P->k.$43H@(YsX&ANOqBb::2}&DR1hm#,[mU5~%4K' );
define( 'NONCE_SALT',       '`WK0--eYu=p.e_L~;]2pU^OTyNGa;5;kO%>0t]>%:i>vuj}kTU.4F]Z+?R!J.0cy' );

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
