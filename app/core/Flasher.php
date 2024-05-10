<?php
<<<<<<< HEAD

=======
>>>>>>> c976bcdd5cdeb1a638f8733afe5bf260142cde2b
class Flasher
{
    public static function setFlash($title, $pesan, $icon)
    {
        $_SESSION['flash'] = [
            'title' => $title,
            'pesan' => $pesan,
            'icon' => $icon
        ];
    }
}
