<?php
class Mobil extends Controller
{
    public function index()
    {
        $data['judul'] = "Mobil";
        $this->view('dashboard/layouts/header', $data);
        $this->view('dashboard/layouts/sidebar');
        $this->view('dashboard/Mobil/read', $data);
        $this->view('templates/footer');
    }
}