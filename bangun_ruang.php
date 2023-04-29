<?php 
//menghitung volume kerucut
$r_k = 7;
$t_k = 15;
$vol_kerucut = 1/3 * 3.14 * $r_k * $r_k * $t_k;
echo "1. Volume Kerucut : 1/3 x pi x r x r x t <br> Jari - Jari = $r_k cm <br> Tinggi = $t_k cm <br> Volume = $vol_kerucut cm3 <br>";

//menghitung volume tabung
$r_t = 5;
$t_t = 13;
$vol_tabung = 3.14 * $r_t * $r_t * $t_t ;
echo "<br> 2. Volume Tabung : pi x r x r x t <br> Jari - Jari = $r_t cm <br> Tinggi = $t_t cm <br> Volume = $vol_tabung cm3 <br>";

//menghitung volume balok
$p = 12;
$l = 4;
$t = 6;
$vol_balok = $p * $l* $t;
echo "<br> 3. Volume Balok : p x l x t <br> Panjang = $p cm <br> Lebar = $l cm <br> Tinggi = $t cm <br> Luas =  $vol_balok cm3 <br>";
?>