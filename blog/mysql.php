<?php
$host="Localhost";
$username="root";
$password=null;
$dsatabase="college";

$conn= new mysqli($host,$username,$password,$dsatabase);
if($conn->connect_error){
    die("some error".$conn->$connect_error);  
}

echo "connection success";
echo "<br>";
$result=$conn->query("show tables")->fetch_all();
print_r($result);

?>


<?php
$host="Localhost";
$username="root";
$password=null;
$dsatabase="school";

$conn= new mysqli($host,$username,$password,$dsatabase);
if($conn->connect_error){
    die("some error".$conn->connect_error);
}
echo "connection success";
$result=$conn->query("show tables")->fetch_all();
print_r($result);


?>