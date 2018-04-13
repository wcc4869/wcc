<?php
/**
 * Created by PhpStorm.
 * User: wcc
 * Date: 2018/4/13
 * Time: 下午2:28
 */
// 创建TCP服务器
$serv =new swoole_server("0.0.0.0",9501);

// 设置异步进程工作数量
$serv ->set(array('task_worker_num'=>4));
// 投递异步任务
$serv->on('receive',function ($serv,$fd,$from_id,$data){
    $task_id = $serv->task($data); // 异步ID
    echo "异步ID： $task_id \n";
});

// 处理异步任务
$serv->on("task",function ($serv,$task_id,$from_id,$data){
    echo "执行 异步ID：$task_id ";
    $serv->finish("$data -> ok");
});

//处理结果
$serv->on('finish',function ($sev,$task_id,$data){
    echo "执行完成 $data \n";
});

$serv->start();