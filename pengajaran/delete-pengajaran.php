<?php
include_once '../koneksi.php';
include_once 'pengajaran.php';

$db = new Database();
$connection = $db->getConnection();
$pengajaran = new pengajaran($connection);

$id = $_GET['id'];
$pengajaran->deletePengajaran($id);
header("Location: index-pengajaran.php");
?>