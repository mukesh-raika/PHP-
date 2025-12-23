<?php
// function info($m,$s){
//     echo "$m banana $s this is red";

// }
// info("apple","green");



function inf($name,$color){
    
    echo "<h1 style='color:" . (!empty($color) ? $color : 'orange') . "'>$name</h1>";

}
 inf("anil sidhu","");
?>