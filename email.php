<?php
    $name=$_POST['name'];
    $visitor_email=$_POST['email'];
    $visitor_phone=$_POST['phone'];
    //$c_code=$_POST['ccode'];
    $designation=$_POST['designation'];
    $institution=$_POST['institution'];
    $subject=$_POST['subject'];
    $visitor_message=$_POST['message'];

    $email_from=$_POST['email'];
    $email_subject="ReCapp Query: $subject";

    $email_body="Message from $name at $visitor_email\nPhone: $visitor_phone\nDesignation: $designation\nInstitution: $institution\nSubject: $subject\nMessage is: \n$visitor_message\n------";

    // $to="droplets@tamac.in";
    $to="suyeshjoshi69@gmail.com";
    $headers="From: $email_from";

    mail($to, $email_subject, $email_body, $headers);
    header('Location: https://2recapp.com');
?>