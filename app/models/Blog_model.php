<?php
class Blog_model extends Controller
{
    private $db;
    private $table = 'blogpost';

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllPost()
    {
        $this->db->query("SELECT * FROM {$this->table}");
        $this->db->execute();
        return $this->db->resultSet();
    }
}
