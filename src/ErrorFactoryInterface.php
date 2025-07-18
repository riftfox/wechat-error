<?php

namespace Riftfox\Wechat\Error;

interface ErrorFactoryInterface
{
    public function createErrorFromArray(array $data):ErrorInterface;
}