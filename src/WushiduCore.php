<?php
/**
 * Created by Lenyans.
 * Site: lenyans.com
 * Date: 2020/2/26
 * Time: 05:42
 */

namespace wushidu;

use wushidu\contentSafe\ContentSafe;
use wushidu\sms\Sms;

/**
 * 静态类，所有的功能都由此类获取实例
 * Class WushiduCore
 * @package wushidu
 */
class WushiduCore
{
    private static $instance;

    private $config;

    private function __construct(array $config)
    {
        $this->config = new Config($config);
    }

    public static function getInstance($config)
    {
        if (!(self::$instance instanceof self))
            self::$instance = new WushiduCore($config);
        return self::$instance;
    }

    /**
     * 内容安全接口
     * @return ContentSafe
     */
    public function contentSafe()
    {
        return new ContentSafe($this->config);
    }

    /**
     * 短信接口
     * @return Sms
     */
    public function sms()
    {
        return new Sms($this->config);
    }

    private function __clone()
    {
    }
}