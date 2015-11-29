<?php
//if(isset($_POST['fullname'], $_POST['emailid'], $_POST['subject'], $_POST['message'])){
    //Post data
    // $name = $_POST['fullname'];
    // $email = $_POST['emailid'];
    // $subject = $_POST['subject'];
    // $message = $_POST['message'];
     $name = "Mohammed";
    $email = "mohammedzakkriya@yahoo.com";
    $subject = "Test subject";
    $message = "Test message";

    //mail settings
    $to1 = "info@mohammedzakkriya.com";
    $subject = 'My Website: mohammedzakkriya.com : Contact Form Request';
//     $body = "Name: $name. <br/>
//     Message: $message.<br/>
//     Email is: $email<br/>
// Kind Regards<br/>
// Admin";
// $subject2 = "Acknowledgement: Received your Message";
// $body2 = "Hi $name,<br />
// Thanks for your enquiry in our website.<br />
// We have received your message, Our website admin will revert back to you for the same very soon.<br />
// Kind Regards<br/>
// Mohammed Zakkriya";
//  $headers = "From: " . strip_tags($email) . "\r\n";
// $headers .= "Reply-To: ". strip_tags($email) . "\r\n";
// $headers .= "MIME-Version: 1.0\r\n";
// $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

//  $headers1 = "From: " . strip_tags($to) . "\r\n";
// $headers1 .= "Reply-To: ". strip_tags($to) . "\r\n";
// $headers1 .= "MIME-Version: 1.0\r\n";
// $headers1 .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
    if(mail($to1, $subject, $body, $headers)){
        //mail($email, $subject2, $body2, $headers1);
        $feedback = '*Message sent! You will receive a reply shortly!';
    }else{
    
        $feedback = '*Message failed to send. Please try again later';
    }
// }else{
//    $feedback = 'Some form fields are missing. Please try again';
// }

echo $feedback;
?>