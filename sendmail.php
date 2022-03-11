<?php
$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$message = $_POST["message"];
$to = "contact@ashokadental.com";
$subject = "A visitor Contact (".$name.")";
$headers = "From:". $name;
$messageText = "A visitor to your site has filled Contact Us Form.\nEmail Address: ". $email;
$messageText.="\nName: ". $name;
$messageText.="\nMobile No.: ". $phone;
$messageText.="\nEmail: ". $email;
$messageText.="\nMessage: ". $message;
mail($to,$subject,$messageText,$headers);
echo "<div style='height: 100%; width: 100%;text-align: center; font-size: 26px;'>Message sent succesfully<br><br><br><a style='font-size: 20px;' href='https://ashokadental.com'>Back</a></div>";
?>