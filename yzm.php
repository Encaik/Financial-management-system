<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 2017/4/14
 * Time: 21:05
 */
$img = imagecreatetruecolor(100, 35);
$black = imagecolorallocate($img, 0x00, 0x00, 0x00);
$green = imagecolorallocate($img, 0x00, 0xFF, 0x00);
$white = imagecolorallocate($img, 0xFF, 0xFF, 0xFF);
imagefill($img,0,0,$white);
//生成随机的验证码
$code = '';
for($i = 0; $i < 4; $i++) {
    $code .= rand(0, 9);
}
session_start();
$_SESSION['yzm'] = $code;
imagestring($img, 5, 10, 10, $code, $black);
//加入噪点干扰
for($i=0;$i<50;$i++) {
    imagesetpixel($img, rand(0, 100) , rand(0, 100) , $black);
    imagesetpixel($img, rand(0, 100) , rand(0, 100) , $green);
}
//输出验证码
header("content-type: image/png");
imagepng($img);
imagedestroy($img);
?>