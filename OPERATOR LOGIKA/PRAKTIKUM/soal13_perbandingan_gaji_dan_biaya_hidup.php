<?php
// Nama: Muhammad Iqbal Zulkarnain
// Kelas: X RPL
// Tanggal: 2026-06-24

$gaji = 6000000;
$pengeluaran = 4000000;

$sisa = $gaji - $pengeluaran;
$persentase = ($pengeluaran / $gaji) * 100;

$cukup = ($sisa > 1000000) && ($persentase <= 70);
var_dump($cukup);
?>