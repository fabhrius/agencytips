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
define( 'DB_NAME', 'agencytips' );

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
define( 'AUTH_KEY',         '7QcSR:#E&j6[kJ;*/[g@oc`j8,Bp[qap(q1MIAKmuKzgI:GXTgP7FK>}r8af(m_l' );
define( 'SECURE_AUTH_KEY',  'b#a12d !QttL2T,5B(Y^iH}CwK@%j]M,G?~G!uxf!WFYl<h9Iais ?=sipYAr,mx' );
define( 'LOGGED_IN_KEY',    '/Gy}t1;y0XAJ:|}WR![%j-g*K:Jck0Dn!F:%Km}?@OO??KCWGHBHU]g2Fs;3r@m2' );
define( 'NONCE_KEY',        'oO<}]Xv+CJ4Pr-Qk*9d#&Ays(;0nyi6k:+39`x>UcscS%Z_(W::gj1F>)1(@bI5y' );
define( 'AUTH_SALT',        '!:hyAOJ=APK5n}-)[JejC| |g:R6Yk^Ev@ipw]JZJ.1y]rOr0vz>QGmVW;|7YpSQ' );
define( 'SECURE_AUTH_SALT', '}Ts4HL]eaW{v>sthK/NbNGZtVVUzd(kvHtsP{j-i&U8K{|wC9D1J;B7ZRA,z|VP+' );
define( 'LOGGED_IN_SALT',   '?dz5V*Ih[iqx*j[0W9V1lOZeu0xI&GpN-cwyyP>-(}^tw3y;iK&!i=Gy-&c]~eIY' );
define( 'NONCE_SALT',       'h=rolFg?:Ng?_@P?;HhtDN1bgioh:Uj/bi69^}b0>JF%Xew8fefk!`Vp]}&Zv5YS' );

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
