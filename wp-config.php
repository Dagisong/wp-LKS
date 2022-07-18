<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'contoh' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Kc*-v[cuJxVCt(#4A>w{7g^!kf% nb}bo%ZBrHBaGOvIMet{.8(5~fK}>JSaF3se' );
define( 'SECURE_AUTH_KEY',  '@:e`JwwR@%#CzLk&$MSY]SIf9<mDJR/s$!F-71o??WZ59e^OTY&p$[J^:654{N^F' );
define( 'LOGGED_IN_KEY',    'R-rs3MD4:`oE.K 2/F9X,/p[ng?7:9*-SV|iJv]l]rVuz(Ccm5]%BiC|o4cU]:l@' );
define( 'NONCE_KEY',        ' m_)w.]&Yo5ph- b(1oE)n.7B$0WWTVR:inomSQG+[Ow&5t?L_{GEQ*U;=eBxjz,' );
define( 'AUTH_SALT',        '>0$iF5-&U*_oDJOk(z{:B.wrZ}Pa#_9H{aCX;3gaE}crX)?)DT_#l~fE*@j+(Erc' );
define( 'SECURE_AUTH_SALT', '2EDP=z.TK #6Hh(iDi?F_pJ1y<=/1;&(4;<i&[(~:UHL=V(=E%LRk:a}*Gk4%^aD' );
define( 'LOGGED_IN_SALT',   'O=,GZnO bw%4$F?Ng.-R`V)WJoD/i=xKmR{n:uitk<w,ia=U)U iL8yyzI,#$R A' );
define( 'NONCE_SALT',       ',}/!#?i)yjPK}}ohsay!a+:T5&Mt3g[ALRFJWbnKuQIwUR0W*L(*B4l+89h_jOGG' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
