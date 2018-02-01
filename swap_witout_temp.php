<?php

$a = 'a stored in $a';
$b = 'b stored in $b';
echo "Before Swap: \n";
echo $a ." - ". $b."\n";
list($a,$b) = array($b,$a);
echo "After swap: \n";
echo $a ." - ".$b;
