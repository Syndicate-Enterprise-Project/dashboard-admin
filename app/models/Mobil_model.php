<?php
class Mobil_model
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
        if (!empty($_FILES['image']['name'])) {
            $newImage = $this->image_handler();
            if (!$newImage) {
                return false;
            }
            unlink("C:/xampp/htdocs/awdd/public/img/upload/" . $data['oldImage']);
            $data['image'] = $newImage;
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
        if ($ukuranFile >= 2000000) {
            Flasher::setFlash("Failed", "Image size exceeds 5 mb", "error");
            return header("Location: " . BASEURL . "/mobil");
        }

        $namaFileBaru = uniqid() . "." . $ektensiGambar;
        move_uploaded_file($locationfile, "C:/xampp/htdocs/awdd/public/img/upload/" . $namaFileBaru);
        return $namaFileBaru;
    }

    public function downloadCsv()
    {
        $datas = $this->getAllMobil();
        $csv_file = "Daftar Mobil.csv";
        header("Content-Type: text/csv");
        header("Content-Disposition: attachment; filename=\"$csv_file\"");
        $fh = fopen('php://output', 'w');
        $is_column = true;
        if (!empty($datas)) {
            foreach ($datas as $data) {
                if ($is_column) {
                    fputcsv($fh, array_keys($data));
                    $is_column = false;
                }
                fputcsv($fh, array_values($data));
            }
            fclose($fh);
        }
        exit;
    }
}
