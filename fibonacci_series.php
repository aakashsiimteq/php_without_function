<!-- Displaying the fibonacci series of a finite number -->
<?php

  $input = 50;
  $first = 0;
  $second = 1;
  $evenSum = 0;
  $oddSum = 1;

  $fiboacciOutput = "The fibonacci series is :  ".$first.' , '.$second;
  for ($i=0; $i <= $input; $i++) {
    $third = $first + $second;
    $fiboacciOutput .= ' , '.$third;
    $first = $second;
    $second = $third;
    ($third%2 === 0) ? $evenSum+=$third : $oddSum+=$third;
  }
  echo $fiboacciOutput;
  echo "<br />";
  echo "Sum of even numbers in the string : ".$evenSum . '<br />';
  echo "Sum of odd numbers in the string : ".$oddSum;

 ?>
