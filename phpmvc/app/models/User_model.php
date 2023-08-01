<?php

class User_model {
    private $table = 'users';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }
    
    public function getAllUser($username)
    {
        $this->db->query("SELECT * FROM $this->table where username = :username");
        $this->db->bind(':username', $username);
        return $this->db->single();
    }
}