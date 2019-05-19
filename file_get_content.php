<?php
$str = file_get_contents("http://www.jd.com");
header("content-type:text/html;charset=utf-8");
echo $str;