<?php
<<<<<<< HEAD

=======
>>>>>>> c976bcdd5cdeb1a638f8733afe5bf260142cde2b
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

<<<<<<< HEAD
    public function getAllGaleriById($id)
    {
        $this->db->query("SELECT * FROM {$this->table} WHERE ID_galeri = $id");
        $this->db->execute();
        return $this->db->resultSet();
    }

=======
>>>>>>> c976bcdd5cdeb1a638f8733afe5bf260142cde2b
    public function tambahFoto($data)
    {
        $data["foto"] = $this->image_handler();
        $this->db->query("INSERT INTO {$this->table} VALUES ('',?,?)");
        $this->db->bind([$data['foto'], "-"]);
        $this->db->execute();
        return $this->db->rowCount();
    }
    public function tambahVideo($data)
    {
        $this->db->query("INSERT INTO {$this->table} VALUES ('',?,?)");
        $this->db->bind(["-", $data['video']]);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function deleteGaleri($id)
    {
<<<<<<< HEAD
        $data = $this->getAllGaleriById($id);
        unlink("C:/xampp/htdocs/app3-admin/public/img/upload/" . $data['foto']);
=======
>>>>>>> c976bcdd5cdeb1a638f8733afe5bf260142cde2b
        $this->db->query("DELETE FROM galeri WHERE ID_galeri = $id");
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function image_handler()
    {
        $namaFile = $_FILES["foto"]["name"];
        $ukuranFile = $_FILES["foto"]["size"];
        $locationfile = $_FILES["foto"]["tmp_name"];
        $ekstensiGambarValid = ["jpeg", "jpg", "png"];
        $ektensiGambar = explode(".", $namaFile);
        $ektensiGambar = strtolower(end($ektensiGambar));

        if (!in_array($ektensiGambar, $ekstensiGambarValid)) {
            Flasher::setFlash("Failed", "Invalid image extension", "error");
            return header('Location: ' . BASEURL . '/galeri');
        }
        if ($ukuranFile >= 5000000) {
            Flasher::setFlash("Failed", "Image size exceeds 5 mb", "error");
            return header("Location: " . BASEURL . "/galeri");
        }

        $namaFileBaru = uniqid() . "." . $ektensiGambar;
<<<<<<< HEAD
        move_uploaded_file($locationfile, "C:/xampp/htdocs/app3-admin/public/img/upload/" . $namaFileBaru);
=======
        move_uploaded_file($locationfile, "C:/xampp/htdocs/awdd/public/img/upload/" . $namaFileBaru);
>>>>>>> c976bcdd5cdeb1a638f8733afe5bf260142cde2b
        return $namaFileBaru;
    }
}
