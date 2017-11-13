<?php
/**
 * Created by PhpStorm.
 * User: wcc
 * Date: 2017/9/26
 * Time: 上午10:35
 */


// 这行代码是引入 `composer` 的入口文件，这样我们的类才能正常加载。
include __DIR__ . '/vendor/autoload.php';
// 引入我们的主项目的入口类。
use EasyWeChat\Foundation\Application;
// 一些配置
$options = [
    'debug'  => true,
    'app_id' => 'wxedae5ba232b824fc',
    'secret' => 'e1373d1cbbb370715be234a384226aff',
    'token'  => 'wcc',
    // 'aes_key' => null, // 可选
    'log' => [
        'level' => 'debug',
        'file'  => '/htdoc/wx/easywechat.log', // XXX: 绝对路径！！！！
    ],
    //...
];
// 使用配置来初始化一个项目。
$app = new Application($options);
$response = $app->server->serve();
// 将响应输出
$response->send(); // Laravel 里请使用：return $response;




