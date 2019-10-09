<?php
    class Laptop{
        private $pemilik = "Andi";
        private $merk = "Lenovo";

        public function __construct(){
            echo "Ini berasal dari Constructor laptop";
        } public function Hidupkan_laptop(){
            return "Hidupkan Laptop $this->merk punya $this->pemilik";
        } public function __destruct(){
            echo "Ini berasal dari Destructor Laptop";
        }
    }

    $laptop_andi = new Laptop();
    echo "<br>";
    echo $laptop_andi->Hidupkan_laptop();
    echo "<br>";
?>