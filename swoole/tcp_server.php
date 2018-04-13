<?php
/**
 * Created by PhpStorm.
 * User: wcc
 * Date: 2018/3/21
 * Time: 下午2:31
 */
// 创建服务器
//$serv = new swoole_server($host,$port,$model,$sock_type);
/**
 * $port : 端口
 * 1024以下：root
 * 9501
 * $model : SWOOLE_PROCESS 多进程方式
 * $scck_type : SWOOLE_SOCK_TCP 默认
 */
// 使用
/**
 * bool $swoole_server -> on(string $event,mixd,$callback)
 * $event:
 * connect:当连接的时候，$serv:服务器信息，$fd:客户端信息
 * receive:
 * close:
 *
 *
 */

//创建Server对象，监听 127.0.0.1:9501端口
$serv = new swoole_server("0.0.0.0", 9501 );
//设置服务器参数
$serv->set(array(
    'worker_num' => 8,   //工作进程数量
    'daemonize' => false, //是否作为守护进程
));

//监听连接进入事件
$serv->on('connect', function ($serv, $fd) {
    echo "Client: 连接成功.\n";
});

//监听数据接收事件
$serv->on('receive', function ($serv, $fd, $from_id, $data) {
    $serv->send($fd, "Server:来自:$from_id " . ':' . $data);
});

//监听连接关闭事件
$serv->on('close', function ($serv, $fd) {
    echo "Client: 连接关闭.\n";
});

//启动服务器
$serv->start();


