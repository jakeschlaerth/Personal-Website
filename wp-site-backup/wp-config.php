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
define('DB_NAME', 'lindsbt7_js');

/** MySQL database username */
define('DB_USER', 'lindsbt7_jake');

/** MySQL database password */
define('DB_PASSWORD', 'jellybirdeggs!');

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
define('AUTH_KEY',         '_CoJEzdxv(ekdnqjWR~fI<t|gFbVKujjP!^gyGiPJrlk9klKg }T=h@z0MtQqpo7');
define('SECURE_AUTH_KEY',  '-o<fdL3L}^y[Gt@B+iIDO@1vHTflkYolK/$+Gs@T.{s-OE>ec)CS(-^BsSrx5<3j');
define('LOGGED_IN_KEY',    'fk@X&C_uk7`iM+KX~)K5BF[~|>-w+-FomhsF=<+~|:@z+q#x7fH(,FtY;A8le`1i');
define('NONCE_KEY',        '}n !]Q<m+/7.6zLU]EC$TJF w]1[a(ZaM:|tksZ>H+{ zT+Lye`F|&/u=-^IO-_7');
define('AUTH_SALT',        '-AMT.+:ppGB}!<^I8XVa4JO,0(vy[Ot87)jA8N(x?)ms|7@K_R[fk7](V0EjEU73');
define('SECURE_AUTH_SALT', 'M*yHFl<+iD&Wf|,O@2)vI|@QKkt KFK([<<fAc<`AR&yUisL!2gkj].G$(gUm+!!');
define('LOGGED_IN_SALT',   'c*8:(i$k^0W>]nQ-JmKEnUTYSniaBSL3y625S}ucDv|^kv6?AZ1qAci 5C0;=a2F');
define('NONCE_SALT',       '?3L4:6~PW1o#xQHb1|1hSh:Exo=q|~0<!~m:wWEXM{MSQT7#a!+_=2#d]^ecQ[/K');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_moxb_';

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
