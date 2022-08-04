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
define('WP_CACHE', true);
define( 'WPCACHEHOME', '/var/www/vhosts/alexmed.co.uk/httpdocs/wp-content/plugins/wp-super-cache/' );
define( 'DB_NAME', 'wp_vyyru' );

/** MySQL database username */
define( 'DB_USER', 'wp_afiqx' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Y@4%XHYjek!0olJ8' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3306' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '/G(#Ud#[m&pu+M2+6E;jqdI[*[[&Dua41#@)2ks2#Y|)D%8~j*Cs_A|&vIV[[)4w');
define('SECURE_AUTH_KEY', '_1Mrpjbv&@1o-fb3FXS[:TYS~j9Q1@4~8F/n/LmPL_MZ|l[hs5[WrR9_!9y]&Rr~');
define('LOGGED_IN_KEY', '0~6/B)_]-d#I992+4/+([pzg5WF5Bfw8mk24;Tog#Qq7N30mank0vA6[&3]@espk');
define('NONCE_KEY', 'fs&EY_EsTZn+H&N/u:Z~Rs5zn-F(32)8x16b#HL)]4g23y;hg[x#:5Qx1Y!5dR51');
define('AUTH_SALT', 'W-[M/[vw1:5[0miW66rs*&gyJ|WSl76pi06a3nN(J74zAN2v306lZy4Yia6|_8ns');
define('SECURE_AUTH_SALT', 'C)4TR2uD|%xDAJ43v+98uxR)%X67P8%Nx)@z7dDT7&+e7*&KOHjq:Vpn2%H]5[vG');
define('LOGGED_IN_SALT', '*40%10*u@12&_DO*&5C&6h4#r(up!9Bzl~B|s&b|p:j]!5(i17U:~nx+:w/Kgwj!');
define('NONCE_SALT', 'M@h4NS;eP%x2&GlYLCA*-X0@d#&8Gl21|85]Pf0ULAP+)~|0gVK@e_5+!Jqb76&6');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = '8oPW47p_';


define('WP_ALLOW_MULTISITE', true);
define( 'DISALLOW_FILE_EDIT', true );
define( 'CONCATENATE_SCRIPTS', false );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
