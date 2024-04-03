<?php
class Category_model
{
    private $db;
    private $table = 'categories';

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllCategory()
    {
        $this->db->query("SELECT * FROM {$this->table}");
        $this->db->execute();
        return $this->db->resultSet();
    }

    public function getCategoryById($id)
    {
        $this->db->query("SELECT * FROM {$this->table} WHERE id = $id");
        $this->db->execute();
        return $this->db->executeOneColumn();
    }

    public function createCategory($data)
    {
        if (!$data['name'] == '' || !preg_match('/\s/', $data['name'])) {
            $this->db->query("INSERT INTO {$this->table} VALUES ('',?)");
            $this->db->bind([$data['name']]);
            $this->db->execute();
            return $this->db->rowCount();
        }
        return $this->db->rowCount();
    }

    public function deleteCategory($id)
    {
        $this->db->query("DELETE FROM {$this->table} WHERE id = $id");
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function updateCategory($data)
    {
        if (!empty($data['name'])) {
            $this->db->query("UPDATE categories SET name = ? WHERE id = ?");
            $this->db->bind([$data['name'], $data['id']]);
            $this->db->execute();
            return $this->db->rowCount();
        }
        return $this->db->rowCount();
    }
}
