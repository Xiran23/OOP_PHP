<?php 
abstract class a{
    abstract function any();
}


class b extends a {
    function any(){
        echo "This method is required";
    }

}


$obj1 = new b; 
$obj1->any();
?>