<?php
    // let's get all from value
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $website = $_POST['$website'];
    $message = $_POST['message'];

    if(!empty($email) && !empty($message)){// of email and message field is not empty
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) { // if user entered email is valid
            $receiver = "philiposun@gmail.com"; // email receiver email address
            $subject = "From: $name <$email>";
            $body = "Name: $name\nEmail: $email\nPhone: $phone\nWebsite: $website\n\nMessage: $message\n\nRegards,\n$name";
            $sender = "Fromm: $email"; //sender email
        }

    }else {
        echo "Email and password field is required";
    }
?>