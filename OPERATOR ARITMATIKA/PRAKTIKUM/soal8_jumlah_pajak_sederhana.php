<?php
// Nama: Muhammad Iqbal Zulkarnain
// Kelas: X RPL
// Tanggal: 2026-06-22

$barangA = readline("Masukkan harga barang A: ");
$barangB = readline("Masukkan harga barang B: ");
$barangC = readline("Masukkan harga barang C: ");

$subtotal = $barangA + $barangB + $barangC;
$pajak = 0.10 * $subtotal;
$total_bayar = $subtotal + $pajak;

echo "Subtotal: Rp" . $subtotal . "\n";
echo "Pajak (10%): Rp" . $pajak . "\n";
echo "Total Bayar: Rp" . $total_bayar;
?>