<?php
// Nama: Muhammad Iqbal Zulkarnain
// Kelas: X RPL
// Tanggal: 2026-06-23

$rupiah = (int)readline("Masukkan rupiah yang ditukar: ");
$kurs = (float)readline("Masukkan kurs (Rp per 1 USD): ");
$admin = (int)readline("Masukkan biaya admin (%): ");

$rp_bersih = $rupiah * (1 - $admin / 100);
$usd = $rp_bersih / $kurs;

echo "\n=== Konversi Kurs Rupiah ke USD ===\n";
echo "Rupiah yang Ditukar: Rp" . $rupiah . "\n";
echo "Kurs: Rp" . $kurs . " per 1 USD\n";
echo "Biaya Admin: " . $admin . "%\n";
echo "Rupiah Bersih: Rp" . $rp_bersih . "\n";
echo "Konversi USD: $" . $usd;
?>