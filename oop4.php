<?php
// buat class laptop
class laptop {
  
   // buat property untuk class laptop
   public $pemilik="Andi";
  
   // buat method untuk class laptop
   public function hidupkan_laptop() {
     return "Hidupkan Laptop $this->pemilik";
   }
}
  
// buat objek dari class laptop (instansiasi)
$laptop_baru = new laptop();
$laptop_lama = new laptop();

echo $laptop_baru->pemilik."<br>"; // Andi
echo $laptop_lama->pemilik."<br>"; // Andi

echo $laptop_baru->hidupkan_laptop()."<br>"; // "Hidupkan Laptop"
echo $laptop_lama->hidupkan_laptop(); // "Hidupkan Laptop"


?>