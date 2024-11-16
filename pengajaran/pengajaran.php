<?php

class Pengajaran
{
    private $db;
    private $table = 'guru_mapel_kelas';

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function addPengajaran($id_guru, $id_mapel, $id_kelas)
    {
        $query = "INSERT INTO {$this->table} (id_guru, id_mapel, id_kelas) VALUES (?, ?, ?)";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("iii", $id_guru, $id_mapel, $id_kelas);
        return $stmt->execute();
    }

    public function indexPengajaran()
    {
        $query = "SELECT guru_mapel_kelas.id, guru.nama_guru, mapel.nama_mapel, kelas.nama_kelas
                  FROM {$this->table}
                  JOIN guru ON guru_mapel_kelas.id_guru = guru.id_guru
                  JOIN mapel ON guru_mapel_kelas.id_mapel = mapel.id_mapel
                  JOIN kelas ON guru_mapel_kelas.id_kelas = kelas.id_kelas";
        $result = $this->db->query($query);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function showPengajaran($id)
    {
        $query = "SELECT * FROM {$this->table} WHERE id = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }

    public function updatePengajaran($id, $id_guru, $id_mapel, $id_kelas)
    {
        $query = "UPDATE {$this->table} SET id_guru = ?, id_mapel = ?, id_kelas = ? WHERE id = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("iiii", $id_guru, $id_mapel, $id_kelas, $id);
        return $stmt->execute();
    }

    public function deletePengajaran($id)
    {
        $query = "DELETE FROM {$this->table} WHERE id = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("i", $id);
        return $stmt->execute();
    }
}

$db = new Database();
$connection = $db->getConnection();
$pengajaran = new Pengajaran($connection);
$all_pengajaran = $pengajaran->indexPengajaran();

