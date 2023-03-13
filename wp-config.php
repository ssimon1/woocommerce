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
define( 'DB_NAME', 'wp' );

/** Database username */
define( 'DB_USER', 'wp' );

/** Database password */
define( 'DB_PASSWORD', '12345' );

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
define( 'AUTH_KEY',         'Ijg~PL(j0>bcrAL4C-?OkezKIt r>!y]Y-gjQJ7_C%=a$<-yEQ-LUSsO3*h)jaX1' );
define( 'SECURE_AUTH_KEY',  'vx9^V2SubT7 EB;,3*Pj7;E.@G7eS>`&yVKiva5tt*eVZ_R[8#hFZM?.}ei]HWOu' );
define( 'LOGGED_IN_KEY',    'VcvO@yI/J};MR[F.MUf47 KKG=lGkhzcr&q(W8l[yPo3lQbpDQu!v{&*/.y )1mQ' );
define( 'NONCE_KEY',        'Mu{3|,,|<ZC@g3&tNV0f;^G|X[0A,H>i#?e12sg@~ju4v.V_j3U(QF>=7ZUgW;@=' );
define( 'AUTH_SALT',        'O.Mx8_g<NWItGx(K(rRCTxwR?U0yNgXTG$48*U];rrWay];c7.JlhE`-8Ykt]H c' );
define( 'SECURE_AUTH_SALT', '^|3dEWnhl91>?^mi<1a`^ E|vRu:UB3+187IknKlM=#,?}(TGZ:;ZICg;.,(q[Qn' );
define( 'LOGGED_IN_SALT',   '0j6EBQ8uQR.#,3}G_Aqg12b9u|`Bu(j<gNqx%y/|enUP[&;C7s-l|2dY`C4 4mbp' );
define( 'NONCE_SALT',       '4D|R#Je-qJE}$hW&np(D,)c~,@j7OW~]W|]=N:`=(T7_vgO5i,[v7TfrG q.JVIX' );

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
