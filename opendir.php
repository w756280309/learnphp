<?php
$resource = opendir('./xinjian');
while($line = readdir($resource)){
    var_dump($line);
}
