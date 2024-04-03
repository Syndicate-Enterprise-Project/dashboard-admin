<?php

use Carbon\Carbon;

class Posts extends Controller
{
    public function index()
    {

        $data['judul'] = "Posts";
        $data['posts'] = $this->model("Post_model")->getAllPost();
        $data['title'] = "All Post";

        // $datetime1 = Carbon::now('Asia/Singapore');
        // $datetime2 = Carbon::parse($data['posts'][3]['created_at'],"Asia/Singapore"); // 2024-03-30 19.40.50

        // $diff = $datetime2->diffForHumans();
        // // $hours = $diff->h;
        // // $minutes = $diff->i;

        // // echo "$hours hours $minutes minutes before <br>";
        // // $diff = $datetime1->diffForHumans($datetime2);
        // echo $datetime1 . " waktu sekarang";
        // echo '<br>';
        // echo $datetime2 . " waktu di upload";
        // echo '<br>';
        // echo $diff;
        // exit();

        // for ($i = 1; $i < count($data['posts']); $i++){
        //     var_dump($data['posts'][$i]);
        // };exit();
        // var_dump($data['posts']);exit();
        // var_dump(count($data['posts']));exit();
        $this->view('templates/Header', $data);
        $this->view('posts/index', $data);
        $this->view('templates/Footer');
    }

    public function show($id)
    {
        $data['judul'] = "Show";
        $data['post'] = $this->model('Post_model')->getPostById($id);
        // var_dump($data['post']);exit();
        $this->view('templates/Header', $data);
        $this->view('posts/show', $data);
        $this->view('templates/Footer');
    }

    public function categories()
    {
        $data['judul'] = "Categories";
        $data['categories'] = $this->model("Category_model")->getAllCategory();
        $this->view('templates/Header', $data);
        $this->view('posts/categories', $data);
        $this->view('templates/Footer');
    }

    public function category($name)
    {
        $data['judul'] = "Posts";
        $data['title'] = "All Post " . $name;
        $data['posts'] = $this->model("Post_model")->getAllPostByCategoryName($name);
        $this->view('templates/Header', $data);
        $this->view('posts/index', $data);
        $this->view('templates/Footer');
    }

    public function author($name)
    {
        $data['judul'] = "Posts";
        $data['title'] = "All Post " . $name;
        $data['posts'] = $this->model("Post_model")->getAllPostByAuthorName($name);
        $this->view('templates/Header', $data);
        $this->view('posts/index', $data);
        $this->view('templates/Footer');
    }
    
    public function search(){
        // var_dump($_POST);exit();
        $data['judul'] = "Posts";
        $data['title'] = "Search : ".$_POST['search'];
        $data['posts'] = $this->model("Post_model")->searchPost($_POST['search']);
        $this->view('templates/Header', $data);
        $this->view('posts/index', $data);
        $this->view('templates/Footer');
        
    }
}
