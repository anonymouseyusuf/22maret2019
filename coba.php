<!DOCTYPE html>
<html>
<head>
	<title>coba-coba</title>
</head>
<body>

	<form action="coba.php" method="post">
	<h2>INI LUAS SEGITIGA</h2>
	<label for="alas">Masukan Alas</label><br>
	<input type="text" name="alas" value="" id="alas"><br>
	<label for="alas">Masukan tinggi</label><br>
	<input type="text" name="tinggi" value="" id="tinggi">
	<input type="submit" name="hitung segitiga" value="submit">
	</form>

	<!-- 	<?php

		if (!empty($_POST['hitung segitiga'])) {
			$al=$_POST['alas'];
			$ti=$_POST['tinggi'];
		
			
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

			?> -->


		<h2>INI PERHITUNGAN BMI</h2>
		<form action="coba.php" method="post">
		<label for="tinggibadan">Masukan Tinggi Badan Anda</label><br>
		<input type="text" name="tinggi" id="tinggibadan" placeholder="tinggi badan anda"><br>
		<label for="beratbadan">Masukan Tinggi badan Anda</label><br>
		<input type="text" name="berat" placeholder="berat badan anda"><br>
		<input type="submit" name="hitung" value="hitung">
		</form>
		<?php
										if(!empty($_POST['hitung'])) { 
									    $berat = $_POST['berat'];
									    $tinggi = $_POST['tinggi'];
									    $tinggia=$tinggi/100;
									    function bmi($berat,$tinggia) {
									        $bmi = $berat/($tinggia*$tinggia);
									        return $bmi;
									    }   
									    $bmi = bmi($berat,$tinggia);
									    if ($bmi <= 18.5) {
									        $output = "UNDERWEIGHT";
									        } else if ($bmi > 18.5 AND $bmi<=24.9 ) {
									        $output = "NORMAL WEIGHT";
									        } else if ($bmi > 24.9 AND $bmi<=29.9) {
									        $output = "OVERWEIGHT";
									        } else if ($bmi > 30.0) {
									        $output = "OBESE";
									    }
									    // echo "Your BMI value is  " . $bmi . "<br>  and you are : ";
									    // echo "$output";
									}
									?>

<h2>INI RUMUS PAK FANDEKA</h2>
<form action=coba.php method=post>
<h2>
Semua Calculator
</h2>

<div>
<input type="text" name="a" placeholder="Nilai A" value="<?php if(!empty($_POST['a'])){ echo $_POST['a']; }?>" required>
</div>

<div>
<input type="text" name="b" placeholder="Nilai B" value="<?php if(!empty($_POST['b'])){ echo $_POST['b']; }?>" required>
</div>

<div>
<button type="submit" name="submit" value="submit">
Hitung
</button>
</div>
</form>

<?php 
class perhitungan{
function luas_segitiga($a,$t){
$luas_segitiga = 1/2 * $a * $t;
return $luas_segitiga;
} 

function luas_lingkaran($r1,$r2){
$luas_lingkaran = 3.14 * $r1 * $r2;
return $luas_lingkaran;
}

function bmi($berat,$tinggi) {
$bmi = $berat/($tinggi*$tinggi);
return $bmi;
} 
}

if(!empty($_POST['submit'])){

$a = $_POST['a'];
$b = $_POST['b'];
$r1 = $_POST['a'];
$r2 = $_POST['b'];

$segitiga = new perhitungan();
$lingkaran = new perhitungan();
$bmi = new perhitungan();

echo "luas segitiga adalah ";
echo $segitiga->luas_segitiga($a,$b);
echo "<br>";
echo "luas lingkaran adalah ";
echo $lingkaran->luas_lingkaran($r1,$r2);
echo "<br>";
echo "bmi adalah ";
echo $bmi->bmi($a,$b);
echo "<br>";


}
?>

		


</body>
</html>