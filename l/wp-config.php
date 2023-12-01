<?php

define( 'DB_NAME', 'workstatus-io-landing-prod-db' );

/** Database username */
define( 'DB_USER', 'workstatus-io-landing-prod-db-user' );

/** Database password */
define( 'DB_PASSWORD', 'YILx9wwK5aDFALq' );

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
define('AUTH_KEY',         'n*W$+o14+4C=+}Fq]F8]o5sww2-@-h-icxxPd@9z.M/iS9PiQO^&:q|:79Vn%uE0');
define('SECURE_AUTH_KEY',  'GyA^W[Yb+0E6[TKH|Y|nt+n?qJn/3=z6ATZ):&>#ar< ~`hGrx7Q{kK0^O+AYc#>');
define('LOGGED_IN_KEY',    'ElSc@@cg$M>Sv*WQ |7JdvSEJk6`>#LOq?X:Tle;qH`NO<bC$.(8^dWh_jQ^L4UK');
define('NONCE_KEY',        'Sl3--*=|x<zr4+(mR^y9-G|H<<(F&T{C8uh9!{dc#zN-}gTMO@GmBfT|YZqRHk -');
define('AUTH_SALT',        '(d)$f}]O^%zcV+u}* ^^]~OONgn+Tv[1 6~)Q#.*,]sM;S1yFdOt(sc~,(i8ohYH');
define('SECURE_AUTH_SALT', 'n]-;Q?`3o|xt;9}j+w&4@GS[82-%VRVrF]n9Doz+~v29SvoK,2z6FQ|yo1}x- >t');
define('LOGGED_IN_SALT',   'Yz>EHyfmHg]^/ />qhL)j+<zM[Da:p>uRNKm(^!d*>M?pxu+GV7G/% __y.l>72<');
define('NONCE_SALT',       'tab*/Np~I*J4jOqZ^MbbA^(rcr&|Igq<QB-d~RpHs#gyd:#xO+3esC5BT(h-Nygz');

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
define( 'FS_METHOD', "direct" );
define( 'WP_POST_REVISIONS', false );
define( 'WP_SITEURL', 'https://www.workstatus.io/l/' );
define( 'WP_HOME', 'https://www.workstatus.io/l/' );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
