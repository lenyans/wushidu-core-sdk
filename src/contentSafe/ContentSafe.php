<?php
/**
 * Created by Lenyans.
 * Site: lenyans.com
 * Date: 2020/2/26
 * Time: 05:54
 */

namespace wushidu\contentSafe;

use wushidu\Config;
use wushidu\utils\Req;
use wushidu\utils\Res;

/**
 * 内容安全
 * Class ContentSafe
 * @package wushidu\contentSafe
 */
class ContentSafe
{
    private $config;

    public function __construct(Config $config)
    {
        $this->config = $config;
    }

    /**
     * 文本检测
     * @param array $texts
     * @param string $type_tag
     * @return Res
     */
    public function textScan(array $texts = [], string $type_tag = '')
    {
        return (new Req($this->config))->post('/api/ContentSafe/textScan', [], [
            'texts' => $texts,
            'type_tag' => $type_tag,
        ]);
    }
}