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
}
