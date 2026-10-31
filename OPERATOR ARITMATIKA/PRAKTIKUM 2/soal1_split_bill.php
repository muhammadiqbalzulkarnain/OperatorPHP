<?php
// Nama: Muhammad Iqbal Zulkarnain
// Kelas: X RPL
// Tanggal: 2026-06-22

$total_tagihan = (int)readline("Masukkan total tagihan: ");
$biaya_layanan = (int)readline("Masukkan biaya layanan (%): ");
$jumlah_orang = (int)readline("Masukkan jumlah orang: ");

$total_akhir = $total_tagihan * (1 + $biaya_layanan / 100);
$per_orang = $total_akhir / $jumlah_orang;

echo "\n=== Rincian Pembayaran ===\n";
echo "Total Tagihan: Rp" . $total_tagihan . "\n";
echo "Biaya Layanan: " . $biaya_layanan . "%\n";
echo "Jumlah Orang: " . $jumlah_orang . "\n";
echo "Total Akhir: Rp" . $total_akhir . "\n";
echo "Perorang: Rp" . $per_orang;
?>