<?php 
function imgc($big_img, $width, $height, $filex) {//原始大图地址，缩略图宽度，高度，缩略图地址
$imgage = getimagesize($big_img); //得到原始大图片
switch ($imgage[2]) { // 图像类型判断
case 1:
$im = imagecreatefromgif($big_img);
break;
case 2:
$im = imagecreatefromjpeg($big_img);
break;
case 3:
$im = imagecreatefrompng($big_img);
break;
}
$src_W = $imgage[0]; //获取大图片宽度
$src_H = $imgage[1]; //获取大图片高度
$tn = imagecreatetruecolor($width, $height); //创建缩略图
imagecopyresampled($tn, $im, 0, 0, 0, 0, $width, $height, $src_W, $src_H); //复制图像并改变大小
imagejpeg($tn,$filex); //输出图像
}








?>