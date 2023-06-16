<!-- child class can access properties(variable and behaviours)method,function form the parent
 class where properties and behaviors are either public or protectedbut not private --


  class A{ --
}
class A extends A{

}











 here A is a base class and B is the child class of A.Class B
extens A that means all properties and behaviours of class A 
can be used or call in class B for protected and public properties and 
behaviors class A 
-->

<?php 
class Collage{
    private $phone; 
    protected function phone(){
        return $this->phone="96";

    }
}

class Student extends Collage{
    private $roll;
    private $phone; 
    protected $name; 

    function __construct($roll,$name,$phone){
        $this->roll = $roll; 
        $this->name = $name; 
        $this->phone = $phone; 

    }
    function info(){
        echo "ROLL".$this->roll,"Name".$this->name."phone".$this->phone."<br>"; 
        echo "private phone from base class ". $this->phone();
    }
}

$std = new Student("2","Ramesh","25455");
$std->info();
