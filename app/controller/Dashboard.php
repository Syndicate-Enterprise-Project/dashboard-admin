<?php
class Dashboard extends Controller
{
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
}
