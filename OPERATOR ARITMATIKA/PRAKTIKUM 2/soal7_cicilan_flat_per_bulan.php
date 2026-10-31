<?php
// Nama: Muhammad Iqbal Zulkarnain
// Kelas: X RPL
// Tanggal: 2026-06-23

$harga = (int)readline("Masukkan harga barang: ");
$dp = (int)readline("Masukkan DP (%): ");
$bunga_tahun = (float)readline("Masukkan bunga flat per tahun (%): ");
$tenor = (int)readline("Masukkan tenor (bulan): ");

$nominal_dp = $harga * ($dp / 100);
$pokok = $harga - $nominal_dp;
$bunga_total = $pokok * ($bunga_tahun / 100) * ($tenor / 12);
$total_bayar = $pokok + $bunga_total;
$angsuran_bulan = $total_bayar / $tenor;

echo "\n=== Rincian Cicilan Flat Per Bulan ===\n";
echo "Harga Barang: Rp" . $harga . "\n";
echo "DP: " . $dp . "%\n";
echo "Bunga Flat per Tahun: " . $bunga_tahun . "%\n";
echo "Tenor: " . $tenor . " bulan\n";
echo "Nominal DP: Rp" . $nominal_dp . "\n";
echo "Pokok Pinjaman: Rp" . $pokok . "\n";
echo "Total Bunga: Rp" . $bunga_total . "\n";
echo "Total Bayar: Rp" . $total_bayar . "\n";
echo "Angsuran per Bulan: Rp" . $angsuran_bulan;
?>