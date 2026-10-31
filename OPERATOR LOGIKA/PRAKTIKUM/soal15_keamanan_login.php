<?php
// Nama: Muhammad Iqbal Zulkarnain
// Kelas: X RPL
// Tanggal: 2026-06-24

$usernameBenar = true;
$passwordBenar = true;
$percobaan = 2;
$whitelist = false;

$loginAman = (($usernameBenar && $passwordBenar) && $percobaan < 3) || $whitelist;
var_dump($loginAman);
?>