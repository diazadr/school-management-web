<?php
include_once '../koneksi.php';
include_once 'guru.php';

$db = new Database();
$connection = $db->getConnection();
$guru = new guru($connection);

$id_guru = $_GET['id'];
$guru->deleteGuru($id_guru);
header("Location: index-guru.php");
?>