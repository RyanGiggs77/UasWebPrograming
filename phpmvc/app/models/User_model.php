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

    public function getAllPemain()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getUserById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id = :id');
        $this->db->bind('id', $id);

        return $this->db->single();
    }

    public function tambahDataUser($data)
    {
        $query = "INSERT INTO users
                    VALUES
                ('', :nama_lengkap, :username, :password, :alamat_email, :usia, 
                :jenis_kelamin, :pekerjaan, :kota, :alamat, :alasan, :role, :foto_profil)";

        $this->db->query($query);
        $this->db->bind('username', $data['username']);
        $this->db->bind('password', password_hash($data['password'], PASSWORD_DEFAULT));
        $this->db->bind('nama_lengkap', $data['nama']);
        $this->db->bind('alamat_email', $data['alamat_email']);
        $this->db->bind('usia', $data['usia']);
        $this->db->bind('jenis_kelamin', $data['jenis_kelamin']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('kota', $data['kota']);
        $this->db->bind('pekerjaan', $data['pekerjaan']);
        $this->db->bind('alasan', $data['alasan']);
        $this->db->bind('role', 'user');

        // Upload dan simpan foto profil
        if (isset($_FILES['foto_profil'])) {
            $file = $_FILES['foto_profil'];
            $uploadPath = 'img/';
            $filename = $file['name'];
            $filetmp = $file['tmp_name'];
            $filePath = $uploadPath . $filename;

            $this->db->bind('foto_profil', $filePath);

            move_uploaded_file($filetmp, $filePath);
        } else {
            $this->db->bind('foto_profil', '');
        }

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusDataUser($id)
    {
        $query = "DELETE FROM users WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function getLatestUser()
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' ORDER BY id DESC LIMIT 3');
        return $this->db->resultSet();
    }

    public function cariDataUser()
    {
        $keyword = $_POST['keyword'];
        $query = "SELECT * FROM users WHERE nama_lengkap LIKE :keyword";
        $this->db->query($query);
        $this->db->bind('keyword', "%$keyword%");
        return $this->db->resultSet();
    }
}