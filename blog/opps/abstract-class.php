<?php
abstract class ProductFeatures{
    abstract function productDetails();
    abstract function productimges();
    abstract function productOwnerDetails();
    function common(){
      echo "common things in product";
    }
}

class UploadProduct extends productFeatures{
   function productDetails(){
    echo "product details added";   
   }
  function productimges(){
    echo "product img";
  }
  function productOwnerDetails(){
    echo  "product owner";
  }

  function other(){
    echo "new function";
  }
}

$upload = new UploadProduct();

$upload->productDetails();
echo "<br>";
$upload->productimges();
echo "<br>";
$upload->productOwnerDetails();

echo "<br>";
$upload->common();

echo  "<br>";
$upload->other();
?>