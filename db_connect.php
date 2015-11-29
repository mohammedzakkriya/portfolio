<?php
$dbhost = "mysql1422.ixwebhosting.com";
$dbuser = " A990767_admin";
$dbpass = "Admin123";
$dbname = "A990767_mohammedzakkriya";

$conn = mysql_connect($dbhost, $dbuser, $dbpass);
   
   if(! $conn )
   {
      die('Could not connect: ' . mysql_error());
   }
   ?>