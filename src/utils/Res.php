<?php
/**
 * Created by Lenyans.
 * Site: lenyans.com
 * Date: 2020/2/26
 * Time: 06:27
 */

namespace wushidu\utils;

/**
 * 响应返回封装
 * Class Res
 * @package wushidu\utils
 */
class Res
{
    public $code;
    public $msg;
    public $data;

    private function __construct($code, $msg, $data)
    {
        $this->code = $code;
        $this->data = $data;
        $this->msg = $msg;
    }

    public static function fail($msg = null, $data = null, $code = 0)
    {
        return new self($code, $msg, $data);
    }

    public static function ok($data = null, $msg = null, $code = 1)
    {
        return new self($code, $msg, $data);
    }

    public static function json2res($json)
    {
        if (!$json)
            return self::fail('res is empty');
        $res = json_decode($json, true);
        if (!$res)
            return self::fail('res is empty');
        return new self($res['code'], $res['msg'], $res['data']);
    }

    public function isOk()
    {
        return $this->code === 1;
    }
}