<?php
class Galeri_model
{
    private $db;
    private $table = 'galeri';

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllGaleri()
    {
        $this->db->query("SELECT * FROM {$this->table}");
        $this->db->execute();
        return $this->db->resultSet();
    }
}
