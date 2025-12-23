<?php

$x=10;
echo "before condition<br>";

if($x==10){
    goto jump;
}
$name="info<br>";
echo $name;
//



jump:
echo "statement is humped on line nu. 15"; 

for($i=0;$i<=10;$i++){

    echo "$i<br>";

    if($i==5){
        goto outsideLoop;
    }
}





outsideLoop:
echo "loop is break";  
?>