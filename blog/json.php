<?php
$user=["name"=>"anil","age"=>30,"email"=>"anil@abc.com"];
$userJson= json_encode($user);
echo $userJson;
echo "<br>";
echo "<br>";

 $data='{"name":"anil","age":30,"email":"anil@abc.com"}';
  $dataArray=json_decode($data,true);
  print_r($dataArray);
  echo "<br>";
  echo  "<br>";

  $data1='{"name":"sidhu","age":25,"email":"anil@test.com"}';
  $dataObjeact=json_decode($data1);
  print_r($dataObjeact);
?>