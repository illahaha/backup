<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '276851046');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'djZyk@F}+&#LA`V1/K{XdSutxX(-8+0q?RoBu;r9a[2{$8qhNlo(Bb*?c7Vm.I/i');
define('SECURE_AUTH_KEY',  '/C{,@#a8-g9LwFyr*U&eVse7`[]&t?ytYR:!8{Q__Cc<!@O~mV.tQGJu0@!f%TUp');
define('LOGGED_IN_KEY',    'ot5X.lP-.k>+#4n|-QH~`[KrJiDj?N[&$S,[qC!7iZzBS@-dy+[<.pX,^GU6s+p-');
define('NONCE_KEY',        '!d)L@kXd-h9uL1KU[p=[7d3?Bv`.<|ytLshr^9L@UVOMQ}qj|W/X|LAfWnmWWBXD');
define('AUTH_SALT',        'd*gJ*<c]SZ8q#sPce|_SV.Eb!%oT)O{]!1#zE.)xp]G|;*Gv_0IY#!!w0<%C55Gi');
define('SECURE_AUTH_SALT', '+Ug0K^2hR(h+-vjL~#RCsK;P$6vK@4{WJ?!dP%]TtXlO~](P.ZG5M,`-.6Z+yglH');
define('LOGGED_IN_SALT',   'mwqlWr7qPQa2~]a#--5%?$|4X!V*XC$bC[fNCn>;I5*5YT[-cq/H:T->WOu-|M5M');
define('NONCE_SALT',       '>[9~JCz|YVh;H^}T<*/Ukl62cLSRZpi2*p^uV~xMLb|4cGuc@rkSMQv2U3qmhZtu');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
