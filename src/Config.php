<?php
/**
 * Created by Lenyans.
 * Site: lenyans.com
 * Date: 2020/2/26
 * Time: 06:00
 */

namespace wushidu;


/**
 * @property string server
 * @property string app_id
 * @property string app_secret
 */
class Config
{
    private $config = [
        'app_id' => '',
        'app_secret' => '',
        'server' => 'http://127.0.0.1',
    ];

    public function __construct(array $config)
    {
        $this->config = array_merge($this->config, $config);
    }

    public function __get($name)
    {
        return $this->config[$name];
    }
}