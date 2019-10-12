<?php 
    class Orangtua {
        public $nama_ayah;
        public $nama_ibu = "Lina";
        
        public function __construct($nama_ayah = "Pey"){
            $this->nama_ayah = $nama_ayah;
            echo "Ayah saya bernama : $nama_ayah<br>";
        } public function __destruct() {
            echo "Ibu saya bernama : ".$this->nama_ibu;
        }
    }
    class Anak extends Orangtua {
        public $nama_anak;
        public function halo(){
            return "Halo Nama Saya : $this->nama_anak<br>";
        }
    }

    $farrel = new Anak();
    $farrel->nama_anak = "Farrels";
    echo $farrel->halo();
?>