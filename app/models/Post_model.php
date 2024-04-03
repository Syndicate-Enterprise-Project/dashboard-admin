<?php
class Post_model
{
    private $db;
    private $table = 'posts';

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllPost()
    {
        $this->db->query("SELECT posts.*, categories.name AS category_name, users.name AS author_name
        FROM posts
        INNER JOIN categories ON posts.category_id = categories.id
        INNER JOIN users ON posts.user_id = users.id
        ORDER BY posts.created_at DESC");
        $this->db->execute();
        return $this->db->resultSet();
    }
    public function getAllPostByUserId($id)
    {
        $this->db->query("SELECT posts.*, categories.name AS category_name
        FROM posts 
        INNER JOIN categories ON posts.category_id = categories.id
        WHERE posts.user_id = $id
        ORDER BY posts.created_at ASC");
        $this->db->execute();
        return $this->db->resultSet();
    }

    public function getPostById($id)
    {
        $this->db->query("SELECT posts.*, categories.name AS category_name, users.name AS author_name
        FROM posts 
        INNER JOIN categories ON posts.category_id = categories.id
        INNER JOIN users ON posts.user_id = users.id
        WHERE posts.id = $id");
        $this->db->execute();
        return $this->db->executeOneColumn();
    }

    public function getAllPostByCategoryName($name)
    {
        $this->db->query("SELECT posts.*, categories.name AS category_name, users.name AS author_name
        FROM posts 
        INNER JOIN categories ON posts.category_id = categories.id
        INNER JOIN users ON posts.user_id = users.id
        WHERE categories.name = ?
        ORDER BY posts.created_at DESC");
        $this->db->bind([$name]);
        $this->db->execute();
        return $this->db->resultSet();
    }
  
    public function getAllPostByAuthorName($name)
    {
        $this->db->query("SELECT posts.*, categories.name AS category_name, users.name AS author_name
        FROM posts 
        INNER JOIN categories ON posts.category_id = categories.id
        INNER JOIN users ON posts.user_id = users.id
        WHERE users.name = ?
        ORDER BY posts.created_at DESC");
        $this->db->bind([$name]);
        $this->db->execute();
        return $this->db->resultSet();
    }

    public function tambahPost($data)
    {
        $excerptWords = array_slice(str_word_count($data['body'], 1), 1, 50);
        $data['excerpt'] = trim(implode(' ', $excerptWords), 'div');
        $data["image"] = !$_FILES['image']['name'] == '' ? $this->image_handler() : '';
        if (!empty($data['title'] && !empty($data['body']))) {
            $this->db->query("INSERT INTO {$this->table} VALUES ('',?,?,?,?,?,?, current_timestamp())");
            $this->db->bind([$data['category_id'], $data['user_id'], $data['title'], $data['excerpt'], $data['body'], $data['image']]);
            $this->db->execute();
            return $this->db->rowCount();
        }
        return $this->db->rowCount();
    }

    public function updatePost($data)
    {
        $excerptWords = array_slice(str_word_count($data['body'], 1), 1, 50);
        $data['excerpt'] = trim(implode(' ', $excerptWords), 'div');
        $data['image'] = $_FILES['image']['name'] == '' ? $data['oldImage'] : $this->image_handler();
        if ($data['image'] !== $data['oldImage']) {
            unlink("C:/xampp/htdocs/minpro 3/public/img/upload/" . $data['oldImage']);
        }
        if (!empty($data['title'] && !empty($data['body']))) {
            $this->db->query("UPDATE {$this->table} SET category_id = ?, title = ?, excerpt = ?, body = ?, image = ? WHERE id = ? ");
            $this->db->bind([$data['category_id'], $data['title'], $data['excerpt'], $data['body'], $data['image'], $data['post_id']]);
            $this->db->execute();
            return $this->db->rowCount();
        }
        return $this->db->rowCount();
    }

    public function deletePost($id)
    {
        $this->db->query("DELETE FROM {$this->table} WHERE id = $id");
        $this->db->execute();
        return $this->db->rowCount();
    }
    
    public function deleteUserPost($id)
    {
        $this->db->query("DELETE FROM {$this->table} WHERE user_id = $id");
        $this->db->execute();
        return $this->db->rowCount();
    }
    
    public function deletePostByCategory($id)
    {
        $this->db->query("DELETE FROM {$this->table} WHERE category_id = $id");
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function searchPost($keyword)
    {
        $this->db->query("SELECT posts.*, categories.name AS category_name, users.name AS author_name
        FROM posts
        INNER JOIN categories ON posts.category_id = categories.id
        INNER JOIN users ON posts.user_id = users.id
        WHERE posts.body LIKE '%{$keyword}%' OR posts.title LIKE '%{$keyword}%'
        ORDER BY posts.created_at DESC");
        $this->db->execute();
        return $this->db->resultSet();
    }

    public function image_handler()
    {
        $namaFile = $_FILES["image"]["name"];
        $ukuranFile = $_FILES["image"]["size"];
        $locationfile = $_FILES["image"]["tmp_name"];
        $ekstensiGambarValid = ["jpeg", "jpg", "png"];
        $ektensiGambar = explode(".", $namaFile);
        $ektensiGambar = strtolower(end($ektensiGambar));

        if (!in_array($ektensiGambar, $ekstensiGambarValid)) {
            Flasher::setFlash("Failed", "Invalid image extension", "error");
            return header('Location: ' . BASEURL . '/dashboard/posts');
        }
        if ($ukuranFile >= 5000000) {
            Flasher::setFlash("Failed", "Image size exceeds 5 mb", "error");
            return header("Location: " . BASEURL . "/dashboard/posts");
        }

        $namaFileBaru = uniqid() . "." . $ektensiGambar;
        move_uploaded_file($locationfile, "C:/xampp/htdocs/minpro 3/public/img/upload/" . $namaFileBaru);
        return $namaFileBaru;
    }
}
