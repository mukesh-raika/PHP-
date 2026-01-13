<?php
class Constant{
    protected const collegeName="<h1 style='color:blue'>IET College<h1>";
    function getCollege(){
        echo self::collegeName;
       echo Constant::collegeName;
    // 

    }
}

class Child extends Constant{
    function getChildName(){
    echo self::collegeName;
    }
}



// echo Constant::collegeName;

$c1 = new Constant();
echo "<br>";
$c1->getCollege();

$child =new Child();
$child->getChildName();
?>