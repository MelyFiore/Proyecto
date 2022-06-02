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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'Mr?V)W,%6}p/k>+s2Xm6m^<D|G?Kd`aXQ S8qDCM-.m|t%N?EN|csFlj&k-NnF1{' );
define( 'SECURE_AUTH_KEY',  '[_6:=Qguvb)37W@m/n;>&T)$pK1KMZ:AO~5QYx=<kES3:g} `!eL;Lm7&^w9</gR' );
define( 'LOGGED_IN_KEY',    'Mf.h(a}_gO~uhfYP+e~^nzaKMBi*.t}!0x>?r9Jr*H8S##Cl?OT3TbH8:BbvI#Cl' );
define( 'NONCE_KEY',        ';qOro5~)zYP8~Zx9$WIjWo^6UMSdV,_4X<%o%Xz9*:d|Nntsnf`rQd=%*{hEkn4F' );
define( 'AUTH_SALT',        'w3S?OoPH1&@n:egf2:`@$[ LlR$JKy>!B*C?Z|IVy21BJ?m~!Px~Sl=y$9#r8P!4' );
define( 'SECURE_AUTH_SALT', 'H0Y6mm/A-z-uq`~jwR|)k^*<[vGB@Kx,}%Vj Yw?%qqPk4M+y4a5IxgCT)KULxl{' );
define( 'LOGGED_IN_SALT',   'wQUI{i6O_zqE77Nt,>a=%l@9osoqJhQboVwu4:?U|R(N|26:mo*J&<)ZhM.?{n*g' );
define( 'NONCE_SALT',       'F&tT%cn@EqjAq1&iF*P/IT}F4s*=}n gk-i!W@pEm+szSu$U*=e9sigKu1vTPO@^' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp1_';

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
