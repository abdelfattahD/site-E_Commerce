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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'bestshop' );

/** MySQL database username */
define( 'DB_USER', 'adminshop' );

/** MySQL database password */
define( 'DB_PASSWORD', 'c3wnJ01t8FgmG09O' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'H>3ej0GQPvA~{Ddo~uODL9Z~o$Cn_:FD{/=n/4pKg;Jn=.@tX(6UW|=lV^qtY#k-' );
define( 'SECURE_AUTH_KEY',  'Xgh)$lvXiqJyMpnL 9h~#}20zP;<e=.d<Q<?W=a0JfX=eH(k*Ey>5#J;U)y5{`)P' );
define( 'LOGGED_IN_KEY',    '_m@W5=$&R[m5+XT98d7>|a~pg6s~kqMDz?Ot6bIqdY}t_^;S-VG-!M7O=m+2h8u+' );
define( 'NONCE_KEY',        'm~|lZ1h4c!&kB],yeXOUat7f&g+K]&ix/*_BocS@[%U8nd(G29&w9NMz/7o$3HIx' );
define( 'AUTH_SALT',        '2IaQY#kjo8OtxpW5v.Yt(^v?D(}=zAr{/#Xt9s(([&BH6yc+2Bi@>SLB@ty0C=ox' );
define( 'SECURE_AUTH_SALT', 'Hd=:bvvD6)Et@QO2 ed|IZfn2xzytW6 7yYUsF^]p6Z_$pJY7x14<cQ,d-BOCX>&' );
define( 'LOGGED_IN_SALT',   'S +US>2>o{&Rlr&5o4Inhk)FNl>5M!:;9FF@pu:9qlX/K11d#Ch,a/n:@gF6>}bV' );
define( 'NONCE_SALT',       'w-:YlpARb9Zfc]<t{lv;>SRm_F4(K?]^vJB.inRjW7&ELB&~}ntE&x ,C9t<JGQR' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'shop_';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
