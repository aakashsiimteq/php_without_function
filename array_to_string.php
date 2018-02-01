<?php

// turning array into string
$array = ['aakash','paulami','navneet','siddharth'];
//$string = join(',',$array);
// echo $string = implode(',', $array);


// turning an array into string without using implode or join function
$array = ['aakash','paulami','navneet','siddharth'];
$string = '';
foreach ($array as $key => $value) {
    $string .= ", $value";
}
$string = ltrim($string,',');
echo $string;
