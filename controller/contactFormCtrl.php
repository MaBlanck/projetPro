<?php
$formError = array();

if (isset($_POST)) {
    if (isset($_POST['sendMessage'])) {
        if (!empty($_POST['name'])) {
            $name = htmlentities($_POST['name']);
        } else {
            $formError['name'] = 'Fill the blank with your name';
        }
        if (!empty($_POST['email'])) {
            $email = htmlentities($_POST['email']);
        } else {
            $formError['email'] = 'Fill the blank with you email';
        }
        if (!empty($_POST['message'])) {
            $message = htmlentities($_POST['message']);
        }
        if (empty($formError)) {
            $messageSuccess = 'Your message has been sent successfully. We will get you in touch very soon';
            mail('maxblanck69@gmail.com', 'Nouveau message', 'Voici le message envoyé par' . ' ' . $name . ' <br>' . $message, 'Content-Type: text/html; charset=utf-8' . "\r\n");
        }
    }
}
