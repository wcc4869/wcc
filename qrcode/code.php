<?php
/**
 * Created by PhpStorm.
 * User: wcc
 * Date: 2017/11/13
 * Time: 下午2:29
 */

include './phpqrcode.php';
$value = 'http://www.cnblogs.com/txw1958/'; //二维码内容
$errorCorrectionLevel = 'L';//容错级别  二维码纠错级别：L、M、Q、H
$matrixPointSize = 10;//生成图片大小  // 二维码点的大小：1到10，用于手机端4就可以了
//生成二维码图片
ob_start();
QRcode::png($value, FALSE, $errorCorrectionLevel, $matrixPointSize, 2);
$logo = '2.png';//准备好的logo图片
$cc = ob_get_contents();
ob_end_clean();

//$QR = 'qrcode.png';//已经生成的原始二维码图




if ($logo !== FALSE) {
    $QR = imagecreatefromstring(file_get_contents($QR));
    $logo = imagecreatefromstring(file_get_contents($logo));
    $QR_width = imagesx($QR);//二维码图片宽度
    $QR_height = imagesy($QR);//二维码图片高度
    $logo_width = imagesx($logo);//logo图片宽度
    $logo_height = imagesy($logo);//logo图片高度
    $logo_qr_width = $QR_width / 5;
    $scale = $logo_width/$logo_qr_width;
    $logo_qr_height = $logo_height/$scale;
    $from_width = ($QR_width - $logo_qr_width) / 2;
    //重新组合图片并调整大小
    imagecopyresampled($QR, $logo, $from_width, $from_width, 0, 0, $logo_qr_width,
        $logo_qr_height, $logo_width, $logo_height);
}
//输出图片
imagepng($QR, 'helloweixin.png');
echo '<img src="helloweixin.png">';