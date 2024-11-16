<?php
include_once '../koneksi.php';
include_once 'kelas.php';

$db = new Database();
$connection = $db->getConnection();
$kelas = new kelas($connection);

$id_kelas = $_GET['id'];
$kelas->deleteKelas($id_kelas);
header("Location: index-kelas.php");
?>