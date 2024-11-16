<?php

class Kelas
{
    private $db;
    private $table = 'kelas';

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function addKelas($nama_kelas)
    {
        $query = "INSERT INTO {$this->table} (nama_kelas) VALUES (?)";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("s", $nama_kelas);
        return $stmt->execute();
    }

    public function indexKelas()
    {
        $query = "SELECT * FROM {$this->table}";
        return $this->db->query($query);
    }

    public function showKelas($id_kelas)
    {
        $query = "SELECT * FROM {$this->table} WHERE id_kelas = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("i", $id_kelas);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }

    public function updateKelas($id_kelas, $nama_kelas)
{
    $query = "UPDATE {$this->table} SET nama_kelas = ? WHERE id_kelas = ?";
    $stmt = $this->db->prepare($query);
    $stmt->bind_param("ss", $nama_kelas, $id_kelas);
    return $stmt->execute();
}

    public function deleteKelas($id_kelas)
    {
        $query = "DELETE FROM {$this->table} WHERE id_kelas = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("i", $id_kelas);
        return $stmt->execute();
    }
}

$db = new Database();
$connection = $db->getConnection();
$kelas = new kelas($connection);
$all_kelas = $kelas->indexKelas();

