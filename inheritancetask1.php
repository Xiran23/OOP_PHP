<!-- 
    1. create a paretns class with construct and method.
    2. Extends child class from a parent and access its method --
 
-->

<?php
class paretns
{
    public $name;

    function __construct($name)
    {
        $this->name = $name;
    }
    function Talk()
    {
        echo $this->name;
        echo "!................hmmmmmmm!";
    }
}

class child extends paretns
{
    // function __construct($name){
    //     $this->name = $name ; 

    // }
    function study()
    {
        echo "OKOKOK!!!";
    }
}
$obj1  = new child("chiran");
$obj1->Talk();
