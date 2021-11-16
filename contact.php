<?php 
if(isset($_POST['submit'])){
    $to = "watgytb@gmail.com";
    $from = $_POST['mail'];
    $name = $_POST['name'];
    $subject = "Form submission";
    $message = $name . " a écris:" . "\n\n" . $_POST['avis'];

    $headers = "From:" . $from;
    mail($to,$subject,$message,$headers);
    }
?>
