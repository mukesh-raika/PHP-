<?php
class MathOperations{

function sum($a,$b){
    echo $a+$b;
}
function multi($a,$b){
    echo $a*$b;
}

function sub($a,$b){
    echo $a-$b;
}
}

$maths= new MathOperations();

 $maths->sum(20,30);
 echo "<br>";
$maths->multi(70,80);
echo "<br>";
$maths->sub(78,8);  
?>