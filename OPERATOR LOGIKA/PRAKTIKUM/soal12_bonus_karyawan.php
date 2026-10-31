<?php
// Nama: Muhammmad Iqbal Zulkarnain
// Kelas: X RPL
// Tanggal: 2026-06-24

$jamKerja = 155;
$lembur = 12;
$performa = 85;

$bonus = ($jamKerja >= 160 && $performa >= 80) || $lembur > 10;
var_dump($bonus);
?>