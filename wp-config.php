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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp' );

/** Database username */
define( 'DB_USER', 'bill' );

/** Database password */
define( 'DB_PASSWORD', 'Fugazi8731!' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define( 'WP_HOME', 'http://localhost:8080/wp' );

define( 'WP_SITEURL', 'http://localhost:8080/wp' );

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
define( 'AUTH_KEY',         'P+SVb_(gK4rt$o~=N7d7O7F;B*0wdTFet1x(d]Y/$c;=iOj1`w0sf 0K<{rp@>-p' );
define( 'SECURE_AUTH_KEY',  'x;I^4*{q<EP)cJ4yQA~ORds|4VRSV1YpP6;&b>4[g]2~(/r4V-8:&IEn;TAUi[Ft' );
define( 'LOGGED_IN_KEY',    '!qYLcf7X8!+Q.?XNYP}IWbxFror~~A^IA6SPVz&a(]+C M5v^TE5EH[gV:pj_sse' );
define( 'NONCE_KEY',        'n`DA37e.H#3e/g#?CX{er1jKjJOI:[A=8&iuaNO|.AzY]*~S8DS{WS$}Yb,Afp)_' );
define( 'AUTH_SALT',        'KJ:!z7f(X1@kx$V:Wi$pTRx@ZB~S#: |>d9M]q<B<>,#J#8.wf|6xf9UheSuqkTD' );
define( 'SECURE_AUTH_SALT', '$|o4a.0<Pp_$>T]73g2gQtn]?d8sC$-R#_J<xlP*s`7%AOAOfHMd&G_i6$tI:0.[' );
define( 'LOGGED_IN_SALT',   '(@h0+?(&}ER)~fg=h`NO0>1fq  HoW=&!D[wV0zUW[bMi?kuy->0PAx_yvf_Ati,' );
define( 'NONCE_SALT',       'q?Wj&X0Lg{ %ba`<I8Ui394~^IZjLRoF`AsS>|P;)FznSp|iUr7;2UTQ)CA#RD{p' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
