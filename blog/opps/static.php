<?php
class Honda{
    static public $countryName="<h3>japan</h3>";
    static function companyName(){
        echo "<h1 style='color:blue'>Honda</h1>";
    }

    
}
Honda::companyName();
echo Honda::$countryName;

?>