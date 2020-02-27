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

$res = $wushidu->contentSafe()->textScan([
    '文本1',
    '文本2',
    '傻逼正能量，sfsasaf134sa,俄方，傻逼，收到发顺丰3 草，的塞拉万积分卡',
]);

print_r($res);