<!-- Rebuilding the sum of string without using the explode and the arraysum -->
<?php

    $a = '1,2,3,4,5,6';
    $arr = [];
    $sum = 0;
    $stringLength = strlen($a);

    for ($i=0; $i <= $stringLength ; $i++) {
      // getting the char and checking if they are string then doing the sum
      $char = substr($a, $i , 1);
      if (is_numeric($char)) {
        $sum +=$char;
      }
    }
    echo $sum;
 ?>
