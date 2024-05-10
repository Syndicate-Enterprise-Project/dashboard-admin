<?php

class Blog_model
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

    public function getPostById($id)
    {
        $this->db->query("SELECT * FROM {$this->table} WHERE ID_blog = $id");
        $this->db->execute();
        return $this->db->executeOneColumn();
    }

    public function tambahPost($data)
    {
        $data["image"] = !$_FILES['image']['name'] == '' ? $this->image_handler() : '';
        $this->db->query("INSERT INTO {$this->table} VALUES ('',?,?,?,?,current_timestamp(),?)");
        $this->db->bind([$data['judul'], $data['kategori'], $data['body'], $data['image'], $data['id']]);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function updatePost($data)
    {
        if (!empty($_FILES['image']['name'])) {
            $newImage = $this->image_handler();
            if (!$newImage) {
                return false;
            }
            unlink("C:/xampp/htdocs/app3-admin-admin/public/img/upload/" . $data['oldImage']);
            $data['image'] = $newImage;
        }
        $this->db->query("UPDATE {$this->table} SET judul_blog = ?, kategori_blog = ?, isi_blog = ?, gambar_blog = ? WHERE ID_blog = ?");
        $this->db->bind([$data['judul'], $data['kategori'], $data['body'], $data['image'], $data['id']]);
        $this->db->execute();
        return $this->db->rowCount();
    }
    
    public function deletePost($id)
    {
        $data = $this->getPostById($id);
        unlink("C:/xampp/htdocs/app3-admin-admin/public/img/upload/" . $data['gambar_blog']);
        $this->db->query("DELETE FROM {$this->table} WHERE ID_blog = $id");
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function deletePegawaiPost($id)
    {
        $this->db->query("DELETE FROM {$this->table} WHERE ID_pegawai = $id");
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function image_handler()
    {
        $namaFile = $_FILES["image"]["name"];
        $ukuranFile = $_FILES["image"]["size"];
        $locationfile = $_FILES["image"]["tmp_name"];
        $ekstensiGambarValid = ["jpeg", "jpg", "png"];
        $ektensiGambar = explode(".", $namaFile);
        $ektensiGambar = strtolower(end($ektensiGambar));

        if (!in_array($ektensiGambar, $ekstensiGambarValid)) {
            Flasher::setFlash("Failed", "Invalid image extension", "error");
            return header('Location: ' . BASEURL . '/blog');
        }
        if ($ukuranFile >= 5000000) {
            Flasher::setFlash("Failed", "Image size exceeds 5 mb", "error");
            return header("Location: " . BASEURL . "/blog");
        }

        $namaFileBaru = uniqid() . "." . $ektensiGambar;
        move_uploaded_file($locationfile, "C:/xampp/htdocs/app3-admin/public/img/upload/" . $namaFileBaru);
        return $namaFileBaru;
    }
}
