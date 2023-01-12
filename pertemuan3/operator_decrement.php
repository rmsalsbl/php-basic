<?php
#################################
# Pertemuan 4
# Nama File : operator_decrement.php
#################################

echo "Masukan Nilai a: ";
$a = fgets(STDIN);

echo "Pre-Increment \n";
echo "Nilai " . $a . " sebelum dikurang : " . $a . "\n";
echo "Nilai --$a :". --$a . "\n";
echo "Nilai setelah ditamabah: ". $a . "\n";

echo "\n";
#Mengambalikan nilai $a ke nilai 5;
// $a1 = 5;
echo "Post-Increment \n";
echo "Nilai " . $a . " sebelum dikurang : " . $a . "\n";
echo "Nilai $a-- : ". $a-- . "\n";
echo "Nilai setelah dikurang: ". $a-- . "\n";

?>