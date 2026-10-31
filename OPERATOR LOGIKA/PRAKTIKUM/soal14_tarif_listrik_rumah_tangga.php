<?php
// Nama: Muhammad Iqbal Zulkarnain
// Kelas: X RPL
// Tanggal: 2026-06-24

$kwh = 450;
$biaya = 800000;
$gaji = 3500000;
$subsidi = false;

$persen = ($biaya / $gaji) * 100;
$tidakWajar = ($kwh > 400 || $persen > 20) && !$subsidi;
var_dump($tidakWajar);
?>