<?php
class Dashboard extends Controller
{
<<<<<<< HEAD
    public function __construct()
    {
        Authenticate::auth();
    }

    public function index()
    {
        $mobilobjek = $this->model("Mobil_model");
        $mobil = $mobilobjek->getAllMobil();
        $namaMobil = [];
        foreach ($mobil as $data) {
            $namaMobil[] = $data['nama_mobil'];
        }
        $metode = $this->model("Penjualan_model")->getAllPenjualanByMetode();
        $metodePembayaran = [];
        foreach ($metode as $data) {
            $metodePembayaran[] = $data['jenis_pembayaran'];
        }
        $data['mobil'] = count($mobilobjek->getAllMobil());
        $data['blog'] = count($this->model("Blog_model")->getAllPost());
        $data['servis'] = count($this->model("Servis_model")->getAllServis());
        $data['judul'] = 'Dashboard';
        $data['namamobil'] = array_unique($namaMobil);
        $data['datamobil'] = $namaMobil;
        $data['tipepembayaran'] = array_unique($metodePembayaran);
        $data['datatipepembayaran'] = htmlspecialchars(json_encode(array_count_values($metodePembayaran)));

        $this->view('dashboard/layouts/header', $data);
        $this->view('dashboard/layouts/sidebar');
        $this->view('dashboard/index', $data);
        $this->view('templates/footer');
    }

    public function csv()
    {
        $this->model("Penjualan_model")->downloadCsv();
    }
=======
    // public function __construct()
    // {
    //     Authenticate::auth();
    // }

    public function index()
    {
        $data['mobil'] = count($this->model("Mobil_model")->getAllMobil());
        $data['blog'] = count($this->model("Blog_model")->getAllPost());
        $data['servis'] = count($this->model("Servis_model")->getAllServis());
        $data['judul'] = 'Dashboard';
        $this->view('dashboard/layouts/header', $data);
        $this->view('dashboard/layouts/sidebar');
        $this->view('dashboard/index',$data);
        $this->view('templates/footer');
    }
>>>>>>> c976bcdd5cdeb1a638f8733afe5bf260142cde2b
}
