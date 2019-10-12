<?php
    //class Komputer
    class Komputer {
        protected function beli_komputer(){
            return "Beli komputer baru";
        }
    }
    //class turunan komputer : laptop
    class Laptop extends Komputer {
        protected function beli_laptop(){
            return "Beli laptop baru";
        }
    }
    //class turunan laptop : chromebook
    class Chromebook extends Laptop {
        protected function beli_chromebook(){
            return "Beli chromebook baru";
        } public function beli_semua(){
            $a = $this->beli_komputer();
            $b = $this->beli_laptop();
            $c = $this->beli_chromebook();
            return "$a <br> $b <br> $c";
        }
    }
    //objek dari class laptop
    $gadget_baru = new Chromebook();

    //panggil method objek
    echo $gadget_baru->beli_semua();

    // $gadget_baru->beli_komputer();
    // Fatal error : Call to protected method komputer : beli_komputer::()
?>