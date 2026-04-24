<?php
$saldoAwal = 2000000; // Diperbaiki dari 1000000 sesuai soal
$bunga = 0.03;
$bulan = 11;

// Rumus: Saldo Awal + (Saldo Awal * bunga * bulan)
$saldoAkhir = $saldoAwal + ($saldoAwal * $bunga * $bulan);

echo "Saldo akhir setelah ".$bulan." bulan adalah : Rp. ".$saldoAkhir.",-";
?>