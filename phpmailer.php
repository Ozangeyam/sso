<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
/* Exception class. */

require  "./PHPMailer-master/src/Exception.php";
/* The main PHPMailer class. */
require './PHPMailer-master/src/PHPMailer.php';
/* SMTP class, needed if you want to use SMTP. */
require './PHPMailer-master/src/SMTP.php';
$email = new PHPMailer(TRUE);
/* ... */