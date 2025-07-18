# wechat-error

微信错误处理模块，提供统一的错误信息数据结构。

## 功能特性

- 标准的错误信息数据结构
- 支持错误码和错误消息处理
- 与其他微信 SDK 模块无缝集成
- 简单易用的接口设计

## 安装

```bash
composer require riftfox/wechat-error
```

## 使用方法

### 基础用法

```php
use Riftfox\Wechat\Error\Error;
use Riftfox\Wechat\Error\ErrorFactory;

// 创建错误实例
$error = new Error('40001', 'invalid credential');

// 获取错误信息
echo $error->getErrorCode();     // 40001
echo $error->getErrorMessage();  // invalid credential

// 使用工厂创建错误实例
$factory = new ErrorFactory();
$error = $factory->createError('40013', 'invalid appid');
```

### 在其他模块中使用

```php
use Riftfox\Wechat\Error\ErrorInterface;

class YourProvider
{
    public function handleError(ErrorInterface $error)
    {
        $code = $error->getErrorCode();
        $message = $error->getErrorMessage();
        // 处理错误...
    }
}
```

## 接口说明

### ErrorInterface

```php
interface ErrorInterface
{
    /**
     * 获取错误码
     */
    public function getErrorCode(): string;
    
    /**
     * 设置错误码
     */
    public function setErrorCode(string $code): self;
    
    /**
     * 获取错误信息
     */
    public function getErrorMessage(): string;
    
    /**
     * 设置错误信息
     */
    public function setErrorMessage(string $message): self;
}
```

### ErrorFactoryInterface

```php
interface ErrorFactoryInterface
{
    /**
     * 创建错误实例
     */
    public function createError(string $code, string $message): ErrorInterface;
}
```

## 相关模块

- [wechat-js-code-to-session](https://github.com/riftfox/wechat-js-code-to-session)
- [wechat-check-session](https://github.com/riftfox/wechat-check-session)
- [wechat-session](https://github.com/riftfox/wechat-session)

## 版本要求

- PHP 7.4 或以上
- composer 2.0 或以上

## License

MIT