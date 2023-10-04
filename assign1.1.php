<?php
function swap($x,$y)
{
  $temp=$x;
  $x=$y;
  $y=$temp;
echo"the value of a is:".$x."<br>";
echo"the value of b is:".$y."<br>";
}
 $a=5;
$b=10;
swap($a,$b);
echo"the value of a is :".$a."<br>";
echo"the value of b is:".$b."<br>";


function byvalue(&$x,&$y)
{
  $temp=$x;
  $x=$y;
  $y=$temp;
echo"the value of a is:".$x."<br>";
echo"the value of b is:".$y."<br>";
}
 $a=6;
$b=9;
byvalue($a,$b);
echo"the value of a is :".$a."<br>";
echo"the value of b is:".$b."<br>";
?>