<?php
/**
 * Created by PhpStorm.
 * User: wcc
 * Date: 2018/4/13
 * Time: 下午2:12
 */
// 循环执行 定时器
swoole_timer_tick(2000,function ($timer_id){
    echo "执行$timer_id \n";
});


//单次执行
swoole_timer_after(3000,function (){
    echo "3000 后执行 \n";
});




