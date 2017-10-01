<?php
  
define('DB_NAME', 'coopta');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'qingyu2007');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         '_Dl8 :e!>z|s8+X!I-/&_a6CJ}+|Z*x!~y`dr6:&?]q urAnlk*~/^ygwmS,No:+');
define('SECURE_AUTH_KEY',  'oMV^&:me|-mJoM)T]kS[7>All}xHI,Q,PYEr`.3n2q@fHc&.A7-syT(S`Q{U<0;M');
define('LOGGED_IN_KEY',    'Man@a!XV,0OKyd--&rWeV!AUdH&3WS4*o|zOaET)[Q>3{/6}U:BZu=C!VN1D,qUa');
define('NONCE_KEY',        ')+N|g+ViZ-Urb~<re!Jd6,OSAcGdTx1+3Q}+F$oqV7GF+dq4G`23or7/0-,xS>W]');
define('AUTH_SALT',        'WWGz+}Y0UbDIlQDr(HB-c1%Ec6*R{DNg=VF~}6IGla6XEH?K>e&^Z2LJ&uEVXN2S');
define('SECURE_AUTH_SALT', '(Cx)XA3n`zH.+n5t[JJfF(c=jb?;z|,hHytCC-dBMZ:+UVCm|%-Hjx?>BuKm&zRu');
define('LOGGED_IN_SALT',   'Hh|Y9XG6$;UF]N+w=L>J@NNh!~4g?uqy4|zRHn[R@3QKQVqqXk-3 K{p|;t(lLYU');
define('NONCE_SALT',       'oS1SKO1G|+6.|jWZ@3?*zUgUd#4{.R*X0D~eY05J@gBR95@mO-i`nT3/QW17$6{)');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'tina_';

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
