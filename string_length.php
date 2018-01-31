<?php
$inputstring="abcd ef ghij klmn op ";
$tmp = '';
$i = 0;
 while (isset($inputstring[$i]))
 {
    $tmp .= $inputstring[$i];
    echo $tmp." - $i \n ";
    $i++;
 }
//final string count
echo $i;
