<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class Mail
{
    public static function sendMail($email)
    {
        try {
            $mail = new PHPMailer(true);
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'chery.syndicate@gmail.com';
            $mail->Password = 'ybjm ctcj ayws pwlp';
            $mail->SMTPSecure = 'ssl';
            $mail->Port = '465';

            $mail->setFrom('chery.syndicate@gmail.com');
            $mail->addAddress($email);
            $mail->isHTML(true);
            $mail->Subject = 'Postingan Chery';
            $mail->Body = "<h1>Terkini dari Chery Samarinda!</h1> Temukan Kumpulan Cerita Menarik dan Tips Berguna di Blogspot Kami! Jangan Lewatkan Informasi Penting dan Penawaran Spesial! <br>
            <a href='cherysamarinda.site'>Chery Samarinda</a>";
            $mail->send();
        } catch (Exception $e) {
            echo "<script>alert('Gagal mengirim email. Pesan error: {$mail->ErrorInfo}');</script>";
        }
    }
}