<?php

try {
	
	if (!defined('PHP_VERSION_ID')) {
	    $version = explode('.', PHP_VERSION);	
	    define('PHP_VERSION_ID', ($version[0] * 10000 + $version[1] * 100 + $version[2]));
	}
	if (PHP_VERSION_ID < 50207) {
	    define('PHP_MAJOR_VERSION',   $version[0]);
	    define('PHP_MINOR_VERSION',   $version[1]);
	}
	if ( PHP_MAJOR_VERSION < 5 || ( PHP_MAJOR_VERSION == 5 && PHP_MINOR_VERSION < 3 ) ) throw new Exception('error.env.php_ver_less_53');
	if ( !extension_loaded('Phar') ) throw new Exception('error.env.php_phar');
	if ( !extension_loaded('dom') ) throw new Exception('error.env.php_dom');
	if ( !function_exists('json_encode') && !extension_loaded('json') ) throw new Exception('error.env.php_json');
	
    if ( extension_loaded('suhosin') ) {
        $suhosin = ini_get('suhosin.executor.include.whitelist');
        $suhosinBlacklist = ini_get('suhosin.executor.include.blacklist');
        if (false === stripos($suhosin, 'phar') && (!$suhosinBlacklist || false !== stripos($suhosinBlacklist, 'phar'))) {
            throw new Exception('error.env.php_suhosin_phar');
        }
    }
	
	header('Content-Type: application/json');
	echo '{ "success": true }';

} catch(Exception $e) {
	
	header('Content-Type: application/json');
	echo '{ "success": false, "msg": "'.$e->getMessage().'" }';
	
}