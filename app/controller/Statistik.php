<?php
class Statistik extends Controller
{
    public function index()
    {
        $data['judul'] = "Statistik";
        $this->view('dashboard/layouts/header', $data);
        $this->view('dashboard/layouts/sidebar');
        $this->view('dashboard/Statistik/index', $data);
        $this->view('templates/footer');
    }
}