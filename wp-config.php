<?php
define('WP_CACHE_KEY_SALT', '20ee4e27525787626fca76383156723f');
define('CONCATENATE_SCRIPTS', false);
define('DISALLOW_FILE_EDIT', true);
define('WP_AUTO_UPDATE_CORE', 'minor');// This setting is required to make sure that WordPress updates can be properly managed in WordPress Toolkit. Remove this line if this WordPress website is not managed by WordPress Toolkit anymore.
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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wp_a8150');

/** MySQL database username */
define('DB_USER', 'wp_jbta9');

/** MySQL database password */
define('DB_PASSWORD', '81otU3Ga$Y');

/** MySQL hostname */
define('DB_HOST', 'localhost:3306');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'BOdec5r2@i:nsEBl7B~4L4*C7V%Jt(/al81h-&L):DPQ6Er8ct|9gMKJ#&#4_p59');
define('SECURE_AUTH_KEY', 'FG|2r_v]p6JiB*SLIK0U4~)|@o6%dw(h+46ye2!@I7P2BiDx9h4&0Ic@zyf+B(V(');
define('LOGGED_IN_KEY', 'F&_+u185f*9Dp[Gw#P[o4hGuDPxXzWEMEu!8Ofj3jLR/:#6!Iuf7Zw!;UdrDda4]');
define('NONCE_KEY', '382n4Gy+;tkD)!9dyMTATb20a6v3P|y755Y;5s@yRJ6f8Yp83Tdk]C0w[N%RR:;Z');
define('AUTH_SALT', '25ZKc&e@[-;ZXu&[YagZSE+dgjo[n0UH(9IU2t4@Pw1+7Y;&A915m;U|jnW!R/A;');
define('SECURE_AUTH_SALT', 'Df~j!l%)G3c[]-3Ax5EJ:6S858Z3O7d60Lz0|S*akL/:xtQ6wK9fFM+!ClD&_-7-');
define('LOGGED_IN_SALT', '|BZ04q/rT:L&U6T8yO]w4[PKC9n/R[Eu68Dj9O7!1Y&]5T!82lB-5M-&b_vl1au_');
define('NONCE_SALT', 'E79U989F2He2L19534]aGA0i4xit~*0x|J0[4~-896h[Te/~]%Jds-b4;[m;0%c0');

define('MULTISITE', false);
define('SUBDOMAIN_INSTALL', false);
define('DOMAIN_CURRENT_SITE', 'www.cookiecrumbexpress.com');
define('PATH_CURRENT_SITE', '/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);



/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = '2l91E3I_';


define('WP_ALLOW_MULTISITE', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
