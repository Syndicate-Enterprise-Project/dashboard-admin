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

    public function getMobilById($id)
    {
        $this->db->query("SELECT * FROM {$this->table} WHERE ID_mobil = $id");
        $this->db->execute();
        return $this->db->executeOneColumn();
    }

    public function tambahMobil($data)
    {
        $data["image"] = !$_FILES['image']['name'] == '' ? $this->image_handler() : '';
        $this->db->query("INSERT INTO {$this->table} VALUES ('',?,?,?,?,?,?,?,?,?,?,?)");
        $this->db->bind([$data['nama'], $data['tipe'], $data['tahun'], $data['mesin'], $data['transmisi'], $data['tenaga'], $data['bb'], $data['penggerak'], $data['warna'], $data['harga'], $data['image']]);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function updateMobil($data)
    {
        $data['image'] = $_FILES['image']['name'] == '' ? $data['oldImage'] : $this->image_handler();
        if ($data['image'] !== $data['oldImage']) {
            unlink("C:/xampp/htdocs/awdd/public/img/upload/" . $data['oldImage']);
        }
        $this->db->query("UPDATE {$this->table} SET nama_mobil = ?, tipe_mobil = ?, tahun_mobil = ?, mesin_mobil = ?, transmisi_mobil = ?, tenaga_mobil = ?, bb_mobil = ?, penggerak_mobil = ?, warna_mobil = ?, harga_mobil = ?, gambar_mobil = ? WHERE ID_mobil = ?");
        $this->db->bind([$data['nama'], $data['tipe'], $data['tahun'], $data['mesin'], $data['transmisi'], $data['tenaga'], $data['bb'], $data['penggerak'], $data['warna'], $data['harga'], $data['image'], $data['id']]);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function deleteMobil($id)
    {
        $this->db->query("DELETE FROM {$this->table} WHERE ID_mobil = $id");
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
            return header('Location: ' . BASEURL . '/mobil');
        }
        if ($ukuranFile >= 5000000) {
            Flasher::setFlash("Failed", "Image size exceeds 5 mb", "error");
            return header("Location: " . BASEURL . "/mobil");
        }

        $namaFileBaru = uniqid() . "." . $ektensiGambar;
        move_uploaded_file($locationfile, "C:/xampp/htdocs/awdd/public/img/upload/" . $namaFileBaru);
        return $namaFileBaru;
    }
}
