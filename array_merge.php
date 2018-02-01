<?php
  #desired output
  /*
  (
    'Aakash' => 10,
    'Rahul' => 20,
    'Harsh' => 30,
    'Akshay' => 40
  )
  */
  $arr1 = array('Aakash' => 10, 'Rahul' => 20);
  $arr2 = array('Harsh' => 30, 'Akshay' => 40);
  $arr3 = array('Paulami' => 50, 'dikshita' => 60);
  //print_r($arr1 + $arr2 + $arr3);
  $arr4 = array_merge($arr1,$arr2);
  rsort($arr4);
  print_r($arr4);
