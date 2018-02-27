<?php
/**
 * Created by PhpStorm.
 * User: lazycao
 * Date: 2018/2/27 0027
 * Time: 9:27
 * 测试类
 */

/**
 * 导入类
 */
spl_autoload_register('autoload');
function autoload($class)
{
    $path = dirname($_SERVER['SCRIPT_FILENAME']) . '//..//' . str_replace('\\', '/', $class) . '.php';
    if (is_dir($path))
        require $path;
}
/************************************* test *************************************/
use singleton\Singleton;
// 获取单例
$instance = Singleton::getInstance();
$instance->test();
