<?php
    class Komputer{
        private $jenis_procesor = "Intel Core i7-4790 3.6Ghz";

        public function Tampilkan_procesor(){
            return $this->jenis_procesor;
        }
    }

    class Laptop extends Komputer {
        public function Tampilkan_procesor(){
            return $this->jenis_procesor;
        }
    }

    // buat objek dari class laptop (instansiasi)
    $komputer_baru = new Komputer();
    $laptop_baru = new Laptop();
    
    // jalankan method dari class komputer
    echo $komputer_baru->Tampilkan_procesor(); // "Intel Core i7-4790 3.6Ghz"
    
    // jalankan method dari class laptop (error)
    echo $laptop_baru->Tampilkan_procesor();
    // Notice: Undefined property: laptop::$jenis_processor
?>