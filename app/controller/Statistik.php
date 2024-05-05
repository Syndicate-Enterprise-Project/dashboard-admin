<?php
class Statistik extends Controller
{
    public function index()
    {
        $statistik = $this->model('Penjualan_model')->getAllPenjualan();
        $tanggal = [];
        foreach ($statistik as $data) {
            $dua_digit_pertama = substr($data['ID_penjualan'], 5, 2);
            $tanggal[] = $dua_digit_pertama;
        }
        $data['judul'] = "Statistik";
        $data['tanggal'] = htmlspecialchars(json_encode(array_count_values($tanggal)));
        $this->view('dashboard/layouts/header', $data);
        $this->view('dashboard/layouts/sidebar');
        $this->view('dashboard/Statistik/index', $data);
        $this->view('templates/footer');
    }
}
