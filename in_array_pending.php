<?php
  $inArray = array(
    '1' => 'dog',
    '2' => 'mouse',
    '3' => 'cat'
  );
  $search = 'cat';

 // // implementation with in_array functionality
 //  if (in_array($search,$inArray)) {
 //    echo "Found from method \n";
 //  }else {
 //    echo "Not Found from method \n";
 //  }

// implementation with out any pre defined function
$i = 0;
foreach ($inArray as $key) {
  if ($key == $search) {
    echo "Found from manual \n";
    break;
  }else {
    echo "Not found from manual \n";
    break;
  }
}
