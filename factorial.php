<form action="#" method="post">
enter number:<input type="number" name="num"><br>
<input type="submit" name="submit">

<?php
if(isset($_POST["submit"]))
{
$n1=$_POST["num"];
$fact=1;
for($i=1;$i<=$n1;$i++)
{
 $fact=$fact*$i;
}
echo"$fact";
}
?>