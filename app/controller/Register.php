<?php
class Register extends Controller
{
    public function index()
    {
        $data['judul'] = 'Register';
        $this->view('templates/header', $data);
        $this->view('register/index');
        $this->view('templates/footer');
    }

    public function tambah()
    {
        if ($this->model("User_model")->tambahUser($_POST) > 0) {
            Flasher::setFlash('Success', 'Register', 'success');
            header("Location: " . BASEURL . "/login");
            exit;
        } else {
            Flasher::setFlash('Failed', 'Register', 'danger');
            header("Location: " . BASEURL . "/register");
            exit;
        }
    }
}
