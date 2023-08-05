<?php

class Pertandingan_model {
    private $table = 'jadwal';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllPertandingan()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function tambahDataPertandingan()
    {
        $query = "INSERT INTO jadwal
                    VALUES
                  ('', :teamPertama, :teamKedua, :tempat, :tanggal, :waktu)";
        
        $this->db->query($query);
        $this->db->bind('teamPertama', $_POST['teamPertama']);
        $this->db->bind('teamKedua', $_POST['teamKedua']);
        $this->db->bind('tempat', $_POST['tempat']);
        $this->db->bind('tanggal', $_POST['tanggal']);
        $this->db->bind('waktu', $_POST['waktu']);
    
        $this->db->execute();
    
        return $this->db->rowCount();
    }

    public function hapusDataPertandingan($id)
    {
        $query = "DELETE FROM jadwal WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);
    
        $this->db->execute();
    
        return $this->db->rowCount();
    }

    public function cariDataPertandingan()
    {
        $keyword = $_POST['keyword'];
        $query = "SELECT * FROM jadwal WHERE teamPertama LIKE :keyword OR teamKedua LIKE :keyword OR tempat LIKE :keyword OR tanggal LIKE :keyword";
        $this->db->query($query);
        $this->db->bind('keyword', "%$keyword%");
    
        return $this->db->resultSet();
    }
    
}