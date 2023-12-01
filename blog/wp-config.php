<?php
// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'workstatus-io-blog-prod-db' );

/** Database username */
define( 'DB_USER', 'workstatus-io-blog-prod-db-user' );

/** Database password */
define( 'DB_PASSWORD', 'GftBYpo7rJk4nLm' );

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
define('AUTH_KEY',         '/YFdJj2y)/?J9+Wf-2x-0b6s>M;eOt&*dsB+R&!h.X2]!3j[,@UfK{`a4*c?+:G8');
define('SECURE_AUTH_KEY',  '+Hmp?4E1crH3[@i|yo{R0G07 Z@eCqt|,Z(h(7+9|b=LAxcDM+*ku2:hhZ/?Yo}j');
define('LOGGED_IN_KEY',    's`h=V9++pRo}N|eZi5$AN|b,rGc2-p|0:|9FJ!%0E#r:3:TXN}q1B<H=$h8t*w-p');
define('NONCE_KEY',        '?jPg {|p/SO8CgHY5XJxo)BIXe7U+/Z.pX6d@8=NULo$ZDjo|yor?q&4I9PNi%]J');
define('AUTH_SALT',        'Df|/dY@pcJw5 S;qj-JfrRZ+%&BP(g/1K gtS7|0&=Di%;JUyKR*1tiwMM)Tg6Mg');
define('SECURE_AUTH_SALT', 'kb3~CLe+p-=~|W5qFah}PxdCNl+5^|Pp8 aGNIZkxZ~R&C<2$T#g53Y2}&]-r+pd');
define('LOGGED_IN_SALT',   'nf^vAeLXS|p6FL1orZ?HAL7(Xt`hM6*_^tDCchxIipmq#BsCP-:|%lq*v+30DM+p');
define('NONCE_SALT',       '+?&9?d$|hj_Z$t(VGYO+3=1)Q#^K*xoY:M|/Ey`%d S`r7z+vg=~e; !kRYy71n-');

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
define( 'WP_SITEURL', 'https://www.workstatus.io/blog/' );
define( 'WP_HOME', 'https://www.workstatus.io/blog/' );

if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
