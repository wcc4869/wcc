<?php
/**
 * Created by PhpStorm.
 * User: wcc
 * Date: 2018/4/11
 * Time: 下午12:01
 */

//$workers = [];
//
//$swoole_worker_num = 3;
//
////for($i=0;$i<$swoole_worker_num;$i++){
////    echo $i;
//    $process = new swoole_process('doProcess',false,true);
//    $pid = $process->start();
//    //$workers[$pid] = $process;
////}
//
// 创建进程
function doProcess(swoole_process $worker){
    echo "PID",$worker->pid,"\n";
}


