<?php
// Array data buah
$buah = [
    ["Apel", 15000, 10],
    ["Jeruk", 12000, 8],
    ["Mangga", 20000, 5]
];

// Keterangan: [Nama, Harga, Stok]

// 1. Cetak nama buah pertama
echo "Nama buah pertama: " . $buah[0][0] . "\n\n";

// 2. Hitung total nilai (stok * harga) untuk semua buah
$totalNilai = 0;
foreach ($buah as $item) {
    $nilaiItem = $item[1] * $item[2]; // harga * stok
    $totalNilai += $nilaiItem;
    echo "Total nilai " . $item[0] . ": Rp" . number_format($nilaiItem) . "\n";
}

echo "\nTotal nilai semua stok buah: Rp" . number_format($totalNilai) . "\n";
?>