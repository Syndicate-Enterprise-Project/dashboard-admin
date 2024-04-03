<?php
class admin extends Controller
{
    public function __construct()
    {
        Authenticate::admin();
    }

    public function category()
    {
        $data['judul'] = "Categories";
        $data['posts'] = $this->model('Category_model')->getAllCategory();
        $this->view('dashboard/layouts/header', $data);
        $this->view('dashboard/layouts/sidebar');
        $this->view('dashboard/admin/read', $data);
        $this->view('templates/footer');
    }

    public function create()
    {
        if ($this->model('Category_model')->createCategory($_POST) > 0) {
            Flasher::setFlash('Success', 'Category Added', 'success');
            header("Location: " . BASEURL . "/admin/category");
            exit;
        } else {
            Flasher::setFlash('Failed', ' Create Category', 'error');
            header("Location: " . BASEURL . "/admin/category");
            exit;
        }
    }

    public function delete($id)
    {
        if ($this->model('Post_model')->deletePostByCategory($id) >= 0) {
            if ($this->model('Category_model')->deleteCategory($id) > 0) {
                Flasher::setFlash('Success', ' Category Deleted', 'success');
                header("Location: " . BASEURL . "/admin/category");
                exit;
            } else {
                Flasher::setFlash('Failed', ' Delete Category', 'error');
                header("Location: " . BASEURL . "/admin/category");
                exit;
            }
        } else {
            Flasher::setFlash('Failed', ' Delete User Posts', 'error');
            header("Location: " . BASEURL . "/admin/category");
            exit;
        }
    }

    public function category_edit()
    {
        if ($this->model("Category_model")->updateCategory($_POST) > 0) {
            Flasher::setFlash('Success', 'Category Edited', 'success');
            header("Location: " . BASEURL . "/admin/category");
            exit;
        } else {
            Flasher::setFlash('Failed', 'Edit Category', 'error');
            header("Location: " . BASEURL . "/admin/category");
            exit;
        }
    }

    public function getUbah()
    {
        echo json_encode($this->model('Category_model')->getCategoryById($_POST['id']));
    }
}
