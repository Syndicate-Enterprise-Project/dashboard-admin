<?php
class Login extends Controller
{
    // public function __construct()
    // {
    //     Authenticate::guest();
    // }
    public function index()
    {
        $data['judul'] = 'Login';
        $this->view('templates/header', $data);
        $this->view('login/index');
        $this->view('templates/footer');
    }

    public function signout()
    {
        unset($_SESSION['user_auth']);
        header("Location: " . BASEURL . "/login");
    }

    public function authenticate()
    {
        if (!$_SERVER['REQUEST_METHOD'] == "POST") {
            header('Location: ' . BASEURL . '/login');
            exit();
        }
        $users = $this->model('User_model')->getAllUser();
        foreach ($users as $user) {
            if ($_POST['email'] == $user['email'] && password_verify($_POST['password'], $user['password'])) {
                $_SESSION['user_auth'] = [
                    'id' => $user['id'],
                    'name' => $user['name'],
                    'username' => $user['username'],
                    'email' => $user['email'],
                    'is_admin' => $user['is_admin']
                ];
                Flasher::setFlash("Success", "Login", "success");
                header('Location: ' . BASEURL . '/dashboard');
                exit();
            }
        }
        Flasher::setFlash("Login Failed", "password / username is incorrect", "error");
        header('Location: ' . BASEURL . '/login');
        exit();
    }
}
