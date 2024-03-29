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
define( 'DB_NAME', getenv('DB_NAME') );

/** Database username */
define( 'DB_USER', getenv('DB_USER') );

/** Database password */
define( 'DB_PASSWORD', getenv('DB_PASS') );

/** Database hostname */
define( 'DB_HOST', 'mariadb' );

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
define('AUTH_KEY',         '-JY^?&=4n&M-GTLPTpzRP8I@zo[)55:cpLaxV.4aT*7=(;>r>_JWi=;N@&4CL}sQ');
define('SECURE_AUTH_KEY',  '0Kv)}_C+M$+0-Zgzs+wxSu-J$p+cYsF>-@^~fb.p)2/o/hH.cPcms>[4pTMlH<+z');
define('LOGGED_IN_KEY',    'W]++`_=do/![ow8]-&-Ie2S K3>J/Cg,@`St-F87b3+si|ypfE=h&o<&fO*_>s%8');
define('NONCE_KEY',        'JGqG^!:+S|bO8-p`9Bn4%$&nGn)R-ogX?,R/1g;+@SIIsm!zaj| VH>S3UF`^IW?');
define('AUTH_SALT',        '^|5w%rbaA9Bx}+,tnWU:|so7BB)1| ~SUvDma+s$*9aDGs0p<K+$#Z.SsBXL|ic3');
define('SECURE_AUTH_SALT', '&>JT*IjaLp1xPM,(3Mrwqwt7xR,subU98>>7TY2JPf)mn>a}XA-`XfGHwD}Jx+`t');
define('LOGGED_IN_SALT',   '.C09i]!=3eNbDEB|?CE+N6vkd94I[IWm8>5wif7k+KGWM-(=mk~5CN~K`d[<_RM/');
define('NONCE_SALT',       't,YJ7US64r+1N^FZ>>+G<WX6Wk:z+./edmGAWq|NZr(9RpLqDid]kY7HRL{PV?|k');

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
