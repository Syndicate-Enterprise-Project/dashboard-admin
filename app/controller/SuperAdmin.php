<?php
class SuperAdmin extends Controller
{
    public function __construct()
    {
        Authenticate::superAdmin();
    }

    public function users_account()
    {
        $data['judul'] = "Users Account";
        $data['accounts'] = $this->model('User_model')->getAllUser();
        $this->view('dashboard/layouts/header', $data);
        $this->view('dashboard/layouts/sidebar');
        $this->view('dashboard/super admin/user account', $data);
        $this->view('templates/footer');
    }

    public function create()
    {
        if ($this->model('User_model')->tambahUser($_POST) > 0) {
            Flasher::setFlash('Success', ' Create Account', 'success');
            header("Location: " . BASEURL . "/superadmin/users_account");
            exit;
        } else {
            Flasher::setFlash('Failed', ' Create Account', 'error');
            header("Location: " . BASEURL . "/superadmin/users_account");
            exit;
        }
    }

    public function delete($id)
    {
        if ($this->model('Post_model')->deleteUserPost($id) >= 0) {
            if ($this->model('User_model')->deleteAccount($id) > 0) {
                Flasher::setFlash('Success', ' Account Deleted', 'success');
                header("Location: " . BASEURL . "/superadmin/users_account");
                exit;
            } else {
                Flasher::setFlash('Failed', ' Delete Category', 'error');
                header("Location: " . BASEURL . "/superadmin/users_account");
                exit;
            }
        } else {
            Flasher::setFlash('Failed', ' Delete User Posts', 'error');
            header("Location: " . BASEURL . "/superadmin/users_account");
            exit;
        }
    }

    public function update()
    {
        if ($this->model('User_model')->changeAccount($_POST) > 0) {
            Flasher::setFlash('Success', ' Account Updated', 'success');
            header("Location: " . BASEURL . "/superadmin/users_account");
            exit;
        } else {
            Flasher::setFlash('Failed', ' Update Account', 'error');
            header("Location: " . BASEURL . "/superadmin/users_account");
            exit;
        }
    }

    public function getUbah()
    {
        echo json_encode($this->model('User_model')->getUserById($_POST['id']));
    }
}
