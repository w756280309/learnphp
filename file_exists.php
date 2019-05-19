<?php
    if(file_exists('./xinjian'))
    {
        is_dir('./xinjian') ? print_r('是一个目录')  : print_r('是一个文件');
    }