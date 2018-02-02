<?php
$arr = array(100,40,1,5,17,50,4);
$max = $arr[0];
$min = $arr[0];

// max
foreach($arr as $key => $val){
    if($max < $val){
        $max = $val;
    }
}

print $max."\n";

//min
foreach($arr as $key => $val){
    if($min > $val){
        $min = $val;
    }
}

print $min."\n";
