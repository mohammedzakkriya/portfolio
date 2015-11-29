<?php
if(isset($_POST['email_subscribe'])) {
$email12 = $_POST['email_subscribe'];
//$email12="km@gmail.com";
$db_name = "A990767_mohammedzakkriya";
$connection = @mysql_connect("mysql1422.ixwebhosting.com", "A990767_admin", "Admin123")
or die(mysql_error());
$db = @mysql_select_db($db_name, $connection) or
die(mysql_error());
$result = mysql_query("select count(1) FROM subscribe where email='".$email12."'");
$row = mysql_fetch_array($result);

$total = $row[0];
if($total<=0) {
   $sql = 'INSERT INTO subscribe '.
      '(email,status) '.
      'VALUES ( "'.$email12.'", "yes" )';
   $retval = mysql_query( $sql, $connection );
   
   if(! $retval )
   {
      die('Could not enter data: ' . mysql_error());
   }
   
   echo "Thanks for your interest. I will update you soon.\n";
   
   mysql_close($connection);
}
else {
	echo "Thanks for your interest. But you are already subscribed to my site.\n";
}
}
else {
	echo "Please enter email id for subscription";
}
?>