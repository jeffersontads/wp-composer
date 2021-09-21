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
define( 'DB_NAME', 'testecomposer' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'i%^B9<^LyU;aC3lB_|)Y$Uhv<5S>t]ZQ`<zER%:(FQ@Jf4^:i3/--)ja$)xjFmU|' );
define( 'SECURE_AUTH_KEY',  'z@ryb>#r,KvASQ|7/ZX|iM5I5%qn1g@Y[X38-iA$v8r+PEW52`?=7pT=[.EX(q9A' );
define( 'LOGGED_IN_KEY',    '}: Q?!a :eD~=}Gb35V5:aJJ:3~Vrd-vy4]3b8Koa20,ZPT<2??z)!VYlbq1oVc7' );
define( 'NONCE_KEY',        '-B[<Y2Xd!fTt.-j`%rF3Ng=%*`+ah&14PpOUu$/9Mm[Ep@}b(+Kf4)FtJ(hGSVc9' );
define( 'AUTH_SALT',        'Pq(GSjJ3s~7yaLJ~NhnSrgpf1nS&(*CkX9y-7M;P6^TEj/NQT=&!^b=5P:D;I1i!' );
define( 'SECURE_AUTH_SALT', 'kW6E1db<>~(D%KV`3d5V3K{X<u_,,YPNoU3O2VHMw(A5Y)X m3(R$fSZ2#^=^JR-' );
define( 'LOGGED_IN_SALT',   '/2::R5hU)4AO`)ds!3@26>h7d~I`Cy^~I$+2_?VT2LElwzr:~87)k?$HvbF0E?Z$' );
define( 'NONCE_SALT',       'q7<Xu_R6^13iR60k#0%UX/RmuZ|hEX&YcjxiWfrr#]IQeiHg7luB[Azgh`NzKL(Q' );

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
