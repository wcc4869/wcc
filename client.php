<?php
error_reporting(E_ALL);
//端口111
$service_port = 111;
//本地
$address = '0.0.0.0';
//创建 TCP/IP socket
$socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);

$result = socket_connect($socket, $address, 8998);
if ($result < 0) {
    echo "SOCKET连接失败原因: ($result) " . socket_strerror($result) . "\n";
} else {
    echo "OK.\n";
}
//发送命令

$in = "sun";
socket_write($socket, $in, strlen($in));

while ($out = socket_read($socket, 2048)) {
    echo $out;
}
?>
