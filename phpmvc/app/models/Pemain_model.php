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
}