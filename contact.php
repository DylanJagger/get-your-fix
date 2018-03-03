<?php
  if(isset($_POST['submit'])) {
    $to = 'getyourfix50010@gmail.com';
    $subject = 'Quote request';
    $message = 'Client Email: ' . $_POST['clientEmail'] . "\r\n\r\n";
    $message .= 'Client Name: ' . $_POST['clientName'] . "\r\n\r\n";
    $message .= 'Client Phone Number: ' . $_POST['clientNum'] . "\r\n\r\n";
    $message .= 'Manufacturer: ' . $_POST['manufacturer'] . "\r\n\r\n";
    $message .= 'Model: ' . $_POST['model'] . "\r\n\r\n";
    $message .= 'Problem Description: ' . $_POST['description'] . "\r\n\r\n";
    $headers = "From: dylanjagger@getyourfix50010.com";
    $success = mail($to, $subject, $message);
  }
    include_once("header.php");
?>


<!DOCTYPE html>
<html lang="en">
  <head>
</head>
<body>

    <?php if(isset($success) && $success) { ?>
    <h1>Thank you for considering Get Your Fix for your repair needs. We will be reaching you with details regarding what we can do to help.</h1>
    sent
    <?php } else { ?>
    <h1>Something went wrong. Please try to submit your information again.</h1>
    failed
    <?php } ?>

    </body>
    </html>


<?php 
    include_once("footer.php");
?>
