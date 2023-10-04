<form action="#" method="post">
enter num<input type="number" name="num"><br>
<input type="submit" name="submit">
<?php
if(isset($_POST["submit"]))
{
$sum=0;
$num=$_POST["num"];
$temp=$num;

while($temp>0)
{
 $rem=$temp%10;
$sum=$sum+($rem*$rem*$rem);
$temp=$temp/10;
}

 if($num==$sum)
{
echo"the number is armstrong";
}
else
{
echo"the number is not armstrong";
}
}

?>
