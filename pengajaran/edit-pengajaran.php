<?php
include_once '../koneksi.php';
include_once 'pengajaran.php';

$db = new Database();
$connection = $db->getConnection();
$pengajaran = new Pengajaran($connection);

$query_guru = "SELECT id_guru, nama_guru FROM guru";
$result_guru = $connection->query($query_guru);

$query_mapel = "SELECT id_mapel, nama_mapel FROM mapel";
$result_mapel = $connection->query($query_mapel);

$query_kelas = "SELECT id_kelas, nama_kelas FROM kelas";
$result_kelas = $connection->query($query_kelas);

$id = $_GET['id'];
$data_pengajaran = $pengajaran->showPengajaran($id);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id_guru = $_POST['id_guru'];
    $id_mapel = $_POST['id_mapel'];
    $id_kelas = $_POST['id_kelas'];
    $pengajaran->updatePengajaran($id, $id_guru, $id_mapel, $id_kelas);
    header("Location: index-pengajaran.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Pengajaran</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>
<div class="container" style="margin-top: 50px;">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <h2 class="text-center">Edit Pengajaran</h2>
            <form method="POST">
                <div class="form-group">
                    <label>Nama Guru</label>
                    <select name="id_guru" class="form-control" required>
                        <?php while ($row = $result_guru->fetch_assoc()): ?>
                            <option value="<?= $row['id_guru']; ?>" <?= ($row['id_guru'] == $data_pengajaran['id_guru']) ? 'selected' : ''; ?>>
                                <?= $row['nama_guru']; ?>
                            </option>
                        <?php endwhile; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Nama Mapel</label>
                    <select name="id_mapel" class="form-control" required>
                        <?php while ($row = $result_mapel->fetch_assoc()): ?>
                            <option value="<?= $row['id_mapel']; ?>" <?= ($row['id_mapel'] == $data_pengajaran['id_mapel']) ? 'selected' : ''; ?>>
                                <?= $row['nama_mapel']; ?>
                            </option>
                        <?php endwhile; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Nama Kelas</label>
                    <select name="id_kelas" class="form-control" required>
                        <?php while ($row = $result_kelas->fetch_assoc()): ?>
                            <option value="<?= $row['id_kelas']; ?>" <?= ($row['id_kelas'] == $data_pengajaran['id_kelas']) ? 'selected' : ''; ?>>
                                <?= $row['nama_kelas']; ?>
                            </option>
                        <?php endwhile; ?>
                    </select>
                </div>

                <button type="submit" class="btn btn-success">Update</button>
                <a href="index-pengajaran.php" class="btn btn-danger">Batal</a>
            </form>
        </div>
    </div>
</div>
</body>
</html>
