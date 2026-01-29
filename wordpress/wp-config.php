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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

define( 'DB_NAME', 'wordpress' );

define( 'DB_USER', 'wordpress' );

define( 'DB_PASSWORD', 'MariaDB11!' );

define( 'DB_HOST', 'mariadb-galera' );

define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '|P#z mQx=Z|])1HD34C!6;` lMJ#*(=S&|d.RktD <@HGTyuiW3;.LB;qrJd0|o9' );
define( 'SECURE_AUTH_KEY',   '.N^UiAMEWDf4^_VY$3!WR5.Qn&-R?a=e&(bubWxv)OU)n~h^4&SrD,Zw(G$mWZ*G' );
define( 'LOGGED_IN_KEY',     'a#~~wa9fME(Ey)>3&gm-1y9bZP)Z+~^(N+%09C`lRB[yPjTtQgL}AQ]>,!@%{rz!' );
define( 'NONCE_KEY',         'uuirnE2P!oR~}&UpEzDZn!(YQ>momEOkZi<wVX@XK<h;,~NI&[qvnO2/s.H_;h{w' );
define( 'AUTH_SALT',         '/Ev>JqV6}1g{P_kuL &-zm:QQs,X!,~W=2i#abyF<ITl*a~62NYSVjbJ4NIA]|3d' );
define( 'SECURE_AUTH_SALT',  'imHoG29OlC._;Q^8g*MZ8hRfBJ+XRpzm@QKGHX~LS;>d=<&{eqNJg+o6tYfF5dGp' );
define( 'LOGGED_IN_SALT',    '8W+.~,W;}Y34w/fQle)@UFDA{fw>38;I]Dr72Mo2:nB4?I;?rWvL;_ufjFh]Y0rI' );
define( 'NONCE_SALT',        'Nq6oKw<`@8]sTd)ZR|dH(iyXzV.#4Iy6Sl/,d4r~lp?^9>&YhE@&g,9l)2sW3e#J' );
define( 'WP_CACHE_KEY_SALT', 'BOlr%Ze9w~jdL]$Q,OFs!/NaFEe0g^|^eO~CH^oNeVTLW.n=5xl+`EEPQ54).a#v' );

$table_prefix = 'wp_';

if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

require_once ABSPATH . 'wp-settings.php';