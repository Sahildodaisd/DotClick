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
define( 'DB_NAME', 'dotclick' );

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
define( 'AUTH_KEY',         ']+6:vva[l/kIRJiT/(OI<C)*AV}x*lT$!OIp19<#^MqJ)X)A.X_mp>w7iAG,tkL$' );
define( 'SECURE_AUTH_KEY',  '#w-C^%>.#$me/]^i.`,#L^Q)1[Wx{ABu Fg/wnP!#[IZY4KF&|V~F|]kegGRLt^Q' );
define( 'LOGGED_IN_KEY',    's@f]@fldftS^FtXh=URvOEcmtoT88FViyZO{bj;R}c^KWg.Z3W~c8l+KJR!h$k^T' );
define( 'NONCE_KEY',        'w; = iD<W[It(tB&]6JvN)! 2?lu}VqzSK,u,[Z,Iq_>[p?%K8z-zI:`+GQ6?$*R' );
define( 'AUTH_SALT',        '3 ]Wez6o<q]s^%Mp/9rgM:|4?v{UN^ZnIjLWF)b6MimH` lHw5ZIT,x@5hEN Fep' );
define( 'SECURE_AUTH_SALT', 'HFG`|}>h3T:e:!RcuWMFm;2PVq7qCe`t#;pI0,gncFLq11,I>Vrs_QD,R*;YmOHY' );
define( 'LOGGED_IN_SALT',   'ToHTAD5ha}`U4>*k1XzAtjHC|qBSl79*)l8M4-:22go0uo4p/(aTbMy,vJ!=V8`^' );
define( 'NONCE_SALT',       't6yZ*aR?be`rfi]}NeJ[Z>-.QH@F7w#ihe:qn`D>I7n:t@KRj#g?R=}2* .xKNs`' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'dc_';

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
