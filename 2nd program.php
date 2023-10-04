<form action="#" method="post">
enter num1<input type="number" name="num1"><br>
enter num2<input type="number" name="num2"><br>
<input type="submit" name="submit">
addition<input type="radio" name="opr" value="addition"><br>
subtraction<input type="radio" name="opr" value="subtraction"><br>
multiplication<input type="radio" name="opr" value="multiplication"><br>
division<input type="radio" name="opr" value="division"><br>
</form>
<?php
if(isset($_POST["submit"]))
{

$n1=$_POST["num1"];
$n2=$_POST["num2"];
if($_POST["opr"]=="addition")
{
echo"<h1>addition is</h1>",($n1+$n2);
}
else if($_POST["opr"]=="subtraction")
{
echo"<h1>multiplication is</h1>",($n1*$n2);
}
else if($_POST["opr"]=="multiplication")
{
echo"<h1>division is</h1>",($n1/$n2);
}
else if($_POST["opr"]=="division")
{
echo"<h1>division is</h1>",($n1-$n2);
}

}
?>