<?php
$name = $_POST['name'];
$visitorEmail = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$emailFrom = 'info@yourwebsite.com';

$emailSubject = 'New Form Submission';

$emailBody = "User Name: $name.\n".
             "User Email: $visitorEmail.\n".
             "Subject: $subject.\n".
             "User Message: $message.\n";

$to = "osm10ov@gmail.com";

$headers = "From: $emailFrom \r\n";

$headers .= "Reply-To: $visitorEmail";

mail($to, $emailSubjectm, $emailBody, $headers);

header("Location: contact.html")

?>