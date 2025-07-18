<?php

namespace Riftfox\Wechat\Error;

use Riftfox\Wechat\Error\ErrorFactoryInterface;

class ErrorFactory implements ErrorFactoryInterface
{

    public function createErrorFromArray(array $data): ErrorInterface
    {
        // TODO: Implement createErrorFromArray() method.
        // TODO: Implement createTokenFormArray() method.
        if (!isset($data['errcode']) || !isset($data['errmsg'])) {
            throw new \InvalidArgumentException('Invalid response from WeChat API: missing errcode or errmsg');
        }
        return new Error($data['errcode'], $data['errmsg']);
    }
}