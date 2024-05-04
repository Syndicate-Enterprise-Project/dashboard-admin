<?php
class Mobil extends Controller
{
    public function index()
    {
        $data['judul'] = "Mobil";
        $data['mobil'] = $this->model('Mobil_model')->getAllMobil();
        $this->view('dashboard/layouts/header', $data);
        $this->view('dashboard/layouts/sidebar');
        $this->view('dashboard/Mobil/read', $data);
        $this->view('templates/footer');
    }

    public function mobil_create()
    {
        $data['judul'] = "Create Mobil";
        $this->view('dashboard/layouts/header', $data);
        $this->view('dashboard/layouts/sidebar');
        $this->view('dashboard/Mobil/create', $data);
        $this->view('templates/footer');
    }

    public function create()
    {
        if ($this->model("Mobil_model")->tambahMobil($_POST) > 0) {
            Flasher::setFlash('Success', 'Mobil Uploaded', 'success');
            header("Location: " . BASEURL . "/mobil");
            exit;
        } else {
            Flasher::setFlash('Failed', 'Upload Failed', 'danger');
            header("Location: " . BASEURL . "/mobil");
            exit;
        }
    }
}
