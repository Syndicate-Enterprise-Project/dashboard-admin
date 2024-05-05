<?php
class Account extends Controller
{
    // public function __construct()
    // {
    //     Authenticate::superAdmin();
    // }

    public function account()
    {
        $data['judul'] = "Account";
        $data['accounts'] = $this->model('Pegawai_model')->getAllUser();
        $this->view('dashboard/layouts/header', $data);
        $this->view('dashboard/layouts/sidebar');
        $this->view('dashboard/account/account', $data);
        $this->view('templates/footer');
    }

    public function create()
    {
        if ($this->model('Pegawai_model')->tambahUser($_POST) > 0) {
            Flasher::setFlash('Success', ' Create Account', 'success');
            header("Location: " . BASEURL . "/account/account");
            exit;
        } else {
            Flasher::setFlash('Failed', ' Create Account', 'error');
            header("Location: " . BASEURL . "/account/account");
            exit;
        }
    }

    public function delete($id)
    {
        if ($this->model('Blog_model')->deletePegawaiPost($id) >= 0) {
            if ($this->model('Pegawai_model')->deleteAccount($id) > 0) {
                Flasher::setFlash('Success', ' Account Deleted', 'success');
                header("Location: " . BASEURL . "/account/account");
                exit;
            } else {
                Flasher::setFlash('Failed', ' Delete Account', 'error');
                header("Location: " . BASEURL . "/account/account");
                exit;
            }
        } else {
            Flasher::setFlash('Failed', ' Delete Pegawai Posts', 'error');
            header("Location: " . BASEURL . "/account/account");
            exit;
        }
    }

    public function update()
    {
        if ($this->model('Pegawai_model')->changeAccount($_POST) > 0) {
            Flasher::setFlash('Success', ' Account Updated', 'success');
            header("Location: " . BASEURL . "/account/account");
            exit;
        } else {
            Flasher::setFlash('Failed', ' Update Account', 'error');
            header("Location: " . BASEURL . "/account/account");
            exit;
        }
    }

    public function getUbah()
    {
        echo json_encode($this->model('Pegawai_model')->getUserById($_POST['id']));
    }
}
