<form action="#" method="post">
enter num1<input type="number" name="num1"><br>

enter num2<input type="number" name="num2"><br>
<input type="submit" name="submit">
</form>
<?php
 if(isset($_POST["submit"]))
{
$n1=$_POST["num1"];
$n2=$_POST["num2"];
echo"<h1>addition is ",($n1+$n2);
}
?>