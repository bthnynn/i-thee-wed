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
define('DB_NAME', 'sandboxDB8psbh');

/** MySQL database username */
define('DB_USER', 'sandboxDB8psbh');

/** MySQL database password */
define('DB_PASSWORD', 'AMEdVYgPS2');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         '+tDHf^Mb$bAPMy.Pf6IEYyB7U$y,bnf7IEn,^Ij{<3cUk0F,^Nc,7f^JFQ,^}Vgc');
define('SECURE_AUTH_KEY',  'gr,QUs|k1Gs!RV!0cs8Nl-GW_5dwCS~:Zo4KixD_1et9O-]ap5KixDT*.Pe]9m+HW');
define('LOGGED_IN_KEY',    'ub.*{iuqEPLf$yAXU$3Xuq3QMu<Pmj{IEYvr3QMv}>Qnj{MFn,^Ifb,E7Rsk}NF');
define('NONCE_KEY',        'Kt9WS+6;Wx92S+t;WOp1]LDXyq2TLu{<Pmi]HDm.*Hia.D6Qqj{Mum<PIj{.Emf*I');
define('AUTH_SALT',        'B@zBcU@7gYzB3UMv>Qrjx2]Ttm;PHp].Lme#H9i*+Deyq{TLm<IAi.LEeX*A2a+');
define('SECURE_AUTH_SALT', '<U@7gcnB7J^z,cng7JBz,$GRJ!}|cok8JCz|!Vgc0B8r@z8KG-|~VhZ1C8s@-CZV@');
define('LOGGED_IN_SALT',   'H;ali]Ltp-]#1bTe6;Axq+TLX;#2mitHDa_*6QMj{<Emi*IAb.+6fXyA2T+x;IFb,');
define('NONCE_SALT',       'nEU$y,bnj@70YzB7J^z,cnj}Mvr$QMY!}[Rsk}Nvs@Vgc0B8g@zBcws~Vhd|Goh!');

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
define('WP_DEBUG', false);define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
