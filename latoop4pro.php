<?php
    class Gaji{
        public $nama;
        public $nip;
        public $ala;  
        public $hari;

        public function __construct($nama,$nipp, $alaa, $hari){
            $this->nama = $nama;
            $this->nip = $nipp;
            $this->ala = $alaa;
            $this->hari = $hari;
        } public function GajiKotor(){
            $g_kotor = $this->hari * 75000;
            return "Gaji Kotor : $g_kotor<br>";
        } public function GajiBersih(){
            $g_kotor = $this->hari * 75000;
            $g_bersih = $g_kotor * 0.025;
            $bersih = $g_kotor - $g_bersih;
            return "Gaji Bersih : $bersih<br>";
        }
    }

    if (isset($_POST['proses'])) {
        $namaa = $_POST['nama'];
        $nip = $_POST['nip'];
        $alamatt = $_POST['alamat'];
        $harii = $_POST['jmlhr'];
    }

    $output = new Gaji($namaa, $nip, $alamatt, $harii);

    echo "Nama : $namaa<br>";
    echo "NIP : $nip<br>";
    echo "Alamat : $alamatt<br>";
    echo "Jumlah Hari Kerja : $harii<br>";
    echo $output->GajiKotor();
    echo $output->GajiBersih();
?>