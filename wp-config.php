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
define( 'DB_NAME', 'wpcore' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',          'A;+?b< 6{dFMwg}GC<Bwgr`<IV.`VevsmD9hBhUp>P-ETXJGI55e|qU=,EAQ9wY6' );
define( 'SECURE_AUTH_KEY',   '`6Z:65*mPlx&z7>Y_}G(t`+Fm#ShLpC-9, jTNS/B>2`{S7:+/vrl:O~#nvN)^1y' );
define( 'LOGGED_IN_KEY',     'X--rguui#]+:WI9;)KYmu6|v3L^=),.OO]mR9sk7|P84s##+7OSWu-XN31a@Q@sY' );
define( 'NONCE_KEY',         'Y$mmQSuY-5F>j)AJvSB)Uf,c?7[T@%_yZE:Yw{rJH #u{9S[W.bIokEuHM)UMiLm' );
define( 'AUTH_SALT',         'dr7k50!|Rp4~L{ dcz-gZB {7Fx_IvN@A^!P4404Sk13h>v=_NA_y#YyJT]&L;vU' );
define( 'SECURE_AUTH_SALT',  'd%m&pZ?#ea%]gXpzI~;`20)_rKhTOaQ&qby=1]w 8T2QyWdk+s^[S|#k<-A<7DEE' );
define( 'LOGGED_IN_SALT',    'Sj%yg^TiFQ-%OP=^RF{4K*74@BzkVP^G;jtHh->,lbE5`6/&^OB&IXvWH~yKWi#w' );
define( 'NONCE_SALT',        'b1+`-?Vc~&~G:;W6r[$b3};T8M:6J5m/+yX<w2ntC%GP]SbGK;B^c.{9JUuI4:1&' );
define( 'WP_CACHE_KEY_SALT', '|Se)x<[W@d,0(m:zmmyqzrCRG+TJ<~CAV+TTxb,0NCCkdk/dv}Alu7So/jRn&]A`' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
