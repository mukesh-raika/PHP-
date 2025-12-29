<?php
$path="files";
$items=scandir($path);
$items= array_diff($items,array(".",".."));
foreach($items as $items){
    echo "<a href=./files/$items>$items</a>";
    echo  "<br>";
}
?>