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
define( 'DB_NAME', 'NOME DO BANCO DE DADOS' );

/** MySQL database username */
define( 'DB_USER', 'NOME DO USUARIO DO BANCO DE DADOS' );

/** MySQL database password */
define( 'DB_PASSWORD', 'SENHA DO BANCO DE DADOS' );

/** MySQL hostname */
define( 'DB_HOST', 'LOCAL ONDE ESTA O BANCO DE DADOS' );

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
define( 'AUTH_KEY',         ' ,qDcE~WeLk#nkL^hm9Ns^dGreoT7|tmn:II4{V^I,U8/E0nFF(=%ocRc@xTBAze' );
define( 'SECURE_AUTH_KEY',  'N?vlR}xNLj C{wqdQb,O+m$MAN`B<9Y4-%.(7b//OW 1 XJ!%Sc1y9D6E:zznh7_' );
define( 'LOGGED_IN_KEY',    'O[-<GR4!i,{xj}1vO`NU>m5eNTH;kD)en^o=JTgs.N^5-.(-,d8Wa4tv!8J->;AU' );
define( 'NONCE_KEY',        '@C55A=kQ1M&oY%]fq]dum;ud&aVu|%DdPFIHe=9p~E#dBO]<-3Kui*aUZrW|FayU' );
define( 'AUTH_SALT',        's;DY0 UfcsSG.]/%wQn2f/$4VJi!XHTC:k4x+.$My8w y:})#9OPJpCF@)_?LuCx' );
define( 'SECURE_AUTH_SALT', 'Gdp6LshR9|Gdj>!UOQv~0J{nf]([.mx{W!*1k7snR2-t@9t>AzmI:|nv3~{#Gn9*' );
define( 'LOGGED_IN_SALT',   '_y9OZ #2P6DSF_Nx*~_W0%]6Z`a+yRK1<m^G{Bu`R)Z8NYuN06/lnPuP*Sft19}:' );
define( 'NONCE_SALT',       '7:gERWL]zDCK6Lq(Ye}oF,0ghGNqU-=WtN$];2T7b]!l-H6TF&3py6S1bjH{r&[i' );

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
