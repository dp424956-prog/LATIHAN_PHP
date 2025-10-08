<?php
// Membuat array 2 dimensi berisi data 3 siswa
$siswa = [
    ["Budi", 85, 90],
    ["Ani", 92, 88],
    ["Candra", 78, 85]
];

// Keterangan: [Nama, Nilai Matematika, Nilai Bahasa]

// 1. Cetak nilai Bahasa dari siswa ke-2
//    (Index array dimulai dari 0, jadi siswa ke-2 ada di index 1)
echo "Nilai Bahasa siswa ke-2 (Ani): " . $siswa[1][2] . "\n\n";

// 2. Cetak semua data menggunakan looping
echo "Semua Data Siswa:\n";
foreach ($siswa as $data) {
    echo "Nama: " . $data[0] . ", ";
    echo "Nilai Matematika: " . $data[1] . ", ";
    echo "Nilai Bahasa: " . $data[2] . "\n";
}
?>