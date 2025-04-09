<?php
include 'koneksi.php';

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $jabatan = $_POST['jabatan'];
    $gaji = $_POST['gaji'];

    mysqli_query($conn, "INSERT INTO pegawai (nama, jabatan, gaji) VALUES ('$nama', '$jabatan', '$gaji')");
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Pegawai</title>
</head>
<body>
    <h2>Tambah Pegawai</h2>
    <form method="post">
        Nama: <input type="text" name="nama" required><br><br>
        Jabatan: <input type="text" name="jabatan" required><br><br>
        Gaji: <input type="number" name="gaji" required><br><br>
        <button type="submit" name="submit">Simpan</button>
    </form>
</body>
</html>
