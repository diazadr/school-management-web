<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Sekolah</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
</head>
<body>
<div class="text-center mb-5">
        <h1 class="display-4 font-weight-bold">Sistem Manajemen Sekolah</h1>
        <p class="lead">Mengelola data guru, kelas, pelajaran, dan siswa dengan mudah</p>
        <hr class="my-4">
    </div>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-3">
            <div class="card text-white bg-primary mb-3">
                <div class="card-header">Pengajaran</div>
                <div class="card-body">
                    <h5 class="card-title">Total Pengajaran</h5>
                    <p class="card-text">Informasi tentang jumlah pengajaran yang tersedia.</p>
                    <a href="pengajaran/index-pengajaran.php" class="btn btn-light">Lihat Detail</a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-white bg-success mb-3">
                <div class="card-header">Guru</div>
                <div class="card-body">
                    <h5 class="card-title">Total Guru</h5>
                    <p class="card-text">Informasi tentang jumlah guru yang terdaftar.</p>
                    <a href="guru/index-guru.php" class="btn btn-light">Lihat Detail</a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-white bg-warning mb-3">
                <div class="card-header">Kelas</div>
                <div class="card-body">
                    <h5 class="card-title">Total Kelas</h5>
                    <p class="card-text">Informasi tentang jumlah kelas yang ada.</p>
                    <a href="kelas/index-kelas.php" class="btn btn-light">Lihat Detail</a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-white bg-danger mb-3">
                <div class="card-header">Mata Pelajaran</div>
                <div class="card-body">
                    <h5 class="card-title">Total Mapel</h5>
                    <p class="card-text">Informasi tentang mata pelajaran yang diajarkan.</p>
                    <a href="mapel/index-mapel.php" class="btn btn-light">Lihat Detail</a>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>
