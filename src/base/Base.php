<?php
/**
 * Created by Lenyans.
 * Site: lenyans.com
 * Date: 2020/3/3
 * Time: 22:42
 */

namespace wushidu\base;


use wushidu\Config;

class Base
{
    protected $config;

    public function __construct(Config $config)
    {
        $this->config = $config;
    }
}