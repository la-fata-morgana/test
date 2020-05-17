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
define('DB_NAME', 'tablesfo_shiner');

/** MySQL database username */
define('DB_USER', 'tablesfo_stanle');

/** MySQL database password */
define('DB_PASSWORD', 'GC&puK8+7)R^');

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
define('AUTH_KEY',         '`@<ET<FCtOJZ-3T`;c]^gVVr :[p+`Z]I{xDHaixmfz+%n_[v 4m]-4Nm6SFVT!>');
define('SECURE_AUTH_KEY',  '@)/Cb+7-!b>%Bdyp{5|!8U8V7<JbiW+[!YZcir2#HW{3`t*&Gaj_s_g5+21i`AV_');
define('LOGGED_IN_KEY',    'jbp`F;!3=UVerJKARx^f|JM/&,~ ACptB}-/obig8;gTt~w{>[Y}Qx0P+x3/V@4U');
define('NONCE_KEY',        '1S4g])tD3$t3L-SPcf#!+wg :hrw6OAjU&$[_)e&FLMUwo|GYBVtcuM(-$e^mjv-');
define('AUTH_SALT',        'XzgH%GGTy{W>e,5:^n||6$<Kt0Y{oX;v7Sc>e:+Y,Lf8+[|eU-z{[rvcr<lwsT&U');
define('SECURE_AUTH_SALT', '(_>19lTU;Hxv(GgO.39mlplb}-rWQieIHLhIWPC3,x:kc#6SLUg| kz8pYJ~7_0w');
define('LOGGED_IN_SALT',   'Kc`[!%o,<+BU=hBpx|Qd;yI:H-R7]&XcVU9?`Z|G|HVK?~|,r,O3OQ]r+M!=;99t');
define('NONCE_SALT',       '##qQ4xqtL%I72qD-]=DvL~0-gvz:d+T}-^1&5ZH:;^+h8t|5R!Oq(jj<(PtRp^SG');

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