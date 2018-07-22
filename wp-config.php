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
define('DB_NAME', 'wisatabe_brj48');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'adminroot');

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
define('AUTH_KEY',         'w7ENxO>QjJsmAF$xBo.{?x4T`3~eXkTJ,?%9I5gv,sn~O?*h}^.h}Cx<8~-%g!te');
define('SECURE_AUTH_KEY',  'p@5gb@m*85_/ms8Do{2dOjGkN%@o}AvFo!D}]bZ/6g*rQ92X1l|~4(V.OX~S#9G!');
define('LOGGED_IN_KEY',    'b<IX:aYq0c@`dWE>t9OHBfUd*,n[cWb^c_f}:Y>eF+Enk_vB~Kg5IKt}Yws=.OnR');
define('NONCE_KEY',        'AtT/ojsq9@/@9g4YNZvS=hd>K>3`|#}1L2!xW_=mGBpbI27D6-}Vavg5f~_<<F@(');
define('AUTH_SALT',        '>?NDdF9uja%6aOUY<lg1xp6MGq|7?rE ]|w=^ePvLl9V36kE<9pwXv^<Ux{ `Y;N');
define('SECURE_AUTH_SALT', 'R8La40Rr8X{CQ|oX%^QH543UQSl{MK| wwU-`oR<PBO.SCLd;^9Zb$-kLh_s{j%2');
define('LOGGED_IN_SALT',   '@0kfU:O.W6vx|@;`ah(THP6.:c~knm|_n106Bi 7Fl*L[fH7(jc#=hW/!yejc?qb');
define('NONCE_SALT',       'BQ(h(Yq[F`ZXe=_9M((xB91iuFq+,ps[,Fr%p>Kz^KwVGn85lW*;FT6Q8lIpP.3d');

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
