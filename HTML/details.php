<?php

$conn = mysqli_connect("localhost","root","","sdp");
// $conn=mysqli_connect("localhost","root","","file_upload");

session_start();
echo "welcome ".$_SESSION['user_name'];

echo "welcome";



$name  = $_POST['name'];
$height =$_POST['height'];
$weight = $_POST['weight'];
$bloodgroup = $_POST['bloodgroup'];
$gender = $_POST['gender'];
$dob = $_POST['dob'];
$allergies = $_POST['allergies'];
$email = $_SESSION['user_name'];


if(isset($_POST['submit']))
{
    // $filename=$_FILES['myfile']['name'];
    // $destination='uploads/' . $filename;

    // $extension=pathinfo($filename,PATHINFO_EXTENSION);
    // $file=$_FILES['myfile']['tmp_name'];
    // $size=$_FILES['myfile']['size'];

    // if(!in_array($extension,['zip','pdf','png']))
    // {
    //     echo "Your file extention must be .zip, .pdf, .png";
    // }
    // elseif($_FILES['myfile']['size']>1000000)
    // {
    //     echo "file size is too large";

    // }
    // else
    // {
    //      if(move_uploaded_file($file,$destination))
    //      {
    //          $sql = "INSERT INTO files (name, size,downloads) VALUES ('$filename','$size',0)";
    //          if(mysqli_query($conn,$sql))

    //          {
    //              echo "file uploaded successfully";
    //          }
    //          else
    //          {
    //              echo " failed to upload file ";
    //          }
    //      }
    // }

    $file=$_FILES["file"]["name"];
	$tmp_name=$_FILES["file"]["tmp_name"];
	$path="upload/".$file;
	$file1=explode(".",$file);
	$ext=$file1[1];
	$allowed=array("jpg","png","gif","pdf","wmv","pdf","zip");
	if(in_array($ext,$allowed))
	{
 move_uploaded_file($tmp_name,$path);
 //mysqli_query($conn,"insert into patientdetails(reports)values('$file')");
	
	
}


    $insert = "INSERT INTO `patientdetails`(`name`, `height`, `weight`, `bloodgroup`, `gender`, `dob`, `allergies`,`email`,`reports`) VALUES ('$name','$height', '$weight', '$bloodgroup', '$gender', '$dob', '$allergies', '$email','$file')";
    $r = mysqli_query($conn,$insert) or die("failed" .mysqli_error($conn));
    echo " Successfully Added";
    header('location:user.php');
}


// if(isset($_POST['submit']))
// {
//     $insert = "INSERT INTO `patientdetails`(`name`, `height`, `weight`, `bloodgroup`, `gender`, `dob`, `allergies`) VALUES ('$name','$height', '$weight', '$bloodgroup', '$gender', '$dob', '$allergies')";
//     $r = mysqli_query($conn,$insert) or die("failed" .mysqli_error($conn));
//     echo " Successfully Added";
//     header('location:details.html');
// }


?>