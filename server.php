<?php
error_reporting(E_ALL);
set_time_limit(0);
ob_implicit_flush();
//本地IP
$address = '0.0.0.0';
//设置用111端口进行通信
$port = 111;
//创建SOCKET
if (($sock = socket_create(AF_INET, SOCK_STREAM, SOL_TCP)) < 0) {
    echo "socket创建失败原因 " . socket_strerror($sock) . "\n";
}

if (($ret = socket_bind($sock, $address, 8998)) < 0) {
    echo "创建套接字失败原因 " . socket_strerror($ret) . "\n";
}
//监听
if (($ret = socket_listen($sock, 5)) < 0) {
    echo "监听失败原因 " . socket_strerror($ret) . "\n";
}
do {
    //接收命令
    if (($msgsock = @socket_accept($sock)) < 0) {
        echo "命令接收失败原因: " . socket_strerror($msgsock) . "\n";
        break;
    }
    $msg = "wo shi wcc";
    
    @socket_write($msgsock, $msg, strlen($msg));socket_close($msgsock);
    
} while (true);

?>