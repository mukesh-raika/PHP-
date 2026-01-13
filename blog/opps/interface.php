<?php
interface ProductFeatures{
    public $country="japan";
    function imges();
    function ownerDetails();

}

class Products implements ProductFeatures{

   function imges(){
    echo "product images";
   }

   function ownerDetails(){
    echo "owenerDetails";
   }
}
$porduct= new products();

$porduct->imges();
echo "<br>";
$porduct->ownerDetails();
?>