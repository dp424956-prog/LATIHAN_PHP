<?php
echo "<h2>PERULANGAN DARI 100 SAMPAI 1000</h2>";

// Metode 1: Menggunakan FOR
echo "<h3>1. Menggunakan FOR</h3>";
for($i=100; $i<=1000; $i++) {
    echo $i." ";
    // Membuat baris baru setiap 10 angka agar rapi
    if($i % 10 == 0) {
        echo "<br>";
    }
}

echo "<hr>";

// Metode 2: Menggunakan WHILE
echo "<h3>2. Menggunakan WHILE</h3>";
$j=100;
while($j<=1000) {
    echo $j." ";
    if($j % 10 == 0) {
        echo "<br>";
    }
    $j++;
}

echo "<hr>";

// Metode 3: Menggunakan DO-WHILE
echo "<h3>3. Menggunakan DO-WHILE</h3>";
$k=100;
do {
    echo $k." ";
    if($k % 10 == 0) {
        echo "<br>";
    }
    $k++;
} while($k<=1000);

echo "<hr>";

// Bonus: Perulangan dengan increment berbeda
echo "<h3>4. BONUS - Kelipatan 10 (100, 110, 120, ..., 1000)</h3>";
for($i=100; $i<=1000; $i+=10) {
    echo $i." ";
    if($i % 100 == 0) {
        echo "<br>";
    }
}
?>