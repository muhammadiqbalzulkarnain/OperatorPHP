<?php
// Nama: Muhammad Iqbal Zulkarnain
// Kelas: X RPL
// Tanggal: 2026-06-24

$pendapatan = 1000000;
$pengeluaran = 950000;

$sisa = $pendapatan - $pengeluaran;
$menabung = ($sisa >= 50000 && $pendapatan > $pengeluaran);
var_dump($menabung);
?>