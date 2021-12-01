<?php

function url()
{
    if (
        isset($_SERVER['HTTPS']) &&
        ($_SERVER['HTTPS'] == 'on' || $_SERVER['HTTPS'] == 1) ||
        isset($_SERVER['HTTP_X_FORWARDED_PROTO']) &&
        $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https'
    ) {
        $protocol = 'https://';
    } else {
        $protocol = 'http://';
    }
    return $protocol  . $_SERVER['HTTP_HOST'];
}

$baseurl = url();
if ($baseurl == 'http://localhost') {
    $upOne = dirname(__DIR__, 2);
    $folder =  substr($upOne, strrpos($upOne, '\\') + 1);
    $baseurl = "http://localhost/" . $folder;
}
define('base_url', $baseurl);

if (strpos($baseurl, 'herokuapp.com') === false) {
    define('DB_HOST', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASS', '');
    define('DB_NAME', 'db_fashiondesign');
} else {
    define('DB_HOST', 'remotemysql.com');
    define('DB_USER', 'b999YkcGoV');
    define('DB_PASS', 'qLeQEtL1EP');
    define('DB_NAME', 'b999YkcGoV');
}

session_start();
