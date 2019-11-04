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
define( 'DB_NAME', 'carnes' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '_;Y=;WXj`=n8no9=I`e<DSvD):4W 6[)`1 +(K_XF)3S&ItHP*E9dx#*ke)V?!Ud' );
define( 'SECURE_AUTH_KEY',  'j5r@8C|8,=G4muwD9kc<Og:1oqNzmebVOF,eo5H#)-`yYzgPhbCiTT:(0EgL,o)g' );
define( 'LOGGED_IN_KEY',    '>` ._8N;5RvtLg]n@Os-=W&gb|$T0{G2)k6Amr8ycjn5~T*MMdZj{_XOq=a5bL&#' );
define( 'NONCE_KEY',        '2w14Amo!Z*KAI8dfsO/$^#actTo{r:`+h<,U)!am6kR_E:ON>z9s.A7^A#uUztw[' );
define( 'AUTH_SALT',        'EpVemD`p!{#&x,rt1j6SUyrW)z#X_+ct>zTU-bkTe+a#>LkN;@|_}_Wn%q+ilmsg' );
define( 'SECURE_AUTH_SALT', 'B`Z}O_ynMu*edAU.6MGtlrKv<lwQy0/2mEpA2e{si>fxFZTj>TG*NQ5|h4Z{>R^c' );
define( 'LOGGED_IN_SALT',   '.-;-:,O[x;oW(T;s%y}EaT9f9NrRlolaXJq7JI`Z.Z~z+NY,rDV T_yd!J.i~o+A' );
define( 'NONCE_SALT',       'LvhH;X?aE_pd*fa2kC$2!w3earA-g|vQ6e;1[8:gG~p%l/Nm3sU_oq + 1foG|B9' );

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
