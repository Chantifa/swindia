<?php
    $name = strip_tags(trim($_POST["name"]));
    $email = strip_tags(trim($_POST["email"]));
    $options = strip_tags(trim($_POST["options"])
    $message = strip_tags(trim($_POST["message"]));

    if (empty($name)) {
        echo 'Enter name';
    }
    elseif(empty($email)) {
        echo 'Enter email';
    }
    elseif(empty($options)) {
            echo 'Enter options';
        }
    elseif(empty($message)) {
        echo 'Enter message';
    }
    else {

    require "PHPMailerAutoload.php";

    $mail = new PHPMailer();
    $mail->isSMTP();
    $mail->SMTPAuth = false;
    $mail->SMTPSecure = "none";
    $mail->Host = "smtp.asia.secureserver.net";
    $mail->Port = 25;


    $mail->From = $email;
    $mail->FromName = $name;
    $mail->Encoding = "base64";
    $mail->Timeout = 200;
    $mail->ContentType = "text/html";
    $mail->addAddress("email@email.com", "Name");
    $mail->Subject = "Mail subject";
    $mail->Body = "test message";

    if($mail->Send()) {

        $automail = new PHPMailer();
        $automail->IsSMTP();
        $automail->SMTPAuth = false;
        $automail->SMTPSecure = "none";
        $automail->Host = "smtp.asia.secureserver.net";
        $automail->Port = 25;
        $automail->Username = "info@swindiatours.com";
        $automail->Password = "B4harat..";

        $automail->From = "info@swindiatours.com";
        $automail->FromName = "SwIndiaTours";
        $automail->Encoding = "base64";
        $automail->Timeout = 200;
        $automail->ContentType = "text/html";
        $automail->ContentType = "text/html";
        $automail->AddAddress($email, $name);
        $automail->Subject = "Subject recieved";
        $automail->Body = "test message";

        if($automail->Send()){
            echo 'Sent';
        }
        else {
            echo 'Something is wrong';
        }
    }
?>