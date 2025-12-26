<?php

setcookie("friut","apple",time()+(86400));
setcookie("color","red",time()+86400);
 if(isset($_COOKIE['friut'])){
    echo 'curent friut is '.($_COOKIE['friut']);
 }else{
    echo "no cookie set";
 }
echo "<br>";
 if(isset($_COOKIE['color'])){
    echo  'curent  is ' .($_COOKIE['color']);
 }else{
    echo "no cookie set";
 }

 
?>