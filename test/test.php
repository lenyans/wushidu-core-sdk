<?php
/**
 * Created by Lenyans.
 * Site: lenyans.com
 * Date: 2020/2/26
 * Time: 06:20
 */

require_once 'vendor/autoload.php';

$wushidu = \wushidu\WushiduCore::getInstance([
    'app_id' => 'weitoupiao',
    'app_secret' => 'y0ev3wmnmc0d7p6cd8n44ffrz8gntooc',
    'server' => 'http://127.0.0.1:8000',
]);

//$res = $wushidu->contentSafe()->textScan([
//    '文本1',
//    '文本2',
//    '微信141312312321',
//], 'test', [
//    'is_test' => 1,
//]);

$res = $wushidu->sms()->sendSms('18166666629', '1234');

echo json_encode($res, JSON_UNESCAPED_UNICODE);