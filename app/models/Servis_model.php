<?php
class Servis_model
{
    private $db;
    private $table = 'servis';

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllServis()
    {
        $this->db->query("SELECT * FROM {$this->table}");
        $this->db->execute();
        return $this->db->resultSet();
    }
}
