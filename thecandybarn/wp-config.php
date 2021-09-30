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
define( 'DB_NAME', 'candy_barn_wp' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '2]h?f=M5k>Ljrwd$O08m^>F`9D_qG,OkjR?&Uey!DR`-~;53A{r?3jz#6DEaK(kA' );
define( 'SECURE_AUTH_KEY',  '~usx_D@le>R!:}`rV&M>Va2eK_#0`}Jcfnp<Cs)M1*GE/]F^6_!7hNpd0% fR8RZ' );
define( 'LOGGED_IN_KEY',    'S(aV:1zJ>)(>[!qAq3ne>-sDh[y*Peafh?Dad^S-^ceNDASgt:Q6{ c@`2qqG_#q' );
define( 'NONCE_KEY',        'hN<]_F6Oa5(tkWciLdOBWs?;#?O=$ TRxB1#lamQ%791TTM6gjr%W~OX1&Y{|p^N' );
define( 'AUTH_SALT',        '&lkT0k:xnP6K+(gusOA2XV6=!pN<V8E9vSf[6l<ACOBT&h?YdF&lE*v&!o&%;><S' );
define( 'SECURE_AUTH_SALT', 'XtTuiQi+j~|/n%N{z@/g<KLJF=Y&r`NeF9}-sudDt-:{&kBB2Rr_30C(7U<vyOu<' );
define( 'LOGGED_IN_SALT',   '<w>{4Z8Xpf u2mjeA0BameM79L4q#T.VWnxEMDt+h|w5qzZAFmB?;@axL@be`rTr' );
define( 'NONCE_SALT',       '^;KoG>G%).a~-Oq540]T>1;$.8H)iJ5{zF_T{0Oj[P#wYF]a[)=2/Vo#iUd>oEO?' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
