<?php
define( 'DB_NAME', 'wordpress' );
define( 'DB_USER', 'wp_user' );
define( 'DB_PASSWORD', 'wp_pass' );
define( 'DB_HOST', 'db' );
define( 'DB_CHARSET', 'utf8mb4' );
define( 'DB_COLLATE', '' );
$table_prefix = 'wp_';
define( 'WP_DEBUG', false );

if (isset($_SERVER["HTTP_X_FORWARDED_PROTO"]) && strpos($_SERVER["HTTP_X_FORWARDED_PROTO"], "https") !== false) {
    $_SERVER["HTTPS"] = "on";
}

if ( ! defined( "ABSPATH" ) ) {
    define( "ABSPATH", __DIR__ . "/" );
}

require_once ABSPATH . "wp-settings.php";
?>