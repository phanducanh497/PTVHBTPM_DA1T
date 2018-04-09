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
define('DB_NAME', 'danhlam');

/** MySQL database username */
define('DB_USER', 'danhlam');

/** MySQL database password */
define('DB_PASSWORD', 'admin');

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
define('AUTH_KEY',         '3Dxu8FKT!T`!oM7P0<8oMgTy2/?_?U!9c5LvAhkMI%Vln]<+M-FW[AjoW+`R5rEE');
define('SECURE_AUTH_KEY',  '&PSm(HV~OE^e]Pg+cUu|I<!hvPSEdii(hNikPp}bw`bY(Q`Sk%T2{q0K,BKqNJ`c');
define('LOGGED_IN_KEY',    '[S[.dAbhh:QM/+#`%fRyt7gV` ?qrQ=Zdd8^WBn(:RWS.I;j6+~:ff J$P&P-((T');
define('NONCE_KEY',        '|B$U;h5]q3}l|Q>?8c] Et}~ WQ:0mv8i&]bA#ikp|xLIIJ*jYuFSw<cIqjq#oEQ');
define('AUTH_SALT',        '[;8$D6~Ov ?n*}#3<qj1f=]QQVoj O`&?gT:]a,E/x1gR<k*2Mx6A?M>[-{ZJc@`');
define('SECURE_AUTH_SALT', 'lLk?Y`8m;j{q_0&rS[NelGgKc$6uyne6K<4u1`S@;d2pYml?GmcMb8|ir<mCKf%.');
define('LOGGED_IN_SALT',   '~i?GOx^TBq6ny_*YE?d.wk{b6Ve,n3PaO:t2z?<i[vWtpf.0y5ZtrH|@#o3#B.D%');
define('NONCE_SALT',       'TC6VM};yyE/@Cg)Tm]17,$~)-GQ.V4BI>}I:()uPU8L7K6qL?I9y:13U<LN6wkr-');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'dl';

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
