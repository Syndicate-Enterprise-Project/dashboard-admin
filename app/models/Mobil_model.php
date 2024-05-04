<?php
class Mobil_model extends Controller
{
    private $db;
    private $table = 'mobil';

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllMobil()
    {
        $this->db->query("SELECT * FROM {$this->table}");
        $this->db->execute();
        return $this->db->resultSet();
    }

    public function tambahMobil($data)
    {
        // foreach ($data as $dt) {
        //     if (empty($dt)) {
        //         return $this->db->rowCount();
        //     } else {
        //         return $this->db->rowCount();
        //     }
        //     var_dump($dt);
        // }
        // exit;
        $data["image"] = !$_FILES['image']['name'] == '' ? $this->image_handler() : '';
        $this->db->query("INSERT INTO {$this->table} VALUES ('',?,?,?,?,?,?,?,?,?,?,?)");
        $this->db->bind([$data['nama'], $data['tipe'], $data['tahun'], $data['mesin'], $data['transmisi'], $data['tenaga'], $data['bb'], $data['penggerak'], $data['warna'], $data['harga'], $data['image']]);
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
            return header('Location: ' . BASEURL . '/dashboard/posts');
        }
        if ($ukuranFile >= 5000000) {
            Flasher::setFlash("Failed", "Image size exceeds 5 mb", "error");
            return header("Location: " . BASEURL . "/dashboard/posts");
        }

        $namaFileBaru = uniqid() . "." . $ektensiGambar;
        move_uploaded_file($locationfile, "C:/xampp/htdocs/minpro 3/public/img/upload/" . $namaFileBaru);
        return $namaFileBaru;
    }
}
