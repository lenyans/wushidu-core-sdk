# wushidu-core-sdk

#### 获取sdk实例
```
// 获取sdk实例
$wushidu = \wushidu\WushiduCore::getInstance([
    'app_id' => '1',
    'app_secret' => '123',
    'server' => 'http://127.0.0.1:8000',
]);
```
#### 内容安全检测
```
// 调用文字检测
// 参数1：字符串数组
// 参数2：类型标记
// 参数3：携带自定义数据
$res = $wushidu->contentSafe()->textScan([
    '文本1',
    '文本2',
], 'default', ['a' => 1]);
```

#### 发送短信验证码

```
// 手机验证码
// 参数1：手机号
// 参数2：验证码
$res = $wushidu->sms()->sendSms('151xxxxxxxx', '1234');

print_r($res);
```