<!DOCTYPE>
<html>
<head>
<title>Semua Calculator</title>
</head>
<body>

<form action=allrumus.php method=post>
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