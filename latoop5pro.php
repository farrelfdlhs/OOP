<?php
    
    class Penduduk {
        public $nama, $nik, $alamat, $umur;

        public function __construct($namaa, $nikk, $ala, $umurr){
            $this->nama = $namaa;
            $this->nik = $nikk;
            $this->alamat = $ala;
            $this->umur = $umurr;
        } public function Tampilkan(){
            // foreach ($this->nama as $key => $value) {
            //     return "Nama : $this->nama[$key]<br> NIK : $this->nik[$key]<br> 
            //     Alamat : $this->alamat[$key]<br> Umur : $this->umur[$key]";
            // }
            // return $this->nama;
            for ($i=0; $i < count($this->nama); $i++) {
                echo "Nama : ". $this->nama[$i]."<br>";
                echo "NIK : ". $this->nik[$i]. "<br>";
                echo "Alamat : ". $this->alamat[$i]."<br>";
                echo "Umur : ".$this->umur[$i]."<br>";
                echo "<hr>";
            }
        }
    }

    if (isset($_POST['prosses'])) {
        $namaa = $_POST['nama'];
        $nikk = $_POST['nik'];
        $alamat = $_POST['alamat'];
        $umur = $_POST['umur'];
        $jumlah = count($namaa);
    }
    echo "<center><h1>Hasil Data</h1></center>";
    $hasil = new Penduduk($namaa, $nikk, $alamat, $umur);
    echo $hasil->Tampilkan();
?>