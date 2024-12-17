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
define( 'AUTH_KEY',         '8VIX?z1/-7rTxrs4Rq%{-nUk(wysJPrLc2t4AZ?7Jv=6;cDgt:rH1r)~VkI9]mrs' );
define( 'SECURE_AUTH_KEY',  'oOg4E:f$-bn!ylWksahqO})v(^JBB7jU(5{@xof}h} ,F3#s7Y/HjATL(bRw[)3R' );
define( 'LOGGED_IN_KEY',    '%MTX9.xy1A+/)C>FH*adPym1`&DSxi{6Y-#7l6w?;devt{j]PoWfnZ!&tZS7w*YP' );
define( 'NONCE_KEY',        ')-bX7I<@Jn3Y]_HkyD;U5Q8BE3,^NLT>Q9g(4ch#-[|BF%2:imU@F oMQj}?1.<u' );
define( 'AUTH_SALT',        '.aFpS3z|>MEL9E//f1GqpRHF>Q[p;0&UD!GfOo)8FB]:q~tP0JHQmNJHf.b/<?mK' );
define( 'SECURE_AUTH_SALT', ']OqAC`seY]d` oZ)$SsbRP^(4VSjX)qCJ%HI/0pl#8TJgMm,V=~g,<nHdGd%N&p-' );
define( 'LOGGED_IN_SALT',   'K.6@xuO9:9<O`SXEay;q|w3U[&>~DlsmU?7fS#%P0y|0m,?vvkPRO?kH$[bbTCk?' );
define( 'NONCE_SALT',       '6G}~wI.RDh<ZC[MC/qeegkEtyVdf*i,hi_;)80O,k0+#RMlu [$dQl6-;&d-slMz' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
