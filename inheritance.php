<?php
    // class induk : komputer
    class Komputer {
        public $merk;
        public $processor;
        public $memory;

        public function beli_komputer(){
            return "Beli komputer Baru";
        }
    }

    //class turunan Komputer ke Laptop
    class Laptop extends Komputer {
        public function lihat_spec(){
            return "Merk : $this->merk, processor : $this->processor,
            Memory : $this->memory";
        }
    }

    //objek dari class laptop
    $laptop_baru = new Laptop();

    //isi property objek
    $laptop_baru->merk = "Acer";
    $laptop_baru->processor = "Intel core i5";
    $laptop_baru->memory = "2 GB";

    //panggil method objek
    echo $laptop_baru->beli_komputer();
    echo "<br>";
    echo $laptop_baru->lihat_spec();
?>