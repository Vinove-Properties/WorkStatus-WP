<?php
define( 'WP_CACHE', true ); // Added by WP Rocket

define( 'DB_NAME', 'workstatus-io-site-prod-db' );

/** Database username */
define( 'DB_USER', 'workstatus-io-site-prod-db-user' );

/** Database password */
define( 'DB_PASSWORD', 'Dp3VWpqWRlVCMes' );

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
define('AUTH_KEY',         'k8*|;aX0yJms9<6OlQ$1+9aV;RqW+FS7.-.8d)h+OrixX>0M~Z( 7O$iz|Xnm9QY');
define('SECURE_AUTH_KEY',  '$^!An@n[1M84?Q#_{}x~pVNc aqt$,brlIC/Y;XNm=[31%?seddJ)c^hd[3&ZU+Z');
define('LOGGED_IN_KEY',    'q@<:jFt>mN=A++CL`7Q}6{n$$pt:|ZEA}.jLWtzD(5$M0FLG1y+l!M4!`i,?[*jl');
define('NONCE_KEY',        'UPsniKz?~@V>.^fo|8-luPq<f;7T/}~_;rvZtOg0`;C?6ph$-G<~1sZw4#rqgH>3');
define('AUTH_SALT',        'TJAMP&`ec)C|(DFPLTDfh,X,_{*?)K#h8,$iH=>.UH94/Zn{o2lh<o]rBsuS=tpH');
define('SECURE_AUTH_SALT', '*>*x^W[*^X2NU8goUJL]tI^)=v=Vn|T-XZiR[r|]{kX>,*JmVkgoxAgQ@InML1Hh');
define('LOGGED_IN_SALT',   'ZOJ(OR-PshWTumI(3;$kk{WD*h92}dCThD1;wWR:c$anG&Mf|-Mzlyn=0=pad9F?');
define('NONCE_SALT',       '8?z]77%$KY^AwrFpmva^|)VwYI.<];%U9_q%u04Z1XE&$0|!pSp|+##95<WV|IN`');

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
define( 'FS_METHOD', "direct" );
define( 'WP_POST_REVISIONS', false );
define( 'WP_SITEURL', 'https://www.workstatus.io' );
define( 'WP_HOME', 'https://www.workstatus.io' );
/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
