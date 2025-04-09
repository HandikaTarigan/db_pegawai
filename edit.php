<?php
include 'koneksi.php';

$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM pegawai WHERE id = $id");
$row = mysqli_fetch_assoc($result);

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $jabatan = $_POST['jabatan'];
    $gaji = $_POST['gaji'];

    mysqli_query($conn, "UPDATE pegawai SET nama='$nama', jabatan='$jabatan', gaji='$gaji' WHERE id=$id");
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Pegawai</title>
</head>
<body>
    <h2>Edit Pegawai</h2>
    <form method="post">
        Nama: <input type="text" name="nama" value="<?= $row['nama'] ?>" required><br><br>
        Jabatan: <input type="text" name="jabatan" value="<?= $row['jabatan'] ?>" required><br><br>
        Gaji: <input type="number" name="gaji" value="<?= $row['gaji'] ?>" required><br><br>
        <button type="submit" name="submit">Update</button>
    </form>
</body>
</html>
