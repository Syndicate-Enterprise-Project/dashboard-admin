<?php
<<<<<<< HEAD

=======
>>>>>>> c976bcdd5cdeb1a638f8733afe5bf260142cde2b
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
<<<<<<< HEAD

    public function getAllPenjualanByMetode()
    {
        $this->db->query("SELECT jenis_pembayaran FROM {$this->table}");
        $this->db->execute();
        return $this->db->resultSet();
    }

    public function getCombinedData()
    {
        $this->db->query("SELECT m.ID_mobil, m.nama_mobil, m.tipe_mobil, m.tahun_mobil, m.mesin_mobil, m.transmisi_mobil, m.tenaga_mobil, m.bb_mobil, m.penggerak_mobil, m.warna_mobil, m.harga_mobil, m.gambar_mobil, p.ID_penjualan, p.tgl_penjualan, p.tgl_pemesanan, p.nama, p.warna, p.harga, p.jenis_pembayaran FROM mobil m INNER JOIN penjualan p ON m.ID_mobil");
        $this->db->execute();
        return $this->db->resultSet();
    }

    public function downloadCsv(){
        $datas = $this->getCombinedData();
        $csv_file = "Laporan Penjualan.csv";
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
=======
>>>>>>> c976bcdd5cdeb1a638f8733afe5bf260142cde2b
}
