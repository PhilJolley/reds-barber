<?php

// If a local config file exists
if ( file_exists( dirname( __FILE__ ) . '/wp-config-local.php' ) ) {
	// Use these settings on the local server
 	include( dirname( __FILE__ ) . '/wp-config-local.php' );
} else {
	// Otherwise use the settings below on staging/production
	define('WP_HOME', 'http://reds.ftscorch.com');
	define('WP_SITEURL', WP_HOME);

	// ** MySQL settings ** //
	/** The name of the database for WordPress */
	define('DB_NAME', 'db_reds');

	/** MySQL database username */
	define('DB_USER', 'forge');

	/** MySQL database password */
	define('DB_PASSWORD', '4S0acP0xO3YZM8T1kGnP');

	/** MySQL hostname */
	define('DB_HOST', 'localhost');

	/** Define the environment, for Roots/Sage */
	define('WP_ENV', 'production');
}

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don\'t change this if in doubt. */
define('DB_COLLATE', '');

define('AUTH_KEY',         '0ArfXfL/KGE3fd1TTKERTMIsGt1VLQ3vF5M3mR/RxacjuQkoPSQVDrxLFXRXS/UaXFy+Pz5RYudMF2UKJ/D3aw==');
define('SECURE_AUTH_KEY',  'LEAi0BxMSf74Hk75qPru1356Qtgj61ncy/YSWeRERB2iBIk48Pqm0p9XgfbRCH/7ttTGmsOeCpoXgnlNHRtKnA==');
define('LOGGED_IN_KEY',    'V4AKQn3xEXhwMRg13Gl8xT2sk2rWilI9Z7/3aT/BZvm3RywK54QI+gQoSvgK/T3bwuV5f6oC3fniMwT3Xy5axA==');
define('NONCE_KEY',        '54nA/iTZ2KucCb1EnPbIAAGrkwKuS1FqVdUWRGtBOc380tP2/j8WKuVpMqhIJlKRMnudNw8kVLc6QVvSL4uIhw==');
define('AUTH_SALT',        'yh9y21n5VMJ17XhDd0ibyXBWpmp4StFGF24pHtPugZ6UJkpOIN7bg/Z3OrxOZ5Yx955h1rHIMLDSyw2bL31lWA==');
define('SECURE_AUTH_SALT', 'cxyWPkg/MWTnTtbX+5gjL8dtepq/DcvBV9YgsyGjLv5QMeLsyfVjn+cO2JdU5t9/NMS1/pSrUqiLvgxg5zJFjg==');
define('LOGGED_IN_SALT',   'Zzp/KH+rRWwB3vl2uZ/dBIboFvCZagrwqD9kC4SPO3QC/mhweYe7i+SiImXuYvixd5tqXCJzhLxnPZnWiJ06VQ==');
define('NONCE_SALT',       'L+N763LbSXe//czyfi7243NLWgvEmogllUw2CbpjzfS23dOuZDZ2Gfk6qezko5kBaKsx/W2VJk3tCz8sgTZamA==');

$table_prefix = 'ft_';

define( 'WP_DEBUG', false );
define( 'WP_DEBUG_LOG', false );
define( 'AUTOMATIC_UPDATER_DISABLED', false );
define( 'WP_AUTO_UPDATE_CORE', true );
// define( 'WPCF7_AUTOP', false );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
