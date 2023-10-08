<?php
    // $receiver = "philiposun@gmail.com";
    // $subject = "Email text via PHP using localhost";
    // $body = "Hi, there...this is a text email sent from localhost";
    // $sender = "From: philiposun@gmail.com";

    // if (mail($receiver, $subject, $body, $sender)) {
    //     echo "Email sent successfully to $receiver";
    // } else {
    //     echo "Sorry, failed while sending mail";
    // }
?>
<!-- 
Sure! Here is an example code in PHP that sends an email based on the input from a contact form:

```php -->
<?php
// if(isset($_POST['submit'])) {
//     // Get form data
//     $name = $_POST['name'];
//     $email = $_POST['email'];
//     $message = $_POST['message'];

//     // Email recipient
//     $to = $_POST["email"];// Replace with your email address

//     // Email subject
//     $subject = 'New Contact Form Submission';

//     // Email headers
//     $headers = "From: philiposun@gmail.com" . "\r\n";
//     $headers .= "Reply-To: $email" . "\r\n";
//     $headers .= "MIME-Version: 1.0" . "\r\n";
//     $headers .= "Content-Type: text/html; charset=UTF-8" . "\r\n";

//     // Email content
//     $body = "<h2>Contact Form Submission</h2>";
//     $body .= "<p><strong>Name:</strong> $name</p>";
//     $body .= "<p><strong>Email:</strong> $email</p>";
//     $body .= "<p><strong>Message:</strong> $message</p>";

//     // Send email
//     if(mail($to, $subject, $body, $headers)) {
//         echo "Email sent successfully.";
//     } else {
//         echo "Unable to send email. Please try again.";
//     }
// }
?>
<!-- 
<!DOCTYPE html>
<html>
<head>
    <title>Contact Form</title>
</head>
<body>
    <h1>Contact Form</h1>
    <form method="post" action="">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required><br><br>
        
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required><br><br>
        
        <label for="message">Message:</label>
        <textarea name="message" id="message" required></textarea><br><br>
        
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>
``` -->

<!-- In this code, when the user submits the contact form, the form values are collected using the `$_POST` superglobal. Then, an email is constructed using the collected data and the `mail()` function is used to send the email. The success or failure message is displayed on the page accordingly.

Remember to replace `'recipient@example.com'` with your own email address in the `$to` variable to receive the contact form submissions. -->