<?php
class shape{
    public $r;
    public $pi;
    public $a;
    public $side;
}
class circle extends shape{
    public function __construct($pi,$r)
    {
        $this->pi=$pi;
        $this->r=$r;
    }
    function area()
    {
      echo"area of circle is:".$this->pi*$this->r*$this->r;
    }
}
class square extends shape{
    public function __construct($a,$side)
    {
        $this->a=$a;
        $this->side=$side;
    }
    function area()
    {
        echo"area of square is:".$this->a*$this->a;
        echo"<br>";
       echo"volume of square is:".$this->side*$this->side*$this->side;
   } 
}
  $obj=new circle(3.14,9);
  $obj->area();
  echo"<br>";
 $obj1=new square(2,5);
 $obj1->area();








?>