<?php
/**
 * Created by Lenyans.
 * Site: lenyans.com
 * Date: 2020/2/25
 * Time: 06:11
 */

namespace wushidu\utils;

class Aes
{
    /**
     * aes 加密
     * @param string $string 需要加密的字符串
     * @param string $key 密钥
     * @return string
     */
    public static function encrypt($string, $key)
    {
        // openssl_encrypt 加密不同Mcrypt，对秘钥长度要求，超出16加密结果不变
        $data = openssl_encrypt($string, 'AES-128-ECB', $key, OPENSSL_RAW_DATA);
        return bin2hex($data);
    }

    /**
     * aes 解密
     * @param string $string 需要解密的字符串
     * @param string $key 密钥
     * @return string
     */
    public static function decrypt($string, $key)
    {
        return openssl_decrypt(hex2bin($string), 'AES-128-ECB', $key, OPENSSL_RAW_DATA);
    }
}