<?php

namespace Riftfox\Wechat\Error;

interface ErrorInterface
{
    public function getErrorCode():string;
    public function setErrorCode(string $code):ErrorInterface;
    public function getErrorMessage():string;
    public function setErrorMessage(string $message):ErrorInterface;
}