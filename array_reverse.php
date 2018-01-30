<?php

  $array = array(1,2,3,4,5,6);
  $size = sizeof($array);

  for ($i = $size - 1; $i >= 0 ; $i--) {
    $array[] = $array[$i];
    unset($array[$i]);
  }
  // printing the value of the array
  print_r(array_values($array));


 ?>
