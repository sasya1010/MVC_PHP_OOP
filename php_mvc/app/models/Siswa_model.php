<?php
class Siswa_model {
    private $table = 'siswa';
    private $db;

    public function __construct(){
        $this->db = new Database;
    }

    public function getAllSiswa(){
       $this->db->query('SELECT * FROM ' . $this->table);
       return $this->db->resultSet();
    }

    public function getSiswaById($id){
        $this->db->query('SELECT * FROM '. $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function insertDataSiswa($data){
        $query = "INSERT INTO siswa
                VALUES
                ('', :nama, :nisn, :tgl_lahir, :jp, :email)";
        
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('nisn', $data['nisn']);
        $this->db->bind('tgl_lahir', $data['tgl_lahir']);
        $this->db->bind('jp', $data['jp']);
        $this->db->bind('email', $data['email']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function deleteDataSiswa($id){
        $query = "DELETE FROM siswa WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id );

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function UbahDataSiswa($data)
    {
        $query = "UPDATE siswa SET 
                    nama=:nama,
                    nisn=:nisn,
                    tgl_lahir=:tgl_lahir,
                    jp=:jp,
                    email=:email 
                    WHERE id=:id";
                
        $this->db->query($query);
        $this->db->bind(':nama', $data['nama']);
        $this->db->bind(':nisn', $data['nisn']);
        $this->db->bind(':tgl_lahir', $data['tgl_lahir']);
        $this->db->bind(':jp', $data['jp']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':id', $data['id']);

        $this->db->execute();

        return $this->db->rowCount();
    }
}