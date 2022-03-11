<?php
if(isset($_POST['submit'])){
$to = "vikashire3@gmail.com"
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    $subject = "Contact Us submission";
    $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['message'];
    $headers = "From:" . $email;
    mail($to,$subject,$message,$headers);
    echo "Message Sent. Thank you " . $name . ", we will contact you shortly.";
}

?>