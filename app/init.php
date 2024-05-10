<?php
require 'core/App.php';
require 'core/Controller.php';
require 'core/Database.php';
require 'core/Flasher.php';
require 'core/Mail.php';

require 'middleware/Authenticate.php';
require 'config/Config.php';

require 'vendor/autoload.php';

require __DIR__ . '/vendor/phpmailer/phpmailer/src/Exception.php';
require __DIR__ . '/vendor/phpmailer/phpmailer/src/PHPMailer.php';
require __DIR__ . '/vendor/phpmailer/phpmailer/src/SMTP.php';
