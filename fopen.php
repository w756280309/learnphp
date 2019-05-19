<?php
//binary 二进制文件
// $handle = fopen('./xinjian/itcase.sql','wb');
// fclose($handle);


//打开二进制文件  比如JPG图片获取文件句柄资源  filesize获取文件大小 以字节为单位
$handle = fopen('./xinjian/dog.jpg','rb');
$str = fread($handle,filesize('./xinjian/dog.jpg'));
// header("content-type:text/html;charset=utf-8");
header("content-type:image/png");
echo $str;
fclose($handle);