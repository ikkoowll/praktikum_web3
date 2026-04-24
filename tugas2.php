<?php
// Tentukan nilai jari-jari (r) dan garis pelukis (s)
$r = 7; 
$s = 10;
define("PI", 3.14);

// Perhitungan
$luasAlas = PI * $r * $r;
$luasPermukaan = (PI * $r * $r) + (PI * $r * $s);

// Menampilkan hasil
echo "--- Perhitungan Kerucut ---<br>";
echo "Jari-jari (r) = " . $r . "<br>";
echo "Garis pelukis (s) = " . $s . "<br><br>";
echo "Luas Alas = " . $luasAlas . "<br>";
echo "Luas Permukaan = " . $luasPermukaan . "<br>";
?>