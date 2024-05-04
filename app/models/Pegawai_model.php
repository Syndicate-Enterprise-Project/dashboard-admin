<?php
class Pegawai_model
{
    private $db;
    private $table = 'pegawai';

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllUser()
    {
        $this->db->query("SELECT * FROM " . $this->table);
        $this->db->execute();
        return $this->db->resultSet();
    }

    public function getUserById($id)
    {
        $this->db->query("SELECT * FROM {$this->table} WHERE id = ?");
        $this->db->bind([$id]);
        return $this->db->executeOneColumn();
    }

    public function tambahUser($data)
    {
        if (!empty($data['name']) and !empty($data['username']) and !empty($data['email']) and !empty($data['password'])) {
            $password = password_hash($data['password'], PASSWORD_DEFAULT);
            $this->db->query("INSERT INTO {$this->table} VALUES ('',?,?,?,?,?)");
            $this->db->bind([$data['name'], $data['username'], $data['email'], $password, $data['role']]);
            $this->db->execute();
            return $this->db->rowCount();
        }
        return $this->db->rowCount();
    }

    public function deleteAccount($id)
    {
        $this->db->query("DELETE FROM {$this->table} WHERE id = $id");
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function changeAccount($data)
    {
        // var_dump($data);
        // exit();
        $id = intval($data['id']);
        $role = intval($data['role']);
        if (!empty($data['name']) and !empty($data['username']) and !empty($data['email'])) {
            $this->db->query("UPDATE {$this->table} SET name = ?, username = ?, email = ?, is_admin = ? WHERE id = ?");
            $this->db->bind([$data['name'], $data['username'], $data['email'], $role, $id]);
            $this->db->execute();
            return $this->db->rowCount();
        }
        return $this->db->rowCount();
    }
}
