<?php

$http = new swoole_http_server("0.0.0.0", 9501);
/**
 * $request：get post
 * $response
 */
$http->on('request', function ($request, $response) {
    var_dump($request);
    // 设置返回头信息
    $response->header("Content-Type", "text/html; charset=utf-8");
    $response->end("<h1>Hello Swoole. #".rand(100, 999)."</h1>");
});

$http->start();