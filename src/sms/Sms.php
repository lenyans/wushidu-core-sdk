<?php
/**
 * Created by Lenyans.
 * Site: lenyans.com
 * Date: 2020/3/3
 * Time: 22:42
 */

namespace wushidu\sms;


use wushidu\base\Base;
use wushidu\utils\Req;

/**
 * 短信服务
 * Class Sms
 * @package wushidu\sms
 */
class Sms extends Base
{
    /**
     * @param string 手机号 $phone_number
     * @param string 验证码 $code
     * @param array 额外参数 $params
     * @param string|null 短信模板 $tpl
     * @return \wushidu\utils\Res
     */
    public function sendSms(string $phone_number = null, string $code = null, array $params = [], string $tpl = null)
    {
        return (new Req($this->config))->post('/api/sms/sendSms', [], [
            'phone_number' => $phone_number,
            'code' => $code,
            'params' => $params,
            'tpl' => $tpl,
        ]);
    }
}