<?php
<<<<<<< HEAD

=======
>>>>>>> c976bcdd5cdeb1a638f8733afe5bf260142cde2b
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
        $users = $this->model('Pegawai_model')->getAllUser();
        foreach ($users as $user) {
            if ($_POST['email'] == $user['email_pegawai'] && password_verify($_POST['password'], $user['password_pegawai'])) {
                $_SESSION['user_auth'] = [
                    'id' => $user['ID_pegawai'],
                    'name' => $user['nama_pegawai'],
                    'email' => $user['email_pegawai']
                ];
                if (isset($_POST['remember'])) {
                    setcookie('id', $user['ID_pegawai'], time() + (7 * 24 * 60 * 60));
                    setcookie('key', hash('sha1', $user['nama_pegawai']), time() + (7 * 24 * 60 * 60));
                }
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
