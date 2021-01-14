<?php
$con = mysqli_connect("localhost","root","","sdp")or die(mysqli_error($con));
$email  = $_POST['email'];
$message=$_POST['message'];
if(isset($_POST['submit']))
{
    $insert = "INSERT INTO `complain`(`email`, `message`) VALUES ('$email','$message')";
    $r = mysqli_query($con,$insert) or die("failed" .mysqli_error($con));
    echo "Registration Successful";
    header('location:new.html');
}