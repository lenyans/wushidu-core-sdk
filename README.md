# wushidu-core-sdk

#### 内容安全检测

```
// 获取sdk实例
$wushidu = \wushidu\WushiduCore::getInstance([
    'app_id' => '1',
    'app_secret' => '123',
    'server' => 'http://127.0.0.1:8000',
]);

// 调用文字检测
// 参数1：字符串数组
// 参数2：类型标记
$res = $wushidu->contentSafe()->textScan([
    '文本1',
    '文本2',
], 'default');

print_r($res);

```