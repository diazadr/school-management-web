<?php

class Mapel
{
    private $db;
    private $table = 'mapel';

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function addMapel($nama_mapel)
    {
        $query = "INSERT INTO {$this->table} (nama_mapel) VALUES (?)";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("s", $nama_mapel);
        return $stmt->execute();
    }

    public function indexMapel()
    {
        $query = "SELECT * FROM {$this->table}";
        return $this->db->query($query);
    }

    public function showMapel($id_mapel)
    {
        $query = "SELECT * FROM {$this->table} WHERE id_mapel = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("i", $id_mapel);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }

    public function updateMapel($id_mapel, $nama_mapel)
    {
        $query = "UPDATE {$this->table} SET nama_mapel = ? WHERE id_mapel = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("ss", $nama_mapel, $id_mapel);
        return $stmt->execute();
    }

    public function deleteMapel($id_mapel)
    {
        $query = "DELETE FROM {$this->table} WHERE id_mapel = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("i", $id_mapel);
        return $stmt->execute();
    }
}

$db = new Database();
$connection = $db->getConnection();
$mapel = new mapel($connection);
$all_mapel = $mapel->indexMapel();

