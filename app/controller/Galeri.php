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

    public function createFoto()
    {
        if ($this->model("Galeri_model")->tambahFoto($_POST) > 0) {
            Flasher::setFlash('Success', 'Foto Uploaded', 'success');
            header("Location: " . BASEURL . "/galeri");
            exit;
        } else {
            Flasher::setFlash('Failed', 'Upload Failed', 'error');
            header("Location: " . BASEURL . "/galeri");
            exit;
        }
    }
    public function createVideo()
    {
        if ($this->model("Galeri_model")->tambahVideo($_POST) > 0) {
            Flasher::setFlash('Success', 'Video Uploaded', 'success');
            header("Location: " . BASEURL . "/galeri");
            exit;
        } else {
            Flasher::setFlash('Failed', 'Upload Failed', 'error');
            header("Location: " . BASEURL . "/galeri");
            exit;
        }
    }

    public function delete($id)
    {
        if ($this->model("Galeri_model")->deleteGaleri($id) > 0) {
            Flasher::setFlash('Success', 'Galeri Deleted', 'success');
            header("Location: " . BASEURL . "/galeri");
            exit;
        } else {
            Flasher::setFlash('Failed', 'Delete Galeri', 'error');
            header("Location: " . BASEURL . "/galeri");
            exit;
        }
    }
}
