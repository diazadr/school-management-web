<?php
include_once '../koneksi.php';
include_once 'mapel.php';

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Mata Pelajaran</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
</head>

<body>
    <div class="container" style="margin-top: 50px;">
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center">Data Mata Pelajaran</h2>
                <div class="d-flex justify-content-between mb-3">
                    <a href="../index.php" class="btn btn-secondary">Kembali</a>
                    <a href="add-mapel.php" class="btn btn-success">Tambah Mata Pelajaran</a>
                </div>
                <table class="table table-bordered" id="myTable">
                    <thead>
                        <tr>
                            <th scope="col">NO.</th>
                            <th scope="col">Nama Mapel</th>
                            <th scope="col">AKSI</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        while ($row = $all_mapel->fetch_assoc()): ?>

                            <tr>
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $row['nama_mapel'] ?></td>
                                <td class="text-center">
                                    <a href="edit-mapel.php?id=<?php echo $row['id_mapel'] ?>" class="btn btn-sm btn-primary">EDIT</a>
                                    <a href="delete-mapel.php?id=<?php echo $row['id_mapel'] ?>" class="btn btn-sm btn-danger">HAPUS</a>
                                </td>
                            </tr>

                        <?php endwhile; ?>
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