<?php
    class Laptop {
        public $pemilik;

        public function Hidupkan_laptop(){
            return "Hidupkan laptop";
        }
    }

    $laptop_anto = new Laptop();

    $laptop_anto->pemilik = "Anto";

    echo $laptop_anto->pemilik;
    echo $laptop_anto->Hidupkan_laptop();
?>