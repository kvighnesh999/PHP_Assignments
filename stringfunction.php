<?php
//sample string
$string="hello,world";

//string lenght
$length=strlen($string);
echo"string lenght:$length<br>";

//convert to lowercase
$lowercasestring=strtolower($string);
echo"lowercase:$lowercasestring<br>";

//convert to uppercase
$uppercase=strtoupper($string);
echo"uppercase:$uppercase<br>";

//substring(extracting a portion of the string)
$substring=substr($string,0,5);
echo"substring (0 to 4):$substring<br>";

//finding position of a substring
$position=strpos($string,"world");
echo"position of world:$position<br>";

//replace substring with another string
$newstring=str_replace("hello","hii",$string);
echo"replace string:$newstring<br>";

//check if a string contains a specific substring
$contain=strstr($string,"world");
if($contain)
{ echo"the string contain world.<br>";
}
else
{
 echo"the string does not contain world.<br>";
}

?>