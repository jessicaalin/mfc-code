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
define( 'DB_NAME', 'mfc' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'g:p+*lXmy(53d]Y3` o&(s8eO}iXUHp@HAh=)^Ose/JVLLXMWs`YA*4NIx$4*>`*' );
define( 'SECURE_AUTH_KEY',  '@>@tuh_@mG)TZ0`0+L#jqW)P?u:]>j<+)xflWDE!IzRympE---3+<.M_>6,fPmcU' );
define( 'LOGGED_IN_KEY',    'jY8Sbjie(}lY>OyF5*(RRfLLSl]oGjn6*|{9~/1F3#R%:mGywSF*_!Rrhi}fYw[|' );
define( 'NONCE_KEY',        'thf`zAMO$shb8)ulGBr5AQ+e=clcUxLFd-f{DziIvFi}SNrW<0g.7sMemiHu|qdb' );
define( 'AUTH_SALT',        'k(ua*~y*SL7q!scSo8RTYb/gA}rk&lza@T{ja-|J3K(1b;GTl}-;NOiQ}/ZGnS`1' );
define( 'SECURE_AUTH_SALT', 'yAOAq?6AItT)uh`T:!PZ?%t!.S=!>$2OVn)&xhpr,W#A$Ir#J(WV/S~_AqSkaeL(' );
define( 'LOGGED_IN_SALT',   '4~RC?PHO,k~<F-D)w,[dQno3({)YP0{~Ff)IF%YbO4DHV>|*Rif@J X}<P9x+NIg' );
define( 'NONCE_SALT',       'S79G+mgZbhZ#]p+{S=AjmE%^+c39]Ah^~FN?2!5/$X:=k}gW|R x$i~c4|bb+.fQ' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
