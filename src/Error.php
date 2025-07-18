<?php

namespace Riftfox\Wechat\Error;

use Riftfox\Wechat\Error\ErrorInterface;

class Error implements ErrorInterface
{
    private string $errorCode;
    private string $errorMessage;

    public function __construct(string $errorCode, string $errorMessage)
    {
        $this->errorCode = $errorCode;
        $this->errorMessage = $errorMessage;
    }
    public function getErrorCode(): string
    {
        // TODO: Implement getErrorCode() method.
        return $this->errorCode;
    }

    public function setErrorCode(string $code): ErrorInterface
    {
        // TODO: Implement setErrorCode() method.
        $this->errorCode = $code;
        return $this;
    }

    public function getErrorMessage(): string
    {
        // TODO: Implement getErrorMessage() method.
        return $this->errorMessage;
    }

    public function setErrorMessage(string $message): ErrorInterface
    {
        // TODO: Implement setErrorMessage() method.
        $this->errorMessage = $message;
    }
}