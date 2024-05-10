<?php
<<<<<<< HEAD

class Blog extends Controller
{
    public function __construct()
    {
        Authenticate::auth();
    }

=======
class Blog extends Controller
{
>>>>>>> c976bcdd5cdeb1a638f8733afe5bf260142cde2b
    public function index()
    {
        $data['judul'] = "Posts";
        $data['posts'] = $this->model('Blog_model')->getAllPost();
        $this->view('dashboard/layouts/header', $data);
        $this->view('dashboard/layouts/sidebar');
        $this->view('dashboard/post/read', $data);
        $this->view('templates/footer');
    }

    public function post_create()
    {
        $data['judul'] = "Tambah Post";
        $this->view('dashboard/layouts/header', $data);
        $this->view('dashboard/layouts/sidebar');
        $this->view('dashboard/post/create', $data);
        $this->view('templates/footer');
    }

    public function post_show($id)
    {
        $data['judul'] = "Lihat Post";
        $data['blogpost'] = $this->model('Blog_model')->getPostById($id);
        $this->view('dashboard/layouts/header', $data);
        $this->view('dashboard/layouts/sidebar');
        $this->view('dashboard/post/show', $data);
        $this->view('templates/footer');
    }

    public function create()
    {
        if ($this->model("Blog_model")->tambahPost($_POST) > 0) {
<<<<<<< HEAD
            $akunuser = $this->model("Langganan_model")->getAllLangganan();
            foreach ($akunuser as $akun) {
                Mail::sendMail($akun['email_pelanggan']);
            }
=======
>>>>>>> c976bcdd5cdeb1a638f8733afe5bf260142cde2b
            Flasher::setFlash('Success', 'Post Uploaded', 'success');
            header("Location: " . BASEURL . "/blog");
            exit;
        } else {
            Flasher::setFlash('Failed', 'Upload Failed', 'danger');
            header("Location: " . BASEURL . "/blog");
            exit;
        }
    }

    public function post_edit($id)
    {
        $data['judul'] = "Edit Post";
        $data['selectbox'] = [
<<<<<<< HEAD
            'kategori' => ['Artikel', 'Berita', 'Promo', 'Review']
=======
            'kategori' => ['Servis', 'Jenis Mobil', 'Mesin']
>>>>>>> c976bcdd5cdeb1a638f8733afe5bf260142cde2b
        ];
        $data['blogpost'] = $this->model('Blog_model')->getPostById($id);
        $this->view('dashboard/layouts/header', $data);
        $this->view('dashboard/layouts/sidebar');
        $this->view('dashboard/post/update', $data);
        $this->view('templates/footer');
    }

    public function update()
    {
        if ($this->model("Blog_model")->updatePost($_POST) > 0) {
            Flasher::setFlash('Success', 'Post Updated', 'success');
            header("Location: " . BASEURL . "/blog");
            exit;
        } else {
            Flasher::setFlash('Failed', 'Update Post', 'error');
            header("Location: " . BASEURL . "/blog");
            exit;
        }
    }

    public function delete($id)
    {
        if ($this->model("Blog_model")->deletePost($id) > 0) {
            Flasher::setFlash('Success', 'Post Deleted', 'success');
            header("Location: " . BASEURL . "/blog");
            exit;
        } else {
            Flasher::setFlash('Failed', 'Delete Post', 'error');
            header("Location: " . BASEURL . "/blog");
            exit;
        }
    }
}
