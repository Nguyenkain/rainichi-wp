<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'rainichi');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '123123123');

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
define('AUTH_KEY',         '`= ~{b~;}sp7xgN.9KPAo(Od:y+_-.{)RLj ]Oz-D%k*e~-gQX+ONdTZ+fkPlWNN');
define('SECURE_AUTH_KEY',  'Zm+]]^SQ-u]6a]e4a0;R-dPRJ_xn:y+@>KuTbc^0OnTG`+}[WlBl5Qo+@r+?$9Ej');
define('LOGGED_IN_KEY',    'vm>]Lx~AsfBA/G5WsI[0+BED<P3imS=v06Dyg;dF*I<g~U.s`elElk|npQoI*j8S');
define('NONCE_KEY',        '_8.lY1t~<8c(kH_:Blf:gkQNw#BaC4ZlKa|^m - Ef;%~_>Xh0UPc`k%8Zr<+[7l');
define('AUTH_SALT',        'g $Qr%A:DA~!(02^rpHeN {TtmRiXF1H+b_KyEEo#smVr!<9jq*peL/m0(0E-c!#');
define('SECURE_AUTH_SALT', '6YuP$4{#`s&IRT,ERG3H=]C6>(:z|or+9*,)]Ha5&Qqp|%e]W:bh)%M|id!z!|^E');
define('LOGGED_IN_SALT',   'o65+A-9ncFLu}uJA@m4FF0@qXtu7$U0+cpPyE|H<Uj^nZ~OkM3#C3uIU*px`U2#J');
define('NONCE_SALT',       'Q$Hv-!o!S,n.(.cyId[s/%o&nP;@Uq>|(t!S3:ZjqcC+b4X/2Yl3?JX-sT((&@$c');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
