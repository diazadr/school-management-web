<?php
include_once '../koneksi.php';
include_once 'kelas.php';

$db = new Database();
$connection = $db->getConnection();
$kelas = new kelas($connection);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama_kelas = $_POST['nama_kelas'];
    $kelas->addKelas($nama_kelas);
    header("Location: index-kelas.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Kelas</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>
<div class="container" style="margin-top: 50px;">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <h2 class="text-center">Tambah Kelas</h2>
            <form method="POST">
                <div class="form-group">
                    <label>Nama Kelas</label>
                    <input type="text" name="nama_kelas" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-success">Simpan</button>
                <a href="index-kelas.php" class="btn btn-danger">Batal</a>
            </form>
        </div>
    </div>
</div>
</body>
</html>