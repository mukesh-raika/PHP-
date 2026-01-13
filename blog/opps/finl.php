<?php
// final class Honda{
    
// }

// class Car extends Honda{

// }

// $car= new Car();


class Honda {
  final function companyName(){
    echo "<h2 style='color:blue'>Honda<h2>";
   }
}

class Cars extends Honda{
    // function companyName(){
    //     echo "Honda city";
    // }
}

$car =  new Cars();

$car->companyName();
?>