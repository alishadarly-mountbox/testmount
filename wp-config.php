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

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          ';v&goPvX#qAcJ`EWa]Uj-AOarYJ#~/!=-YaodDVmx0{M+4Al[YE+>_|i_DOTzy(2' );
define( 'SECURE_AUTH_KEY',   'oV9fg!h(nD&3ed.eo>>9EkWN??4WW@,a*/a^DI[V_>pXsKJaMq`Oo%09P`Usog.o' );
define( 'LOGGED_IN_KEY',     'pQgdD/zdii!9a@epxDxS8Uf8-,.XBU#r7}(c8zk0tW!jY+Lg)wF9pS]#AK.y:+^?' );
define( 'NONCE_KEY',         'N92M=b}Px8rO qlw<R8o&}bM0=RkQXOlE;EgAjzt=58r6DZ[`2C0}$7o|Yvfon+W' );
define( 'AUTH_SALT',         '8aCxZL`0fUg:~@iqG4*LQbg[#;BSEX8BQbEJk;tst4i}q!<DoC6qMH m6+#Sn>k;' );
define( 'SECURE_AUTH_SALT',  'b/ci`M%&,`Pjn,AQ6h*GU)(mxnvBZ<j(Heh::-J[aS]=>^cp{Zy8e>93l?_v%lcI' );
define( 'LOGGED_IN_SALT',    '9,-vz}:nGiM@sG$eQJcMH#@k,i(eJ19fdLh%ukfCQXo.yi9wHFW+^72Pk-!kV@OK' );
define( 'NONCE_SALT',        'wkm6}K2jW[Am9&B6rQIy]k%Rr~q9302*wu]%Z:juz7r7,.nq;cRU#gvW)4tZDCZL' );
define( 'WP_CACHE_KEY_SALT', 'SMSJ)G}6H,KRdJ`uTk:!T,&S>Ybs/wId7fYsV8S2Pg7G*ST_}gGlrs.@#Wt^A8g]' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
