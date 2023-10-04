<?php
function findgreatestnum($num1,$num2,$num3,$num4,)

{
$greatestnum=$num1;

if($num2>$greatestnum)
{
   $greatestnum=$num2;
}
 if($num3>$greatestnum)
{
  $greatestnum=$num3;
}
if($num3>$greatestnum)
{
  $greatestnum=$num4;
}
return $greatestnum;
}

//sample number
$num1=10;
$num2=7;
$num3=6;
$num4=3;

$greatestnum=findgreatestnum($num1,$num2,$num3,$num4);
echo"the greatest number among 4 numbers are:$greatestnum";

?>