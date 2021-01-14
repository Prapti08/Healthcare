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
<?php
echo "hiiiiiiiiii";
$email = $_SESSION['user_name'];
$res=mysqli_query($db,"   SELECT * FROM `patientdetails` WHERE `email`='$email' ");
while($row=mysqli_fetch_assoc($res))
{
?>
<div class="card" style="width: 20rem;">
  <!-- <img src="upload/<?php echo $row['reports']; ?>" class="card-img-top" alt="..."> -->
 
 
  <ul class="list-group list-group-flush">
    <li class="list-group-item">ID- <?php echo $row['id'];?></li>
    </ul>
    </div>
<?php
}
?>