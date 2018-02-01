<?php
// Specifying a array which does not begin at 0
$a = ['16' => 'Aakash','Paulami','Amit'];
// print_r($a);

//initializing an range
$cards = range(1 , 10 , 4);
// print_r($cards);

// array_splice
$animals  = ['ant','bee','cat','dog','elk','fox'];\
array_splice($animals,2,2);
// print_r($animals);


// array_pad
$array = ['apple','banana','coconut'];
$array = array_pad($array,8,'new element');
//print_r($array);
