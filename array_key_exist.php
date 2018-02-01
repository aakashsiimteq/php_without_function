<?php

  $keyExist = array(
    '1' => 'dog',
    '2' => 'mouse',
    '3' => 'cat'
  );

  // implementation with array_key_exist
  if (array_key_exists('4', $keyExist)) {
    echo "yes it does from function implementation";
  }else {
    echo "No it doesn't from function implementation";
  }

  //implementation without array_key_exists

  foreach ($keyExist as $key => $value) {
    if ($key == '3') {
      break;
      echo "yes it does from manual implementation";
    }else {
      break;
      echo "No it doesnt from manual implementation";
    }
  }
