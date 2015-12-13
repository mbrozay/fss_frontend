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
define('DB_NAME', 'fss_frontendv1');

/** MySQL database username */
define('DB_USER', 'fss_admin');

/** MySQL database password */
define('DB_PASSWORD', 'password');

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
define('AUTH_KEY',         '-u>-GOC[8:tfMI#+MzX]%X(LYU{3lI^L*5nS+FB$(H<k|:$A43b6.AT9%z$JvnG/');
define('SECURE_AUTH_KEY',  'K79+l0/XJQE]$!#Z]2UB*5+ aG>Lj#7gc`PCgKQ%-~Q[C_=&zCWa9;Fb?jfKG<-6');
define('LOGGED_IN_KEY',    '*_7puRL[!%5,ldn6i=q4(PfTsjU8eHOV`bm}F@$@Y0^)f]x;&}l*L|3J-R!mf7Uk');
define('NONCE_KEY',        'W(p0Wg|7|e,c:)|(_<1xN+XH+=Wa#2t4=BAJrcJggbq~?ibE--P|<A#vw(6V-wW~');
define('AUTH_SALT',        'gyn/54Ke-L{14WKtBpx@ZOE);X6#K vPR[zqY/w|.5:9ziP3`pOn[.dzS ssD<+t');
define('SECURE_AUTH_SALT', '23uYwfGP?TdW9 ^-S)Q-79.ti.Vx,[Aj%3{|hv;Aj%$#2t+npY76tjrsUc7140+L');
define('LOGGED_IN_SALT',   'Rg&@5`uzoljK+2J+N`kuS*|x|c^q-Iv9T}Zy@.n[c4cmeB$?=}*])=7$<xCCI@^|');
define('NONCE_SALT',       'N5lJ<hrJAF5UVNQ_cJ%L/f}tCU{75hI9(AYvgOO7v$ hF)zYzUf&%Z|]fICelg)J');

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
