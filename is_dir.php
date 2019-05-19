<?php
$dirname = './xinjian';
//is_dir 用来判断是否是目录
if(is_dir($dirname))
{
    print_r("{$dirname}这是一个目录");
}