<?php
require_once dirname(__FILE__) . "/../../vendor/autoload.php";

use Cloudinary\Cloudinary;
use Cloudinary\Configuration\Configuration;
// require_once "$root/vendor/autoload.php";

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
    define('DB_USER', 'sOrtNg22tx');
    define('DB_PASS', '6sEOvQFlnW');
    define('DB_NAME', 'sOrtNg22tx');
}

// Configuration::instance(['cloud' => ['cloud_name' => 'kadabengaran-cloud', 'api_key' => '374176865743142', 'api_secret' => '7PdAKFh_0-h-1V1klZ4sbG-ZLAY']]);
// $config = Configuration::instance();
// $config->cloud->cloudName = 'kadabengaran-cloud';
// $config->cloud->apiKey = '374176865743142';
// $config->cloud->apiSecret = '7PdAKFh_0-h-1V1klZ4sbG-ZLAY';
// $config->url->secure = true;
// $cloudinary = new Cloudinary(
//     [
//         'cloud' => [
//             'cloud_name' => 'kadabengaran-cloud',
//             'api_key'    => '374176865743142',
//             'api_secret' => '7PdAKFh_0-h-1V1klZ4sbG-ZLAY',
//         ],
//     ]
// );
\Cloudinary::config([
    "cloud_name" => "kadabengaran-cloud",
    "api_key" => "374176865743142",
    "api_secret" => "7PdAKFh_0-h-1V1klZ4sbG-ZLAY",
    "secure" => true
]);

session_start();
