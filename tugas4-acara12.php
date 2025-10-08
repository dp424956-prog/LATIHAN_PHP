<?php
// 1. Buat array 2 dimensi 3x3 berisi angka acak (1-9)
$matriks = [];
for ($baris = 0; $baris < 3; $baris++) {
    for ($kolom = 0; $kolom < 3; $kolom++) {
        $matriks[$baris][$kolom] = rand(1, 9);
    }
}

// 2. Cetak array dalam bentuk matriks
echo "Matriks 3x3:\n";
foreach ($matriks as $baris) {
    foreach ($baris as $angka) {
        echo $angka . "\t"; // \t untuk memberikan tabulasi
    }
    echo "\n"; // Pindah baris setelah satu baris selesai dicetak
}

// 3. Hitung jumlah total semua elemen
$totalSemuaElemen = 0;
foreach ($matriks as $baris) {
    $totalSemuaElemen += array_sum($baris);
}

echo "\nJumlah total semua elemen: " . $totalSemuaElemen . "\n";
?>