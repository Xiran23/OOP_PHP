<!-- a construcor is a self invoking function(self running function)
 when a object of any class is created.

Here,  _ _ construct is a construct that runs automatically when class of "any" is created


When the varibales of parametuc function is define we must define the paremerts of constructor 
while creating an object 
-->
<?php

// class any
// {

//     function __construct()
//     {
//     }

//     function test()
//     {
//     }
// }
// $obj = new any;



class any {
    public $name ,$post; 
    function __construct($name,$post){
        $this->name = $name; 
        $this->post = $post; 


    }

    function job (){
        return "Mr.". $this->name . "is  the ". $this->post. "in the company";
    }
}


$obj = new any('chiran','manager');
echo $obj->job();
