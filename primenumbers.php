<!-- writing a code to implement the primenumbers  -->
<?php

  function primeNumber($prime){
    for ($i=2; $i < $prime; $i++) {
      if ($prime % $i === 0) {
        return true;
      }
    }
    return false;
  }

  $flag = primeNumber(3);
  if ($flag === 0) {
    echo "yes Prime";
  }else {
    echo "No prime";
  }










 ?>
