<?php

class Langganan_model
{
    private $db;
    private $table = 'langganan';

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllLangganan()
    {
        $this->db->query("SELECT * FROM {$this->table}");
        $this->db->execute();
        return $this->db->resultSet();;
    }
}
