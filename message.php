<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $website = $_POST['website'];
    $message = $_POST['message'];

    if(!empty($email) && !empty($message)){
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            $receiver = "onel1n.van@yandex.ru";
            $subject = "From: $name <$email>";
            $body = "Name: $name\nEmail: $email\nPhone: $phone\nwebsite: $website\nMessage: $message";
            $sender = "From: $email";
            if(mail($receiver, $subject, $body, $sender)){
                echo "Your message has been sent...";
            } else{
                echo "Failed to send your message...";
            }
        } else {
            echo "Enter a valid email address";
        }
    } else {
        echo "Email and Name field is required";
    }
?>