<?php
$var=array("Mohsin"=>"31", "Ali"=>"41", "Ammar"=>"39", "Aliza"=>"40");
asort($var);//ascending order sort by value
foreach($var as $x => $y)
{
	echo "key=". $x . ", value=".$y;
	echo "<br>";

}
$var=array("Mohsin"=>"31", "Ali"=>"41", "Ammar"=>"39", "Aliza"=>"40");
arsort($var);
foreach($var as $x => $y)
{
	echo "key=". $x . ", value=".$y;
	echo "<br>";

}

?>