<?php

class Guru
{
    private $db;
    private $table = 'guru';

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function addGuru($nama_guru)
    {
        $query = "INSERT INTO {$this->table} (nama_guru) VALUES (?)";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("s", $nama_guru);
        return $stmt->execute();
    }

    public function indexGuru()
    {
        $query = "SELECT * FROM {$this->table}";
        return $this->db->query($query);
    }

    public function showGuru($id_guru)
    {
        $query = "SELECT * FROM {$this->table} WHERE id_guru = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("i", $id_guru);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }

    public function updateGuru($id_guru, $nama_guru)
    {
        $query = "UPDATE {$this->table} SET nama_guru = ? WHERE id_guru = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("ss", $nama_guru, $id_guru);
        return $stmt->execute();
    }

    public function deleteGuru($id_guru)
    {
        $query = "DELETE FROM {$this->table} WHERE id_guru = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("i", $id_guru);
        return $stmt->execute();
    }
}

$db = new Database();
$connection = $db->getConnection();
$guru = new guru($connection);
$all_guru = $guru->indexGuru();

