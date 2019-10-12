<?php
    class Lingkaran{
        public $jari;
        public $kel;
        public $luas;

        public function __construct($jarijari){
            return $this->jari = $jarijari;
        }  public function MenghitungKeliling(){
            $this->kel = (2 * 3.14 * $this->jari);
            return $this->kel;
        } public function MenghitungLuas(){
            $this->luas = 3.14 * $this->jari * $this->jari;
            return $this->luas;
        }
    }
    $lingkar = new Lingkaran(7);

    echo "Jari Jari : $lingkar->jari<br>";
    echo "Luas Lingkaran : ".$lingkar->MenghitungLuas()."<br>";
    echo "Keliling Lingkaran : " .$lingkar->MenghitungKeliling();
?>