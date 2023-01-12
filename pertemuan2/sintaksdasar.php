<?php
//Pertemuan 2 - Latihan PHP
//Sintaks PHP

//Standar Output
//echo, print
//print_r -> array
//var_dump

//echo
// echo "Salsabila<br>";
// echo "ini ", "teks ", "yang ", "dipisah<br>";
// echo "ini ". "teks"; 

//. = konket? : penyatu string

//print -> just can one parameter
// print "Salsabila";
// print "Salsa"

//print_r
// $nama_siswa = array("Heli", "Jino", "Jaan", "Solon", "Shion", "Jakah", "Noa");
// print_r($nama_siswa);

//var_dump
// var_dump("Salsabila");

//Penulisan sintaks PHP
//1. PHP di dalam HTML
//2. HTML didalam PHP

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan PHP</title>
</head>
<body>
    <!-- PHP didalam HTML -->
    <h1>Halo, Welcome <?php echo "Salsa"; ?></h1>
    <p><?php echo "ini adalah paragraf"; ?></p>

    <!-- HTML didalam PHP -->
    <?php 
    echo "<h1> Welcome Salsa </h1>";
    ?>
</body>
</html>