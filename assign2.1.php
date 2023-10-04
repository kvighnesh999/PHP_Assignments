<form action="#" method="POST">
enter first number:<input type="number" name="num1"><br>
enter second number:<input type="number" name="num2"><br>
addition:<input type="radio" name="opr" values="add"><br>
subtraction:<input type="radio" name="opr" values="substract"><br>
multiplication:<input type="radio" name="opr" values="multipy"><br>
division:<input type="radio" name="opr" values="division"><br>
<input type="submit" name="sub">
</form>
<?php
if(isset($_POST["sub"]))
{
class calculator
{
        function cal($n1,$n2)
{
 echo"addition is:".$n1+$n2."<br>";
echo"subtraction is:".$n1-$n2."<br>";
echo"multiplication is:".$n1*$n2."<br>";
echo"division is:".$n1/$n2."<br>";
}
}
$n1=$_POST["num1"];
$n2=$_POST["num2"];
$c=new calculator();
$c->cal($n1,$n2);
}
?>