<?php
$name=array("mohsin"=>"31","ali"=>"41","ammar"=>"39","aliza"=>"40");
echo"the index of mohsin is:$name[mohsin]\n";
echo"the index of ali is:$name[ali]\n";
echo"the index of ammar is:$name[ammar]\n";
echo"the index of aliza:$name[aliza]\n";

sort($name);
echo"sorted in ascending order.".implode(',',$name)."<br>";
rsort($name);
echo"sorted in descending order.".implode(',',$name)."<br>";










?>