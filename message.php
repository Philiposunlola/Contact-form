<?php
    // let's get all from value
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $website = $_POST['$website'];
    $message = $_POST['message'];

    if(!empty($email) && !empty($message)){// of email and message field is not empty

    }else {
        echo "Email and password field is required";
    }
?>