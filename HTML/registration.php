<?php
$con = mysqli_connect("localhost","root","","sdp")or die(mysqli_error($con));



$name  = $_POST['name'];
$email  = $_POST['email'];
$password  = $_POST['password'];
$mobile  = $_POST['mobile'];
$address  = $_POST['address'];
$query = "select *from users where email='$email'";
$res = mysqli_query($con,$query) or die("failed" .mysqli_error($con));
$num = mysqli_num_rows($res);
$array = mysqli_fetch_array($res);
if($num == 1)
{
    echo "<h3>User already exits!! Try another username.</h3>";

}
else
{
    $insert = "insert into users(name, email, password, mobile, address) values('$name' , '$email' ,'$password', '$mobile' ,'$address')";
    $r = mysqli_query($con,$insert) or die("failed" .mysqli_error($con));
    echo "Registration Successful";
    header('location:login.php');
}

?>