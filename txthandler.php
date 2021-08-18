<?php

$name = $_POST['first']; firstname
$last = $_POST['last']; lastname
$company = $_POST['company']; 
$email = $_POST['email']; 
$country = $_POST['country']; 
$phone = $_POST['phone']; 
$messag = $_POST['message']; 
$message = "$email.$company.$country.$phone.$messag";

function
filter_email_header($form_field) {
    return
    preg_replace('/[nr|!/$%*&]+/',' ',$form_field);
}

$email = filter_email_header($email);

$headers = "From: $email";
$sent = mail('info@archaccess.com', 'Feedback Form Submission', $message, $name, $last);


if ($sent) {
    ?><html>
            <head>
                <title>Thank You</title>
            </head>
            <body>
                <h1>Thank You,</h1>
                <p>We will be in contact shortly </p>
            </body>
        </html>
    <?php

} else {
    ?><html>
            <head>
                <title>Thank You</title>
            </head>
            <body>
                <h1>Thank You,</h1>
                <p>We will be incontact shortly</p>
            </body>
        </html>
    <?php
}
?>