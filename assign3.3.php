<?php
class Student{
  public $roll;
  public $name;
  public $age;
  public $contact;

  public function __construct($roll,$name,$age,$contact)
  {
    $this->roll=$roll;
    $this->name=$name;
    $this->age=$age;
    $this->contact=$contact;

  }
}
class test{
      public $marks=array();
      public function __construct($s1,$s2,$s3)
      {
        $this->marks['s1']=$s1;
        $this->marks['s2']=$s2;
        $this->marks['s3']=$s3;
         }
      public function gettotal()
      {
        return array_sum($this->marks);
        
      }   
    }
      $student= new Student(101,"sam",20,"123-456-8780");
      $Test=new test(86,59,90);

    //displaying student details and total marks
      echo"students details:\n";
      echo"roll:".$student->roll."\n";
      echo"name:".$student->name."\n";
      echo"age:".$student->age."\n";
      echo"contact:".$student->contact."\n";
         
      echo"test details:\n";
      echo"subject 1 marks:".$Test->marks['s1']."\n";
      echo"subject 2 marks:".$Test->marks['s2']."\n";
      echo"subject 3 marks:".$Test->marks['s3']."\n";
      echo"total marks:".$Test->gettotal()."\n";

?>