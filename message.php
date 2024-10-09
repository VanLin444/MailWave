<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $website = $_POST['website'];
    $message = $_POST['message'];

    echo $name;

    /*
    $name = isset($_POST['name']) ? $_POST['name'] : null;
    $email = isset($_POST['email']) ? $_POST['email'] : null;
    $phone = isset($_POST['phone']) ? $_POST['phone'] : null;
    $website = isset($_POST['website']) ? $_POST['website'] : null;
    $message = isset($_POST['message']) ? $_POST['message'] : null;

    if(!empty($email) && !empty($message)){

    } else {
        echo "Поля почты и сообщения не заполнены!";
    }
    */
?>