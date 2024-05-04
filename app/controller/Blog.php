<?php
class Blog extends Controller
{
    public function index()
    {
        $data['judul'] = "Posts";
        $data['posts'] = $this->model('Blog_model')->getAllPost();
        $this->view('dashboard/layouts/header', $data);
        $this->view('dashboard/layouts/sidebar');
        $this->view('dashboard/post/read', $data);
        $this->view('templates/footer');
    }
}
