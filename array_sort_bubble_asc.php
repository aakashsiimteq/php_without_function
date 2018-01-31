<?php
  // bubble sort implementation in php in asc order
  $arr = array(10,25,364,1,2,789,2457,1248,30,21);
  $count = count($arr);
  echo "The unsorted array is : \n";
  print_r($arr);

  for ($i = 0; $i < $count; $i++) {
    for ($j = 0; $j < $count - 1 ; $j++) {
      if ($arr[$j] > $arr[$j+1]) {
        $temp = $arr[$j+1];
        $arr[$j+1] = $arr[$j];
        $arr[$j] = $temp;
      }
    }
  }

  echo "The sorted array is : \n";
  print_r($arr);
