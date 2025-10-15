<?php
$nilaiAwal = 75;
$nilairemed = 80;
echo "nilai awal $nilaiAwal . <br>";
echo "nilai awal $nilairemed . <br>";

$SimpanNilai = $nilaiAwal;
$nilaiAwal = $nilairemed;
$nilaiPerbaikan = $SimpanNilai;

echo "ini nilai yg fix";
echo "<br>";
echo "Nilai awal $nilaiAwal";
echo "<br>";
echo "Nilai akhir $nilaiPerbaikan";
