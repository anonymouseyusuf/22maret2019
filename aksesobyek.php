<?php
// buat class laptop
class laptop {
   // buat property untuk class laptop
   var $pemilik;
  
   // buat method untuk class laptop
   function hidupkan_laptop() {
     return "Hidupkan Laptop";
   }
   function matikan_laptop() {
     return "Matikan Laptop";
   }
   function kalkulasi() {
     $x=2;
     $y=3;

     $z=$x+$y;

     echo $z;
   }
   function hitung_segitiga($a,$t) {
     
     $luas=1/2 *$a*$t;

     echo $luas;
   }
   


} 
?>


<?php
// buat objek dari class laptop (instansiasi)
$laptop_anto = new laptop();
$laptop_andi = new laptop();
$laptop_dina = new laptop();

// set property
$laptop_anto->pemilik="Anto";
$laptop_andi->pemilik="Andi";
$laptop_dina->pemilik="Dina";
  
// tampilkan property
echo $laptop_anto->pemilik; // Anto
echo "<br />";
echo $laptop_andi->pemilik; // Andi
echo "<br />";
echo $laptop_dina->pemilik; // Dina
echo "<br />";


echo $laptop_anto->hidupkan_laptop();
echo "<br>";
echo $laptop_dina->hidupkan_laptop();
echo "<br>";
echo $laptop_dina->matikan_laptop();
echo "<br>";
echo $laptop_dina->kalkulasi();
echo "<br>";
echo $laptop_dina->hitung_segitiga(5,6);
echo "<br>";
echo $laptop_dina->hitung_segitiga(5,3);
echo "<br>";

?>

