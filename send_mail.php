<?php
if(isset($_POST['fullname'], $_POST['emailid'], $_POST['subject'], $_POST['message'])){

     $fullname = $_POST['fullname'];
    $email1 = $_POST['emailid'];
    $subject = $_POST['subject'];
    $mobile = $_POST['mobile'];
    $message = $_POST['message'];
    $to1="enquiry@mohammedzakkriya.com";
$subject1 = 'My Website: mohammedzakkriya.com : Contact Form Request';
$message1 = "
<html>
<head>
<title>HTML email</title>
</head>
<body>
<p>Enquiry from mohammedzakkriya.com</p>
<table>
<tr>
<td>Firstname</td>
<td>$fullname</td>
</tr>
<tr>
<td>Email From</td>
<td>$email1</td>
</tr>
<tr>
<td>Subject</td>
<td>$subject</td>
</tr>
<tr>
<td>Mobile</td>
<td>$mobile</td>
</tr>
<tr>
<td>Message</td>
<td>$message</td>
</tr>
</table>
</body>
</html>
";
// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= "From: <$email1>" . "\r\n";
//$headers .= "Cc: mohammedzakkriya@yahoo.com" . "\r\n";


//echo "Test Success".$fullname.'emailid: '.$email1.' sub :'.$subject.' message'.$message;
if(mail($to1, $subject, $message1, $headers)){
        $feedback = 'Message sent. You will receive a reply shortly';
    }else{
    
        $feedback = 'Message failed to send. Please try again later';
    }
}
echo $feedback;
?>