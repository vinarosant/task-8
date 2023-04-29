<?php 
$nilai = 75;

switch (true){
    case ($nilai >= 90);
    $kategori = "A";
    break;

    case ($nilai >= 80);
    $kategori = "B";
    break;

    case ($nilai >= 70);
    $kategori = "C";
    break;

    default :
    $kategori = "D";
}
echo "Nilai anda adalah $nilai, memiliki kategori nilai $kategori."
?>