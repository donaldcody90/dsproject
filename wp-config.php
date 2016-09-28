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
define('DB_NAME', 'leflair');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '$3HeI,Wjh&TnY%u@v=R1)C43oSp8,d3TMeKaJJCA{{i83%DN!$&B/.yXaRg&PJ22');
define('SECURE_AUTH_KEY',  '&*B/xc|Hn9;1Z|}aO.^9 ygDVoYvxViFi9_AA7>T&zG40Wv.JMP4qI#$^~1Ktc]H');
define('LOGGED_IN_KEY',    '_bz@X3m:Z4<b>gm$}gSM49fN!6kLB4dsY4sfE~<c:bVunsY>( $?OH),*E?nFpk-');
define('NONCE_KEY',        '@A4}WJfA!wR7z6AYA%}If;J!~ASQ=6[3{_,];o//xbscj9)JNKP`N?YvM%N6LB+}');
define('AUTH_SALT',        ',a*v(cAo)L>z9mwNpXj)lHJ!d2>uUGWP.P+Z7Qw| )My+T$s|R{WL#{J5?*(<_BK');
define('SECURE_AUTH_SALT', 'Y5kdU,2D.I)g9Rn>cyj!NI(;$q?pStaiWtvtiZFp9P,|JR)~IZa`bWHwE|cA^mvZ');
define('LOGGED_IN_SALT',   '#<NGNFaB=*HH4j=;1E@YVrC&u.$5E}1/sFX+D*9^xr<#M4IGE3o.+v@ET 4=k)FO');
define('NONCE_SALT',       'GC>=2xvb^u8JomX,;K^TESd3(v,3gsF{iNbX?T`Smwmxox~ZU&p6Dt589EA#M3%;');

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
