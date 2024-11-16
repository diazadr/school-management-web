<?php
include_once '../koneksi.php';
include_once 'mapel.php';

$db = new Database();
$connection = $db->getConnection();
$mapel = new mapel($connection);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama_mapel = $_POST['nama_mapel'];
    $mapel->addMapel($nama_mapel);
    header("Location: index-mapel.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Mapel</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>
<div class="container" style="margin-top: 50px;">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <h2 class="text-center">Tambah Mapel</h2>
            <form method="POST">
                <div class="form-group">
                    <label>Nama Mata Pelajaran</label>
                    <input type="text" name="nama_mapel" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-success">Simpan</button>
                <a href="index-mapel.php" class="btn btn-danger">Batal</a>
            </form>
        </div>
    </div>
</div>
</body>
</html>