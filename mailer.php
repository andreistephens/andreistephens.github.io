<?php

$from = 'aynsubscribe@gmail.com';
$sendTo = 'aynsubscribe@gmail.com';
$subject = 'New AYN subscriber';
$fields = array('email' => 'Email'); 
$okMessage = 'Contact form successfully submitted. AYN will get back to you soon!';
$errorMessage = 'There was an error while submitting the form. Please try again later';


try
{
    $emailText = "New AYN subscriber\n=============================\n";

    foreach ($_POST as $key => $value) {

        if (isset($fields[$key])) {
            $emailText .= "$fields[$key]: $value\n";
        }
    }

    mail($sendTo, $subject, $emailText, "From: " . $from);

    $responseArray = array('type' => 'success', 'message' => $okMessage);
}
catch (\Exception $e)
{
    $responseArray = array('type' => 'danger', 'message' => $errorMessage);
}

if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
    $encoded = json_encode($responseArray);
    
    header('Content-Type: application/json');
    
    echo $encoded;
}
else {
    echo $responseArray['message'];
}
