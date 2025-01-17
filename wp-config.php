<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress_db');       // Nome do banco de dados (variável de ambiente)

/** Database username */
define('DB_USER', 'wp_user');       // Nome de usuário do banco de dados (variável de ambiente)

/** Database password */
define('DB_PASSWORD', '123456'); // Senha do banco de dados (variável de ambiente)

/** Database hostname */
define('DB_HOST', 'localhost');       // Host do banco de dados (variável de ambiente)

// ** Chaves de segurança e saltos ** //
define('AUTH_KEY',         'v#jl8ctenY?JbFUwgeW^uDy9%N}z+z#k_J8Lpt);8sri/_uOAmFzW&dxtByC8Fd@');
define('SECURE_AUTH_KEY',  'XXY^g5wPl9^nkEEn9Tw7rsBchDoQkIk_GbeUbmD4Wq|)P%RswxSmb!|2l87laGnL');
define('LOGGED_IN_KEY',    '8FZ$rcZX8eWnVxxm7C%}Z4iQs#r6X62XHsT/BUUoG92yX_lyuCRub|a1+ts8c_vH');
define('NONCE_KEY',        '9Lhox_Z2d9O21ZYP)-u|0X7@1=_8TR_wTl-_hC9NMyO~J9|q86pD-TmAyGc20na_');
define('AUTH_SALT',        'Q}V%5Znv.5w)FQw|/X2XB|fqK9X#j4Rzc9q+9_hyB*sgH-Q(TkaA[2ZTxTk~ZWp');
define('SECURE_AUTH_SALT', 'y^Vp%*^kFHYfEqfeZGk;3_JAVeqyL6HUSYj!f6XwG|KVC96Eo2HppKYrs1Ty68l');
define('LOGGED_IN_SALT',   'qJg)%Gp8XqJk^9n^1kF^joH)piu5%rD~u2gzgo*hxq&fXHbh+}TZH;8fz^M5XE_');
define('NONCE_SALT',       'iUjXfD~]JYZlmuGx%}+u63A@TXCTv74:mwD?)kF3S1!)Sh8_=+gOxA6qG)lAe~9');

// Definições do WordPress (geralmente não precisam ser alteradas)
define('WP_DEBUG', false);

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'wp_';

/* Add any custom values between this line and the "stop editing" line. */

define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
