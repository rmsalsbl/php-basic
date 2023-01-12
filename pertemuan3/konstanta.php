<?php
##############################
# Pertemuan 4
# Nama File : Konstanta.php
##############################

// echo "Menghitung Volume \n";
// echo "------------------\n";

// //Mengubah const
// const PI = 3.14;
// echo "Masukan Jari-jari bola : ";
// $r = fgets(STDIN);
// $volume = PI * $r * $r * $r;
// echo "rumus Volume bola adalah V = 3.14 * r * r * r \n";
// echo "Volume bola adalah" . $volume . "\n";

//Menggunakan fungsi define()
//Parameter 1 menyatakan nama konstanta
//Parameter 2 menyatakan nilai konstanta
// echo "Menghitung Luas Permukan Bola \n";
// echo "------------------------------\n";

// define('phi', 3.14);
// echo "Masukan Jari-jari bola : ";
// $r1 = fgets(STDIN);
// $luas_permukaan_bola = 4 * PI * $r1 * $r1;
// echo "rumus luas permukaan bola adalah Lp = 4 * PI * r * r \n";
// echo "Luas Permukaan bola adalah " . $luas_permukaan_bola . "\n";


echo "Menghitung Tekanan Hidrostatis \n";
echo "------------------\n";

//Mengubah const
const g = 9.8;
echo "Masukan h(jarak ke permukaan zat cair) : ";
$h = fgets(STDIN);
echo "Masukan p(massa jenis zat cair) : ";
$p = fgets(STDIN);
$ph = $p * g * $h ;
echo "rumus Tekanan Hodrostatis adalah Ph = p * g * h \n";
echo "Tekanan hidrostatis adalah " . $ph . "N/m²" ."\n";
?>