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
define('DB_NAME', 'zzsv_reference');

/** MySQL database username */
define('DB_USER', 'zzsv_reference');

/** MySQL database password */
define('DB_PASSWORD', 'CW3oHfgvQjv');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'qpO60!3[)4y%lSNF5Hv1>JRT`~u=3hgnbVzu$9tArLM$7=JGIx~Qn`$f53>|JBy;');
define('SECURE_AUTH_KEY',  't%jg|nx#({d|aa{g4FQgXWs7%qG~RGs7/&kq#?-@@,r;B^)A~lZ$UTUVGtEXrR+=');
define('LOGGED_IN_KEY',    'O0reu[ny;?]+nAc8p}RgL9j,89-DTFFr%b7[G,m4|fjg6c36i>sUBkBqGrr-&)q0');
define('NONCE_KEY',        's,bedhP`xHrI.c3; UUUv2Z}YBQg}Bhq*6AN4>CA02vf/I!zN->ZjT>Gm,Z6/M_c');
define('AUTH_SALT',        'H7J:N~ligqxxn%&xQb10)zXj@}r&m|W9N([n|U<Seune(9m)M7~p{ tv:HXLk>r$');
define('SECURE_AUTH_SALT', '48IHO/|(}28/5oC+>TGrJrxb>^8X;$_mLO{Cjh`B;-k,s,-y0,=1m`681sV+P~/w');
define('LOGGED_IN_SALT',   'wxk3<P2tN:PaDEZWJx[kf|$w==jYSp-,cUDi=6RC3KrRcTDVX.B<82eu$_8I Yc(');
define('NONCE_SALT',       'YXIXh23yeki8qLDhFwj gpVF+%M2p);r5%V:2IaypHq,~yf_~kBV 2Ol@+Z^)ssr');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

define('WP_HOME','http://reference.ocean.edu.vn');
define('WP_SITEURL','http://reference.ocean.edu.vn');
