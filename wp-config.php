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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'expressmolddata' );

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
define( 'AUTH_KEY',         '.|_No8naYbh83_|4H&S<x}gMMtlik_.4P),6.vL x~tK7MJ<cR^xmF^FY}Rr$Zx#' );
define( 'SECURE_AUTH_KEY',  'c`|kWg0S&OK(9tJ4}#Bs,L{H+Y}^,jsi7FzJ#*+=X`b9fHp5^9r<d|?=p_t&z*DP' );
define( 'LOGGED_IN_KEY',    ']0Q3.eLv8I?]=,6UAO|s*e_khCez-Zb+slW,sl}Kq]<NIzL#0bb&1razxr8c .#|' );
define( 'NONCE_KEY',        '=[.TYI/R}._I?}|~*u0JO?Y`br==G4Bf>)G-K,D@*mQU._c!|{CK%c7=yL3f, z$' );
define( 'AUTH_SALT',        'mCj/1|`hE5x1HmI$b7+XXNmXv]v+)iN%GpE@<x%TvideCjaF`e6I*7.s,]6+s(._' );
define( 'SECURE_AUTH_SALT', '|+_@bG|3IJw+p< VfJ&Jj>a+|5Q0d)@0v2>3qS8@rs+2AElt$#*}TbP+F<l?!2=2' );
define( 'LOGGED_IN_SALT',   '!8S.e#Pr#!oi0W$BPLhqX<d(pO+Trf={//fyMX_kSOV6b`TgBoAd_0^LZ?0jsBmg' );
define( 'NONCE_SALT',       ']ms*T~hI?x2^3<]b<o0t8?sz&:NkN<K?k D:^H_irl!I]M~9b1YNYr<C0a^}ZLdO' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
