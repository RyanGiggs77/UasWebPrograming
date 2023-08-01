<?php

class Pemain_model {
    private $table = 'pemain';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllPemain()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getLatestPemain()
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' ORDER BY id DESC LIMIT 3');
        return $this->db->resultSet();
    }

    public function tambahDataPemain()
    {
        $query = "INSERT INTO pemain
                    VALUES
                  ('', :nama, :negara, :poin, :rank)";
        
        $this->db->query($query);
        $this->db->bind('nama', $_POST['nama']);
        $this->db->bind('negara', $_POST['negara']);
        $this->db->bind('poin', $_POST['poin']); // Ubah key menjadi 'poin'
        $this->db->bind('rank', $_POST['rank']); // Ubah key menjadi 'rank'
    
        $this->db->execute();
    
        return $this->db->rowCount();
    }
    
    public function hapusDataPemain($id)
    {
        $query = "DELETE FROM pemain WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);
    
        $this->db->execute();
    
        return $this->db->rowCount();
    }
}