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

define( 'DB_CHARSET', 'utf8mb4' );

define( 'DB_COLLATE', '' );

define( 'AUTH_KEY',         'uXC=aH(fR(x!-)T{m~+c*:7hL~. m/(=q_a,td~uMOm t*l.jd^1`hFI>O%6k}YT' );
define( 'SECURE_AUTH_KEY',  'C_TY^p,F9)=gC1}~+=8hW,tH[f=s!XXu0xoL4+.hmDrHs/l$@23<*[dw7*J*D<>.' );
define( 'LOGGED_IN_KEY',    '7Fu*Ia7eR)BN/`W4*ht|%7{dK%YJEP]U[7qlN9~oe(L;}+dm46MTLuQ8AP}20-qX' );
define( 'NONCE_KEY',        'Gd#;7m,v{mYi>;$dL(jC>]_V<;A~vHB~RG&/}<4I/y)zn`PupR?n,mBh0;1w$.{s' );
define( 'AUTH_SALT',        ';V{{pp,es?vQOaFs]KJ4fhT%Zz.*);e7-f2x=5X]G-9i:W|O?W,btX[ue}V;[hI{' );
define( 'SECURE_AUTH_SALT', ']cAK(6WP2d1t;pSSQ PD{:)K6JA2TZ0x|/I^KeN+mv;XpES/.VNONrN=QCqs@_M-' );
define( 'LOGGED_IN_SALT',   ';z`|<Gy,g[zocy1U-e Pw}a*{(Mt a0t{Iwd0c^>)]]$x/#j|W+a0 WXx2Sb0(:;' );
define( 'NONCE_SALT',       '7ot5Sc#Q,VAXD,i,4 qg4|-YT}qyN^!$D(QBcU#=[SEdak?a@sA?6^*7cLz+A5:G' );

$table_prefix = 'b3d';

if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

require_once ABSPATH . 'wp-settings.php';
