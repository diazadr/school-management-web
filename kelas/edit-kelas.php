<?php
include_once '../koneksi.php';
include_once 'kelas.php';

$db = new Database();
$connection = $db->getConnection();
$kelas = new kelas($connection);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id_kelas'];
    $nama_kelas = $_POST['nama_kelas'];
    $kelas->updateKelas($id, $nama_kelas);
    header("Location: index-kelas.php");
}

$id_kelas = $_GET['id'];
$data_kelas = $kelas->showKelas($id_kelas);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Kelas</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>
<div class="container" style="margin-top: 50px;">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <h2 class="text-center">Edit Kelas</h2>
            <form method="POST">
                <input type="hidden" name="id_kelas" value="<?php echo $data_kelas['id_kelas']; ?>">
                <div class="form-group">
                    <label>Nama Lengkap</label>
                    <input type="text" name="nama_kelas" class="form-control" value="<?php echo $data_kelas['nama_kelas']; ?>" required>
                </div>
                <button type="submit" class="btn btn-success">Update</button>
                <a href="index-kelas.php" class="btn btn-danger">Batal</a>
            </form>
        </div>
    </div>
</div>
</body>
</html>