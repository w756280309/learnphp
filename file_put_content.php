<?php
$str = file_get_contents("http://www.jd.com");
file_put_contents('./xinjian/jd.html',$str);