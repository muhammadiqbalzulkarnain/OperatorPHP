<?php
// Nama: Muhammad Iqbal Zulkarnain
// Kelas: X RPL
// Tanggal: 2026-06-23

$biaya_masuk = (int)readline("Masukkan biaya masuk parkir: ");
$tarif_per_jam = (int)readline("Masukkan tarif per jam: ");
$jam = (int)readline("Masukkan durasi parkir (jam): ");

$total = $biaya_masuk + ($tarif_per_jam * $jam);

echo "\n=== Rincian Tarif Parkir ===\n";
echo "Biaya Masuk: Rp" . $biaya_masuk . "\n";
echo "Tarif per Jam: Rp" . $tarif_per_jam . "\n";
echo "Durasi Parkir: " . $jam . " jam\n";
echo "Total Bayar: Rp" . $total;
?>