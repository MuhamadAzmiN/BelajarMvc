<?php

class Mahasiswa_model {
    // database handler
    private $table = 'mahasiswa';
    private $db;


    public function __construct(){
        $this->db = new Database;
    }

    public function getAllMahasiswa(){
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getMahasiswaByid($id) {
        $this->db->query("SELECT * FROM " . $this->table . " WHERE id=:id");

        $this->db->bind('id', $id);
        return $this->db->single();

    }
}