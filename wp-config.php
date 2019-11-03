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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp-blog2' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', '1c568b39a8b80cbc190bc54fba83627181c8dbca79e8031b
' );

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
define( 'AUTH_KEY',         'iE2^D[rSk@KK2!.%OyzteYrX[GA wmZRIUY%;3KUqAwCQ )Dn:Ny,_rdSsQ,&txK' );
define( 'SECURE_AUTH_KEY',  '249h&)*c8jJj<50u@Af]@@O2Vy*Yecgo5RDMG6.SD3@QOjFV9]iM3_/<?vm3x&?u' );
define( 'LOGGED_IN_KEY',    'od]cnv:BsV?H_u2^Ikg6^]#ne?`hyqn@%@yDObAqXj~GUpAE%i!(uEn5^%PrY>h%' );
define( 'NONCE_KEY',        '3?d_UG/iX7Ll0d{B6D,qhqI>&zB&A]t X5DdBsFbKC=|%v0a8^Pi/c?s(TFTEg:(' );
define( 'AUTH_SALT',        'g .g WV^{N!,5=+LCJv6!Pybs<(c~|_y2/_d +[CxQ0Mp>`BcK5)(j|>O|Ogq~t;' );
define( 'SECURE_AUTH_SALT', '81hXo@PR7_a9!4^bJ!f7vKQ98Uo|7+v`{LtjNq3oZNN#^Ul_UrzT<65BTjm(2<8m' );
define( 'LOGGED_IN_SALT',   '2WzJFibczWb8,Oog2vkk3a8KiO:l..Ih1P2 6~Km`^7w7,?kF.A]lEz!QE>AIHFo' );
define( 'NONCE_SALT',       '.oOV}9rgFYT?;Cg<tHX<&_+hD+&:zt}HTEZV2!uhJGsK]M;iecfP/D(&IsV~svY;' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
