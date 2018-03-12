<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'bepDBs0vb5');

/** MySQL database username */
define('DB_USER', 'bepDBs0vb5');

/** MySQL database password */
define('DB_PASSWORD', 'IiTftk1ict');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'P@;$!W|RF*=(;){S`q|7!4ff_Co5/KL5iF=ZV7_8j@+]B7_[.8l !UVnD24Xf?TJ');
define('SECURE_AUTH_KEY',  '.qNKB0dcoi^^3X3Xv,[s).:sEWJtEWEtjZOh^Kc(MJgKt7H*%I_V~egSC!P^fP(H');
define('LOGGED_IN_KEY',    'XZ9+Tx*yn{E-.y-J_P!+Va$Tms!%CMU<Xem;:GLG/+m|y?W]I-J-s~7rK1}S4Av;');
define('NONCE_KEY',        'ZrR?cgNu8tMd{[b0Xd[TN(Tg`n.=Fcd9S];8ICc,ri{K8[L_8NUn!mSDbc6HW;U2');
define('AUTH_SALT',        'BJ{W!-&FJ+cC)9@9Qy-X_xS8HCu>h[`NMym0cSAsUi4F@`2 Ab@W{m@1(Fq0LxjR');
define('SECURE_AUTH_SALT', 'p33a0!7X|(K40E$Lk2FoJ1_~}f8ZB>(C;/NGLosw:-Xyu+&.Z3LI20ppy0od,#;V');
define('LOGGED_IN_SALT',   'Eatb)[UAN3u{AQSv+(&3mGTZ7-o6]mH~1)@aG-dz<P~dB:E[-m{>n:B|R0? ek~3');
define('NONCE_SALT',       'U/Yu=I&l-*9jZk$4YN7az<0  }fr(M[cgrUg@{3cK9@ZvXDh_:(;ZK=n%6oE?uXb');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
