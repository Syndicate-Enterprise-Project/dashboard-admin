<?php
class Tentang extends Controller
{
    public function visi_misi()
    {
        $data['judul'] = 'Visi & Misi';
        $this->view('templates/Header', $data);
        $this->view('tentang/visi_misi');
        $this->view('templates/Footer');
    }

    public function struktur_organisasi()
    {
        $data['judul'] = 'Struktur Organisasi';
        $this->view('templates/Header', $data);
        $this->view('tentang/struktur_organisasi');
        $this->view('templates/Footer');
    }
}
