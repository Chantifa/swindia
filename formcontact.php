<?php
session_start();
require_once 'libs/phpmailer/PHPMailerAutoload.php';

$errors = [];

if (isset($_POST['name'], $_POST['tel'], $_POST['email'], $_POST['options'],  $_POST['message'])) {
    $fields = [
        'name' => $_POST['name'],
        'tel' => $_POST['tel'],
        'email' => $_POST['email'],
        'message' => $_POST['message'],
    ];

    $option = Trim(stripslashes(implode(",", $_POST['options'])));

    foreach ($fields as $field => $data) {
        if (empty($data)) {
            $errors[] = 'The ' . $field . ' field is required.';
        }
    }
    if (empty($errors)) {
        $m = new PHPMailer;
        $m->isSMTP();
        $m->SMTPAuth = true;
        $m->Host = 'smtpout.asia.secureserver.net';
        $m->Username = 'info@swindiatours.com';//replace with your email address
        $m->Password = 'B4harat..';//replace with your password
        //$m->SMTPSecure = 'ssl';
        $m->Port = 80;

        $m->isHTML();
        $m->Subject = 'Contact form Submitted';
        $m->Body='From:' .$fields['name'].' ( ' .$fields['email'].').(' .$fields['tel'].')<p>'.$option.'</p><p>'.$fields['message'].'</p>';

        $m->FromName = 'SwIndiaTours';
        $m->AddAddress('info@swindiatours.com', 'SwIndiaTours');
        if ($m->send()) {
            header('Location:thank-you.php');
            die();
        } else {
            $errors[] = "Sorry ,Could not send email.Try again later.";
        }
    }
} else {
    $errors[] = 'Something went wrong';
}
$_SESSION['errors'] = $errors;
$_SESSION['fields'] = $fields;
header('Location:index.php');
