<?php
class CountrySale{
    static public $totalSale=1000;
    function getTotalSale(){
        echo static::$totalSale;
    }

    function getAreaName(){
        static::areaName();
    }
    static function areaName(){
      echo "India";
    }
}

class CitySale extends CountrySale{
    static public $totalSale=50;
    static function areaName(){
        echo "Noida";
    }
}

$city = new CitySale();
 
$city->getAreaName();
?>