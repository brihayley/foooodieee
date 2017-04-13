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
define('DB_NAME', 'foooodieee');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '6u/SMC_*d[)tb;;0L~&KM@[7mi*`^Q$VGjMT52$Gkfj=nM*N$JD]jbJ{0fVkUuN+');
define('SECURE_AUTH_KEY',  'Sa)V-O8q|}p1B*Qz6,&A>1=?XTE5QzDb]kcX.kg%F.t?%DA3km5-U#;I&M:N[!zF');
define('LOGGED_IN_KEY',    '+1w:[C(>3Aeiv7+RWcx|;x vp!0KGR[u9`LwNF3hQeJdtc^|gXS@Sl%%vVs[G%]c');
define('NONCE_KEY',        '0%q{CGpRw*6!^IjMC;=L=QEdXZEx5p(Cs/.^X@3G]j)B8Op9^Z?f5}w}nK/h?M3b');
define('AUTH_SALT',        ',$fWa83ng2:(veLN;dz@d:/<2$(7SF}iSh,^]i[waB2TO/[GeMxU$$b1Cj_|XBuU');
define('SECURE_AUTH_SALT', 'N93=/ gOHi#]A~#}h0bH)grE5kFC8<,Sa1w#7kb7O]-rxXDjDn2+MyYSo]W8A5Dj');
define('LOGGED_IN_SALT',   'hxlQT_Z>=Q;2*`6SMt] 9iVhe?/j9FD%kF;Mj&)[+L0x*{&hQ03=R6iPL|F2RgES');
define('NONCE_SALT',       'm]d33UqEFYuE}u8PfM5kRVWLSvH^9bYuqzZB- .4XU}{S C01Sx~]XPG rBe+Ebu');

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
