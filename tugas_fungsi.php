<?php
// Bagian Awal dari soal
echo "MEMBUAT FUNGSI <br>";
function berhasil()
{
  echo "SELAMAT ANDA BERHASIL";
};
function gagal()
{
  echo "MAAF ANDA GAGAL";
}
$nilai = 90;
if ($nilai >= 75) {
  berhasil();
} else {
  gagal();
};

echo "<br><hr>"; // Pemisah

// TUGAS 1: FUNGSI BILANGAN TERBESAR
echo "<h3>Tugas 1: Fungsi Bilangan Terbesar</h3>";
function bilanganTerbesar($bil1, $bil2)
{
  if ($bil1 > $bil2) {
    return $bil1;
  } else {
    return $bil2;
  }
}

$angka1 = 100;
$angka2 = 150;
echo "Bilangan terbesar antara $angka1 dan $angka2 adalah: " . bilanganTerbesar($angka1, $angka2);

echo "<br><hr>"; // Pemisah

// TUGAS 2: MENAMPILKAN TANGGAL DENGAN GETDATE()
echo "<h3>Tugas 2: Menampilkan Tanggal dengan getdate()</h3>";
$infoTanggal = getdate();
$hari = $infoTanggal['wday'];
$bulan = $infoTanggal['mon'];
$tahun = $infoTanggal['year'];
echo "Format (d-m-Y): $hari-$bulan-$tahun";

echo "<br><hr>"; // Pemisah

// TUGAS 3: MENAMPILKAN TANGGAL DENGAN DATE()
echo "<h3>Tugas 3: Menampilkan Tanggal dengan date()</h3>";
echo "Format (d-F-Y): " . date('d-F-Y');

?>