<?php

$conn = mysqli_connect("localhost","root","","sdp");
// $conn=mysqli_connect("localhost","root","","file_upload");

session_start();
$doctorid= $_POST['doctorid'];
$patientid = $_POST['patientid'];
$patientemail = $_SESSION['user_name'];
$problem = $_POST['problem'];

if(isset($_POST['submit']))
{
    $insert = "INSERT INTO `patientrequest`(`patientid`, `patientemail`, `doctorid`, `problem`) VALUES ('$patientid','$patientemail', '$doctorid', '$problem')";
    $r = mysqli_query($conn,$insert) or die("failed" .mysqli_error($conn));
    echo " Successfully Added";
    header('location:user.php');

}

?>