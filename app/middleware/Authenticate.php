<?php
class Authenticate
{
    public static function auth()
    {
        if (isset($_SESSION['user_auth'])) {
            return $_SESSION['user_auth'];
        }
        header('Location: ' . BASEURL . '/login');
        exit();
    }
<<<<<<< HEAD
=======

    public static function guest()
    {
        if (isset($_SESSION['user_auth'])) {
            return header("Location: " . BASEURL);
        }
    }

    public static function admin()
    {
        if (isset($_SESSION['user_auth'])) {
            if ($_SESSION['user_auth']['is_admin'] === 1 or $_SESSION['user_auth']['is_admin'] === 2) {
                return $_SESSION['user_auth'];
            }
        }
        header('Location: ' . BASEURL . '/login');
        exit();
    }

    public static function superAdmin()
    {
        if (isset($_SESSION['user_auth'])) {
            if ($_SESSION['user_auth']['is_admin'] === 2) {
                return $_SESSION['user_auth'];
            }
        }
        header('Location: ' . BASEURL . '/login');
        exit();
    }
>>>>>>> c976bcdd5cdeb1a638f8733afe5bf260142cde2b
}
