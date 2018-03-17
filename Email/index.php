<?php
/**
 * Created by PhpStorm.
 * User: SOul
 * Date: 2/8/2018
 * Time: 9:22 PM
 */

//Don't use this mail()

//mail('mails@gmail.com' , 'Hi', 'This is a test message');

//Php mailer package

/*
 * Library for sending email, very popular very stable
 * Always use composer to install this
 */

//require 'vendor/autoload.php';
//
//$mail = new \PHPMailer\PHPMailer\PHPMailer();
//
//$mail->setFrom('');
//$mail->addAddress('', '');
//$mail->Subject = 'Mail test';
//$mail->msgHTML('Hi there');
//$mail->AltBody = 'Hi there';
//
//if ($mail->send()) {
//    echo $mail->ErrorInfo;
//    die();
//}
//
//echo 'Message sent';


//PHPMailer:SMTP

/*
 * This is better way to send mail but not best
 */

//require 'vendor/autoload.php';
//
//$mail = new \PHPMailer\PHPMailer\PHPMailer();
//
//$mail->isSMTP();
//
//$username = 'Marija';
//
//ob_start();
//require  'views/email/welcome.php';
//$data = ob_get_clean();
//
//
//$mail->SMTPDebug = 2;//0 off (for production use), 1 client messages, 2 client and server messages
//$mail->Host = 'smtp.gmail.com';
//$mail->Port = 465;
//$mail->SMTPSecure = 'ssl';
//$mail->SMTPAuth = true;
//$mail->Username = '';//enter here
//$mail->Password = '';//pass to
//
//$mail->setFrom('');
//$mail->addAddress('', '');
//$mail->Subject = 'Mail test';
//$mail->msgHTML($data);
//$mail->addAttachment('img/cat.jpg');
//
//if ($mail->send()) {
//    echo $mail->ErrorInfo;
//    die();
//}
//
//echo 'Message sent';

//Basic HTML templates

/*
 *
 */

//require 'vendor/autoload.php';
//
//$mail = new \PHPMailer\PHPMailer\PHPMailer();
//
//$mail->isSMTP();
//
//$mail->SMTPDebug = 1;//0 off (for production use), 1 client messages, 2 client and server messages
//$mail->Host = 'smtp.gmail.com';
//$mail->Port = 465;
//$mail->SMTPSecure = 'ssl';
//$mail->SMTPAuth = true;
//$mail->Username = '';//enter here
//$mail->Password = '';//pass to
//
//$username = 'Name';
//
//ob_start();
//require  'views/email/welcome.php';
//$data = ob_get_clean();
//
//
//$mail->setFrom(''); //enter your email
//$mail->addAddress('', '');//enter email where you want to send
//$mail->Subject = 'Mail test';
//$mail->msgHTML($data);
//$mail->addAttachment('img/cat.jpg');
//
//if ($mail->send()) {
//    echo $mail->ErrorInfo;
//    die();
//}
//
//echo 'Message sent';

//Using an service API

/*
 * I don't have this right now, but i am pretty sure that is working
 * It is most common valid way to work with mail
 */





