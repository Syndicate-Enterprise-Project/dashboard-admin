<?php
class Dashboard extends Controller
{
    // public function __construct()
    // {
    //     Authenticate::auth();
    // }

    public function index()
    {
        $data['judul'] = 'Dashboard';
        $this->view('dashboard/layouts/header', $data);
        $this->view('dashboard/layouts/sidebar');
        $this->view('dashboard/index');
        $this->view('templates/footer');
    }
}
