<?php
//perulangan yang akan dijalankan pertama, dimana inisialisisasi sama dengan 0, kondisi lebih kecil sama dengan 8, dan iterasi i++
for ($i = 0; $i <= 8; $i++){
    //perulangan j akan dijalankan jika perulangan i sudah berhasil dijalankan, dimana inisialisasi sama dengan 0, kondisi lebih kecil sama dengan i, dan iterasi j++
    for ($j = 0; $j <= $i; $j++){
        //hasil yang akan ditampilkan jika perulangan berhasil dijalankan
        echo $j;
    }
    echo "<br>";
}
?>