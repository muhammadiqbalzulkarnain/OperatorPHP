<?php
// Nama: Muhammad Iqbal Zulkarnain
// Kelas: X RPL
// Tanggal: 2026-06-22

$jarak = (int)readline("Masukkan jarak tempuh (km): ");
$konsumsi = (int)readline("Masukkan konsumsi bahan bakar (km/liter): ");
$harga = (int)readline("Masukkan harga per liter: ");

$liter = $jarak / $konsumsi;
$biaya = $liter * $harga;

echo "\n=== Estimasi Biaya Bensin ===\n";
echo "Jarak Tempuh: " . $jarak . " km\n";
echo "Konsumsi Bahan Bakar: " . $konsumsi . " km/liter\n";
echo "Harga per Liter: Rp" . $harga . "\n";
echo "Keperluan Bensin: " . $liter . " L\n";
echo "Biaya: " . $biaya;
?>