<?php

$num=array(9,5,6,7,3);
echo"original array:".implode(',',$num)."<br>";

//sorting in ascending order
sort($num);
echo"sorted in ascending order.".implode(',',$num)."<br>";

//sorting in descending order
rsort($num);
echo"sorted in descending order.".implode(',',$num)."<br>";

//associative array
$associative=array(
'banana'=>1,
'orange'=>3,
'apple'=>2,
'grapes'=>5,
'kiwi'=>4);
    //sorting associative array by value in ascending order
 asort($associative);
echo" associative array sorted by (ascending):"."<br>";
print_r($associative);            

echo"<br>";
//sorting in descending order
arsort($associative);
echo"associative array sorted by (descending):"."<br>";
print_r($associative); 

    
echo"<br>";
//sorting array by key in asscending order       
ksort($associative);
echo"associative array sorted by keys(ascending):"."<br>";
print_r($associative);
echo"<br>";

//adding element of the array using array_push
array_push($num,10,11);
echo"array after pushing 10 and 11:".implode(',',$num)."<br>";


?>