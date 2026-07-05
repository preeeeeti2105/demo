<?php

if (isset($_POST['submit'])) {

    $name    = htmlspecialchars($_POST['name']);
    $email   = htmlspecialchars($_POST['email']);
    $phone   = htmlspecialchars($_POST['phone']);
    $company = htmlspecialchars($_POST['company']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    $to = "Info@nxait.com";

    $mail_subject = "New Website Enquiry - " . $subject;

    $mail_body = "
New enquiry received from NEXALINK website.

Name: $name
Email: $email
Phone: $phone
Company: $company
Subject: $subject

Message:
$message
";

    $headers  = "From: info@nxait.com\r\n";
    $headers .= "Reply-To: $email\r\n";

    if (mail($to, $mail_subject, $mail_body, $headers)) {
        echo "<script>
            alert('Thank you! Your enquiry has been submitted successfully.');
            window.location.href='contact.php';
        </script>";
    } else {
        echo "<script>
            alert('Sorry, your enquiry could not be sent. Please try again.');
            window.location.href='contact.php';
        </script>";
    }

} else {
    header("Location: contact.php");
    exit();
}

?>