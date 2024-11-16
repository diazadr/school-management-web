<?php
include_once '../koneksi.php';
include_once 'kelas.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Kelas</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
</head>

<body>
    <div class="container" style="margin-top: 50px;">
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center">Data Kelas</h2>
                <div class="d-flex justify-content-between mb-3">
                    <a href="../index.php" class="btn btn-secondary">Kembali</a>
                    <a href="add-kelas.php" class="btn btn-success">Tambah Kelas</a>
                </div>
                <table class="table table-bordered" id="myTable">
                    <thead>
                        <tr>
                            <th scope="col">NO.</th>
                            <th scope="col">Nama Kelas</th>
                            <th scope="col">AKSI</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        while ($row = $all_kelas->fetch_assoc()): ?>

                            <tr>
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $row['nama_kelas'] ?></td>
                                <td class="text-center">
                                    <a href="edit-kelas.php?id=<?php echo $row['id_kelas'] ?>" class="btn btn-sm btn-primary">EDIT</a>
                                    <a href="delete-kelas.php?id=<?php echo $row['id_kelas'] ?>" class="btn btn-sm btn-danger">HAPUS</a>
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