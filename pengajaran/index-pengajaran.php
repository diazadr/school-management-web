<?php
include_once '../koneksi.php';
include_once 'pengajaran.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Guru Mapel Kelas</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
</head>

<body>
    <div class="container" style="margin-top: 50px;">
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center">Data Guru Mata Pelajaran Kelas</h2>
                <div class="d-flex justify-content-between mb-3">
                    <a href="../index.php" class="btn btn-secondary">Kembali</a>
                    <a href="add-pengajaran.php" class="btn btn-success">Tambah Pengajaran</a>
                </div>
                <table class="table table-bordered" id="myTable">
                    <thead>
                        <tr>
                            <th scope="col">NO.</th>
                            <th scope="col">Nama Guru</th>
                            <th scope="col">Nama Mapel</th>
                            <th scope="col">Nama Kelas</th>
                            <th scope="col">AKSI</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $no = 1;
                      foreach ($all_pengajaran as $row): ?>

                            <tr>
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $row['nama_guru'] ?></td>
                                <td><?php echo $row['nama_mapel'] ?></td>
                                <td><?php echo $row['nama_kelas'] ?></td>
                              <td class="text-center">
                                    <a href="edit-pengajaran.php?id=<?php echo $row['id'] ?>" class="btn btn-sm btn-primary">EDIT</a>
                                    <a href="delete-pengajaran.php?id=<?php echo $row['id'] ?>" class="btn btn-sm btn-danger">HAPUS</a>
                                </td>
                            </tr>

                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#myTable').DataTable();
        } );
    </script>
</body>

</html>