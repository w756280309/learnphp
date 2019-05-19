<?php
function deleteFile($path)
{
    $res = opendir($path);
    while($line = readdir($res)){
        if($line == '.' || $line == '..'){
            continue;
        }

        if(is_dir($path. '/' . $line)){
            deleteFile($path. '/' . $line);
        }else{
            unlink($path. '/' . $line);
        }
    }
    closedir($res);
}


function deleteDir($path)
{
    $res = opendir($path);
    while($line = readdir($res)){
        if($line == '.' || $line == '..'){
            continue;
        }

        if(is_dir($path. '/' . $line)){
            deleteDir($path. '/' . $line);
            rmdir($path. '/' . $line);
        }
    }
    closedir($res);
    rmdir('./xinjian/a');
}

deleteFile('./xinjian/a');
deleteDir('./xinjian/a');