<?php
// Program Registrasi Mahasiswa Sederhana (Dengan Percabangan untuk Validasi)
// Data hardcoded untuk simulasi

// Data mahasiswa awal (dengan alamat & jurusan)
$mahasiswa_list = [
    ['nim' => '12345', 'nama' => 'Andi', 'usia' => 20, 'jurusan' => 'Informatika', 'alamat' => 'Jl. Sudirman No.1, Jakarta'],
    ['nim' => '67890', 'nama' => 'Budi', 'usia' => 19, 'jurusan' => 'Manajemen', 'alamat' => 'Jl. Thamrin No.2, Bandung'],
    ['nim' => '11111', 'nama' => 'Cici', 'usia' => 18, 'jurusan' => 'Informatika', 'alamat' => 'Jl. Gatot Subroto No.3, Surabaya']
];

// Variabel hasil
$result = '';
$show_list = false;

// Proses POST (hanya registrasi)
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nim = $_POST['nim'] ?? '';
    $usia = (int)($_POST['usia'] ?? 0);
    $jurusan = $_POST['jurusan'] ?? '';
    $alamat = $_POST['alamat'] ?? '';

    // Cek NIM unik
    $nim_exists = false;
    foreach ($mahasiswa_list as $mhs) {
        if ($mhs['nim'] == $nim) {
            $nim_exists = true;
            break;
        }
    }

    // Percabangan validasi
    if ($usia >= 17 && !$nim_exists && !empty($jurusan) && !empty($alamat)) {
        // Tambah data baru
        $mahasiswa_list[] = [
            'nim' => $nim,
            'nama' => 'Mahasiswa Baru',  // Bisa diganti dengan input nama jika mau
            'usia' => $usia,
            'jurusan' => $jurusan,
            'alamat' => $alamat
        ];
        $result = "Registrasi berhasil! NIM: $nim, Jurusan: $jurusan, Alamat: $alamat.";
        $show_list = true;  // Tampilkan daftar setelah sukses
    } elseif ($usia < 17) {
        $result = "Error: Usia minimal 17 tahun!";
    } elseif ($nim_exists) {
        $result = "Error: NIM sudah terdaftar!";
    } elseif (empty($jurusan)) {
        $result = "Error: Jurusan wajib diisi!";
    } elseif (empty($alamat)) {
        $result = "Error: Alamat wajib diisi!";
    } else {
        $result = "Error: Data tidak lengkap!";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <title>Registrasi Mahasiswa Sederhana</title>
</head>
<body>
    <h1>Registrasi Mahasiswa Sederhana</h1>
    
    <?php if ($result): ?>
        <p style="color: <?php echo (strpos($result, 'berhasil') !== false) ? 'green' : 'red'; ?>;">
            <?php echo $result; ?>
        </p>
    <?php endif; ?>

    <!-- Form Registrasi -->
    <h2>Form Registrasi</h2>
    <form method="POST">
        NIM: <input type="text" name="nim" required><br><br>
        Usia: <input type="number" name="usia" required><br><br>
        Jurusan: <input type="text" name="jurusan" placeholder="Contoh: Informatika" required><br><br>
        Alamat: <input type="text" name="alamat" placeholder="Contoh: Jl. Sudirman No.1" required><br><br>
        <button type="submit">Daftar</button>
    </form>

    <?php if ($show_list): ?>
        <!-- Tampilkan Daftar Mahasiswa (hanya setelah registrasi sukses) -->
        <h2>Daftar Mahasiswa</h2>
        <ul>
            <?php foreach ($mahasiswa_list as $mhs): ?>
                <li>
                    NIM: <?php echo $mhs['nim']; ?><br>
                    Nama: <?php echo $mhs['nama']; ?><br>
                    Usia: <?php echo $mhs['usia']; ?> tahun<br>
                    Jurusan: <?php echo $mhs['jurusan']; ?><br>
                    Alamat: <?php echo $mhs['alamat']; ?>
                </li>
                <hr>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
</body>
</html>
