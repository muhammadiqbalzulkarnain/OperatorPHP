<?php
// Nama: Muhammad Iqbal Zulkarnain
// Kelas: X RPL
// Tanggal: 2026-06-23

$kouta_awal = (int)readline("Masukkan kouta awal (GB): ");
$pemakaian_MB = (int)readline("Masukkan pemakaian data (MB): ");
$hari = (int)readline("Masukkan jumlah hari terpakai: ");
$harga = (int)readline("Masukkan harga paket (Rp): ");

$terpakai_GB = $pemakaian_MB / 1024;
$sisa_GB = $kouta_awal - $terpakai_GB;
$biaya_per_GB = $harga / $kouta_awal;
$biaya_efektif = ($terpakai_GB / $kouta_awal) * $harga;

echo "\n=== Rincian Efektivitas Paket Data ===\n";
echo "Kouta Awal: " . $kouta_awal . " GB\n";
echo "Pemakaian Data: " . $pemakaian_MB . " MB\n";
echo "Jumlah Hari Terpakai: " . $hari . " GB\n";
echo "Harga Paket: Rp" . $harga . "\n";
echo "Terpakai: Rp" . $terpakai_GB . " GB\n";
echo "Sisa: Rp" . $sisa_GB . " GB\n";
echo "Biaya per GB: Rp" . $biaya_per_GB . "\n";
echo "Biaya Efektif: Rp" . $biaya_efektif;
?>