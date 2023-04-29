<?php 
//perulangan yang akan dijalankan pertama, dimana inisialisisasi sama dengan 9, kondisi lebih besar sama dengan 1, dan iterasi i--
for ($i = 9; $i >= 1; $i--){
    //perulangan j akan dijalankan jika perulangan i sudah berhasil dijalankan, dimana inisialisisasi sama dengan 1, kondisi lebih kecil sama dengan i, dan iterasi j++
    for ($j = 1; $j <= $i; $j++){
        //hasil yang akan ditampilkan jika perulangan berhasil dijalankan
        echo "*"; 
    }
    echo "<br>";
}
?>