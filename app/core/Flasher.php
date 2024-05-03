<?php
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
