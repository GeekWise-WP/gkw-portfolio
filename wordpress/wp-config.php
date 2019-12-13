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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wordpress' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          'E~7ArvoNw66)VBkZjN&C$8nSmt5F]^O=r:<lDD0F$R}+#g!W1pUO,`6LEhn1i5[I' );
define( 'SECURE_AUTH_KEY',   'YejjIRvN,?#ahuf-[!f-H%Rdnjs!~gDfg/8]Q]K+>pg5#?TMkNHLdi,EIL sgw1m' );
define( 'LOGGED_IN_KEY',     '8||0q~&w-<i.Lj]Et)yUzSUb]6v8>z 5R z&@}Ho15i~>#vWy%rE^DDjuSF%ue[C' );
define( 'NONCE_KEY',         '#-;^x<es)f{yMet6t[Pp 5`!*z&E7K:MM[8(eV?q<4S?;Jr3aTsbH4Rm.I9(#2fL' );
define( 'AUTH_SALT',         '5U@Rz`Q9(=P5#yVs0ha}}&Tn}3%cs`OW{OZ%%prZL& 1pq0Y;](57iuL*q}2}m3(' );
define( 'SECURE_AUTH_SALT',  'v Q]mNR4qmT?V{V8cqI{1~hY,a3XUN)]NiH2%gS|JX]~`hz]ahSyz9o~)7m/IJ:o' );
define( 'LOGGED_IN_SALT',    'cX80Cn6f=2)6P=+Vv|`=a]ch&y7Z[^G$2{>@htW2OpE;qW7ML?gO%YO#j,zH.xJ]' );
define( 'NONCE_SALT',        '>}Zd:-!G8%+g}0s%SrI@Tc<eP[{deipkf}Au^=8P}K<DF;WsOe?Feicw$tu&N;-6' );
define( 'WP_CACHE_KEY_SALT', '5lQCw4<3,2?m^YmEBtIDF/aa!w)M=DsGyLe<!<zJp;!P~XTO!o)[pZGM2L4eVxN<' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


define( 'JETPACK_DEV_DEBUG', True );
define( 'WP_DEBUG', True );
define( 'FORCE_SSL_ADMIN', False );
define( 'SAVEQUERIES', False );

// Additional PHP code in the wp-config.php
// These lines are inserted by VCCW.
// You can place additional PHP code here!


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
