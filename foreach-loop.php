<?php
$users=["anil","peter","bruce","coder","ninja"];

foreach($users as $m){
    
    if($m=="bruce"){
        // break;
        continue;
    }   
     echo "<h3 style='color:blue'>".$m."<h3/>";
}

foreach($users as $m):
    echo $m;
    echo "<br>";

    endforeach
?>