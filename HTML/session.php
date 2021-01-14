<?php
// $connection = mysqli_connect("localhost","root","");

// $db = mysqli_select_db("sdp", $connection);
$db=mysqli_connect("localhost","root","","sdp");

session_start();

$user_check = $_SESSION['login_user'];
// $res=mysqli_query($db,"SELECT * FROM `users` WHERE email='$_POST[email]' && password='$_POST[password]';");

$ses_sql = mysql_query( $db,"SELECT  email from `users` WHERE email='$user_check'");
$row = mysql_fetch_assoc($ses_sql);
$login_session = $row['email'];
if(!isset($login_session)){
  
    mysql_close($connection);
    header('location: new.html');


}


?>