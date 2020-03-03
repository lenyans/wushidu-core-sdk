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
// 参数3：携带自定义数据
$res = $wushidu->contentSafe()->textScan([
    '文本1',
    '文本2',
], 'default', ['a' => 1]);

print_r($res);

```