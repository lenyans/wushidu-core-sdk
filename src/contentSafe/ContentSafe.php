<?php
/**
 * Created by Lenyans.
 * Site: lenyans.com
 * Date: 2020/2/26
 * Time: 05:54
 */

namespace wushidu\contentSafe;

use wushidu\base\Base;
use wushidu\utils\Req;
use wushidu\utils\Res;

/**
 * 内容安全
 * Class ContentSafe
 * @package wushidu\contentSafe
 */
class ContentSafe extends Base
{
    /**
     * 文本检测
     * @param array $texts
     * @param string $type_tag
     * @param array $params
     * @return Res
     */
    public function textScan(array $texts = [], string $type_tag = '', array $params = [])
    {
        return (new Req($this->config))->post('/api/ContentSafe/textScan', [], [
            'texts' => $texts,
            'type_tag' => $type_tag,
            'params' => $params,
        ]);
    }
}