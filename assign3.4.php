<?php
class calculator{
    public $num1;
    public $num2;
    public function __construct($num1,$num2)
    {
        $this->num1=$num1;
        $this->num2=$num2;
    }
    function display()
    {
        echo"addition is:".($this->num1+$this->num2);
        echo"substraction is:".($this->num1-$this->num2);
        echo"multiplication is:".($this->num1*$this->num2);
        echo"division is:".(($this->$num1)/($this->$num2));
    }
  }
$calc=new calculator(10,30);
$calc->display();

?>