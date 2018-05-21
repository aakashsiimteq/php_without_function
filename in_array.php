<?php
  $inArray = array(
    '1' => 'dog',
    '2' => 'mouse',
    '3' => 'cat'
  );
  $search = 'rat';

 // // implementation with in_array functionality
 //  if (in_array($search,$inArray)) {
 //    echo "Found from method \n";
 //  }else {
 //    echo "Not Found from method \n";
 //  }

// implementation with out any pre defined function
$i = 0;
foreach ($inArray as $key) {
  $found = ($key == $search) ? 1 : 0;
}
if ($found == 1) {
  echo "found";
}else {
  echo "not found";
}
