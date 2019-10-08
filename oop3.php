<?php
    class Laptop { // nama class
        //membuat property
        var $pemilik;
        var $merk;
        var $ukuran_layar;

        //membuat method
        function Hidupkan_laptop(){
            return "Hidupkan Laptop";
        } function Matikan_laptop(){
            return "Matikan Laptop";
        }
    }

    //membuat objek
    $laptop_rel = new Laptop();

    //set property
    $laptop_rel->pemilik = "Farrel";
    $laptop_rel->merk = "Macbook Pro";
    $laptop_rel->ukuran_layar = "15 inch";

    //tampilkan property
    echo $laptop_rel->pemilik;
    echo "<br>";
    echo $laptop_rel->merk;
    echo "<br>";
    echo $laptop_rel->ukuran_layar;
    echo "<br>";

    //tampilkan method
    echo $laptop_rel->Hidupkan_laptop();
    echo "<br>";
    echo $laptop_rel->Matikan_laptop();

    // // buat class laptop
    // class Laptop2 {
            
    //     // buat property untuk class laptop
    //     var $pemilik;
        
    //     // buat method untuk class laptop
    //     function hidupkan_laptop() {
    //         return "Hidupkan Laptop";
    //     }
    // }
        
    // // buat objek dari class laptop (instansiasi)
    // $laptop_anto = new Laptop2();
    // $laptop_andi = new Laptop2();
    // $laptop_dina = new Laptop2();
    
    // // set property
    // $laptop_anto->pemilik="Anto";
    // $laptop_andi->pemilik="Andi";
    // $laptop_dina->pemilik="Dina";
    
    // // tampilkan property
    // echo "<br /><br />";
    // echo $laptop_anto->pemilik; // Anto
    // echo "<br />";
    // echo $laptop_andi->pemilik; // Andi
    // echo "<br />";
    // echo $laptop_dina->pemilik; // Dina
    // echo "<br />";
?>