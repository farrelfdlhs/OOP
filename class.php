<?php
    // 1. Class adalah sebuah blueprint / template
    // untuk membuat instance dari object
    //2. Class mendifinisikan object
    //3. Class menyimpan data(properti) dan perilaku(method)
    
    class Kucing { //membuat class dengan nama kucing
        // Membuat Property
        public $warna = "coklat";
        public $jml_kaki = 4;
        public $mkn_fav = "Whiskas";
    
        // Membuat method dengan nama bersuara
        public function bersuara() {
            return "Miaawww";
        }
    }
    // membuat object baru
    $kucing1 = new Kucing;
    echo "Warna kucing : $kucing1->warna<br>";
    echo "Suara kucing : ".$kucing1->bersuara();
    
?>