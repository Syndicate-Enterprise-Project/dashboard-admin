<?php
class Dashboard extends Controller
{
    // public function __construct()
    // {
    //     Authenticate::auth();
    // }

    public function index()
    {
        $statistik = $this->model('Penjualan_model')->getAllPenjualan();
        $tanggal = [];
        foreach ($statistik as $data) {
            $dua_digit_pertama = substr($data['ID_penjualan'], 5, 2);
            $tanggal[] = $dua_digit_pertama;
        }
        $data['tanggal'] = htmlspecialchars(json_encode(array_count_values($tanggal)));

        $data['judul'] = 'Dashboard';
        $this->view('dashboard/layouts/header', $data);
        $this->view('dashboard/layouts/sidebar');
        $this->view('dashboard/index');
        $this->view('templates/footer');
    }
}
