<?php
class Dashboard extends Controller
{
    public function __construct()
    {
        Authenticate::auth();
    }

    public function index()
    {
        $data['judul'] = 'Dashboard';
        $this->view('dashboard/layouts/header', $data);
        $this->view('dashboard/layouts/sidebar');
        $this->view('dashboard/index');
        $this->view('templates/footer');
    }

    public function posts()
    {
        $data['judul'] = "My Posts";
        $data['posts'] = $this->model('Post_model')->getAllPostByUserId($_SESSION['user_auth']['id']);
        $this->view('dashboard/layouts/header', $data);
        $this->view('dashboard/layouts/sidebar');
        $this->view('dashboard/post/read', $data);
        $this->view('templates/footer');
    }

    public function post_create()
    {
        $data['judul'] = "Create Post";
        $data['categories'] = $this->model("Category_model")->getAllCategory();
        $this->view('dashboard/layouts/header', $data);
        $this->view('dashboard/layouts/sidebar');
        $this->view('dashboard/post/create', $data);
        $this->view('templates/footer');
    }

    public function create()
    {
        if ($this->model("Post_model")->tambahPost($_POST) > 0) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header("Location: " . BASEURL . "/dashboard/posts");
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header("Location: " . BASEURL . "/dashboard/posts");
            exit;
        }
    }

    public function post_show($id)
    {
        $data['judul'] = "Show Post";
        $data['post'] = $this->model('Post_model')->getPostById($id);
        $this->view('dashboard/layouts/header', $data);
        $this->view('dashboard/layouts/sidebar');
        $this->view('dashboard/post/show', $data);
        $this->view('templates/footer');
    }

    public function post_edit($id)
    {
        $data['judul'] = 'Edit Post';
        $data['categories'] = $this->model("Category_model")->getAllCategory();
        $data['post'] = $this->model('Post_model')->getPostById($id);
        $this->view('dashboard/layouts/header', $data);
        $this->view('dashboard/layouts/sidebar');
        $this->view('dashboard/post/update', $data);
        $this->view('templates/footer');
    }

    public function update()
    {
        // var_dump($_POST);var_dump($_FILES);exit();
        if ($this->model("Post_model")->updatePost($_POST) > 0) {
            Flasher::setFlash('berhasil', 'mengubah', 'success');
            header("Location: " . BASEURL . "/dashboard/posts");
            exit;
        } else {
            Flasher::setFlash('gagal', 'mengubah', 'danger');
            header("Location: " . BASEURL . "/dashboard/posts");
            exit;
        }
    }

    public function delete($id)
    {
        if ($this->model("Post_model")->deletePost($id) > 0) {
            Flasher::setFlash('berhasil', 'menghapus', 'success');
            header("Location: " . BASEURL . "/dashboard/posts");
            exit;
        } else {
            Flasher::setFlash('gagal', 'menghapus', 'danger');
            header("Location: " . BASEURL . "/dashboard/posts");
            exit;
        }
    }
}
