<?php 
//menghitung luas belah ketupat
$d1 = 12;
$d2 = 15;
$luas_bk = 0.5 * $d1 * $d2;
echo "1. Luas Belah Ketupat : 1/2 x d1 x d2 <br> d1 = $d1 cm <br> d2 = $d2 cm <br> Luas = $luas_bk cm2 <br>";

//menghitung luas persegi panjang
$p = 15;
$l = 7;
$luas_pp = $p * $l ;
echo "<br> 2. Luas Persegi Panjang : p x l <br> Panjang = $p cm <br> Lebar = $l cm <br> Luas = $luas_pp cm2 <br>";

//menghitung luas lingkaran
$r = 14;
$luas_lingkaran = 3.14 * $r * $r;
echo "<br> 3. Luas Lingkaran : pi x r x r <br> Jari - Jari = $r cm <br> Luas =  $luas_lingkaran cm2 <br>";

//menghitung luas trapesium
$a = 6;
$b = 10;
$t = 5;
$luas_trapesium = 0.5 * ($a + $b) * $t;
echo "<br> 4. Luas Trapesium : 1/2 x (a+b) x t <br> Sisi a = $a cm <br> Sisi b = $b cm <br> Tinggi = $t cm <br> Luas = $luas_trapesium cm2 <br>";

//menghitung luas segitiga
$alas = 5;
$tinggi = 12;
$luas_segitiga = 0.5 * $alas * $tinggi;
echo "<br> 5. Luas Segitiga : 1/2 x a x t <br> Alas = $alas cm <br> tinggi = $t cm <br> Luas = $luas_segitiga cm2";
?>