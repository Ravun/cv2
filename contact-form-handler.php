<?php
    $name = $_Post['name'];
    $visitor_email = $_Post['email'];
    $messagge = $_Post['message'];


    $email_from = 'emial';

    $email_subject = "Submission";

    $email_body = "User Name: $name.\n".
                     "User Email: $visitor_email.\n".
                       "User Message: $messagge.\n";

    $to = "javiermajano98@gmail.com";

    $headers = "From:  $email_from \r\n";

    $headers = "Reply-To:  $visitor_email \r\n".;

    mail($to,$email_subject,$email_body,$headers);

    header("Location: index.html");

 ?>
