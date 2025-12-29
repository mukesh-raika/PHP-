<?php

print_r($_POST);
if(isset($_POST['name'])){
    echo "User name is " . $_POST['name'];
    echo "<br>";
    echo "User Email  " . $_POST['email'];
    echo "<br>";
    echo "User password " . $_POST['password'];
    echo "<br>";
    echo "User skills ". implode(",",$_POST['skills']);
    echo "<br>";
    echo "User gender ".$_POST['gender'];
    echo "<br>";
    echo "User city ". $_POST['city'];
    echo "<br>";
    echo "User bio ".$_POST['bio'];
    echo "<br>";

}
?>