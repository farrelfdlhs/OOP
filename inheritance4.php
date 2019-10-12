<?php
    class Komputer {
        public $processor = " Intel Core i7";

        public function __construct(){
            echo "Constract dari Komputer<br>";
        } public function __destruct(){
            echo "Destruct dari Komputer<br>";
        }
    }
    class Laptop extends Komputer {
        public function __construct(){
            parent::__construct();
            echo "Construct dari Laptop<br>";
        }public function Spesifikasi(){
            echo "Spesifikasi Laptop :";
        } public function __destruct(){
            echo "Destruct dari Laptop<br>";
            parent::__destruct();
        } 
    }

    $asus = new Laptop();
    $asus->Spesifikasi();
    echo $asus->processor . "<br>";
?>