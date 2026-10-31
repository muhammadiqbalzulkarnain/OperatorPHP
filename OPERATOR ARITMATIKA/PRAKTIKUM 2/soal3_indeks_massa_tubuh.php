<?php
// Nama: Muhammad Iqbal Zulkarnain
// Kelas: X RPL
// Tanggal: 2026-06-23

$berat = (int)readline("Masukkan berat badan (kg): ");
$tinggi = (int)readline("Masukkan tinggi badan (cm): ");

$bmi = $berat / ($tinggi ** 2);

echo "\n=== Indeks Massa Tubuh (BMI) ===\n";
echo "Berat Badan: " . $berat . " kg\n";
echo "Tinggi Badan: " . $tinggi . " cm\n";
echo "BMI: " . $bmi;
?>