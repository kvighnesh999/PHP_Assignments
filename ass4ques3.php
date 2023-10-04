<?php
function factorial()
{
$num=5;
$fact=1;
for($i=1;$i<num;$i++)
{
	$fact=$fact*$i;
}

echo "Factorial of a number is".$fact;

}
echo factorial();
?>