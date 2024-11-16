<?php
include_once '../koneksi.php';
include_once 'guru.php';

$db = new Database();
$connection = $db->getConnection();
$guru = new guru($connection);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id_guru'];
    $nama_guru = $_POST['nama_guru'];
    $guru->updateGuru($id, $nama_guru);
    header("Location: index-guru.php");
}

$id_guru = $_GET['id'];
$data_guru = $guru->showGuru($id_guru);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Siswa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>
<div class="container" style="margin-top: 50px;">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <h2 class="text-center">Edit Guru</h2>
            <form method="POST">
                <input type="hidden" name="id_guru" value="<?php echo $data_guru['id_guru']; ?>">
                <div class="form-group">
                    <label>Nama Lengkap</label>
                    <input type="text" name="nama_guru" class="form-control" value="<?php echo $data_guru['nama_guru']; ?>" required>
                </div>
                <button type="submit" class="btn btn-success">Update</button>
                <a href="index-guru.php" class="btn btn-danger">Batal</a>
            </form>
        </div>
    </div>
</div>
</body>
</html>