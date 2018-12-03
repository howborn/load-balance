<?php
/**
 * 自动注册
 *
 * @author haobaif <haobaif@jumei.com>
 * @date 2018/12/3
 */

spl_autoload_register(function ($class) {
    $file = __DIR__ . DIRECTORY_SEPARATOR . $class . '.php';
    $file = str_replace('\\', DIRECTORY_SEPARATOR, $file);

    if (is_file($file)) {
        require_once $file;
    }
});