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
define( 'DB_NAME', 'EcomWordPress' );

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
define( 'AUTH_KEY',         'I~5:p$&F%MBm>ZD-dl]91kmCD^H8zVO,J6B-7n5;g&Lt3,>LLQb=7Ce}=^H+qu|c' );
define( 'SECURE_AUTH_KEY',  '7#60Su1HGXzm#DalY3M-*ZljOux-|yc;F+)-p+Yf,&<f^ssLba051j3R|On,?1&T' );
define( 'LOGGED_IN_KEY',    '<;huL-SK7WS^}s>aOkZJf82j|& ..NL}Jf42J[4i#)bTa9 -&!Q?dg(1XR;t@,3q' );
define( 'NONCE_KEY',        'MqtV`3j(%Dcg.qa%4${TMVA0,PA*x;U[Y#;I%| 5;,NLz#ZKM^7I7^J p^:O5lQJ' );
define( 'AUTH_SALT',        '$m`8!3=:*ZjwZ@V.nP.$:.mKQ}D&E{?&hx%%F}GS{4A|SoAB2U`wI+6Ls[C9[c[?' );
define( 'SECURE_AUTH_SALT', 'i&z63v*@J7^|tI`&<y;onUerL[!f1}f/8/6XU_GXQ=N{r_6%knHmzC)G_d;]GtM2' );
define( 'LOGGED_IN_SALT',   'TYHIMmt1HGU/>kW~1b#_@]|RqFbT,:aaJ<pZ;[4FlYY|m~L[%H<Vg@@ykGNh^Ad7' );
define( 'NONCE_SALT',       'I+$Vh:t(b*ECmXj5<y+Br1)3Xi2@i+OP+#,oC*0OSNPEb~{.PeJ^.yB^,YTs/&eo' );

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
