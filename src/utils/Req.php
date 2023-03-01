<?php
/**
 * Created by Lenyans.
 * Site: lenyans.com
 * Date: 2020/2/26
 * Time: 06:13
 */

namespace wushidu\utils;


use wushidu\Config;

/**
 * 网络请求封装
 * Class Req
 * @package wushidu\utils
 */
class Req
{
    private $config;

    public function __construct(Config $config)
    {
        $this->config = $config;
    }

    public function post($path, $headers = [], $data = [], $options = [])
    {
        $data = $data ? (is_array($data) ? Aes::encrypt(json_encode($data), $this->config->app_secret) : $data) : null;
        try {
            $body = \Requests::post($this->buildUrl($path), $headers, $data, $options)->body;
            return Res::json2res($body);
        } catch (\Exception $e) {
            return Res::fail($e->getMessage());
        }
    }

    public function get($path, $headers = [], $options = [])
    {
        try {
            $body = \Requests::get($this->buildUrl($path), $headers, $options)->body;
            return Res::json2res($body);
        } catch (\Exception $e) {
            return Res::fail($e->getMessage());
        }
    }

    private function buildUrl($path, $model = 'body')
    {
        return sprintf('%s%s?appid=%s&model=%s',
            $this->config->server, $path, $this->config->app_id, $model);
    }
}