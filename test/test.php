<?php
/**
 * Created by Lenyans.
 * Site: lenyans.com
 * Date: 2020/2/26
 * Time: 06:20
 */

require_once 'vendor/autoload.php';

$wushidu = \wushidu\WushiduCore::getInstance([
    'app_id' => '1',
    'app_secret' => '123',
    'server' => 'http://127.0.0.1:8000',
]);

$res = $wushidu->contentSafe()->textScan([
    'text1',
    'text2',
]);

print_r($res);