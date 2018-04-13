<?php
/**
 * Created by PhpStorm.
 * User: wcc
 * Date: 2018/4/13
 * Time: 上午11:40
 */

//创建websocket 服务器
$ws = new swoole_websocket_server("0.0.0.0",9501);

// on
//open 建立连接
$ws ->on('open',function ($ws,$request){
    var_dump($request);
    $ws ->push($request->fd,"welcome \n");
});
//message 接受信息
$ws ->on('message',function ($ws,$request){
    echo "Message:$request->data";
    $ws ->push($request->fd,"get it messsage");
});
//close 关闭连接
$ws ->on('close',function ($ws,$request){
    echo "close \n";
});

$ws->start();