<?php
class employee{
    public $id;
    public $name;
    public $department;
    public $salary;

    public function accept($id,$name,$department,$salary)
    {
        $this->id=$id;
        $this->name=$name;
        $this->department=$department;
        $this->salary=$salary;
    }
     public function display($id,$name,$department,$salary)
    {
        echo "$id:".$this->id . "<br>";
         echo "$name:".$this->name . "<br>";
          echo "$department:".$this->department . "<br>";
           echo "$salary:".$this->salary . "<br>";
          

        
    }
}
    class Manager extends employee
    {
        public $bonus;

    public function accept($id,$name,$department,$salary){

        parent::accept($id,$name,$department,$salary);
    }
     public function setbonus($bonus)
    {
 
        $this->bonus=$bonus;
        
            }
            public function display1(){
                parent::display();
                echo"bonus:$".$this->bonus."<br>";
            }
    }
    $manager=new Manager();
    $manager->accept(1,"sam","it",10000);
    $manager->setbonus(10000);
    $manager->display1();
?>



















?>