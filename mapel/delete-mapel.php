<?php
include_once '../koneksi.php';
include_once 'mapel.php';

$db = new Database();
$connection = $db->getConnection();
$mapel = new mapel($connection);

$id_mapel = $_GET['id'];
$mapel->deleteMapel($id_mapel);
header("Location: index-mapel.php");
?>