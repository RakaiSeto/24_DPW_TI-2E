<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurat = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo "Variabel a: {$a}<br>";
echo "Variabel b: {$b}<br>";
echo "Hasil dari $a + $b adalah <u>$hasilTambah</u>.<br>";
echo "Hasil dari $a - $b adalah <u>$hasilKurat</u>.<br>";
echo "Hasil dari $a * $b adalah <u>$hasilKali</u>.<br>";
echo "Hasil dari $a / $b adalah <u>$hasilBagi</u>.<br>";
echo "Hasil dari $a % $b adalah <u>$sisaBagi</u>.<br>";
echo "Hasil dari $a ** $b adalah <u>$pangkat</u>.<br>";

$hasilSama = $a == $b;
$hasiltidakSama = $a != $b;
$hasillebihKecil = $a < $b;
$hasillebihKecilSama = $a <= $b;
$hasillebihBesar = $a > $b;
$hasillebihBesarSama = $a >= $b;

echo "<br>";
echo "Variabel a: {$a}<br>";
echo "Variabel b: {$b}<br>";
echo "Variabel a sama dengan b: <u>$hasiltidakSama</u>.<br>";
echo "Variabel a tidak sama dengan b: <u>$hasilSama</u>.<br>";
echo "Variabel a lebih kecil dari b: <u>$hasillebihKecil</u>.<br>";
echo "Variabel a lebih kecil dari sama dengan b: <u>$hasillebihKecilSama</u>.<br>";
echo "Variabel a lebih besar dari b: <u>$hasillebihBesar</u>.<br>";
echo "Variabel a lebih besar dari sama dengan b: <u>$hasillebihBesarSama</u>.<br>";

$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

echo "<br>";
echo "Variabel a: {$a}<br>";
echo "Variabel b: {$b}<br>";
echo "Variabel a && b: <u>$hasilAnd</u>.<br>";
echo "Variabel a || b: <u>$hasilOr</u>.<br>";
echo "Variabel !a: <u>$hasilNotA</u>.<br>";
echo "Variabel !b: <u>$hasilNotB</u>.<br>";

$hasilATambahB = $a + $b;
$hasilAKurangB = $a - $b;
$hasilAKaliB = $a * $b;
$hasilABagiB = $a / $b;
$sisaBagi = $a % $b;

echo "<br>";
echo "Variabel a: {$a}<br>";
echo "Variabel b: {$b}<br>";
echo "Variabel a + b: <u>$hasilATambahB</u>.<br>";
echo "Variabel a - b: <u>$hasilAKurangB</u>.<br>";
echo "Variabel a * b: <u>$hasilAKaliB</u>.<br>";
echo "Variabel a / b: <u>$hasilABagiB</u>.<br>";
echo "Variabel a % b: <u>$sisaBagi</u>.<br>";
?>
