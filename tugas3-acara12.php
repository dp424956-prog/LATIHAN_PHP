<?php
// Membuat array asosiatif multidimensi
$produk = [
    [
        "nama_produk" => "Keyboard Mechanical",
        "kategori"    => "Elektronik",
        "harga"       => 850000,
        "rating"      => 4.8
    ],
    [
        "nama_produk" => "Mouse Gaming",
        "kategori"    => "Elektronik",
        "harga"       => 1200000,
        "rating"      => 4.9
    ],
    [
        "nama_produk" => "T-Shirt Polos",
        "kategori"    => "Fashion",
        "harga"       => 150000,
        "rating"      => 4.5
    ]
];

// Cetak produk dengan harga tertinggi
$produkTermahal = null;
$hargaTertinggi = 0;

foreach ($produk as $item) {
    if ($item['harga'] > $hargaTertinggi) {
        $hargaTertinggi = $item['harga'];
        $produkTermahal = $item;
    }
}

echo "Produk dengan harga tertinggi adalah:\n";
echo "Nama: " . $produkTermahal['nama_produk'] . "\n";
echo "Kategori: " . $produkTermahal['kategori'] . "\n";
echo "Harga: Rp" . number_format($produkTermahal['harga']) . "\n";
echo "Rating: " . $produkTermahal['rating'] . "\n";
?>