<?php
function palindrone($string)
{
 if(strrev($string)==$string)
{
 return 1;
}else
{ return 0;
}
}
$original="dad";
if(palindrone($original))
{
echo"the number is palindrone";
}
else
{
echo"the number is not palindrone ";
}
?>