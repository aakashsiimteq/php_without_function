<?php

  $str = "Aakash dhar is an employee of siimteq technologies";
  $tmp = '';
  $i = 0;

  while (!empty($str[$i])) {
    $tmp = $str[$i].$tmp;
    $i++;
  }

  echo "First solution is : ". $tmp. "\n";

  $string = "Aakash dhar is an employee of siimteq technologies";
  $reverse = "";
  $j = 0;
  while(isset($string[$j])){
     $j++;
  }

  for($i = $j - 1; $i >= 0; $i--){
     $reverse .= $string[$i];
  }

  echo "Second solution is : ". $reverse. "\n";
