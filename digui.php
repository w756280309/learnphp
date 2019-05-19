<?php
bianli('./xinjian');

function bianli($path)
{
    if(is_dir($path)){
        $res = opendir($path);
        echo "<ul>";
        while($line = readdir($res))
        {
            // $path = $path . '/' .$line;
            // $is_dir = is_dir($path);
            // if($is_dir){
            //     echo($path);
            //     echo "<br>";
            // }else{
            //     echo $path;
            //     echo "<br>";
            // }
            if($line == '.' || $line == '..'){
                continue;
            }
            echo "<li>" . $line . "</li>";
            if(is_dir($path . '/' . $line)){
                $path .= '/' . $line;
                bianli($path);
            }
        }
        echo "</ul>";
        closedir($res);
    }else{
        echo "这不是一个有效的文件夹";
    }
}