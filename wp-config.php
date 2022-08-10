<?php
define( 'WP_CACHE', true );
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

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u704274034_jwJFA' );

/** Database username */
define( 'DB_USER', 'u704274034_AIQPQ' );

/** Database password */
define( 'DB_PASSWORD', 'YaZPoj99VV' );

/** Database hostname */
define( 'DB_HOST', 'mysql' );

/** Database charset to use in creating database tables. */
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
define( 'AUTH_KEY',          ', KG=#%_DoNTt^M#BDB) pO8F3]Ii?f8X G*>(nsw9`WirZ4Dq4kQASP)}47VoUz' );
define( 'SECURE_AUTH_KEY',   '_j9Z=!lTb!5kR=,B)tGZ*1Z4_Yoh#tvF7w.pigYvU!>{0HWS|JW3g:8^N-/huO4G' );
define( 'LOGGED_IN_KEY',     'q>HwN!p%I,^ FR>a 2#N|XZtAm&s33:F0*>mF=/fJhI,?`Dze*n!D3kI^sMt,qa!' );
define( 'NONCE_KEY',         'A,wa93%o=p?[Do1^]%3wD;8EP5gIi=@d/i{e,^Bm-}Fue8YLfJo4vf_NrZs~p$SF' );
define( 'AUTH_SALT',         'F5ITB.Df1*h?V0}Rh%qc3 p{T<b.0;$P6ze}z!L)y?[$Oy(iE|O4?G~TVP*g~Ll`' );
define( 'SECURE_AUTH_SALT',  '+Xe?Q8p@d7&@zF8_~>ctu&#cDHK}NzHE-UC?D59blQ&-8WoE.oTIJ<AIFgZ%J:YT' );
define( 'LOGGED_IN_SALT',    ':sG(/Q884DZGHOk$V!!; ZvL~l(hQ;EbLCc,7~;2,F_Muo^H_Tp$$>lUVawBP/GA' );
define( 'NONCE_SALT',        'A4?W2e8i4Y}4uNU!PYyT[S/9<%MwJ&@CGlb/m)xd~9fk$HSkhMbXd2]a[[dz%7X.' );
define( 'WP_CACHE_KEY_SALT', 'm,wxgwM(s;@qTU&`[pdAiJ70)` o: L_4I~ZMTFZf9W^af7<+i/VzD34zk6{x/kS' );


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



define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
