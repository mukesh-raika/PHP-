<?php
// $name="anil";
// function getName($name){
//     // $name="peter";

//     global $name;
//     // $name="peter"

//  echo "local  var : $name";
// }


// echo $name;
// echo "<br>";
// getName($name);


$name="anil";

function test(){
    $name="peter";
    echo $name;

    function innerTest(){
        $name="bruce";
        echo $name;
    }
}
test();
echo "<br>";
innerTest(); 
echo "<br>";
echo $name;
?>