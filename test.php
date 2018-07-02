<?php

$file = '/Users/wcc/cc.txt';

$handel  = fopen($file, 'w+');
$content = fread($handel,filesize($file));
echo $content;die;
$content = 'helloword'. $content;
//$re = fclose($handel);
//
//$handel = fopen($file,'w');
$content = fwrite($handel,$content);