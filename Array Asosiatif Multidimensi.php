<?php
$produk = [
["nama" => "Laptop", "harga" => 7500000, "stok" => 10],
["nama" => "HP", "harga" => 3000000, "stok" => 15],
["nama" => "Tablet", "harga" => 2500000, "stok" => 7],
];
// Menampilkan semua produk
foreach ($produk as $p) {
echo "Nama: " . $p["nama"] . " | Harga: " . $p["harga"] . " | Stok: " .
$p["stok"] . "<br>";
}
?>