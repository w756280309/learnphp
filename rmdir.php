<?php
    //rmdir()尝试删除 dirname 所指定的目录。该目录必须是空的，而且要有相应的权限。失败时会产生一个 E_WARNING 级别的错误。 
// if(rmdir('./xinjian/a')){
//     echo '删除成功!';
// }else{
//     echo '删除失败!';
// }


echo fileperms('./xinjian');