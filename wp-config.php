<?php

include dirname(__FILE__) . '/vendor/autoload.php';

use Arrilot\DotEnv\DotEnv;

DotEnv::load(dirname(__FILE__) . '/.env.php');

$dotenv = DotEnv::all();

define('DB_HOST', $dotenv['DB_HOST']);
define('DB_NAME', $dotenv['DB_NAME']);
define('DB_PASSWORD', $dotenv['DB_PASSWORD']);
define('DB_USER', $dotenv['DB_USER']);
define('DISABLE_WP_CRON', $dotenv['DISABLE_WP_CRON']);
define('SAVEQUERIES', $dotenv['SAVEQUERIES']);
define('UPLOADS', $dotenv['UPLOADS']);
define('WP_ALLOW_REPAIR', $dotenv['WP_ALLOW_REPAIR']);
define('WP_DEBUG_LOG', $dotenv['WP_DEBUG_LOG']);
define('WP_DEBUG', $dotenv['WP_DEBUG']);
define('WP_HOME', $dotenv['WP_HOME']);
define('WP_SITEURL', $dotenv['WP_SITEURL']);
define('YNV_ENV', $dotenv['YNV_ENV']);
define('JWT_AUTH_SECRET_KEY', $dotenv['JWT_AUTH_SECRET_KEY']);
define('JWT_AUTH_CORS_ENABLE', true);

// PROD - HLG
if ($dotenv['YNV_ENV'] !== 'DEV') :
    if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && 'https' == $_SERVER['HTTP_X_FORWARDED_PROTO']) {
        $_SERVER['HTTPS'] = 'on';
    }
endif;

// DEV
if ($dotenv['JETPACK_IP_ADDRESS_OK']) {
    define('JETPACK_IP_ADDRESS_OK', $dotenv['JETPACK_IP_ADDRESS_OK']);
}

if ($dotenv['YNV_ENV'] === 'DEV') :
    define('JETPACK_DEV_DEBUG', $dotenv['JETPACK_DEV_DEBUG']);
    define('WP_DEBUG_DISPLAY', true);
    define('SCRIPT_DEBUG', true);
    @ini_set('display_errors', 0);
    error_reporting(E_ERROR | E_PARSE);
endif;

define('DB_CHARSET', 'utf8mb4');

define('DB_COLLATE', '');

define('AUTH_KEY', $dotenv['AUTH_KEY']);
define('SECURE_AUTH_KEY', $dotenv['SECURE_AUTH_KEY']);
define('LOGGED_IN_KEY', $dotenv['LOGGED_IN_KEY']);
define('NONCE_KEY', $dotenv['NONCE_KEY']);
define('AUTH_SALT', $dotenv['AUTH_SALT']);
define('SECURE_AUTH_SALT', $dotenv['SECURE_AUTH_SALT']);
define('LOGGED_IN_SALT', $dotenv['LOGGED_IN_SALT']);
define('NONCE_SALT', $dotenv['NONCE_SALT']);

$table_prefix = $dotenv['DB_TABLE_PREFIX'];

if (! defined('ABSPATH')) {
    define('ABSPATH', __DIR__ . '/');
}

require_once ABSPATH . 'wp-settings.php';
