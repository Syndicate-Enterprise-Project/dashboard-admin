<?php
class Galeri extends Controller
{
    public function index()
    {
        $data['judul'] = "Galeri";
        $data['galeri'] = $this->model('Galeri_model')->getAllGaleri();
        $this->view('dashboard/layouts/header', $data);
        $this->view('dashboard/layouts/sidebar');
        $this->view('dashboard/galeri/read', $data);
        $this->view('templates/footer');
    }
}
