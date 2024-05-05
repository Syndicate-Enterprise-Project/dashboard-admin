<?php
class Penjualan_model
{
    private $db;
    private $table = 'penjualan';

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllPenjualan()
    {
        $this->db->query("SELECT ID_penjualan FROM {$this->table}");
        $this->db->execute();
        return $this->db->resultSet();
    }
}
