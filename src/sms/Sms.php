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
    public function sendSms(string $phone_number = '', string $code = '', array $params = [])
    {
        return (new Req($this->config))->post('/api/sms/sendSms', [], [
            'phone_number' => $phone_number,
            'code' => $code,
            'params' => $params,
        ]);
    }
}