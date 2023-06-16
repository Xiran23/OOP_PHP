<!-- public ,protected,private
Acsess modifer check visibliy of properties of behaviour of any object . 
property(Variable)
behaviour(Method)


Types of Acess modifier

1.Public (everywhere)
2.protected (protected same object or inside child class)
3.Private (only in same obj)

// function getTest(){
//     return $this->pname , $this->roll,
//      $this->phone;
// }

function getPhone(){
        return $this->phone ;
        
    }
    
    
    function setTest($name,$roll,$phone){
        $this->pname = $name; 
        $this->roll  = $roll; 
        $this->phone = $phone;
    
    
    }
    
    
    
-->
<?php 
class std{
    public $pname;
    protected $roll; //value cannot be set outside class 

    private $phone; 

    // function __construct($pname,$roll,$phone){
    //     $this->pname = $pname; 
    //     $this->roll  = $roll; 
    //     $this->phone = $phone;
        
    // }
    
    function setPhone($phone){
            $this->phone = $phone;
    
        }

//    private function test(){
//         echo "Name:" . $this->pname;
//         echo "Roll:" . $this->roll;
//         echo "phone:" . $this->phone; 

//     }
private function show(){
    echo "name";
}

    
}

$obj1 = new std("chiran",23,898211); 
// $obj1->setPhone(9845);
// $obj1->phone = 2333; 
$obj1->pname = "alex"; 

$obj1->test();



// $obj1->roll = "Ram"; 
// $obj1->phone = "Ram"; 