<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menghitung BMI</title>
</head>
<body>
    <form method = "get" action = "">
        Nama <br> 
		<input type="text" name="nama"><br>

        Tinggi Badan (cm) <br>
        <input type="number" name="tb"><br>

        Berat Badan (kg) <br>
        <input type="number" name="bb"><br><br>

        <input type ="submit" name = "submit" value = "Submit">
    </form>
</body>
</html>

<?php 
if (isset($_GET['submit'])){
$nama = $_GET['nama'];
$tb = $_GET['tb']/100;
$bb = $_GET['bb'];
$bmi = $bb / ($tb * $tb);
echo "<br> Halo $nama. Nilai BMI anda adalah $bmi, anda termasuk ";

if ($bmi < 18.5){
    echo "kurus.";
}
elseif ($bmi >= 18.5 && $bmi < 25){
    echo "normal.";
}
elseif ($bmi >= 25 && $bmi < 30){
    echo "berat badan berlebih.";
}
else {
    echo "obesitas.";
}
}
?>