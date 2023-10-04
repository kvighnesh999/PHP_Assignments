<?php
function reverse($num)
{
 $rev=0;
while($num>0)
{
  $rev=$rev*10+$num%10;
$num=(int)$num/10;
}
return $rev;
}
$num=2345;
echo"the number is".$num;
echo"\n\r";
echo"the reverse number is".reverse($num);
?>