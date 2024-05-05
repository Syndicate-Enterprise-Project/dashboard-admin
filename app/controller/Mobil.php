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
            Flasher::setFlash('Failed', 'Upload Failed', 'error');
            header("Location: " . BASEURL . "/mobil");
            exit;
        }
    }

    public function mobil_edit($id)
    {
        $data['judul'] = 'Edit Mobil';
        $data['selectbox'] = [
            "tipe" => ['SUV Kecil', 'SUV Medium', 'SUV Besar'],
            "transmisi" => ['CVT', 'DCT', 'Otomatis'],
            "penggerak" => ['(4x2) FWD', '(4x2) RWD', '(4x4) AWD'],
            "bb" => ['Bensin', 'Listrik', 'Hybrid']
        ];
        $data['mobil'] = $this->model('Mobil_model')->getMobilById($id);
        $this->view('dashboard/layouts/header', $data);
        $this->view('dashboard/layouts/sidebar');
        $this->view('dashboard/Mobil/update', $data);
        $this->view('templates/footer');
    }

    public function update()
    {
        if ($this->model("Mobil_model")->updateMobil($_POST) > 0) {
            Flasher::setFlash('Success', 'Mobil Updated', 'success');
            header("Location: " . BASEURL . "/mobil");
            exit;
        } else {
            Flasher::setFlash('Failed', 'Update Mobil', 'error');
            header("Location: " . BASEURL . "/mobil");
            exit;
        }
    }

    public function delete($id)
    {
        if ($this->model("Mobil_model")->deleteMobil($id) > 0) {
            Flasher::setFlash('Success', 'Mobil Deleted', 'success');
            header("Location: " . BASEURL . "/mobil");
            exit;
        } else {
            Flasher::setFlash('Failed', 'Delete Mobil', 'error');
            header("Location: " . BASEURL . "/mobil");
            exit;
        }
    }
}
