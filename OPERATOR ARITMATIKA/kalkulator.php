<?php
$angka1 = readline("Masukkan Angka Pertama: ");
$angka2 = readline("Masukkan Angka Kedua: ");

$jumlah = $angka1 + $angka2;
$kurang = $angka1 - $angka2;
$kali = $angka1 * $angka2;
$bagi = $angka1 / $angka2;
$modulus = $angka1 % $angka2;

echo "Hasil Penjumlahan = $jumlah \n";
echo "Hasil Pengurangan = $kurang \n";
echo "Hasil Perkalian = $kali \n";
echo "Hasil Pembagian = $bagi \n";
echo "Sisa Hasil Bagi = $modulus \n";
?>