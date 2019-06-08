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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpressuser');

/** MySQL database password */
define('DB_PASSWORD', '$m1d3r99');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/** Added to address permissions error. */
/** per https://wordpress.stackexchange.com/questions/19649/wordpress-on-localhost-lamp-doesnt-let-me-install-plugins */

define('FS_METHOD','direct');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'oS9;GttM`gMw{+QG9G_J+S)d|PdF1cer<7~vV{}alb,/m3goy4z>egv$=EUV?psd');
define('SECURE_AUTH_KEY',  'IkPL-D/hWY6{);22rkniGvM!5OYIA3.N6{KK+6o9*K_^w>6`6})n&&/a=Rnb@FIs');
define('LOGGED_IN_KEY',    '$O EBX`U0eR*g-:*]?~F]U1f#qiZsqgY~YL<r[RQdOzrN oiMQ,|:v ^e>~HdI-n');
define('NONCE_KEY',        ']6,OlM^)?hs*2Q!5=1h`9I$Hi;]o^VWs}g,_sD5d/yE.+}Y`w#TSs,P,e (jDc7y');
define('AUTH_SALT',        'hGck=789JBw7KFORXf!(ds#H}VoC+D8,44q4@__ms4Dr1 <Q83k[8] _,!u6Dm1J');
define('SECURE_AUTH_SALT', '  awPB-8]jlF^I/!SP!0c~}^Xxc_bGXF#as%7Y0}+G|z^TUb/pt#Boz>(Y.ZQS.s');
define('LOGGED_IN_SALT',   'jgq-kV7H9ptW(mmx~:5.91,21Udc$B!q^#A.`,aXC4Ca^fD(tiA^5 x:y@q[v9U~');
define('NONCE_SALT',       '4f$Uft-2_fXRI=VaLa|C#rSiV>YKVboPSXMrjgcpG6$vh%5 # U>!vm}f?t~8~ P');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

