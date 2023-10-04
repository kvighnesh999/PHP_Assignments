<form action="#" method="post">
enter num<input type="number" name="num"><br>
<input type="submit" name="submit">
<?php
if(isset($_POST["submit"]))
{
$n=$_POST["num"];
$i=1;
echo"<table border=1>";
while($i<=10)
{
echo"<tr><td>".($n*$i)."</tr></td>";
$i++;
}
echo"</table>";
}
?>