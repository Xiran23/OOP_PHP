<!-- When a child class has a method with same name 
as a praents its called overriding method of paretns class --
when that method is called by object of the child class --
then the child class method is
 executed insted of parents class method 
  -->

  <?php 
  class A{
    function Test(){
        echo "parents"; 
    }
  }
  class b{
    function Test(){
        echo "<marquee>Child</marquee>";
    }
  }

  $obj1 = new b; 
  $obj1->Test();

