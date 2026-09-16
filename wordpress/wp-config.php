<?php

define('DB_NAME', getenv('WORDPRESS_DB_NAME') ?: 'wordpress');
define('DB_USER', getenv('WORDPRESS_DB_USER') ?: 'wordpress');
define('DB_PASSWORD', getenv('WORDPRESS_DB_PASSWORD') ?: 'wordpress_password');
define('DB_HOST', getenv('WORDPRESS_DB_HOST') ?: 'db:3306');
define('DB_CHARSET', 'utf8mb4');
define('DB_COLLATE', '');

define('AUTH_KEY', getenv('WORDPRESS_AUTH_KEY') ?: 'chuyendecms-auth-key-change-me');
define('SECURE_AUTH_KEY', getenv('WORDPRESS_SECURE_AUTH_KEY') ?: 'chuyendecms-secure-auth-key-change-me');
define('LOGGED_IN_KEY', getenv('WORDPRESS_LOGGED_IN_KEY') ?: 'chuyendecms-logged-in-key-change-me');
define('NONCE_KEY', getenv('WORDPRESS_NONCE_KEY') ?: 'chuyendecms-nonce-key-change-me');
define('AUTH_SALT', getenv('WORDPRESS_AUTH_SALT') ?: 'chuyendecms-auth-salt-change-me');
define('SECURE_AUTH_SALT', getenv('WORDPRESS_SECURE_AUTH_SALT') ?: 'chuyendecms-secure-auth-salt-change-me');
define('LOGGED_IN_SALT', getenv('WORDPRESS_LOGGED_IN_SALT') ?: 'chuyendecms-logged-in-salt-change-me');
define('NONCE_SALT', getenv('WORDPRESS_NONCE_SALT') ?: 'chuyendecms-nonce-salt-change-me');

$table_prefix = 'wp_';

define('WP_DEBUG', filter_var(getenv('WORDPRESS_DEBUG') ?: 'false', FILTER_VALIDATE_BOOLEAN));
define('WP_HOME', 'http://wordpress.local');
define('WP_SITEURL', 'http://wordpress.local');

define('FS_METHOD', 'direct');

if (! defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

require_once ABSPATH . 'wp-settings.php';
