<?php
<<<<<<< HEAD

=======
>>>>>>> c976bcdd5cdeb1a638f8733afe5bf260142cde2b
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
