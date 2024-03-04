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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'LXb~hv=Xw4VGnF_;9ypM>95{QabMivFs]lQT;p/^>Q:u;qrG:i=jJxgWod8(E(P5' );
define( 'SECURE_AUTH_KEY',   'GIU]2LQT0sbC*B#du{x.:12UuzR_,]_Bu^2(2PS-1B=/pE)gV3xyJN7wi>pWP^j(' );
define( 'LOGGED_IN_KEY',     ' 10wxnujY$y+ s<EXH}Ha%a,mL%8!t_il~2?i5R@TZEB*g:[>5_`W@n%s=(@n+RF' );
define( 'NONCE_KEY',         'E:]j[BI~OG>_`hQ`Yi;?$:B2R9v>2N^+[LLq/#>kE&/b2K<ieP$+]]2cFMnCcZtM' );
define( 'AUTH_SALT',         'Gl[# N}3wI9.Ky:tgYY(&kXL~V6t#h;&f`:+;z2f~+930V9gLs8<}n4/:P+1dLH,' );
define( 'SECURE_AUTH_SALT',  '#fMJu-tvQ09AI7w>1;n8$Y~[QTjAuF84m6wM{%r/plKq5@sjiL4? D+/UY`rCdKS' );
define( 'LOGGED_IN_SALT',    'D;vEFT09Oun:l%U3Zv6P;iAywy]#n[~]xW? Z*r7Ma^n?M5>~TTNp5%5`p:o5%Rx' );
define( 'NONCE_SALT',        'F3+OiRoeA.{-UC7X2HX$Y~R^JOJH7~<!L{r7;$TOhB7;5XZwrQ>0MCuV/oNFAwnv' );
define( 'WP_CACHE_KEY_SALT', 'o/A_)aV|}&`^QPU;OS_p`x P3RzQum?EYGCW1K&6G|Td8L,7am4})7_<dp2u:^P7' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
