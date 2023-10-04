<?php
$num=153;
$sum=0;
$t=$num;
while($num>0)
{
	$rem=$num%10;
	$sum=$sum+$rem*$rem*$rem;
	$num=$num/10;
}
if($t==$sum)
echo"It is an Armstrong number";
else
echo"It is not an Armstrong number";
?>
