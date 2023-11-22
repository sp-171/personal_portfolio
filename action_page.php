<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $fname = $_POST["firstname"];
    $lname = $_POST["lastname"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];

    // Create the email message
    $message = "First Name: $fname\nLast Name: $lname\nEmail: $email\nSubject: $subject";

    // Set the recipient email address
    $to = "spa200@sfu.ca"; 

    // Set the email headers
    $headers = "From: $email" . "\r\n" .
               "Reply-To: $email" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    // Send the email
    mail($to, $subject, $message, $headers);
}
?>
