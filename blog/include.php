<?php


echo "<h1 style='color:green'> 1 is me warnig dega  </h1>";
echo "<br>";
echo "<br>";   


include("string.php");
include("constants.php");

for($i=0;$i<=10;$i++){
    include_once("constants.php");
}
echo "<br>";
echo "<br>";

echo "<h1 style='color:green'>2 is me error deta</h1>";
echo "<br>";

echo "<br>";
require("constants.php");
 
for($i=0;$i<=10;$i++){
    require_once("constants.php");
}
// ?>