<?php
// buat class laptop
class laptop {
// buat property untuk class laptop
public $pemilik="Andi";
public $x = 4;
public $y = 6;
// buat method untuk class laptop
function hidupkan_laptop() {
return "Hidupkan Laptop $this->pemilik";
}

function perkalian(){
$z= $this->x * $this->y;
echo $z;
}

function pembagian($x,$y){
$z= $x / $y;
echo $z;
}

}


$laptop_baru = new laptop();
echo $laptop_baru->perkalian();
echo "<br>";
echo $laptop_baru->pembagian(8,4);
echo "<br>";
echo $laptop_baru->hidupkan_laptop();
echo "<br>";

?>