<?php
class student{
    public $no;
    public $name;
    public function __construct($no,$name)
    {
        $this->name=$name;
        $this->no=$no;
    }
    function getno()
    {
        echo "student no is".$this->no;
        echo"<br>";
        echo"student name is".$this->name;
        echo"<br>";
    }
    
}
class teacher extends student{
 public $tname;
 public $subject;
 public function __construct($tname,$subject,$no,$name)
 {   
     parent:: __construct($no,$name);
    $this->tname=$tname;
    $this->subject=$subject;
 }
 function tget()
 {    
     
    echo"teacher name is".$this->tname;
    echo"<br>";
    echo"teacher subject is".$this->subject;
 }


} 
$teach=new teacher("farzana","cpp",01,"Riza");
$teach->getno();
$teach->tget();












?>