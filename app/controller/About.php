<?php
class About extends Controller
{
    public function index($nama = 'novan', $pekerjaan = 'mahasiswa', $umur = 19)
    {
        $data['nama'] = $nama;
        $data['pekerjaan'] = $pekerjaan;
        $data['umur'] = $umur;
        $data['judul'] = 'About Me';
        $this->view('templates/Header', $data);
        $this->view('about/index', $data);
        $this->view('templates/Footer');
    }
    // public function page()
    // {
    //     $data['judul'] = 'Page';
    //     $this->view('templates/Header', ['About']);
    //     $this->view('about/page');
    //     $this->view('templates/Footer');
    // }
}
